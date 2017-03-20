<?php

Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
	Route::resource("budgets", "BudgetController");
	Route::resource("operations", "OperationController");
});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);




