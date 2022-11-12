<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('update-profile/{id}', function () {
        return view('auth.recreate');
    })->name('recreate');

    Route::post('login', function (LoginRequest $request) {
        $isActive = User::where('email', $request->email)->first();
        if (!$isActive)
            $request->authenticate();
        if (!$isActive->active == 1)
            throw ValidationException::withMessages([
                'active' => __('auth.active'),
            ]);
        if (!$isActive->need_recreate == 1) {
            $request->authenticate();
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect()->route('recreate', $isActive->user_id);
    });

    Route::post('update-profile/{id}', function (Request $request) {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed']
        ]);
        $user = User::where('user_id', request('id'))->first();
        // dd('dsf');
        if ($user) {
            if (!Hash::check($request->current_password, $user->password)) {
                throw ValidationException::withMessages([
                    'wrong_current_password' => __('auth.wrong_current_password'),
                ]);
            } else {
                if ($user->active == 1) {
                    $user->password = Hash::make($request->password);
                    $user->need_recreate = 0;
                    $user->save();
                    return redirect()->route('login');
                }
                throw ValidationException::withMessages([
                    'active' => __('auth.active'),
                ]);
            }
        } else {
            return redirect()->route('login');
        }
    });

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', function (Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
});
