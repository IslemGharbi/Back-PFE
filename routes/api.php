<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->User();
});




// Route::get('/verified-only', function(Request $request){

//     dd('your are verified', $request->User()->name);
// })->middleware('auth:api','verified');


// Route::get('/email/resend', 'App\Http\Controllers\VerificationController@resend')->name('verification.resend');

// Route::get('/email/verify/{id}/{hash}', 'App\Http\Controllers\VerificationController@verify')->name('verification.verify');

//auth User with all functionalities
Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('signup', 'AuthController@signup');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');

});

//rud User
Route::get('currentUser','App\Http\Controllers\Controller@currentUser');
Route::get('getUser','App\Http\Controllers\Controller@getUser');
Route::get('getUser/{id}','App\Http\Controllers\Controller@getUser');
Route::get('getUtilisateurById/{id}','App\Http\Controllers\Controller@getUtilisateurById');
Route::put('updateUtilisateur/{id}','App\Http\Controllers\Controller@updateUtilisateur');
Route::delete('deleteUtilisateur/{id}','App\Http\Controllers\Controller@deleteUtilisateur');
//crud Prospect
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('getProspect' ,'ProspectController@getProspect');
    Route::get('getProspectById/{id}','ProspectController@getProspectById');
    Route::post('addProspect','ProspectController@addProspect');
    Route::put('updateProspect/{id}','ProspectController@updateProspect');
    Route::delete('deleteProspect/{id}','ProspectController@deleteProspect');

});

//crud Monnaie
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexMonnaie' ,'MonnaieController@indexMonnaie');
    Route::get('getMonnaie' ,'MonnaieController@getMonnaie');
    Route::get('getMonnaieById/{id}','MonnaieController@getMonnaieById');
    Route::post('addMonnaie','MonnaieController@addMonnaie');
    Route::put('updateMonnaie/{id}','MonnaieController@updateMonnaie');
    Route::delete('deleteMonnaie/{id}','MonnaieController@deleteMonnaie');

});

//crud Regime
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexRegime' ,'RegimeController@indexRegime');
    Route::get('getRegime' ,'RegimeController@getRegime');
    Route::get('getRegimeById/{id}','RegimeController@getRegimeById');
    Route::post('addRegime','RegimeController@addRegime');
    Route::put('updateRegime/{id}','RegimeController@updateRegime');
    Route::delete('deleteRegime/{id}','RegimeController@deleteRegime');

});

//crud Tva
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexTva' ,'TvaController@indexTva');
    Route::get('getTva' ,'TvaController@getTva');
    Route::get('getTvaById/{id}','TvaController@getTvaById');
    Route::post('addTva','TvaController@addTva');
    Route::put('updateTva/{id}','TvaController@updateTva');
    Route::delete('deleteTva/{id}','TvaController@deleteTva');

});


//crud Delegation
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexDelegation' ,'DelegationController@indexDelegation');
    Route::get('getDelegation' ,'DelegationController@getDelegation');
    Route::get('getDelegationById/{id}','DelegationController@getDelegationById');
    Route::post('addDelegation','DelegationController@addDelegation');
    Route::put('updateDelegation/{id}','DelegationController@updateDelegation');
    Route::delete('deleteDelegation/{id}','DelegationController@deleteDelegation');

});


//crud Pays
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexPays' ,'PaysController@indexPays');
    Route::get('getPays' ,'PaysController@getPays');
    Route::get('getPaysById/{id}','PaysController@getPaysById');
    Route::post('addPays','PaysController@addPays');
    Route::put('updatePays/{id}','PaysController@updatePays');
    Route::delete('deletePays/{id}','PaysController@deletePays');

});

//crud Societe
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexSociete' ,'SocieteController@indexSociete');
    Route::get('getSociete' ,'SocieteController@getSociete');
    Route::get('getSocieteById/{id}','SocieteController@getSocieteById');
    Route::post('addSociete','SocieteController@addSociete');
    Route::put('updateSociete/{id}','SocieteController@updateSociete');
    Route::delete('deleteSociete/{id}','SocieteController@deleteSociete');

});

//crud Formejuridique
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexFormejuridique' ,'FormejuridiqueController@indexFormejuridique');
    Route::get('getFormejuridique' ,'FormejuridiqueController@getFormejuridique');
    Route::get('getFormejuridiqueById/{id}','FormejuridiqueController@getFormejuridiqueById');
    Route::post('addFormejuridique','FormejuridiqueController@addFormejuridique');
    Route::put('updateFormejuridique/{id}','FormejuridiqueController@updateFormejuridique');
    Route::delete('deleteFormejuridique/{id}','FormejuridiqueController@deleteFormejuridique');

});


//crud Secteur
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexSecteur' ,'SecteurController@indexSecteur');
    Route::get('getSecteur' ,'SecteurController@getSecteur');
    Route::get('getSecteurById/{id}','SecteurController@getSecteurById');
    Route::post('addSecteur','SecteurController@addSecteur');
    Route::put('updateSecteur/{id}','SecteurController@updateSecteur');
    Route::delete('deleteSecteur/{id}','SecteurController@deleteSecteur');

});


//crud Intervention
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexIntervention' ,'InterventionController@indexIntervention');
    Route::get('getIntervention' ,'InterventionController@getIntervention');
    Route::get('getInterventionById/{id}','InterventionController@getInterventionById');
    Route::post('addIntervention','InterventionController@addIntervention');
    Route::put('updateIntervention/{id}','InterventionController@updateIntervention');
    Route::delete('deleteIntervention/{id}','InterventionController@deleteIntervention');

});

//crud Presentation
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexPresentation' ,'PresentationController@indexPresentation');
    Route::get('getPresentation' ,'PresentationController@getPresentation');
    Route::get('getPresentationById/{id}','PresentationController@getPresentationById');
    Route::post('addPresentation','PresentationController@addPresentation');
    Route::put('updatePresentation/{id}','PresentationController@updatePresentation');
    Route::delete('deletePresentation/{id}','PresentationController@deletePresentation');

});


//crud Produit
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('indexProduit' ,'ProduitController@indexProduit');
    Route::get('getProduit' ,'ProduitController@getProduit');
    Route::get('getProduitById/{id}','ProduitController@getProduitById');
    Route::post('addProduit','ProduitController@addProduit');
    Route::put('updateProduit/{id}','ProduitController@updateProduit');
    Route::delete('deleteProduit/{id}','ProduitController@deleteProduit');

});

//crud Offre
Route::group([

    'namespace' => 'App\Http\Controllers',

], function ($router) {

    Route::get('getOffre' ,'OffreController@getOffre');
    Route::get('getOffreById/{id}','OffreController@getOffreById');
    Route::post('addOffre','OffreController@addOffre');
    Route::put('updateOffre/{id}','OffreController@updateOffre');
    Route::delete('deleteOffre/{id}','OffreController@deleteOffre');

});


Route::post('file','FileController@file');


