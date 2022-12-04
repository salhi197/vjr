<?php

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


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/rapport', 'HomeController@rapport')->name('rapport');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('login.admin');



// Route::get('/cleareverything', function () {
//     $clearcache = Artisan::call('cache:clear');
//     echo "Cache cleared<br>";

//     $clearview = Artisan::call('view:clear');
//     echo "View cleared<br>";

//     $clearconfig = Artisan::call('config:cache');
//     echo "Config cleared<br>";

//     $cleardebugbar = Artisan::call('debugbar:clear');
//     echo "Debug Bar cleared<br>";
// });

Route::get('/faq', function () {return view('faq');})->name('faq')->middleware('lang');
Route::get('/support', function () {return view('support');})->name('support')->middleware('lang') ;


Route::get('/recharger-compte', function () {
    return view('recharger-compte');
})->middleware('lang')->name('recharger-compte');

Route::get('/admin', 'AdminController@admin')->name('admin');

Route::view('/comingsoon', 'comingsoon')->name('comingsoon');
Route::view('/', 'welcome')->name('welcome');
Route::view('/rapport', 'rapport')->name('rapport');
Route::view('/forum', 'forum')->name('forum');

Auth::routes();
Route::view('/home', 'home')->name('home');
Route::post('/search','HomeController@search')->name('search');

// Route::group(['middleware' => ['auth','lang']], function () {
//     Route::get('/lang/{lang}', 'LangController@setLang')->name('lang');
//     Route::get('/home/inscription', 'InscriptionController@index');
     
// });




Route::group(['prefix' => 'user','middleware' =>'lang', 'as' => 'user'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'UserController@index']);
    Route::get('/actif', ['as' => '.actif', 'uses' => 'UserController@actif']);
    Route::post('/activer/{user}', ['as' => '.activer', 'uses' => 'UserController@activer']);
    Route::get('/pending', ['as' => '.pending', 'uses' => 'UserController@pending']);
    Route::get('/partenaire', ['as' => '.partenaire', 'uses' => 'UserController@partenaire']);
    Route::get('/partenaire/table', ['as' => '.partenaire.table', 'uses' => 'UserController@partenaireTable']);
    
    Route::get('/parrain', ['as' => '.parrain', 'uses' => 'UserController@parrain']);
    Route::get('/profile', ['as' => '.profile', 'uses' => 'UserController@profile']);
    Route::post('/profile/update/{user_id}', ['as' => '.update.profile', 'uses' => 'UserController@profileUpdate']);
    
    Route::get('/detail/{user}', ['as' => '.detail', 'uses' => 'UserController@detail']);
    Route::get('/valider/{user}', ['as' => '.valider', 'uses' => 'UserController@valider']);
    
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'UserController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'UserController@store']);
    Route::get('/destroy/{id_user}', ['as' => '.destroy', 'uses' => 'UserController@destroy']);    
    Route::get('/delete/{id_user}', ['as' => '.delete', 'uses' => 'UserController@delete']);    
    Route::get('/remise/{id_user}', ['as' => '.destroy', 'uses' => 'UserController@destroy']);    
    Route::get('/edit/{id_user}', ['as' => '.edit', 'uses' => 'UserController@edit']);
    Route::get('/show/{id_user}', ['as' => '.show', 'uses' => 'UserController@show']);
    Route::post('/update/{id_user}', ['as' => '.update', 'uses' => 'UserController@update']);    
    Route::post('/password', ['as' => '.password', 'uses' => 'UserController@password']);    
    Route::post('/get_id', ['as' => '.get_id', 'uses' => 'UserController@getId']);    

    Route::get('/methodes', ['as' => '.methodes', 'uses' => 'UserController@methodes']);
    Route::post('/methode/create', ['as' => '.methode.create', 'uses' => 'UserController@methodeUserCreate']);
    Route::post('/methode/update/{methode_user}', ['as' => '.methode.update', 'uses' => 'UserController@updateUserMethode']);
    Route::get('/methode/destroy/{methode_user}', ['as' => '.methode.destroy', 'uses' => 'UserController@destroyUserMethode']);
    Route::get('/demande/{user}', ['as' => '.demande', 'uses' => 'UserController@demande']);
    Route::get('/email/{code_email}', ['as' => '.user.code.email', 'uses' => 'UserController@verifyEmail']);    
    Route::get('/ActiverDesactiver/{user_id}', ['as' => '.ActiverDesactiver', 'uses' => 'UserController@ActiverDesactiver']);    
        
});

