<?php

namespace App\Http\Controllers;

use Ably\Auth;
use App\Models\Accreditation;
use App\Models\Activite;
use App\Models\Cycle;
use App\Models\Ecole;
use App\Models\Filiere;
use App\Models\EcoleEns;
use App\Models\EnsCycle;
use App\Models\Departement;
use App\Models\Enseignement;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\systemeEducatif;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecoles = Ecole::paginate(20);
        return view('Ecole.list', compact('ecoles'));
    }

    public function ecoles()
    {
        $ecoles = Ecole::with('Ecoleens')->get();
        return response()->json($ecoles);
    }

    public function results()
    {
        $ecoles = Ecole::paginate(20);
        return view('Ecole.list', compact('ecoles'));
    }

    public function last()
    {
        $ecoles = Ecole::latest()->limit(9)->get();
        return response()->json($ecoles);
    }

    public function home()
    {
        return view('Ecole.home_ecole');
    }

    public function dashbord()
    {
        return view('Ecole.Dashbord.dashboard');
    }

    public function test()
    {
        $systemeEducatifs = systemeEducatif::all();
        $enseignements = Enseignement::all();
        $cycles = Cycle::all();
        return view('Ecole.ecole', compact('systemeEducatifs', 'enseignements', 'cycles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $systemeEducatifs = systemeEducatif::all();
        foreach ($systemeEducatifs as $se) {
            $enseignements = Enseignement::where('systemeEducatif_id', $se->id)->get();
            $se->enseignements = $enseignements;

            foreach ($enseignements as $ens) {
                $cycles = Cycle::where('enseignement_id', $ens->id)->get();
                $ens->cycles = $cycles;
            }
        }
        return view('Ecole.create', compact('systemeEducatifs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $ecole = new Ecole();

            $ecole->user_id = auth()->user()->id;
            $ecole->systemeEducatif_id = $request->systemeEducatif_id;
            $ecole->etablissement = $request->etablissement;

            $ecole->ecole = $request->ecole;
            $ecole->sigle = $request->sigle;
            $ecole->email = $request->email;
            $ecole->adresse = $request->adresse;
            $ecole->telephone = $request->telephone;
            $ecole->siteWeb = $request->siteWeb;
            $ecole->linkedin = $request->linkedin;
            $ecole->description = $request->description;

            $ecole->save();

            foreach ($request->enseignement as $key => $enseignement) {
                $ecoleEns = new EcoleEns();
                $ecoleEns->enseignement_id = $request->enseignement[$key];
                $ecoleEns->ecole_id = $ecole->id;
                $ecoleEns->save();
                $ecole->Ecoleens()->attach($ecoleEns->id);
            }

            foreach ($request->cycle as $key => $cycle) {
                $c = Cycle::find($cycle);
                $EnsCycle = new EnsCycle();
                $EnsCycle->cycle_id = $request->cycle[$key];
                $EnsCycle->ecole_id = $ecole->id;
                $EnsCycle->enseignement_id = $c->enseignement_id;
                $EnsCycle->save();

                $ecoleEns->EnsCycles()->attach($EnsCycle->id);
            }

            DB::commit();
            $success = true;
        } catch (\Exception $e) {
            $success = false;
            DB::rollBack();
            dd($e);
        }

        if ($success) {
            if (auth()->user()->profil === 'admin')
                return redirect()->route('admin.ecoles.index')->withSuccess('Votre compte a bien été ajouté!');
            else
                return redirect()->route('dashbord')->withSuccess('Votre compte a bien été ajouté!');
        } else {
            return back()->withFail('Nous avons rencontré un problème en ajoutant votre compte!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ecole = Ecole::find($id);
        $cover = Media::where([
            'ecole_id' => $id,
            'cover' => 1
        ])->first();

        $gallery = Media::where('ecole_id', $id)->take(4)->get();
        $activites = Activite::where('ecole_id', $ecole->id)->take(3)->get();
        if (auth()->user() && auth()->user()->profil == 'admin') {
            $gallery = Media::where('ecole_id', $id)->get();
            $activites = Activite::where('ecole_id', $ecole->id)->get();
        }
        foreach ($activites as $key => $activite) {
            $activite->media = Media::where('activite_id', $activite->id)->first();
        }

        $accreditations = Accreditation::all();

        if (auth()->user() && auth()->user()->profil == 'admin')
            return view('admin.ecoles.show', compact('ecole', 'cover', 'gallery', 'activites', 'accreditations'));
        else
            return view('Ecole.show', compact('ecole', 'cover', 'gallery', 'activites', 'accreditations'));
    }

    public function profil($id)
    {
        $ecole = Ecole::find($id);
        $cover = Media::where([
            'ecole_id' => $id,
            'cover' => 1
        ])->first();

        $logo = Media::where([
            'ecole_id' => $id,
            'logo' => 1
        ])->first();

        return view('Ecole.Dashbord.profil', compact('ecole', 'cover', 'logo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'etablissement' => 'required',
            'systemeEducatif_id' => 'required',
            'enseignement' => 'required',
            'cycle' => 'required',

        ]);

        DB::beginTransaction();
        try {

            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            $ecole->etablissement = $request->etablissement;

            if ($ecole->systemeEducatif_id == $request->systemeEducatif_id) {
                $ecole->systemeEducatif_id = $request->systemeEducatif_id;
                foreach ($request->enseignement as $ens) {
                    $ecoleEns = EcoleEns::where('ecole_id', $ecole->id)->where('enseignement_id', $ens);
                    $enscycles = EnsCycle::where('ecole_id', $ecole->id)->where('enseignement_id', $ens)->get();

                    if ($ecoleEns->get()->isEmpty()) {
                        $eens = new EcoleEns();
                        $eens->enseignement_id = $ens;
                        $eens->ecole_id = $ecole->id;
                        $eens->save();
                        $ecole->EcoleEns()->attach($eens->id);
                    } else
                        $eens = $ecoleEns->first();

                    foreach ($enscycles as $ec) {
                        $ec->delete();
                    }
                }
            } else {
                EcoleEns::where('ecole_id', $ecole->id)->delete();
                EnsCycle::where('ecole_id', $ecole->id)->delete();
                $ecole->systemeEducatif_id = $request->systemeEducatif_id;

                foreach ($request->enseignement as $ens) {
                    $eens = new EcoleEns();
                    $eens->enseignement_id = $ens;
                    $eens->ecole_id = $ecole->id;
                    $eens->save();
                    $ecole->EcoleEns()->attach($eens->id);
                }
            }

            if ($request->cycle) {
                foreach ($request->cycle as $cycle) {

                    $c = Cycle::find($cycle);
                    $enscycle = new EnsCycle();
                    $enscycle->cycle_id = $cycle;
                    $enscycle->ecole_id = $ecole->id;
                    $enscycle->enseignement_id = $c->enseignement_id;
                    $enscycle->save();
                    $eens->EnsCycles()->attach($enscycle->id);
                }
            } else {
                $ecole->EcoleEns()->detach($eens->id);
                $eens->delete();
            }

            $ecole->update();

            DB::commit();
            $success = true;
        } catch (\Exception $e) {
            $success = false;
            DB::rollBack();
            dd($e);
        }

        if ($success) {
            return back()->withSuccess('Votre compte a bien été ajouté!');
        } else {
            return back()->withFail('Nous avons rencontré un problème en ajoutant votre compte!');
        }
    }

    public function searchView()
    {
        return view('Ecole.search');
    }

    public function search()
    {
        return view('search');
    }

    /* public function search()
    {
        request()->validate([
            'q' => 'required|min:2'
        ]);
        $q = request()->input('q');
        if ($q) {
            $ecoles = Ecole::search($q)->paginate(10);
        } else {
            $ecoles = Ecole::paginate(10);
        }

        return response()->json($ecoles);
    } */

    public function configuration()
    {
        $ecole = Ecole::where('user_id', auth()->user()->id)->first();

        $systemeEducatifs = systemeEducatif::all();
        foreach ($systemeEducatifs as $key => $se) {
            $enseignements = Enseignement::where('systemeEducatif_id', $se->id)->get();
            $se->enseignements = $enseignements;
            foreach ($enseignements as $key => $enseignement) {
                $enseignement->cycles = Cycle::where('enseignement_id', $enseignement->id)->get();

                foreach ($ecole->ecoleEns as $eens) {

                    if ($eens->enseignement_id === $enseignement->id) {
                        $enseignement->checked = '1';
                    }
                }

                foreach ($enseignement->cycles as $cycle) {

                    foreach ($cycle->EnsCycle as $enscycle) {
                        if ($enscycle->ecole_id == $ecole->id) {
                            $enscycle->checked = 1;
                            $cycle->checked = 1;
                        }
                    }
                }
            }
        }

        return view('Ecole.Dashbord.configurations', compact('systemeEducatifs', 'ecole'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DB::beginTransaction();

        $ecole = Ecole::where('user_id', auth()->user()->id)->first();
        try {
            $ecole = Ecole::where('user_id', auth()->user()->id)->first();
            if ($request->ecole === $ecole->ecole) {
                //Delete associated Departements
                $departements = Departement::all();
                foreach ($departements as $dept) {
                    $depEcole = $dept->ecoles()->get();
                    foreach ($depEcole as $dE) {
                        if ($dE->id == $ecole->id) {
                            $dept->ecoles()->detach();
                            $dept->delete($dept->id);
                        }
                    }
                }

                //Delete associated Activities
                $activites = Activite::all();
                foreach ($activites as $activite) {
                    if ($activite->ecole_id == $ecole->id) {
                        $activite->delete($activite->id);
                    }
                }

                //Delete associated Medias
                $medias = Media::all();
                foreach ($medias as $media) {
                    if ($media->ecole_id == $ecole->id) {
                        $media->delete($media->id);
                    }
                }

                //Delete associated Enseignements & cycles
                EcoleEns::where('ecole_id', $ecole->id)->delete();
                EnsCycle::where('ecole_id', $ecole->id)->delete();
                $ecole->EcoleEns()->detach();

                //Delete Ecole
                $ecole->delete();

                //Delete associated user
                $user = User::find(auth()->user()->id);
                if ($user->delete()) {
                    DB::commit();
                    return redirect('home')->withSuccess('global', 'Your account has been deleted!');
                }
            }
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }
}
