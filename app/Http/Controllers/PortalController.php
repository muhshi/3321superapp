<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        $kepala = Link::where('team_id', 1)->get();
        $umum = Link::where('team_id', 2)->get();
        $sosial = Link::where('team_id', 3)->get();
        $produksi = Link::where('team_id', 4)->get();
        $distribusi = Link::where('team_id', 5)->get();
        $nerwilis = Link::where('team_id', 6)->get();
        $ipds = Link::where('team_id', 7)->get();
        $rb = Link::where('team_id', 8)->get();

        return view('body')
            ->with('kepala', $kepala)
            ->with('umum', $umum)
            ->with('sosial', $sosial)
            ->with('produksi', $produksi)
            ->with('distribusi', $distribusi)
            ->with('nerwilis', $nerwilis)
            ->with('ipds', $ipds)
            ->with('rb', $rb);
    }
}
