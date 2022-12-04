<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reglement;

use Illuminate\Support\Facades\Hash;

class ReglementController extends Controller
{

    public function index()
    {
        $reglements = Reglement::all();
        return view('reglements.index',compact('reglements'));
    }


    public function create()
    {
        return view('reglements.create');
    }


    public function update(Request $request,$id_reglement)
    {
        $reglement = Reglement::find($id_reglement);
        $reglement->type = $request['type'];
        $reglement->contenu = $request['contenu'];
        $reglement->titre = $request['titre'];
        $reglement->ladate = $request['ladate'];
        $reglement->organisme = $request['organisme'];
        $reglement->secteur = $request['secteur'];
        $reglement->contenu = $request['contenu'];        
        $reglement->save();

        $reglement->save();
        return redirect()->route('reglement.index')->with('success', 'Inséré avec succés ');
    }


    public function edit($reglement_id)
    {
        $reglement = Reglement::find($reglement_id);

        return view('reglements.edit',compact('reglement'));
    }


    public function view($reglement_id)
    {
        $reglement = Reglement::find($reglement_id);

        return view('result',compact('reglement'));
    }    
    public function destroy($reglement_id)
    {
        $reglement = Reglement::find($reglement_id);
        // $reglements = reglement::where('refered_reglement', $reglement->id)
        //     ->update([
        //         'refered_reglement' => null
        //     ]);
        $reglement->delete();    
        return redirect()->route('reglement.index')->with('success', 'Suppresion Terminé ');
    }

    public function store(Request $request)
    {
        Reglement::create([
            'type' => $request['type'],
            'contenu' => $request['contenu'],
            'titre' => $request['titre'],
            'ladate' => $request['ladate'],
            'organisme'=>$request['organisme'],
            'secteur'=>$request['secteur'],
            'contenu' => $request['contenu']
        ]);

        return redirect()->route('reglement.index')->with('success', 'Inséré avec succés ');

    }
    



}
