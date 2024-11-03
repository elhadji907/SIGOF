<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Region;
use Illuminate\Http\Request;

class LocaliteController extends Controller
{
    public function __construct()
    {
        // examples:
        $this->middleware('auth');
        $this->middleware(['role:super-admin|admin']);
        /* $this->middleware(['permission:arrive-show']); */
        // or with specific guard
        /* $this->middleware(['role_or_permission:super-admin']); */
    }
    public function index()
    {
        $localites = Departement::orderBy("created_at", "desc")->get();
        return view("localites.index", compact("localites"));
    }
    public function show($id)
    {
        $localite = Region::find($id);
        return view("localites.show", compact("localite"));
    }
}