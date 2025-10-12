<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\AdvertsController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PHPMailerController;
use App\Http\Controllers\CommandersController;
use App\Http\Controllers\OperationsController;
use App\Http\Controllers\StaticImagesController;
use App\Http\Controllers\StaticTextController;

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

// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/login', function () {

//      return view('auth.login');

// })->name('login')->middleware('guest');

// routes/web.php
Route::group(['middleware' => ['web']], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
});


Auth::routes();

Route::get('/download/{slug}', [FrontendController::class, 'downloadFile']);
Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/post/{slug}', [FrontendController::class, 'singlePost'])->name('single.post');
Route::get('/operation/internal/{slug}', [FrontendController::class, 'singleInternal'])->name('single.internal.operation');
Route::get('/operation/external/{slug}', [FrontendController::class, 'singleExternal'])->name('single.external.operation');
Route::get('/Internal_operations', [FrontendController::class, 'internalOperations'])
->name('internal.operations');
Route::get('/external_operations', [FrontendController::class, 'externalOperations'])
->name('external.operations');
//Route::get('/post_sidebar', [FrontendController::class, 'postSidebar'])->name('post.sidebar');
Route::get('/land_forces', [FrontendController::class, 'landForces'])

->name('land.forces');
Route::get('/maritime_force', [FrontendController::class, 'maritimeForce'])
->name('maritime.force');

Route::get('/service_commanders', [FrontendController::class, 'serviceCommanders'])
->name('service.commander');

Route::get('/national_service', [FrontendController::class, 'national'])
->name('national.service');

Route::get('/defence industry', [FrontendController::class, 'corporate'])
->name('defence.corporate');

Route::get('/origins', [FrontendController::class, 'origins'])
->name('origins');
Route::get('/our-people', [FrontendController::class, 'OurPeople'])
->name('our.people');


Route::get('/commissioned', [FrontendController::class, 'commissionedOfficers'])
->name('commissioned');
Route::get('/non-commissioned', [FrontendController::class, 'nonCommissioned'])
->name('non-commissioned');
Route::get('/command_staff_college', [FrontendController::class, 'commandStaffCollege'])
->name('command.staff.college');
Route::get('/command_structure', [FrontendController::class, 'commandStructure'])
->name('command.structure');
Route::get('/news_events', [FrontendController::class, 'newsEvents'])
->name('news.events');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/Peace_Support_Operations', [FrontendController::class, 'PeaceSupportOperations'])->name('PeaceSupportOperations');
Route::get('/airforce', [FrontendController::class, 'airForce'])->name('airforce');
Route::get('/directories', [FrontendController::class, 'directories'])->name('directories');
Route::get('/independent', [FrontendController::class, 'independent'])->name('independent');
Route::get('/armed_forces_college', [FrontendController::class, 'armedForcesCollege'])
->name('armed.forces.college');
Route::get('/mdf_adverts', [FrontendController::class, 'advertsPage'])->name('adverts.page');
Route::get('/what_we_are', [FrontendController::class, 'whatWeAre'])
->name('what.we.are');
Route::get('/mdf_commanders', [FrontendController::class, 'mdfCommanders'])
->name('mdf.commanders');
Route::get('/press_release', [FrontendController::class, 'pressRelease'])
->name('press.release');
Route::get('/command', [FrontendController::class, 'command'])->name('command');

// Route::get("/email", [FrontendController::class, "email"])->name("email");

Route::post("/send-email", [FrontendController::class, "composeEmail"])->name("send-email");
Route::get('/centres of excellence', [FrontendController::class, 'excellence'])->name('centres.excellence');
// Route::put('/images/{identifier}', [StaticImagesController::class, 'update'])->name('update.image');



