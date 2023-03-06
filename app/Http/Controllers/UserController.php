<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Ecole\ShowEcole;
use App\Models\Accreditation;
use App\Models\Candidat;
use App\Models\Candidature;
use App\Models\ContratMode;
use App\Models\ContratType;
use App\Models\Cycle;
use App\Models\Departement;
use App\Models\Domaine;
use App\Models\Ecole;
use App\Models\Employeur;
use App\Models\Enseignement;
use App\Models\Filiere;
use App\Models\Lieu;
use App\Models\MethodeTravail;
use App\Models\Offre;
use App\Models\Projet;
use App\Models\systemeEducatif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Foreach_;
use Svg\Tag\Rect;

class UserController extends Controller
{
    public function dashoard()
    {

    }

    
    public function index()
    {
        $users = User::where('profil', 'admin')->latest()->paginate(10);
        return view('Admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('Admin.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profil = $request->profil;
        $success = $user->save();
        return  $success ? redirect()->route('admin.users.index', compact('user'))->with('success', 'La modification a reussie') : back()->with('error', 'Une erreur est survenue! La modification a echouée');
    }

    public function delete($id)
    {
        $success = User::find($id)->delete();
        $users = User::where('profil', 'admin')->paginate(10);
        return  $success ? redirect()->route('admin.users.index', compact('users'))->with('success', 'La supperssion a reussie') : back()->with('error', 'Une erreur est survenue! La suppression a echouée');
    }

    //Ecoles

    public function ecoles()
    {
        $ecoles = Ecole::where('created_by', auth()->user()->id)->latest()->paginate(10);
        return view('Admin.ecoles.index', compact('ecoles'));
    }

    public function addEcole()
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
        return view('Admin.ecoles.create', compact('systemeEducatifs'));
    }

    public function editEcole($id) {
        $ecole = Ecole::find($id);
        return view('admin.ecoles.edit', compact('ecole'));
    }

    public function addDept($id)
    {
        $ecole = Ecole::find($id);
        return view('admin.ecoles.addDept', compact('ecole'));
    }

    public function editDept($id)
    {
        $departement = Departement::find($id);
        return view('admin.ecoles.editDept', compact('departement'));
    }

    public function addFiliere($id)
    {
        $ecole = Ecole::find($id);
        $acreditations =  Accreditation::all();
        return view('admin.ecoles.filieres.add', compact('ecole', 'acreditations'));
    }

    public function editFiliere($id, $ecole_id)
    {
        $filiere = Filiere::find($id);
        $acreditations =  Accreditation::all();
        $ecole = Ecole::find($ecole_id);
        return view('admin.ecoles.filieres.edit', compact('filiere', 'acreditations', 'ecole'));
    }

    //Offres
    public function offres()
    {
        $offres = Offre::latest()->paginate(10);
        return view('admin.offres.index', compact('offres'));
    }

    public function addOffre()
    {
        $contratTypes = ContratType::all();
        $domaines = Domaine::all();
        $methodeTravails = MethodeTravail::all();
        $contratModes = ContratMode::all();
        $lieux = Lieu::all();
        $entreprises = Employeur::where('created_by', auth()->user()->id)->get();
        return view('admin.offres.add', compact('contratTypes', 'domaines', 'methodeTravails', 'contratModes', 'lieux', 'entreprises'));
    }

    public function editOffre($id)
    {
        $offre = Offre::find($id);
        $employeur =  Employeur::find($offre->employeur);
        $contratTypes = ContratType::all();
        $domaines = Domaine::all();
        $methodeTravails = MethodeTravail::all();
        $contratModes = ContratMode::all();
        $lieux = Lieu::all();
        return view('admin.offres.edit', compact('lieux', 'contratTypes', 'domaines', 'methodeTravails', 'contratModes', 'employeur', 'offre'));
    }

    public function showOffre($id)
    {
        $offre = Offre::find($id);
        $employeur =  Employeur::find($offre->employeur);
        return view('admin.offres.show', compact('offre', 'employeur'));
    }

    //Entreprises
    public function entreprises()
    {
        $entreprises = Employeur::latest()->paginate(10);
        return view('admin.entreprises.index', compact('entreprises'));
    }

    public function addEntreprise()
    {
        return view('Admin.entreprises.add');
    }

    public function storeEntreprise(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|max:255',
            'email' => 'required',
            'tel' => 'required',
            'adress' => 'required',
        ]);

        $employeur =  Employeur::create([
            'user_id' => 0,
            'nom' => $request->nom,
            'adress' => $request->adress,
            'email' => $request->email,
            'tel' => $request->tel,
            'domaineActivité' => $request->domaineActivite,
            'description' => $request->description,
            'photo' => ''
        ]);

        $employeur->roles()->attach(1);
        $employeur->roles()->attach(3);
        $employeur->roles()->attach(4);

        $entreprises = Employeur::latest()->paginate(10);

        return redirect()->route('admin.entreprises.index', compact('entreprises'))->with('success', 'L\'entreprise a été ajoutée');
    }

    //Projets
    public function projets()
    {
        $projets = Projet::paginate(10);
        return view('Admin.projets.projets', compact('projets'));
    }

    public function showProjet($id)
    {
        $projet = Projet::find($id);
        $candidat =  Candidat::find($projet->user_id);
        return view('admin.projets.show', compact('projet', 'candidat'));
    }



    //Users

    public function create()
    {
        return view('Admin.users.create');
    }

    public function store(Request $request)
    {
        validator([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'profil' => ['required']
        ]);
        
        $user = User::create([
            'name' => $request['name'],
            'profil' => $request['profil'],
            'email' => $request['email'],
            'password' => Hash::make('passer@123'),
        ]);

        if ($user->profil == 'admin') {
            $users = User::where('profil', 'admin')->paginate(10);
            return redirect()->route('admin.users.index', compact('users'))->with('success', 'L\'utilisateur a été créé avec succès');
        }
    }
}
