<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
// Route::get('/1st', function () {
//     return view('landingpage');
// });
// FrontEnd start
Route::get('/', [adminController::class, 'index'])->name('/');
Route::get('/admissions', [adminController::class, 'admission'])->name('admission.page');
Route::get('/signIn', [adminController::class, 'signin'])->name('admin_login.page');
Route::get('/course', [adminController::class, 'course'])->name('course.page');
Route::get('/contact', [adminController::class, 'contact'])->name('contact.page');
Route::get('/form', [adminController::class, 'form'])->name('form.page');
Route::post('/store', [adminController::class, 'infoStore'])->name('info.store');
Route::get('/delete/{id}', [adminController::class, 'deleteInfo'])->name('delete.info');
Route::get('edit-information/{id}', [adminController::class, 'editinfo']);
Route::post('update-information', [adminController::class, 'update']);
Route::get('/enroll', [adminController::class, 'enroll'])->name('enroll.page');
Route::post('/enrollInfo', [adminController::class, 'enrollinfo'])->name('entroll.store');
Route::post('/contact_store', [adminController::class, 'contact_store'])->name('contact.store');
// FrontEnd End
//Backend start
Route::get('/admin', [adminController::class, 'admin'])->name('dashboard.page');
Route::get('/popular_course', [adminController::class, 'popular_course'])->name('popular_course.page');
Route::get('/testimonial', [adminController::class, 'testimonial'])->name('testimonial.page');
Route::get('/backend_admission', [adminController::class, 'backend_admission'])->name('backend_admission.page');
// Popular course
Route::get('/backend_course', [adminController::class, 'backend_course'])->name('backend_course.page');
Route::post('/course_store', [adminController::class, 'course_store'])->name('course.store');
Route::get('/course_delete/{id}', [adminController::class, 'course_delete'])->name('course.delete');
Route::get('course-edit/{id}', [adminController::class, 'courseEdit']);
Route::post('course_update', [adminController::class, 'course_update']);
// testimonial
Route::post('/testimonial_store', [adminController::class, 'testimonial_store'])->name('testimonial.store');
Route::get('/testimonial_delete/{id}', [adminController::class, 'testimonial_delete'])->name('testimonial.delete');
Route::get('testimonial_edit/{id}', [adminController::class, 'testimonial_edit']);
Route::post('testimonial_update', [adminController::class, 'testimonial_update']);
// backend_admission
Route::post('/admission_store', [adminController::class, 'admission_store'])->name('admission.store');
Route::get('/backend_admission_delete/{id}', [adminController::class, 'backend_admission_delete'])->name('backend_admission.delete');
Route::get('admission_edit/{id}', [adminController::class, 'admission_edit']);
Route::post('admission_update', [adminController::class, 'admission_update']);
// all_course
Route::post('/all_course_store', [adminController::class, 'all_course_store'])->name('all_course.store');
Route::get('/all_course_delete/{id}', [adminController::class, 'all_course_delete'])->name('all_course.delete');
Route::get('all_course_edit/{id}', [adminController::class, 'all_course_edit']);
Route::post('all_course_update', [adminController::class, 'all_course_update']);
// hero_carousel
Route::get('/hero_carousel', [adminController::class, 'hero_carousel'])->name('hero_carousel.page');
Route::post('/hero_carousel_store', [adminController::class, 'hero_carousel_store'])->name('hero_carousel.store');
Route::get('/hero_carousel_delete/{id}', [adminController::class, 'hero_carousel_delete'])->name('hero_carousel.delete');
Route::get('hero_carousel_edit/{id}', [adminController::class, 'hero_carousel_edit']);
Route::post('hero_carousel_update', [adminController::class, 'hero_carousel_update']);
// academic_work
Route::get('/academic_work', [adminController::class, 'academic_work'])->name('academic_work.page');
Route::post('/academic_work_store', [adminController::class, 'academic_work_store'])->name('academic_work.store');
Route::get('/academic_work_delete/{id}', [adminController::class, 'academic_work_delete'])->name('academic_work.delete');
Route::get('academic_work_edit/{id}', [adminController::class, 'academic_work_edit']);
Route::post('academic_work_update', [adminController::class, 'academic_work_update']);
// about_university
Route::get('/about_university', [adminController::class, 'about_university'])->name('about_universitye.page');
Route::post('/about_university_store', [adminController::class, 'about_university_store'])->name('about_university.store');
Route::get('/about_university_delete/{id}', [adminController::class, 'about_university_delete'])->name('about_university.delete');
Route::get('about_university_edit/{id}', [adminController::class, 'about_university_edit']);
Route::post('about_university_update', [adminController::class, 'about_university_update']);
// key_feature
Route::get('/key_feature', [adminController::class, 'key_feature'])->name('key_feature.page');
Route::post('/key_feature_store', [adminController::class, 'key_feature_store'])->name('key_feature.store');
Route::get('/key_feature_delete/{id}', [adminController::class, 'key_feature_delete'])->name('key_feature.delete');
Route::get('key_feature_edit/{id}', [adminController::class, 'key_feature_edit']);
Route::post('key_feature_update', [adminController::class, 'key_feature_update']);
// backend_contact
Route::get('/backend_contact', [adminController::class, 'backend_contact'])->name('backend_contact.page');
Route::get('/backend_contact_delete/{id}', [adminController::class, 'backend_contact_delete'])->name('backend_contact.delete');
//Backend End
