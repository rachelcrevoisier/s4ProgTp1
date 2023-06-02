<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Etudiant;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::Select() //select * from etudiants
            ->orderBy('nom')
            ->paginate(20); //select * from etudiants
        return view('site.index', ['etudiants' => $etudiants]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville = Ville::selectVille();

        return view('site.create', ['ville' => $ville]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEtudiant = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'courriel' => $request->courriel,
            'date_maissance' => $request->date_maissance,
            'ville_id' => $request->id
        ]);

        return redirect(route('site.show', $newEtudiant->id));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        return view('site.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::selectVille();

        return view('site.edit', ['etudiant' => $etudiant], ['villes' => $villes]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'courriel' => $request->courriel,
            'date_maissance' => $request->date_maissance,
            'ville_id' => $request->id
        ]);

        return redirect(route('site.show', $etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    { {
            $etudiant->delete();
            return redirect(route('site.index'));
        }
    }
}
