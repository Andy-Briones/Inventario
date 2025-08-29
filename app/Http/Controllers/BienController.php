<?php

namespace App\Http\Controllers;

use App\Models\Bien;
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos['biens'] = Bien::paginate(5);
        return view('biens.mostrar', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosBien = request()->except('_token');
        Bien::insert($datosBien);
        return redirect('biens');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bien $bien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idBien)
    {
        $bien = Bien::findOrFail($idBien);
        return view('biens.edit', compact('bien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idBien)
    {
        $datosBien = request()->except(['_token', '_method']);
        Bien::where('idBien', '=', $idBien)->update($datosBien);
        return redirect()->route('biens.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $idBien)
    {
        Bien::destroy($idBien);
        return redirect('biens');
    }
}
