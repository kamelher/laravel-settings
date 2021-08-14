<?php

Route::group(['middleware' => config('settings.middleware')], function () {
    Route::resource(config('settings.route'), 'KAMEL\Settings\app\Http\Controllers\SettingsController');
    Route::get(config('settings.route') . '/download/{setting}', 'KAMEL\Settings\app\Http\Controllers\SettingsController@fileDownload');
});
