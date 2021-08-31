<?php

use App\Http\Controllers\Api\V1\Admin\TestApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Tests
    Route::apiResource('tests', TestApiController::class);
});