Route::middleware(['auth'])->group(function () {
    Route::put('/images/{identifier}', [StaticImagesController::class, 'update'])->name('update.image');
    Route::put('/update-text/{identifier}', [StaticTextController::class, 'updateText'])->name('updateText');

    Route::get('admin/dashboard', [HomeController::class, 'adminHome'])
    ->name('admin.dashboard')->middleware('admin');

    Route::get('user/dashboard', [HomeController::class, 'userHome'])
    ->name('user.dashboard');

    Route::get('/settings', [SettingsController::class, 'edit'])->name('settings')
    ->middleware('admin');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update')
    ->middleware('admin');


    // Posts routes
    Route::get('/posts', [PostsController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
    Route::get('/posts/edit/{id}', [PostsController::class, 'edit'])
    ->name('posts.edit');
    Route::get('/posts/destroy/{id}', [PostsController::class, 'destroy'])
    ->name('posts.destroy')->middleware('admin');
    Route::get('posts/delete/{id}', [PostsController::class, 'delete'])
    ->name('posts.delete')->middleware('admin');
    Route::post('/posts/store', [PostsController::class, 'store'])
    ->name('posts.store');
    Route::post('/posts/update/{id}', [PostsController::class, 'update'])
    ->name('posts.update');
    Route::get('/posts/trashed', [PostsController::class, 'trash'])
    ->name('posts.trashed')->middleware('admin');
    Route::get('/posts/restore/{id}', [PostsController::class, 'restore'])
    ->name('posts.restore')->middleware('admin');

    // Command routes
    Route::get('/commands', [CommandController::class, 'index'])
    ->name('commands')->middleware('admin');

    Route::get('/command/create', [CommandController::class, 'create'])
    ->name('command.create')->middleware('admin');

    Route::get('/command/edit/{id}', [CommandController::class, 'edit'])
    ->name('command.edit')->middleware('admin');

    Route::get('/command/delete/{id}', [CommandController::class, 'destroy'])
    ->name('command.delete')->middleware('admin');

    Route::post('/command/update/{id}', [CommandController::class, 'update'])
    ->name('command.update');
    Route::post('/command/store', [CommandController::class, 'store'])
    ->name('command.store');

    // Commanders routes

    Route::get('/commanders',[CommandersController::class, 'index'])->name('commanders');
    Route::get('/commanders/create',[CommandersController::class, 'create'])->name('commanders.create');
    Route::get('/commanders/edit/{id}',[CommandersController::class, 'edit'])->name('commanders.edit');
    Route::post('/commanders/store',[CommandersController::class, 'store'])->name('commanders.store');
    Route::post('/commanders/update/{id}',[CommandersController::class, 'update'])->name('commanders.update');
    Route::get('/commanders/delete/{id}',[CommandersController::class, 'destroy'])->name('commanders.delete')
    ->middleware('admin');
    Route::get('/commanders/activate/{id}',[CommandersController::class, 'activate'])->name('commanders.active')
    ->middleware('admin');
    Route::get('/commanders/inactivate/{id}',[CommandersController::class, 'inactivate'])->name('commanders.inactivate')
    ->middleware('admin');
    Route::put('/commanders/retire/{commander}',[CommandersController::class, 'retire'])->name('commanders.retire')
    ->middleware('admin');
    // Route::get('/commanders/retired', [CommandersController::class, 'retiredCommanders'])->name('commanders.retired')
    // ->middleware('admin');
    Route::get('/commanders/retired', [CommandersController::class, 'showRetiredCommanders'])->name('commanders.retired')
    ->middleware('admin');


     //Operation routes
     Route::get('/operations',[OperationsController::class, 'index'])->name('operations');
     Route::get('/operations/create',[OperationsController::class, 'create'])->name('operations.create');
     Route::get('/operations/edit/{id}',[OperationsController::class, 'edit'])->name('operations.edit');
     Route::post('/operations/store',[OperationsController::class, 'store'])->name('operations.store');
     Route::post('/operations/update/{id}',[OperationsController::class, 'update'])->name('operations.update');
     Route::get('/operations/delete/{id}',[OperationsController::class, 'destroy'])->name('operations.delete');
     Route::get('/operation/deactivated', [OperationsController::class, 'deactivated'])->name('operation.deactivated');
     Route::get('/operation/deactivate/{id}', [OperationsController::class, 'deactivate'])->name('operation.deactivate');
     Route::get('/operation/activate/{id}', [OperationsController::class, 'activate'])->name('operation.activate');


     // users routes
    Route::get('/users', [UsersController::class, 'index'])->name('users')
    ->middleware('admin');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create')
    ->middleware('admin');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('users/delete/{id}', [UsersController::class, 'destroy'])
    ->name('users.delete')->middleware('admin');
    Route::get('users/removeadmin/{id}', [UsersController::class, 'removeAdmin'])->name('users.remove.admin')
    ->middleware('admin');
    Route::get('users/makeadmin/{id}', [UsersController::class, 'makeAdmin'])->name('users.make.admin')
    ->middleware('admin');

    //user profile routes
    Route::get('/profiles', [ProfilesController::class, 'index'])
    ->name('profiles');
    Route::post('/profiles/update', [ProfilesController::class, 'update'])
    ->name('profiles.update');

    // Adverts controller
     Route::get('/adverts',[AdvertsController::class, 'index'])->name('adverts');
     Route::get('/adverts/create',[AdvertsController::class, 'create'])->name('adverts.create');
     Route::get('/adverts/edit/{id}',[AdvertsController::class, 'edit'])->name('adverts.edit');
     Route::post('/adverts/store',[AdvertsController::class, 'store'])->name('adverts.store');
     Route::post('/adverts/update/{id}',[AdvertsController::class, 'update'])->name('adverts.update');
     Route::get('/adverts/delete/{id}',[AdvertsController::class, 'destroy'])->name('adverts.delete');
     Route::get('/adverts/unpublished', [AdvertsController::class, 'unpublished'])->name('adverts.unpublished');
     Route::get('/adverts/publish/{id}', [AdvertsController::class, 'publish'])->name('adverts.publish');
     Route::get('/adverts/unpublish/{id}', [AdvertsController::class, 'unpublish'])->name('adverts.unpublish');

     //slider routes

    Route::get('/slides', [sliderController::class, 'index'])->name('slides.index');
    Route::get('/slides/create', [sliderController::class, 'create'])->name('slides.create');
    Route::post('/slides', [sliderController::class, 'store'])->name('slides.store');
    Route::get('/slides/{slide}/edit', [sliderController::class, 'edit'])->name('slides.edit');
    Route::put('/slides/{slide}', [sliderController::class, 'update'])->name('slides.update');
    Route::delete('/slides/{slide}', [sliderController::class, 'destroy'])->name('slides.destroy');

});
