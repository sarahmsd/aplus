<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Cv;
use App\Models\Divers;
use App\Models\Candidat;
use App\Models\Ecole;
use App\Models\Employeur;
use Barryvdh\DomPDF\PDF;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Media;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $candidat = Candidat::where('user_id', $user->id)->first();
        $cv = Cv::with(['langues'])->with(['specialites'])->where('candidat_id', $candidat->id)->first();
        $formation = '';
        $divers ='';
        $experience = '';
        if(isset($cv)){
        $formation = Formation::where('cv_id', $cv->id)->get();
        $experience = Experience::where('cv_id', $cv->id)->get();
        $divers = Divers::where('cv_id', $cv->id)->get();

        }


        return view('Profil.index', compact(['user', 'candidat', 'cv', 'formation', 'experience', 'divers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profil.Choix');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();

        $user->profil = $request->profil;
        $user->save();

        if ($request->profil == 'Employeur') {
            return redirect()->route('employeurs.create');
        }elseif ($request->profil == 'Candidat') {
            return redirect()->route('candidats.create');
        }elseif ($request->profil == 'Ecole') {
            return redirect()->route('Ecole');
        }else{
            return redirect(RouteServiceProvider::HOME);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCandidat(Request $request, $id)
    {
        $user = User::find($id);
        $candidat = Candidat::where('user_id', $user->id)->first();

        DB::transaction(function () use ($request, $user, $candidat) {
            
            $user->name = $request->name;
            $user->email = $request->email;

            $user->update();


            $candidat->nom = $request->nom;
            $candidat->prenom = $request->prenom;
            $candidat->email = $request->email;
            $candidat->adress = $request->adress;
            $candidat->tel = $request->tel;

            $candidat->update();

        });

        return view('Profil.porteur', compact('candidat'));
    }

    public function updateEmployeur(Request $request, $id)
    {
        $user = User::find($id);
        $employeur = Employeur::where('user_id', $user->id)->first();

        DB::transaction(function () use ($request, $user, $employeur) {
            
            $user->name = $request->name;
            $user->email = $request->email;

            $user->update();


            $employeur->nom = $request->nom;
            $employeur->email = $request->email;
            $employeur->adress = $request->adress;
            $employeur->tel = $request->tel;
            $employeur->domaineActivité = $request->domaineActivite;
            $employeur->description = $request->description;

            $employeur->update();

        });

        return view('Profil.porteur', compact('candidat'));
    }

    public function updateEcole(Request $request, $id)
    {
        $user = User::find($id);
        $ecole = Ecole::where('user_id', $user->id)->first();


        DB::transaction(function () use ($request, $user, $ecole) {
            
            $user->name = $request->sigle;
            $user->email = $request->email;

            $user->update();

            $ecole->ecole = $request->ecole;
            $ecole->sigle = $request->sigle;
            $ecole->email = $request->email;
            $ecole->adresse = $request->adresse;
            $ecole->telephone = $request->telephone;
            $ecole->description = $request->description;

            $ecole->update();

        });

        if (auth()->user()->profil == 'admin')
            return view('admin.ecoles.show', compact('ecole'));
        else
            return view('Ecole.Dashbord.profil', compact('ecole'));
    }

    public function addProfilePhoto(Request $request)
    {
        DB::beginTransaction();
        try {


            $name = $request->file('photo')->hashName();
            $user = '';

            if (auth()->user()->profil == 'Candidat') {
                $user = Candidat::where('user_id', auth()->user()->id)->first();

            }elseif (auth()->user()->profil == 'Employeur') {
                $user = Employeur::where('user_id', auth()->user()->id)->first();
            }

            $user->photo = $name;

            if ($user->save()) {
                $request->file('photo')->move(public_path('images/'), $name);
            }

            DB::commit();
            $success = true;

        }catch (\Exception $e) {
            DB::rollBack();
            $success = false;
        }

        if ($success)
            return back()->withSuccess('Photo ajouté');
        else
            return back()->withSuccess('Une erreur est survenue lors de l\'ajout de la photo');
    }

    public function deleteProfilePhoto(Request $request) {

        $media = $request->photo;

        try {
            $user = '';
            if (auth()->user()->profil == 'Candidat') {
                $user = Candidat::where('user_id', auth()->user()->id)->first();

            }elseif (auth()->user()->profil == 'Employeur') {
                $user = Employeur::where('user_id', auth()->user()->id)->first();
            }

            if (file_exists('images/'. $media)) {
                if (unlink('images/'. $media)){
                    $user->photo = '';
                    $user->save();
                }
            }

            DB::commit();
            $success = true;
        }catch (\Exception $e) {
            $success = false;
            DB::rollBack();
        }

        if ($success)
            return back()->withSuccess('Photo Supprimée');
        else
            return back()->withSuccess('Une erreur est survenue lors de la suppression de la photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function choisir(){
        return view('Profil.Choix');
    }


    public function getProfile($id)
    {
        $user = User::find($id);
        
        if ($user->profil === 'Candidat') {
            $candidat = Candidat::where('user_id', $user->id)->first();
            return view('Profil.porteur', compact('candidat'));
        }elseif ($user->profil === 'Ecole') {
            $ecole = Ecole::where('user_id', $user->id)->first();
            return redirect('profilEcole/'.$ecole->id);
        } elseif ($user->profil === 'Employeur') {
            $employeur = Employeur::where('user_id', $user->id)->first();
            return view('Profil.employeur', compact('employeur'));
        }
    }

    public function updatePassword (Request $request, $id) {

        $this->validate($request, [
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required',
        ]);
        
        $hashedPassword = auth()->user()->password;
 
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            
            if ($request->newpassword === $request->confirmpassword) {

                if (!Hash::check($request->newpassword, $hashedPassword)) {
                    $user = User::find($id);
                    $user->password = bcrypt($request->newpassword);
                    User::where('id', $id)->update(array('password' =>  $user->password));
    
                    return redirect()->back()->withSuccess('password updated successfully');
                }else {
                    return redirect()->back()->withFail('new password can not be the old password!');
                }
            }else {
                return redirect()->back()->withFail('password confirmation failed !');
            }
        }else {
            return redirect()->back()->withFail('old password doesnt matched');
        }
    }
}
