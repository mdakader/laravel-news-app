<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\HomeSectionSettingController;
use App\Http\Controllers\Admin\SocialCountController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\SocialLinkController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\FooterGridOneController;
use App\Http\Controllers\Admin\FooterGridTwoController;
use App\Http\Controllers\Admin\FooterGridThreeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\RolePermisionController;
use App\Http\Controllers\Admin\RoleUserController;


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('login', [AdminAuthenticationController::class, 'login'])->name('login');
    Route::get('login', [AdminAuthenticationController::class, 'login'])->name('login');
    Route::post('login', [AdminAuthenticationController::class, 'handleLogin'])->name('handle-login');
    Route::post('logout', [AdminAuthenticationController::class, 'logout'])->name('logout');

    /** Reset password */
    Route::get('forgot-password', [AdminAuthenticationController::class, 'forgotPassword'])->name('forgot-password');
    Route::post('forgot-password', [AdminAuthenticationController::class, 'sendResetLink'])->name('forgot-password.send');

    Route::get('reset-password/{token}', [AdminAuthenticationController::class, 'resetPassword'])->name('reset-password');
    Route::post('reset-password', [AdminAuthenticationController::class, 'handleResetPassword'])->name('reset-password.send');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /**Profile Routes */
    Route::resource('profile', ProfileController::class);
    Route::put('profile-password-update/{id}', [ ProfileController::class, 'passwordUpdate'])->name('profile-password.update');

    /** Language Route */
    Route::resource('/language', LanguageController::class);

    /** Category Route */
    Route::resource('/category', CategoryController::class);

    /** News Route */
    Route::get('fetch-news-category', [NewsController::class, 'fetchCategory'])->name('fetch-news-category');
    Route::get('toggle-news-status', [NewsController::class, 'toggleNewsStatus'])->name('toggle-news-status');
    Route::get('news-copy/{id}', [NewsController::class, 'copyNews'])->name('news-copy');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('pending.news');
    Route::put('approve-news', [NewsController::class, 'approveNews'])->name('approve.news');
    Route::resource('/news', NewsController::class);

    /** Home Section Setting Route */
    Route::get('home-section-setting', [HomeSectionSettingController::class, 'index'])->name('home-section-setting.index');
    Route::put('home-section-setting', [HomeSectionSettingController::class, 'update'])->name('home-section-setting.update');

    /** Social Route */
    Route::resource('/social-count', SocialCountController::class);

    /** Ad Route */
    Route::resource('/ad', AdController::class);
    /** Subscribers Route */
    Route::resource('/subscribers', SubscribersController::class);

    /** SocialLink Route */
    Route::resource('/social-link', SocialLinkController::class);

    /** Footer Info Route */
    Route::resource('/footer-info', FooterInfoController::class);

    /** Footer Grid One Route */
    Route::resource('footer-grid-one', FooterGridOneController::class);

    /** Footer Grid Two Route */
    Route::resource('footer-grid-two', FooterGridTwoController::class);

    /** Footer Grid Three Route */
    Route::resource('footer-grid-three', FooterGridThreeController::class);

    /** About page Route */
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::put('about', [AboutController::class, 'update'])->name('about.update');

    /** Contact page Route */
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::put('contact', [ContactController::class, 'update'])->name('contact.update');

    /** Contact Message Route */
    Route::get('contact-message', [ContactMessageController::class, 'index'])->name('contact-message.index');
    Route::post('contact-send-replay', [ContactMessageController::class, 'sendReplay'])->name('contact.send-replay');

    /** Settings Routes */
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');

    /** Settings Routes */
    Route::put('general-setting', [SettingController::class, 'updateGeneralSetting'])->name('general-setting.update');
    Route::put('seo-setting', [SettingController::class, 'updateSeoSetting'])->name('seo-setting.update');
    Route::put('appearance-setting', [SettingController::class, 'updateAppearanceSetting'])->name('appearance-setting.update');

    /** Role and Permissions Routes */
    Route::get('role', [RolePermisionController::class, 'index'])->name('role.index');
    Route::get('role/create', [RolePermisionController::class, 'create'])->name('role.create');
    Route::post('role/create', [RolePermisionController::class, 'store'])->name('role.store');
    Route::get('role/{id}/edit', [RolePermisionController::class, 'edit'])->name('role.edit');
    Route::put('role/{id}/edit', [RolePermisionController::class, 'update'])->name('role.update');
    Route::delete('role/{id}/destory', [RolePermisionController::class, 'destory'])->name('role.destory');

    /** Admin User Routes */
    Route::resource('role-users', RoleUserController::class);
});

