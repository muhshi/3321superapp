<?php

namespace App\Filament\DMuhshi\Widgets;

use App\Models\Task;
use Filament\Actions\Action;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Saade\FilamentFullCalendar\Actions\CreateAction;
use Saade\FilamentFullCalendar\Actions\DeleteAction;
use Saade\FilamentFullCalendar\Actions\EditAction;
use Saade\FilamentFullCalendar\Actions\ViewAction;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class TaskWidget extends FullCalendarWidget
{
    public Model | string | null $model = Task::class;

    public function fetchEvents(array $fetchInfo): array
    {
        if (Auth::user()->roles[0]->name != 'super_admin') {
            return
                Task::query()
                ->where('starts_at', '>=', $fetchInfo['start'])
                ->where('ends_at', '<=', $fetchInfo['end'])
                ->where('user_id', Auth::user()->id)
                ->get()
                ->map(
                    fn(Task $task) => [
                        'id' => $task->id,
                        'user_id' => $task->user_id,
                        'color' => $task->color,
                        'title' => $task->title,
                        'start' => $task->starts_at,
                        'end' => $task->ends_at,
                    ]
                )
                ->all();
        }
        return
            Task::query()
            ->where('starts_at', '>=', $fetchInfo['start'])
            ->where('ends_at', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn(Task $task) => [
                    'id' => $task->id,
                    'user_id' => $task->user_id,
                    'color' => $task->color,
                    'title' => $task->title,
                    'start' => $task->starts_at,
                    'end' => $task->ends_at,
                ]
            )
            ->all();
    }

    public function getFormSchema(): array
    {
        return [
            Hidden::make('user_id')
                ->default(Auth::user()->id),
            TextInput::make('title')
                ->label('Pekerjaan Hari Ini')
                ->required(),
            ColorPicker::make('color')
                ->required(),

            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),

                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }

    public function headerActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Pekerjaan')
        ];
    }

    protected function modalActions(): array
    {
        return [
            CreateAction::make()
                ->mountUsing(
                    function (Form $form, array $arguments) {
                        $form->fill([
                            'user_id' => Auth::user()->id,
                            'starts_at' => $arguments['start'] ?? null,
                            'ends_at' => $arguments['end'] ?? null,
                        ]);
                    }
                ),
            EditAction::make()
                ->mountUsing(
                    function (Task $record, Form $form, array $arguments) {
                        $form->fill([
                            'user_id' => Auth::user()->id,
                            'title' => $record->title,
                            'color' => $record->color,
                            'starts_at' => $arguments['event']['start'] ?? $record->starts_at,
                            'ends_at' => $arguments['event']['end'] ?? $record->ends_at,
                        ]);
                    }
                ),
            DeleteAction::make(),
        ];
    }

    protected function viewAction(): Action
    {
        return ViewAction::make()
            ->modalFooterActions(
                fn(ViewAction $action) => [
                    EditAction::make(),
                    DeleteAction::make(),
                    $action->getModalCancelAction()
                ]
            );
    }

    public function eventDidMount(): string
    {
        return <<<JS
        function({ event, timeText, isStart, isEnd, isMirror, isPast, isFuture, isToday, el, view }){
            el.setAttribute("x-tooltip", "tooltip");
            el.setAttribute("x-data", "{ tooltip: '"+event.title+"' }");
        }
    JS;
    }
}
