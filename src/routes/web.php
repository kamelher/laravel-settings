<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'SMATAR\Settings\App\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'SMATAR\Settings\App\Http\Controllers\SettingsController@fileDownload');
});
