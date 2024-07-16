<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use BezhanSalleh\FilamentShield\FilamentShield;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles, HasPanelShield;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function booted(): void
    {
        if (config('filament-shield.ketua_tim.enabled', false)) {
            FilamentShield::createRole(name: config('filament-shield.ketua_tim.name', 'ketua_tim'));
            static::created(function (User $user) {
                $user->assignRole(config('filament-shield.ketua_tim.name', 'ketua_tim'));
            });
            static::deleting(fn ($user) => $user->removeRole(config('filament-shield.ketua_tim.name', 'ketua_tim')));
        }

        if (config('filament-shield.pegawai.enabled', false)) {
            FilamentShield::createRole(name: config('filament-shield.pegawai.name', 'pegawai'));
            static::created(function (User $user) {
                $user->assignRole(config('filament-shield.pegawai.name', 'pegawai'));
            });
            static::deleting(fn ($user) => $user->removeRole(config('filament-shield.pegawai.name', 'pegawai')));
        }
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return $this->hasRole(config('filament-shield.super_admin.name', 'super_admin'))
                || $this->hasRole(config('filament-shield.ketua_tim.name', 'ketua_tim'));
        }
        return $this->hasRole(config('filament-shield.super_admin.name', 'super_admin'))
            || $this->hasRole(config('filament-shield.pegawai.name', 'pegawai'))
            || $this->hasRole(config('filament-shield.ketua_tim.name', 'ketua_tim'));
    }
}
