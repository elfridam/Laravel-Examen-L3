<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use App\Models\TypeFormation;
use Illuminate\Http\Request;

class ReferentielController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_formation = TypeFormation::get();
        return view('referentiel.create', compact('type_formation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle'=>'required',
            'validated'=>'required',
            'horaire'=>'required',
        ]);

        $ref = new Referentiel();
        $ref->libelle = $request->libelle;
        $ref->validated = $request->validated;
        $ref->horaire = $request->horaire;

        $ref->save();

        // notify()->success('ref ajoutée avec succès');
        
        return redirect()->route('referentiel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('formation.formation', ['referentiel' => Referentiel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function edit(Referentiel $referentiel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referentiel $referentiel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referentiel  $referentiel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referentiel $referentiel)
    {
        //
    }

    public function formationParRef()
    {
        return view('formation_par_referentiel', ['referentiels' => Referentiel::withCount('formations')->get()]);

    }
}
