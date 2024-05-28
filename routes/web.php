<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\User\HomeComponent; // Note the correct namespace
use App\Livewire\User\AboutComponent; // Note the correct namespace
use App\Livewire\User\ServiceComponent; // Note the correct namespace
use App\Livewire\User\ContactComponent; // Note the correct namespace
use App\Livewire\User\SpecificShutterComponent; // Note the correct namespace

use App\Http\Controllers\Seo\Sitemapcontroller;

use App\Livewire\Admin\PhotoUploadComponent; // Note the correct namespace
use App\Livewire\Admin\AddCategoryphoto; // Note the correct namespace

use App\Livewire\Admin\AddshutterComponent; // Note the correct namespace
use App\Livewire\Admin\ShutterShow; // Note the correct namespace
use App\Livewire\Admin\EditShutter; // Note the correct namespace

use App\Livewire\Admin\PhotoListPage;
use App\Livewire\Admin\EditPhoto;
use App\Livewire\Admin\CategoryPhotoList;



//seo
Route::get('sitemap.xml',[Sitemapcontroller::class,'index']);


Route::get('/', HomeComponent::class)->name('home_user');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/shutters', ServiceComponent::class)->name('service');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/rollingshutter/{slug}', SpecificShutterComponent::class)->name('specific-shutter');

///admin


Route::get('/admin/shutters', ShutterShow::class)->name('show_shutters');

Route::get('/admin/photos-upload-shutter/{shutterId}', PhotoUploadComponent::class)->name('photo_upload');
Route::get('/admin/add-shutter', AddshutterComponent::class)->name('add_shutter');
Route::get('/admin/edit-shutter/{shutterId}', EditShutter::class)->name('edit_shutter');


Route::get('/admin/show-category-photo-shutter', CategoryPhotoList::class)->name('cartegory_photo_list');

Route::get('/admin/add-category-photo-shutter', AddCategoryphoto::class)->name('add_cartegory_photo');
Route::get('/admin/shutter-photos/{shutterId}', PhotoListPage::class)->name('photo-list');
Route::get('/admin/shutter-photos/edit/{photoId}', EditPhoto::class)->name('edit-photo');
