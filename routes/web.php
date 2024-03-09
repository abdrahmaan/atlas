<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AppointmentController;

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

Route::middleware(['auth-user'])->group(function () {

       // Dashboard 

       Route::redirect("/",'/dashboard');

       Route::get('/dashboard', [DashboardController::class,"index"]);


       // ***************************************************************************
    
       // Cars
    
           // New Car 
           Route::get('/new-car', [CarsController::class,"create"]);
    
           // New Car - Store
           Route::post('/new-car', [CarsController::class,"store"]);
    
           // Edit Car 
           Route::get('/edit-car/{id}', [CarsController::class,"edit"]);
    
           // Edit Car - Update
           Route::post('/edit-car/{id}', [CarsController::class,"update"]);
    
           // Delete Car 
           Route::get('/delete-car/{id}', [CarsController::class,"destroy"]);
    
           // New Car Import File
           Route::get('/new-car-import', [CarsController::class,"import_page"]);
    
           // New Car Import File - Store
           Route::post('/new-car-import', [CarsController::class,"import_store"]);
    
          
    
           // Cars View
           Route::get('/cars', [CarsController::class,"index"] );
           
           // Download Cars File
           Route::get('/download-file', function () {
               $path = public_path("Cars-Example.xlsx");
               $response = response()->download($path);
               // $response->headers->set('Refresh', '2;url=/cars');
               
               return $response;
               
           } );
    
    
    
    
       // ***************************************************************************
    

       // Individual Client

             // New Individual Client 
             Route::get('/new-individual-client', [IndividualController::class,"create"]);
    
             // New Individual Client - Store
             Route::post('/new-individual-client', [IndividualController::class,"store"]);
      
             // Edit Individual Client 
             Route::get('/edit-individual-client/{id}', [IndividualController::class,"edit"]);
      
             // Edit Individual Client - Update
             Route::post('/edit-individual-client/{id}', [IndividualController::class,"update"]);
      
             // Individual Client Car 
             Route::get('/delete-individual-client/{id}', [IndividualController::class,"destroy"]);        
      
             // All Individual Client View
             Route::get('/individual-clients', [IndividualController::class,"index"] );

             // Individual Client Profile
             Route::get('/individual-clients/profile/{id}', [IndividualController::class,"show"] );
             
       // ***************************************************************************

       // Commercial Client

             // New Commercial Client 
             Route::get('/new-commercial-client', [CommercialController::class,"create"]);
    
             // New Commercial Client - Store
             Route::post('/new-commercial-client', [CommercialController::class,"store"]);
      
             // Edit Commercial Client 
             Route::get('/edit-commercial-client/{id}', [CommercialController::class,"edit"]);
      
             // Edit Commercial Client - Update
             Route::post('/edit-commercial-client/{id}', [CommercialController::class,"update"]);
      
             // Commercial Client Car 
             Route::get('/delete-commercial-client/{id}', [CommercialController::class,"destroy"]);        
      
             // All Commercial Client View
             Route::get('/commercial-clients', [CommercialController::class,"index"] );

             // Commercial Client Profile
             Route::get('/commercial-clients/profile/{id}', [CommercialController::class,"show"] );
             
       // ***************************************************************************


       // Appointments

           // New Appointment  
           Route::get('/new-appointment/{id}', [AppointmentController::class,"create"]);
    
           // New Appointment - Store
           Route::post('/new-appointment/{client-id}', [AppointmentController::class,"store"]);
     
           // All Appointments 
           Route::get('/appointments', [AppointmentController::class,"index"] );

           // Appointment Edit - View
           Route::get('/appointment-edit/{id}', [AppointmentController::class,"edit"] );

           // Appointment Edit - Store
           Route::post('/appointment-edit/{id}', [AppointmentController::class,"update"] );


          

       // ***************************************************************************

       // Users
    
           // New User 
           Route::get('/new-user', [UsersController::class,"create"]);
    
           // New Car - Store
           Route::post('/new-user', [UsersController::class,"store"]);
    
           // Delete Car 
           Route::get('/delete-user/{id}', [UsersController::class,"destroy"]);
    
           // Users View
           Route::get('/users', [UsersController::class,"index"] );
    
           // Change Password 
           Route::get('/change-password', [UsersController::class,"change_password_page"] );
    
           // Change Password - Logic
           Route::post('/change-password', [UsersController::class,"change_password_logic"] );
       // ***************************************************************************
    
});


Route::middleware(['un-auth-user'])->group(function () {

    // Auth 

        // Login Page
        Route::get('/login', [UsersController::class,"login_page"]);

        // Login - submit
        Route::post('/login', [UsersController::class,"login_logic"]);

        

    // ***************************************************************************
});
 

// Logout 
Route::get('/logout', [UsersController::class,"logout"]);