Route::group(['prefix' => 'reglement','middleware' =>'lang', 'as' => 'reglement'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'ReglementController@index']);
    Route::get('/create', ['as' => '.create', 'uses' => 'ReglementController@create']);
    Route::post('/store', ['as' => '.store', 'uses' => 'ReglementController@store']);
    Route::post('/update/{id_reglement}', ['as' => '.update', 'uses' => 'ReglementController@update']);    

    Route::get('/edit/{id_Reglement}', ['as' => '.edit', 'uses' => 'ReglementController@edit']);
    Route::get('/view/{id_Reglement}', ['as' => '.view', 'uses' => 'ReglementController@view']);
    Route::get('/destroy/{id_Reglement}', ['as' => '.destroy', 'uses' => 'ReglementController@destroy']);
            
});


Route::group(['prefix' => 'payment','middleware' =>'lang', 'as' => 'payment'], function () {
    Route::get('/rechargements', ['as' => '.rechargements', 'uses' => 'PaymentController@rechargements']);
    Route::get('/rechargements/month', ['as' => '.rechargements.month', 'uses' => 'PaymentController@RechargementsMonth']);
    Route::get('/rechargements/paye', ['as' => '.rechargements.paye', 'uses' => 'PaymentController@RechargementsPaye']);
    Route::get('/groupe', ['as' => '.groupe', 'uses' => 'PaymentController@payerGroupe']);

    Route::post('/filter', ['as' => '.filter', 'uses' => 'PaymentController@filter']);
    Route::post('/store/{operation}', ['as' => '.store', 'uses' => 'PaymentController@store']);

});


Route::group(['prefix' => 'operation','middleware' =>'lang', 'as' => 'operation'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'OperationController@index']);
    Route::get('/certificat/{operation}',['as'=>'.certificat', 'uses' => 'OperationController@certificat']);
    Route::get('/certificat2/{operation}',['as'=>'.certificat2', 'uses' => 'OperationController@certificat2']);
    Route::get('/actif', ['as' => '.actif.index', 'uses' => 'OperationController@indexActif']);
    Route::get('/activer',['as'=>'.activer.show', 'uses' => 'OperationController@activerShow']);
    Route::post('/activer',['as'=>'.activer.action', 'uses' => 'OperationController@activerAction']);



    Route::get('/rechargement', ['as' => '.recharger.index', 'uses' => 'OperationController@indexRechargement']);
    Route::get('/rechargement/actif', ['as' => '.recharger.index.actif', 'uses' => 'OperationController@indexRechargementActif']);
    Route::get('/recharger',['as'=>'.recharger.show', 'uses' => 'OperationController@rechargerShow']);
    Route::get('/recharger/agent',['as'=>'.recharger.show.agent', 'uses' => 'OperationController@rechargerShowAgent']);
    Route::get('/recharger/valider/{operation}',['as'=>'.recharger.valider', 'uses' => 'OperationController@rechargerValider']);
    Route::get('/recharger/annuler/{operation}',['as'=>'.recharger.annuler', 'uses' => 'OperationController@rechargerAnnuler']);
    Route::post('/recharger',['as'=>'.recharger.action', 'uses' => 'OperationController@rechargerAction']);
    Route::post('/recharger/agent',['as'=>'.recharger.action.agent', 'uses' => 'OperationController@rechargerActionAgent']);



    Route::get('/retrait', ['as' => '.retrait.index', 'uses' => 'OperationController@indexRetrait']);
    Route::get('/retrait/actif', ['as' => '.retirer.index.actif', 'uses' => 'OperationController@indexRetraitActif']);
    Route::get('/retirer',['as'=>'.retirer.show', 'uses' => 'OperationController@retirerShow']);
    Route::post('/retirer',['as'=>'.retirer.action', 'uses' => 'OperationController@retirerAction']);
    Route::get('/retirer/valider/{operation}',['as'=>'.retirer.valider', 'uses' => 'OperationController@retirerValider']);
    Route::get('/retirer/annuler/{operation}',['as'=>'.retirer.annuler', 'uses' => 'OperationController@retirerAnnuler']);




    Route::post('/transferer/balance',['as'=>'.transferer.balance.action', 'uses' => 'OperationController@transfererBalanceAction']);
    Route::get('/transfert/balance',['as'=>'.transferer.balance', 'uses' => 'OperationController@transfererBalanceShow']);


    Route::get('/transfert', ['as' => '.transferer.index', 'uses' => 'OperationController@indexTransfert']);
    Route::get('/transferer',['as'=>'.transferer.show', 'uses' => 'OperationController@transfererShow']);
    Route::post('/transferer',['as'=>'.transferer.action', 'uses' => 'OperationController@transfererAction']);
    Route::get('/transfert/confirmer/{operation}',['as'=>'.confirmer', 'uses' => 'OperationController@transfererConfirmer']);
    Route::post('/transfert/confirmer/{operation}',['as'=>'.transferer.confirmer.action', 'uses' => 'OperationController@transfererConfirmerAction']);
    Route::post('/filter',['as'=>'.filter', 'uses' => 'OperationController@filter']);



});



