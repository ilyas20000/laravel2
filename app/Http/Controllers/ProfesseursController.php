<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use  App\Models\Professeurs;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfesseursController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->id == 3) {
            $professeurs = Professeurs::all();
            return view('indexadmin', compact('professeurs'));
        } else {
            $professeurs = Professeurs::where('user_id', Auth::user()->id)->get();
            return view('index', compact('professeurs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->id == 3) {
            $professeurs = Professeurs::all();
            return view('indexadmin');
        } else {
            $professeurs = Professeurs::where('user_id', Auth::user()->id)->get();
            return view('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professeurs = new Professeurs();

        $professeurs->user_id = Auth::user()->id;
        $professeurs->nom = $request->input('nom');
        $professeurs->prenom = $request->input('prenom');
        $professeurs->email = $request->input('email');
        $professeurs->cin = $request->input('cin');
        if ($request->hasFile('image')) {
            $professeurs->image = $request->image->store('image');
        }
        $professeurs->telephone = $request->input('telephone');
        $professeurs->date_recrutement = $request->input('date_recrutement');
        $professeurs->date_naissance = $request->input('date_naissance');
        $professeurs->specialite = $request->input('specialite');
        $professeurs->appartenant_a_ENSAJ = $request->input('appartenant_a_ENSAJ');

        if ($request->hasFile('Dossier_scientifique')) {
            $professeurs->Dossier_scientifique = $request->Dossier_scientifique->store('Dossier_scientifique');
        }
        if ($request->hasFile('Dossier_Pedagogique')) {
            $professeurs->Dossier_Pedagogique = $request->Dossier_Pedagogique->store('Dossier_Pedagogique');
        }
        if ($request->hasFile('Dossier_administratif')) {
            $professeurs->Dossier_administratif = $request->Dossier_administratif->store('Dossier_administratif');
        }



        $professeurs->save();

        return redirect('/professeurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Professeurs $professeur)
    {
        if (auth()->user()->id == 3) {
            $professeurs = Professeurs::all();
            return view('showprof', compact('professeur'));
        } else {
            $professeurs = Professeurs::where('user_id', Auth::user()->id)->get();
            return view('show', compact('professeur'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->id == 3) {
            $professeurs = Professeurs::find($id);
            return view('editadmin', compact('professeurs'));
        } else {
            $professeurs = Professeurs::find($id);
            return view('edit', compact('professeurs'));
        }
        // $professeurs=Professeurs::find($id);
        // return view('edit',compact('professeurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $professeurs = Professeurs::find($id);

        $professeurs->nom = $request->input('nom');
        $professeurs->prenom = $request->input('prenom');
        $professeurs->email = $request->input('email');
        $professeurs->cin = $request->input('cin');

        if ($request->hasFile('image')) {
            $professeurs->image = $request->image->store('image');
        }

        $professeurs->telephone = $request->input('telephone');
        $professeurs->date_recrutement = $request->input('date_recrutement');
        $professeurs->date_naissance = $request->input('date_naissance');
        $professeurs->specialite = $request->input('specialite');
        $professeurs->appartenant_a_ENSAJ = $request->input('appartenant_a_ENSAJ');

        if ($request->hasFile('Dossier_scientifique')) {
            $professeurs->Dossier_scientifique = $request->Dossier_scientifique->store('Dossier_scientifique');
        }
        if ($request->hasFile('Dossier_Pedagogique')) {
            $professeurs->Dossier_Pedagogique = $request->Dossier_Pedagogique->store('Dossier_Pedagogique');
        }
        if ($request->hasFile('Dossier_administratif')) {
            $professeurs->Dossier_administratif = $request->Dossier_administratif->store('Dossier_administratif');
        }




        $professeurs->save();
        return redirect('/professeurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $professeurs = Professeurs::find($id);
        $professeurs->delete();
        return redirect('/professeurs');
    }
}
