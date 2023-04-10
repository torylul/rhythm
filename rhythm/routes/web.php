<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CoacheController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShaduleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Models\Hall;
use Illuminate\Support\Facades\Route;

Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    echo('clear');
});

Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    echo('storage-link');
});

// ГЛАВНАЯ СТРАНИЦА
Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('/');
});

// ПРАЙС
Route::controller(TicketController::class)->group(function () {
    Route::get('/ticket', 'index')->name('ticket');
});

// РАСПИСАНИЕ
Route::controller(ShaduleController::class)->group(function () {
    Route::get('/shadule', 'index')->name('shadule');
    Route::get('/shadule/{shadule}', 'show')->name('shadule.show');
});

// КОМАНДА
Route::controller(CoacheController::class)->group(function () {
    Route::get('/coach', 'index')->name('coach');
    Route::get('/coach/{coach}', 'show')->name('coach.show');
});

// ЗАЛЫ
Route::controller(HallController::class)->group(function () {
    Route::get('/hall', 'index')->name('hall');
});

// ВОПРОС-ОТВЕТ
Route::controller(FaqController::class)->group(function () {
    Route::get('/faq', 'index')->name('faq');
});

// КОНТАКТЫ
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
});

// АВТОРИЗАЦИЯ И РЕГИСТРАЦИЯ
Route::controller(UserController::class)->group(function () {
    Route::get('/reg', 'reg')->name('reg');
    Route::post('/reg', 'store')->name('reg.store');

    Route::get('/auth', 'auth')->name('auth');
    Route::post('/auth', 'loginCheck')->name('auth.check');
});

Route::middleware('role.user')->group(function () {
    // ЗАПИСЬ
    Route::controller(AccountController::class)->group(function () {
        Route::get('/record', 'index')->name('record');

        Route::get('/record/filter', 'getRecordByFilter')->name('record.filter');

        Route::patch('/record', 'store')->name('record.store');
    });

    // АВТОРИЗАЦИЯ И РЕГИСТРАЦИЯ
    Route::controller(UserController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');

        Route::get('/profile', 'show')->name('user.profile');
    });
});

// АДМИН

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(AdminController::class)->group(function () {

        // для авторизации
        Route::get('/', 'auth')->name('auth');
        Route::post('/', 'check')->name('auth.check');

        // для регистрации
        Route::get('/reg', 'reg')->name('reg');
        Route::post('/reg', 'store')->name('reg.store');
    });
});

//// АДМИН
//
//Route::middleware('admin')->group(function () {
//
//    Route::prefix('admin')->name('admin.')->group(function () {
//
//        Route::controller(AdminController::class)->group(function () {
//
//            Route::get('/index', 'index')->name('index');
//
//            Route::get('/logout', 'logout')->name('logout');
//        });
//
//        // ПРАЙС
//        Route::controller(\App\Http\Controllers\admin\TicketController::class)->group(function () {
//            Route::get('/ticket', 'index')->name('ticket');
//
//            Route::get('/ticket/create', 'create')->name('ticket.create');
//            Route::post('/ticket', 'store')->name('ticket.store');
//
//            Route::delete('/ticket/{ticket}', 'destroy')->name('ticket.destroy');
//
//            Route::get('/ticket/edit/{ticket}', 'edit')->name('ticket.edit');
//            Route::patch('/ticket/update/{ticket}', 'update')->name('ticket.update');
//        });
//
//        // КОНТЕНТ
//        Route::controller(\App\Http\Controllers\admin\SectionController::class)->group(function () {
//            Route::get('/section', 'index')->name('section');
//
//            Route::get('/section/{page}', 'indexSection')->name('section.section_in_page');
//
//            Route::get('/section/{page}/create', 'create')->name('section.section_in_page.create');
//            Route::post('/section/{page}', 'store')->name('section.section_in_page.store');
//
//            Route::get('/section/{page}/{section}', 'more')->name('section.section_in_page.item_in_section');
//
//            Route::delete('/section/{page}/{item}', 'destroy')->name('section.section_in_page.destroy');
//        });
//
//        // ЗАЛЫ
//        Route::controller(\App\Http\Controllers\admin\HallController::class)->group(function () {
//            Route::get('/hall', 'index')->name('hall');
//
//            Route::get('/hall/create', 'create')->name('hall.create');
//            Route::post('/hall', 'store')->name('hall.store');
//
//            Route::delete('/hall/{hall}', 'destroy')->name('hall.destroy');
//
//            Route::get('/hall/edit/{hall}', 'edit')->name('hall.edit');
//            Route::patch('/hall/update/{hall}', 'update')->name('hall.update');
//        });
//
//        // КОМАНДА
//        Route::controller(\App\Http\Controllers\admin\CoachController::class)->group(function () {
//            Route::get('/coach', 'index')->name('coach');
//
//            Route::get('/coach/create', 'create')->name('coach.create');
//            Route::post('coach', 'store')->name('coach.store');
//
//            Route::get('/coach/{coach}', 'more')->name('coach.more_info');
//
//            Route::delete('/coach/{coach}', 'destroy')->name('coach.destroy');
//
//            Route::get('/coach/edit/{coach}', 'edit')->name('coach.edit');
//            Route::patch('/coach/update/{coach}', 'update')->name('coach.update');
//        });
//
//        // ГРУППА
//        Route::controller(\App\Http\Controllers\admin\GroupController::class)->group(function () {
//            Route::get('/group', 'index')->name('group');
//
//            Route::get('/group/create', 'create')->name('group.create');
//            Route::post('group', 'store')->name('group.store');
//
//            Route::get('/group/{group}', 'more')->name('group.more_info');
//
//            Route::delete('/group/{group}', 'destroy')->name('group.destroy');
//
//            Route::delete('/group/{group}/{structure}', 'destroyUser')->name('group.more_info.destroy');
//
//            Route::get('/group/edit/{group}', 'edit')->name('group.edit');
//            Route::patch('/group/update/{group}', 'update')->name('group.update');
//        });
//
//        // РАСПИСАНИЕ
//        Route::controller(\App\Http\Controllers\admin\ShaduleController::class)->group(function () {
//            Route::get('/shadule', 'index')->name('shadule');
//
//            Route::get('/shadule/filter', 'getShaduleByFilter')->name('shadule.filter');
//
//            Route::get('/shadule/create', 'create')->name('shadule.create');
//            Route::post('shadule', 'store')->name('shadule.store');
//
//            Route::delete('/shadule/{shadule}', 'destroy')->name('shadule.destroy');
//
//            Route::get('/shadule/edit/{shadule}', 'edit')->name('shadule.edit');
//            Route::patch('/shadule/update/{shadule}', 'update')->name('shadule.update');
//        });
//
//        // ЗАПИСЬ
//        Route::controller(\App\Http\Controllers\admin\RecordController::class)->group(function () {
//            Route::get('/record', 'index')->name('record');
//
//            Route::get('/record/filter', 'getRecordByFilter')->name('record.filter');
//
//            // Route::get('/record/search', 'search')->name('record.search');
//
//            Route::get('/record/{record}', 'more')->name('record.more_info');
//
//            Route::get('/record/{record}/create', 'create')->name('record.more_info.create');
//            Route::post('/record/{record}', 'store')->name('record.more_info.store');
//
//            Route::delete('/record/{record}/{date}', 'destroy')->name('record.more_info.destroy');
//        });
//    });
//});
