<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TeamController;
use App\Livewire\Admin\Employees\Create;
use App\Livewire\Admin\Employees\Index;
use App\Livewire\Admin\Employees\Profile;
use App\Models\Employee;
use App\Models\Image;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
// Route::middleware(['role:user'])->group(function () {
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('services', function () {
    return view('all-services');
})->name('all-services');

Route::get('about', function () {
    return view('all-about');
})->name('all-about');

Route::get('service-area', function () {
    return view('service-area');
})->name('service-area');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

// routes/web.php
Route::get('/booking', function () {
    return view('booking');
})->name('booking');

// Route::get('testimonials', Testimonials::class)->name('testimonials');
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
// Route::get('/all-services', ServiceCard::class);
// Route::get('/all-about', AboutCard::class);
Route::view('/qr', 'qr.simple')->name('qr');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
// Route::post('/appointments/show', [AppointmentController::class, 'show'])->name('appointments.store');
// });

// Route::get('/booking', [BookingController::class, 'showForm'])->name('booking.form');
// Route::post('/booking/calculate-estimate', [BookingController::class, 'calculateEstimate']);
// Route::post('/booking/submit', [BookingController::class, 'submitBooking'])->name('booking.submit');
// Route::get('/booking/confirmation', [BookingController::class, 'showConfirmation'])->name('booking.confirmation');
Route::name('booking.')->prefix('booking')->group(function () {
    Route::get('/', [BookingController::class, 'showForm'])->name('index');
    Route::post('/check-availability', [BookingController::class, 'checkAvailability'])->name('checkAvailability');
    Route::post('/submit', [BookingController::class, 'submitBooking'])->name('submit');
    Route::get('/confirm/{booking}', [BookingController::class, 'showConfirmation'])->name('confirm');
    Route::post('/{booking}/cancel', [BookingController::class, 'cancelBooking'])->name('cancel');
    Route::post('/{booking}/reschedule', [BookingController::class, 'rescheduleBooking'])->name('reschedule');
});
// Route::prefix('jobs')
//     ->name('jobs.')
//     ->group(function () {
//         Route::get('/', [JobApplicationController::class, 'index'])->name('index');
//         Route::get('/{career:slug}', [JobApplicationController::class, 'show'])->name('show');
//         Route::get('/{career:slug}/apply', [JobApplicationController::class, 'apply'])->name('apply');
//         Route::post('/{career:slug}/apply', [JobApplicationController::class, 'store'])->name('apply.store');
//         Route::get('/application/{application}/thankyou', [JobApplicationController::class, 'thankyou'])->name('application.thankyou');
//         Route::get('/application/{application}/resume', [JobApplicationController::class, 'downloadResume'])->name('application.download-resume');
//         Route::get('/application/{application}/document/{index}', [JobApplicationController::class, 'downloadDocument'])->name('application.download-document');
//     });

// Public routes

Route::get('/sitemap.xml', [App\Http\Controllers\SitemapController::class, 'index']);

Route::middleware(['auth', 'role:master|engineer'])->group(function () {
    Route::get('/analysis', [AdminController::class, 'index'])->name('analysis');
    Route::get('/Admin/user/roles/index', [UserRoleController::class, 'index'])->name('admin.user.roles.index');
    Route::post('/Admin/roles/{user}', [UserRoleController::class, 'update'])->name('admin.roles.update');

        Route::resource('licenses', LicenseController::class);
    Route::post('licenses/update-order', [LicenseController::class, 'updateOrder'])
        ->name('licenses.update-order');
    Route::get('licenses/{license}/download', [LicenseController::class, 'download'])
        ->name('licenses.download');
    // Admin routes
    // Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    Route::resource('admin/abouts', AboutController::class);
    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/images', ImageController::class);
    Route::get('/admin/head', [ImageController::class, 'index']);

    //     Route::get('admin/head', function () {
    //     return view('admin.head');
    // })->name('admin.head');
    // Appointment requests admin view
    Route::get('/requests', [RequestController::class, 'index'])->name('admin.requests');

    // Employee List
    Route::get('admin/employees/index', Index::class)->name('admin.employees.index');

    // Create Employee
    Route::get('admin/employees/create', Create::class)->name('admin.employees.create');

    // Employee Profile (view + edit inline)
    Route::get('admin/employees/{employee}', Profile::class)->name('admin.employees.profile');

    Route::get('admin/employees', function () {
        return view('admin.employees');
    })->name('admin.employees');

    Route::get('admin/about', function () {
        return view('admin.about');
    })->name('admin.about');
    Route::get('admin/service', function () {
        return view('admin.service');
    })->name('admin.service');

    Route::get('admin/view', function () {
        return view('admin.view');
    })->name('admin.view');

    Route::resource('team', TeamController::class);
    Route::post('team/reorder', [TeamController::class, 'reorder'])->name('team.reorder');
    //     Route::get('admin/user_profile', function () {
    //     return view('admin.user_profile');
    // })->name('admin.user_profile');

    Route::get('admin/user_profile/{id}', [ShowController::class, 'show'])->name('admin.user_profile');

    Route::get('/admin/user_profile/{employee}', function (Employee $employee) {
        return view('admin.user_profile', compact('employee'));
    });
    // web.php
    // Route::get('/admin/employees/{employeeId}', function ($employeeId) {
    //     return view('admin.employees/profile', compact('employeeId'));
    // })->name('admin.employees.profile');

    // });

    // routes/web.php (admin routes)

    // Dashboard
    // Route::get('/analysis', [AdminBookingController::class, 'dashboard'])->name('analysis');

    // Bookings management
    Route::get('admin/bookings', [AdminBookingController::class, 'index'])->name('admin.bookings.index');
    Route::get('admin/bookings/{booking}', [AdminBookingController::class, 'show'])->name('admin.bookings.show');
    Route::get('admin/bookings/{booking}/edit', [AdminBookingController::class, 'edit'])->name('admin.bookings.edit');
    Route::put('admin/bookings/{booking}', [AdminBookingController::class, 'update'])->name('admin.bookings.update');
    Route::delete('admin/bookings/{booking}', [AdminBookingController::class, 'destroy'])->name('admin.bookings.destroy');
    Route::get('admin/bookings/export', [AdminBookingController::class, 'export'])->name('admin.bookings.export');

    // Route::prefix('admin')
    //     ->name('admin.')
    //     ->group(function () {
    //         Route::resource('jobs', AdminJobController::class);

    //         // Job applications
    //         Route::get('/job-applications', [AdminJobController::class, 'applications'])->name('jobs.applications');
    //         Route::get('/job-applications/{application}', [AdminJobController::class, 'showApplication'])->name('jobs.applications.show');
    //         Route::put('/job-applications/{application}', [AdminJobController::class, 'updateApplication'])->name('jobs.applications.update');
    //         Route::delete('/job-applications/{application}', [AdminJobController::class, 'destroy'])->name('jobs.applications.destroy');
    //         Route::get('/job-applications/{application}/resume', [AdminJobController::class, 'downloadApplicationResume'])->name('jobs.applications.download-resume');
    //         Route::get('/job-applications/export', [AdminJobController::class, 'exportApplications'])->name('jobs.applications.export');
    //     });
});

// routes/web.php

require __DIR__ . '/auth.php';
