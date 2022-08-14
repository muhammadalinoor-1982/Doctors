<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Doctors\DoctorsLoginController@index');
Route::get('/doctors_login','Doctors\DoctorsLoginController@doctors_login')->name('doctors.login');
Route::get('/doctors_register','Doctors\DoctorsLoginController@doctors_register')->name('doctors.register');
Route::post('/register_store','Doctors\DoctorsLoginController@register_store')->name('register.store');



Auth::routes();

Route::group(['middleware'=>['auth','doctors']],function(){
    Route::get('/dashboard','Doctors\DashboardController@dashboard')->name('dashboard');
    Route::get('/dashboard/medication/{id?}','Doctors\DashboardController@medication')->name('dashboard.medication');
    Route::get('/dashboard/create/{id}','Doctors\DashboardController@create')->name('dashboard.create');

    Route::prefix('doctors')->group(function (){
        Route::get('/view','Doctors\DoctorsController@view')->name('doctor.view');
        Route::get('/create','Doctors\DoctorsController@create')->name('doctor.create');
        Route::post('/store','Doctors\DoctorsController@store')->name('doctor.store');
        Route::get('/edit/{id}','Doctors\DoctorsController@edit')->name('doctor.edit');
        Route::post('/update/{id}','Doctors\DoctorsController@update')->name('doctor.update');
        Route::delete('/delete/{id}','Doctors\DoctorsController@delete')->name('doctor.delete');
        Route::get('/details/{id}', 'Doctors\DoctorsController@details')->name('doctor.details');
    });

    Route::prefix('patients')->group(function (){
        Route::get('/view','Patients\PatientsController@view')->name('patient.view');
        Route::get('/create','Patients\PatientsController@create')->name('patient.create');
        Route::post('/store','Patients\PatientsController@store')->name('patient.store');
        Route::get('/edit/{id}','Patients\PatientsController@edit')->name('patient.edit');
        Route::post('/update/{id}','Patients\PatientsController@update')->name('patient.update');
        Route::delete('/delete/{id}','Patients\PatientsController@delete')->name('patient.delete');
        Route::get('/details/{id}', 'Patients\PatientsController@details')->name('patient.details');
    });

    Route::prefix('medications')->group(function (){
        Route::get('/watch','Medications\MedicationsController@watch')->name('medication.watch');
        Route::get('/view','Medications\MedicationsController@view')->name('medication.view');
        Route::get('/create','Medications\MedicationsController@create')->name('medication.create');
        Route::post('/store','Medications\MedicationsController@store')->name('medication.store');
        Route::get('/edit/{id}','Medications\MedicationsController@edit')->name('medication.edit');
        Route::post('/update/{id}','Medications\MedicationsController@update')->name('medication.update');
        Route::delete('/delete/{id}','Medications\MedicationsController@delete')->name('medication.delete');
        Route::get('/details/{id}', 'Medications\MedicationsController@details')->name('medication.details');
    });
});