Route::group(['prefix' => 'partenaire','middleware' =>'lang', 'as' => 'partenaire'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'PartenaireController@index']);
    Route::get('/rechercher',['as'=>'.rechercher', 'uses' => 'PartenaireController@rechercher']);
    Route::post('/create', ['as' => '.store', 'uses' => 'PartenaireController@store']);
    Route::get('/destroy/{id_demande}', ['as' => '.destroy', 'uses' => 'PartenaireController@destroy']); 
    Route::get('/edit/{id_demande}', ['as' => '.edit', 'uses' => 'PartenaireController@edit']);
    Route::post('/update/{partenaire}', ['as' => '.update', 'uses' => 'PartenaireController@update']);        
});


Route::post('/sms/send', ['as' => 'send.sms', 'uses' => 'SmsController@send']);
Route::post('/sms/send/bulk', ['as' => 'send.sms.bulk', 'uses' => 'SmsController@sendBulk']);
// send.sms.bulk
Route::get('/sms/create/{type}', ['as' => 'send.sms.view', 'uses' => 'SmsController@sendView']);
Route::get('/sms/create/groupe', ['as' => 'send.sms.groupe.view', 'uses' => 'SmsController@sendGroupeView']);
Route::get('/sms', ['as' => 'sms.index', 'uses' => 'SmsController@index']);

Route::get('/setting', ['as' => 'setting', 'uses' => 'SettingController@index']);
Route::get('/notifications', ['as' => 'notifications', 'uses' => 'HomeController@notifications']);
    

Route::get('/fichier', ['as' => 'fichier.index', 'uses' => 'HomeController@fichiers']);
Route::get('/email', ['as' => 'email', 'uses' => 'HomeController@email']);
Route::post('/support/email', ['as' => 'support.email', 'uses' => 'HomeController@support']);
Route::get('/forget/password', ['as' => 'forget.password', 'uses' => 'HomeController@forgetPassword']);
Route::post('/forget/password', ['as' => 'forget.password.action', 'uses' => 'HomeController@forgetPasswordAction']);


Route::get('/fichier/download/{fichier}', ['as' => 'fichier.download', 'uses' => 'HomeController@downloadFile']);

Route::group(['prefix' => 'methode','middleware' =>'lang', 'as' => 'methode'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'MethodeController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'MethodeController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'MethodeController@store']);
    Route::post('/update/{id_methode}', ['as' => '.update', 'uses' => 'MethodeController@update']);
    Route::get('/destroy/{id_methode}', ['as' => '.destroy', 'uses' => 'MethodeController@destroy']);
    Route::get('/edit/{id_methode}', ['as' => '.edit', 'uses' => 'MethodeController@edit']);
});
Route::group(['prefix' => 'notification','middleware' =>'lang', 'as' => 'notification'], function () {
    Route::get('/', ['as' => '.index', 'uses' => 'NotificationController@index']);
    Route::get('/show/create',['as'=>'.show.create', 'uses' => 'NotificationController@create']);
    Route::post('/create', ['as' => '.create', 'uses' => 'NotificationController@store']);
    Route::post('/update/{id_notification}', ['as' => '.update', 'uses' => 'NotificationController@update']);
    Route::get('/destroy/{id_notification}', ['as' => '.destroy', 'uses' => 'NotificationController@destroy']);
    Route::get('/edit/{id_notification}', ['as' => '.edit', 'uses' => 'NotificationController@edit']);
});
