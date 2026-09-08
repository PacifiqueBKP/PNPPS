<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\ProvinceController;
use App\Http\Controllers\Api\ResearcherController;
use App\Http\Controllers\Api\MentorController;
use App\Http\Controllers\Api\PublicationController;
use App\Http\Controllers\Api\TrainingController;
use App\Http\Controllers\Api\ResourceController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\PaymentController;

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/2fa/verify', [AuthController::class, 'verifyTwoFactor']);

Route::get('/provinces', [ProvinceController::class, 'index']);
Route::get('/trainings', [TrainingController::class, 'index']);
Route::get('/resources', [ResourceController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::post('/auth/2fa/enable', [AuthController::class, 'enableTwoFactor']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/researchers', [ResearcherController::class, 'index']);
    Route::get('/mentors', [MentorController::class, 'index']);
    Route::post('/matches', [MentorController::class, 'match']);

    Route::get('/publications', [PublicationController::class, 'index']);
    Route::post('/publications', [PublicationController::class, 'store']);
    Route::post('/publications/{publication}/submit', [PublicationController::class, 'submit']);
    Route::post('/publications/{publication}/review', [PublicationController::class, 'review']);
    Route::post('/publications/{publication}/corrections', [PublicationController::class, 'requestCorrections']);
    Route::post('/publications/{publication}/publish', [PublicationController::class, 'publish']);
    Route::post('/publications/{publication}/files', [PublicationController::class, 'uploadFile']);
    Route::get('/publications/{publication}/files', [PublicationController::class, 'files']);
    Route::get('/publications/{publication}/qr', [PublicationController::class, 'qr']);
    Route::post('/publications/{publication}/doi', [PublicationController::class, 'doi']);

    Route::get('/notifications', [NotificationController::class, 'index']);
    Route::post('/notifications/{notification}/read', [NotificationController::class, 'read']);

    Route::post('/payments/initiate', [PaymentController::class, 'initiate']);
    Route::post('/payments/{payment}/confirm', [PaymentController::class, 'confirm']);
});
Route::get('/health', [\App\Http\Controllers\Api\HealthController::class, 'index']);
Route::post('/webhooks/payments/{provider}', [\App\Http\Controllers\Api\WebhookController::class, 'payment']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/admin/users', [\App\Http\Controllers\Api\AdminController::class, 'users']);
    Route::patch('/admin/users/{user}', [\App\Http\Controllers\Api\AdminController::class, 'updateUser']);
    Route::get('/admin/provinces', [\App\Http\Controllers\Api\AdminController::class, 'provinces']);
    Route::get('/admin/analytics', [\App\Http\Controllers\Api\AdminController::class, 'nationalAnalytics']);
    Route::get('/admin/audit', [\App\Http\Controllers\Api\AdminController::class, 'audit']);
});
