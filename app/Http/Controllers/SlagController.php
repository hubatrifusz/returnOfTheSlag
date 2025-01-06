<?php

namespace App\Http\Controllers;

use App\Models\Slag;
use Illuminate\Http\Request;

class SlagController extends Controller
{
    // Megjeleníti az összes slagot
    public function index()
    {
        $slagok = Slag::all();
        return view('slag.index', compact('slagok'));
    }

    // Új slag hozzáadása
    public function create()
    {
        return view('slag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nev' => 'required',
            'hossz' => 'required',
            'anyaga' => 'required',
            'nyomasallo' => 'required',
            'csatlakozo_meret' => 'required',
            'ar' => 'required|integer',
        ]);

        Slag::create($request->all());
        return redirect()->route('slag.index');
    }

    // Slag szerkesztése
    public function edit($id)
    {
        $slag = Slag::findOrFail($id);
        return view('slag.edit', compact('slag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nev' => 'required',
            'hossz' => 'required',
            'anyaga' => 'required',
            'nyomasallo' => 'required',
            'csatlakozo_meret' => 'required',
            'ar' => 'required|integer',
        ]);

        $slag = Slag::findOrFail($id);
        $slag->update($request->all());

        return redirect()->route('slag.index');
    }

    // Slag törlése
    public function destroy($id)
    {
        Slag::findOrFail($id)->delete();
        return redirect()->route('slag.index');
    }
}
