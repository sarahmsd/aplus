<?php

use Carbon\Carbon;
use App\Models\Ecole;
use App\Models\Offre;
use App\Models\Domaine;
use App\Models\Filiere;
use App\Models\Employeur;
use App\Models\ContratMode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\diversController;
use App\Http\Controllers\langueController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\EmployeurController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\specialiteController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\RecrutementController;
use App\Http\Controllers\Auth\LinkdinController;
use App\Http\Controllers\Auth\TwitterController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\EnseignementController;
use App\Http\Controllers\InvestissementController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\UserController;
use App\Models\Enseignement;
use App\Models\Media;
use App\Models\Profil;
use Faker\Provider\Medical;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $last_ecoles = Ecole::latest()->take(6)->get();
    foreach ($last_ecoles as $key => $e) {
        $logo = Media::where([
            'ecole_id' => $e->id,
            'logo' => 1
        ])->first();

        if($logo) $e->logo = $logo->media;
    }

    return view('welcome', compact("last_ecoles"));
});


Route::get("/auth/facebook/redirect", [FacebookController::class, 'handleFacebookRedirect'])->name('facebook.redirect');
Route::get("/auth/facebook/callback", [FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');

Route::get("/auth/google/redirect", [GoogleController::class, 'handleGoogleRedirect'])->name('google.redirect');
Route::get("/auth/google/callback", [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get("/auth/linkedin/redirect", [LinkdinController::class, 'handleLinkdinRedirect'])->name('linkedin.redirect');
Route::get("/auth/linkedin/callback", [LinkdinController::class, 'handleLinkdinCallback'])->name('linkedin.callback');

Route::get("/auth/twitter/redirect", [TwitterController::class, 'handleTwitterRedirect'])->name('twitter.redirect');
Route::get("/auth/twitter/callback", [TwitterController::class, 'handleTwitterCallback'])->name('twitter.callback');


Route::get('/recherche', [OffreController::class, 'recherche'])->name('recherche');
Route::get('/offre/{id}', [OffreController::class, 'detailOffreCandidat'])->name('offres.details');

Route::group(['middleware' => 'auth'], function () {

    //Profil
    Route::get('/choix', [ProfilController::class, 'create'])->name('choix');
    Route::get('/choisir', [ProfilController::class, 'choisir'])->name('choisir');
    Route::resource('profil', ProfilController::class);

    //Employeur
    Route::get('/employeur', [EmployeurController::class, 'create'])->name('employeur');
    Route::resource('/employeurs', EmployeurController::class);

    //Dashboard
    Route::get('/dashboardEntrerprise', [EmployeurController::class, 'dashboard'])->name('dashboardEntrerprise');

    //Candidat
    Route::get('/candidat', [CandidatController::class, 'create'])->name('candidat');
    Route::resource('/candidats', CandidatController::class);
    Route::get('/show/{id}', [CandidatController::class, 'show'])->name('show');

    //Offre
    Route::get('/offre', [OffreController::class, 'create'])->name('offre');
    Route::get('/monOffre/{id}', [OffreController::class, 'offre'])->name('monOffre');
    Route::resource('/offres', OffreController::class);
    Route::get('editOffre/{id}', [OffreController::class, 'edit'])->name('offres.edit');
    Route::put('updateOffre/{id}', [OffreController::class, 'update'])->name('updateOffre.update');
    Route::get('deleteOffre/{id}', [OffreController::class, 'destroy'])->name('deleteOffre.destroy');
    Route::get('expired/{id}', [OffreController::class, 'expired'])->name('offre.expired');

    //Description
    Route::get('/description', [DescriptionController::class, 'create'])->name('description');
    Route::resource('/descriptions', DescriptionController::class);

    //Recrutement
    Route::get('/recrutement', [RecrutementController::class, 'create'])->name('postulant');
    Route::resource('/recrutements', RecrutementController::class);

    //Candidature
    Route::get('/candidature/{id}', [CandidatureController::class, 'create'])->name('candidature');
    Route::resource('/candidatures', CandidatureController::class);
    Route::post('candidatureOffre/{id}', [CandidatureController::class, 'candidatureOffre'])->name('candidatureOffre');
    Route::get('/showCandidature/{id}', [CandidatureController::class, 'show'])->name('showCandidature');
    Route::get('/validerCandidature/{id}', [CandidatureController::class, 'valider'])->name('candidature.valider');
    Route::post('/refuserCandidature', [CandidatureController::class, 'refuser'])->name('candidature.refuser');

    //Cv
    Route::get('/cv', [CvController::class, 'create'])->name('cv');
    Route::get('/monCv', [CvController::class, 'cv'])->name('monCv');
    Route::get('/telecharger', [CvController::class, 'telecharger'])->name('telecharger');
    Route::resource('/cvs', CvController::class);

    //Langue
    Route::resource('/langues', langueController::class);

    //formation
    Route::resource('/formations', formationController::class);

    //loisir
    Route::resource('/loisirs', diversController::class);

    //experience
    Route::resource('/experiences', experienceController::class);

    //competence
    Route::resource('/competences', specialiteController::class);

    //Projet
    Route::get('/projetsValides', [ProjetController::class, 'projetsValides'])->name('projetsValides');
    Route::get('/investir/{id}', [ProjetController::class, 'investir'])->name('projet.investir');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/searchOffre', [OffreController::class, 'search'])->name('searchOffre');
Route::get('/markasread/{id}', [HomeController::class, 'markasread'])->name('markasread');

Route::middleware(['auth'])->group(function() {
    Route::get('projet/{id}', [ProjetController::class, 'show'])->name('showProjet');
});

//Route projets
Route::get('/projet', [ProjetController::class, 'index'])->name('index.projet');
Route::middleware('App\Http\Middleware\CandidatMiddleware')->group(function () {
    Route::get('/create', [ProjetController::class, 'create'])->name('projet.create');
    Route::post('projet/save', [ProjetController::class, 'save'])->name('projet.save');
    Route::get('projetListe', [ProjetController::class, 'liste'])->name('projet.liste');
    Route::get('projet/edit/{id}', [ProjetController::class, 'edit'])->name('projet.edit');
    Route::post('projet/update/{id}', [ProjetController::class, 'update'])->name('projet.update');
    Route::get('projet/delete/{id}', [ProjetController::class, 'delete'])->name('projet.delete');

    Route::post('submit/{projet}', [InvestissementController::class, 'store'])->name('investissement.store')->middleware(['auth','investissement']);
    Route::post('/addProjet/{projet}', [InvestissementController::class, 'add'])->name('add.projet');

    Route::get('searchInvestisseur', [InvestissementController::class, 'search'])->name('investisseur.search');

    //Candidature
    Route::get('/candidature', [CandidatureController::class, 'create'])->name('candidatures.create');

});

Route::get('/validation/{projet}', [ProjetController::class, 'validation'])->name('validation');
Route::get('/validation', [ProjetController::class, 'validationListe'])->name('validation.projet');
//conversation

Route::get('conversations', [ConversationController::class, 'index'])->name('conversation.index');
Route::get('conversations/{conversation}', [ConversationController::class, 'show'])->name('conversation.show');
Route::get('/create', [ConversationController::class, 'create'])->name('message');
Auth::routes();



//Module Ecole
Route::get('list', [EcoleController::class, 'index'])->name('list.ecole');
Route::get('list/{id}', [EcoleController::class, 'show'])->name('show.ecole');
Route::get('home_ecole', [EcoleController::class, 'home'])->name('home.ecole');
Route::get('search', [EcoleController::class, 'search'])->name('ecole.search');

Route::middleware('App\Http\Middleware\EcoleMiddleware')->group(function () {
    Route::get('/dashbord', [EcoleController::class, 'dashbord'])->name('dashbord');
    Route::post('save', [EcoleController::class, 'store'])->name('save.ecole');
    Route::post('update', [EcoleController::class, 'update'])->name('update.ecole');
    Route::post('destroy', [EcoleController::class, 'destroy'])->name('destroy.ecole');
    Route::post('accreditation/save', [AccreditationController::class, 'save'])->name('accreditation.save');
});

//departament
Route::middleware('App\Http\Middleware\EcoleMiddleware')->group(function () {
    Route::post('departement/save', [DepartementController::class, 'save'])->name('departement.save');
    Route::get('departement', [DepartementController::class, 'index'])->name('departement.index');
    Route::get('AddDepartement', [DepartementController::class, 'add'])->name('departement.add');
    Route::get('departement/{id}', [DepartementController::class, 'show'])->name('show.departement');
    Route::get('editDepartement/{id}', [DepartementController::class, 'edit'])->name('edit.departement');
    Route::post('updateDepartement/{id}', [DepartementController::class, 'update'])->name('update.departement');
    Route::get('deleteDepartement/{id}', [DepartementController::class, 'delete'])->name('delete.departement');
    Route::get('searchDepartement',[DepartementController::class, 'search'])->name('departement.search');
    
});

//filieres
Route::middleware('App\Http\Middleware\EcoleMiddleware')->group(function () {
    Route::post('filiere/save', [FiliereController::class, 'save'])->name('filiere.save');
    Route::get('filiere', [FiliereController::class, 'index'])->name('filiere.index');
    Route::get('addFiliere', [FiliereController::class,'add'])->name('filiere.add');
    Route::get('editFiliere/{id}', [FiliereController::class, 'edit'])->name('edit.filiere');
    Route::post('updateFiliere/{id}', [FiliereController::class, 'update'])->name('update.filiere');
    Route::get('filiere/{id}', [FiliereController::class, 'show'])->name('show.filiere');
    Route::get('deleteFiliere/{id}', [FiliereController::class, 'delete'])->name('delete.filiere');
    Route::get('admission/{id}',[FiliereController::class, 'admission'])->name('filiere.admission');
});

//Activite
Route::middleware('App\Http\Middleware\EcoleMiddleware')->group(function () {
    Route::get('/ListeActivite', [ActiviteController::class, 'index'])->name('activite.index');
    Route::get('addActivite',[ActiviteController::class,'add'])->name('activite.add');
    Route::post('activite/save', [ActiviteController::class, 'save'])->name('activite.save');
    Route::get('activite/{id}',[ActiviteController::class, 'show'])->name('show.activite');
    Route::get('editActivite/{id}',[ActiviteController::class, 'edit'])->name('edit.activite');
    Route::post('updateActivite/{id}',[ActiviteController::class, 'update'])->name('update.activite');
    Route::get('deleteActivite/{id}', [ActiviteController::class, 'delete'])->name('delete.activite');
    Route::get('searchActivite', [ActiviteController::class, 'search'])->name('activite.search');
});

//Media
Route::middleware('App\Http\Middleware\EcoleMiddleware')->group(function () {
    Route::resource('medias', MediaController::class);
    Route::get('delete/{id}', [MediaController::class, 'delete'])->name('medias.delete');
    Route::get('makecover/{id}', [MediaController::class, 'makeCover'])->name('medias.makecover');
    Route::get('searchMedia', [MediaController::class, 'search'])->name('medias.search');
});

//enseignement
Route::middleware('App\Http\Middleware\EcoleMiddleware')->group(function () {
    Route::get('enseignement', [EnseignementController::class, 'index'])->name('enseignement.index');

    Route::get('configuration', [EcoleController::class,'configuration'])->name('configuration');
    Route::post('addCycle/{id}', [EnseignementController::class,'addCycle'])->name('addCycle');
});

//Profil candidat
Route::middleware('App\Http\Middleware\Authenticate')->group(function () {
    Route::get('profilCandidat/{id}',[CandidatController::class,'show'])->name('profilCandidat');
    Route::post('ProfilCandidatUpdate/{id}',[CandidatController::class, 'ProfilCandidatUpdate'])->name('update.candidat');
    Route::post('ProfilPaswordUpdate/{id}',[CandidatController::class, 'ProfilPaswordUpdate'])->name('update.password');
    Route::post('ProfilImageUpdate/{id}',[CandidatController::class, 'ProfilImageUpdate'])->name('update.image');
});

//Logout
Route::get('logout', [LogoutController::class, 'perform'])->middleware('App\Http\Middleware\Authenticate');

//Profil User
Route::middleware('App\Http\Middleware\Authenticate')->group(function () {
    //porteur
    Route::get('getprofil/{id}', [ProfilController::class, 'getProfile'])->name('getprofil');
    Route::get('profilPorteur/{id}', [ProfilController::class, 'getProfile'])->name('profilPorteur');
    Route::post('profilPorteur/{id}', [ProfilController::class, 'updateCandidat'])->name('profilPorteur');
    Route::post('profilPorteur/password/{id}', [ProfilController::class, 'updatePassword'])->name('profilPorteur/password');
        //Ecole
    Route::get('profilEcole/{id}', [EcoleController::class,'profil'])->name('profil');
    Route::post('profilEcole/{id}', [ProfilController::class,'updateEcole'])->name('profilEcole');
    Route::post('profilEcole/password/{id}', [ProfilController::class,'updatePassword'])->name('profilEcole/password');
    Route::post('profilEcole/cover/{id}', [MediaController::class, 'addCover'])->name('profilEcole/cover');
    Route::post('profilEcole/logo/{id}', [MediaController::class, 'addLogo'])->name('profilEcole/logo');

    Route::post('addphoto', [ProfilController::class, 'addProfilePhoto'])->name('addphoto');
    Route::post('deletephoto', [ProfilController::class, 'deleteProfilePhoto'])->name('deletephoto');
});


//Administrateur
Route::middleware('App\Http\Middleware\AdminMiddleware')->group(function () {

    //Users
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('showUser/{id}', [UserController::class, 'show'])->name('admin.users.show');
    Route::get('editUser/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('updateUser/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::get('deleteUser/{id}', [UserController::class, 'delete'])->name('admin.users.delete');
    Route::get('newuser', [UserController::class, 'create'])->name('admin.newuser');
    Route::post('store', [UserController::class, 'store'])->name('admin.store');

    //Ecoles
    Route::get('ecoles', [UserController::class, 'ecoles'])->name('admin.ecoles.index');
    Route::get('addEcole', [UserController::class, 'addEcole'])->name('admin.ecoles.create');
    Route::post('storeEcole', [UserController::class, 'storeEcole'])->name('admin.ecoles.store');
    Route::get('editEcole/{id}', [UserController::class, 'editEcole'])->name('admin.ecoles.edit');
    Route::post('updateEcole', [UserController::class, 'updateEcole'])->name('admin.ecoles.update');
    Route::get('deleteEcole', [UserController::class, 'deleteEcole'])->name('admin.ecoles.delete');

    //Départements
    Route::get('addDept/{id}', [UserController::class, 'addDept'])->name('admin.ecoles.addDept');
    Route::get('editDept/{id}', [UserController::class, 'editDept'])->name('admin.ecoles.editDept');

    //Filieres
    Route::get('addFiliere/{id}', [UserController::class, 'addFiliere'])->name('admin.ecoles.filieres.add');
    Route::get('editFiliere/{id}/{ecole_id}', [UserController::class, 'editFiliere'])->name('admin.ecoles.filieres.edit');

    //Offres
    Route::get('admin.offres', [UserController::class, 'offres'])->name('admin.offres.index');
    Route::get('admin.offre.add', [UserController::class, 'addOffre'])->name('admin.offres.add');
    Route::get('admin.offre.edit/{id}', [UserController::class, 'editOffre'])->name('admin.offres.edit');
    Route::get('admin.offre.show/{id}', [UserController::class, 'showOffre'])->name('admin.offres.show');
    Route::get('admin.offre.expire', [UserController::class, 'expireOffre'])->name('admin.offres.expire');

    //Entreprises
    Route::get('admin.entreprises.index', [UserController::class, 'entreprises'])->name('admin.entreprises.index');
    Route::get('admin.entreprises.add', [UserController::class, 'addEntreprise'])->name('admin.entreprises.add');
    Route::post('admin.entreprises.store', [UserController::class, 'storeEntreprise'])->name('admin.entreprises.store');
    Route::get('admin.entreprises.edit', [UserController::class, 'editEntreprise'])->name('admin.entreprises.edit');

    //Projets
    Route::get('admin.projets', [UserController::class, 'projets'])->name('admin.projets');
    Route::get('admin.projet.show/{id}', [UserController::class, 'showProjet'])->name('admin.projets.show');

});