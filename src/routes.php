<?php
Route::group(['middleware' => 'web'], function(){
    Route::post('playa/password-lock', 'Playa\PasswordLock\PasswordLockController@login')->name('playa-password-lock-login');
});