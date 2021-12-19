<?php

use App\Http\Controllers\AnalyseDechargementController;
use App\Http\Controllers\CampagneController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CooperativeController;
use App\Http\Controllers\FournisseursController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProvenanceController;
use App\Http\Controllers\RemorqueController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VehiculeController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

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
Route::resources([
    'fournisseurs' =>FournisseursController::class,
    'clients' => ClientController::class,
    'campagnes' => CampagneController::class,
    'chauffeurs' => ChauffeurController::class,
    'cooperatives' => CooperativeController::class,
    'sites' => SiteController::class,
    'vehicules' => VehiculeController::class,
    'remorques' => RemorqueController::class,
    'provenances' => ProvenanceController::class,
    'produits' => ProduitController::class,
    'analysedechargements' => AnalyseDechargementController::class
]);

// Route::get('/', function () {
//     return view('home.index');
// });
Route::get('/',HomeController::class)->name('home');
