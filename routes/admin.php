<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MenuBuilderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\CourseController;


Route::get('login', [AdminLoginController::class, 'viewLogin'])->name('login.view');
Route::post('admin-login', [AdminLoginController::class, 'login'])->name('login');
Route::post('logout', [AdminLoginController::class, 'logout'])->name('logout');

Route::prefix('passwords')->group(function () {
    Route::get('forget-password', [ForgotPasswordController::class, 'getEmail'])->name('forget.password');
    Route::post('forget-password', [ForgotPasswordController::class, 'postEmail'])->name('forget.password.store');

    Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword'])->name('reset.password');
    Route::post('reset-password', [ResetPasswordController::class, 'updatePassword'])->name('reset.password.store');
});
Route::middleware('admin')->group(function () {

    /* ============> Dashboard <=========== */
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.home');

    /* ============> Categories <=========== */
    Route::prefix('categories')->group(function () {
        Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
        Route::get('/show/{id}', [CategoryController::class,'show'])->name('category.show');

    });

    /* ============> Configuration <=========== */
    Route::group(['prefix'=>'settings'], function(){   
        Route::get('/index', [SettingController::class, 'index'])->name('settings.index');
        Route::post('/update', [SettingController::class, 'update'])->name('settings.update');     
        Route::get('/profile/view', [SettingController::class, 'profileView'])->name('profile.view');     
        Route::post('/profile/update', [SettingController::class, 'profileUpdate'])->name('profile.update');     
        Route::get('/password/change', [SettingController::class, 'passwordChange'])->name('password.change');   
        Route::post('/password/update', [SettingController::class, 'passwordUpdate'])->name('password.update');   
    });

    /* ============> Sections <=========== */
    Route::group(['prefix'=>'sections'], function(){   
        Route::get('/index', [SectionController::class, 'index'])->name('section.index');
        Route::get('/create', [SectionController::class, 'create'])->name('section.create');
        Route::post('/store', [SectionController::class, 'store'])->name('section.store');
        Route::get('/edit/{id}', [SectionController::class, 'edit'])->name('section.edit');
        Route::post('/update/{id}', [SectionController::class, 'update'])->name('section.update');
        Route::get('/delete/{id}', [SectionController::class, 'destroy'])->name('section.delete');
        Route::get('/show/{id}', [SectionController::class,'show'])->name('section.show');

    });

    /* ============> About <=========== */
    Route::group(['prefix'=>'abouts'], function(){   
        Route::get('/index', [AboutController::class, 'index'])->name('about.index');
        Route::get('/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::post('/update/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::get('/delete/{id}', [AboutController::class, 'destroy'])->name('about.delete');
        Route::get('/show/{id}', [AboutController::class,'show'])->name('about.show');

    });

    /* ===========> Manage Menu Builder <========== */
    Route::group(['prefix'=>'menus'], function(){        
        // Route::get('/menu/builder', MenuBuilder::class)->name('menu.builder.create')
        Route::get('/manage/menus/{id?}', [MenuBuilderController::class, 'index'])->name('menuBuilder');
        Route::post('store/menu', [MenuBuilderController::class, 'store'])->name('menu.store');
        Route::get('delete/menuitem/{id}', [MenuBuilderController::class, 'deleteMenuItem'])->name('deleteMenuItem');
        Route::get('create/menu', [MenuBuilderController::class, 'createMenu'])->name('createMenu');
        Route::get('update/menu', [MenuBuilderController::class, 'updateMenu'])->name('updateMenu');
        Route::get('add/item/menu', [MenuBuilderController::class, 'addItemToMenu'])->name('addItemToMenu');
        Route::post('update/menuitem/{id}', [MenuBuilderController::class, 'updateMenuItem'])->name('updateMenuItem');
        Route::get('delete/menu/{id}', [MenuBuilderController::class, 'destroy'])->name('deleteMenu');
    });

    /* ============> Pages <=========== */
    Route::prefix('pages')->group(function () {
        Route::get('/index', [PageController::class, 'index'])->name('page.index');
        Route::get('/create', [PageController::class, 'create'])->name('page.create');
        Route::post('/store', [PageController::class, 'store'])->name('page.store');
        Route::get('/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
        Route::post('/update/{id}', [PageController::class, 'update'])->name('page.update');
        Route::get('/delete/{id}', [PageController::class, 'destroy'])->name('page.delete');
        Route::get('/show/{id}', [PageController::class,'show'])->name('page.show');

    });

    /* ============> Instructor <=========== */
    Route::prefix('instructors')->group(function () {
        Route::get('/index', [InstructorController::class, 'index'])->name('instructor.index');
        Route::get('/create', [InstructorController::class, 'create'])->name('instructor.create');
        Route::post('/store', [InstructorController::class, 'store'])->name('instructor.store');
        Route::get('/edit/{id}', [InstructorController::class, 'edit'])->name('instructor.edit');
        Route::post('/update/{id}', [InstructorController::class, 'update'])->name('instructor.update');
        Route::get('/delete/{id}', [InstructorController::class, 'destroy'])->name('instructor.delete');
        Route::get('/show/{id}', [InstructorController::class,'show'])->name('instructor.show');

    });

    /* ============> Course <=========== */
    Route::prefix('courses')->group(function () {
        Route::get('/index', [CourseController::class, 'index'])->name('course.index');
        Route::get('/create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/store', [CourseController::class, 'store'])->name('course.store');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
        Route::post('/update/{id}', [CourseController::class, 'update'])->name('course.update');
        Route::get('/delete/{id}', [CourseController::class, 'destroy'])->name('course.delete');
        Route::get('/show/{id}', [CourseController::class,'show'])->name('course.show');

    });
  
});
