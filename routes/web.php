<?php
// <!--
// ***********************************************************
// * ******************************************************* *
// * * Author: Rahmatullah Bizhan                          * *
// * * Email: rahmatullahbizhan@gmail.com                  * *
// * * Please Kindly Report any error or bug you may face. * *
// * * Contact me if you have any questions :)             * *
// * ******************************************************* *
// ***********************************************************
// -->
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');


// Users CRUD  Operation Routes
Route::get('addUser', 'UserOperationController@index')->name('addUser');
Route::post('/createUser', 'UserOperationController@store')->name('createUser');
Route::get('usersList', 'UserOperationController@usersList')->name('usersList');
Route::get('/deleteUser/{id}','UserOperationController@destroy');
Route::get('/editUser/{id}','UserOperationController@showInfo');
Route::post('/update/{id}','UserOperationController@edit');
Route::get('/blockList','UserOperationController@blockList')->name('blockList');
Route::get('/blockUser/{id}','UserOperationController@show');
Route::post('/updateUserStatus/{id}','UserOperationController@edit');
Route::get('/unBlockUser/{id}','UserOperationController@unBlock');
Route::post('/updateUser/{id}', 'UserOperationController@edit')->name('updateUserStatus/{id}');
Route::get('profile', 'UserProfileController@profile')->name('profile');
Route::post('updateNameUser', 'UserProfileController@updateNameUser')->name('updateNameUser');
Route::post('updateUserImage', 'UserProfileController@updateUserImage')->name('updateUserImage');
Route::post('updateUserPass', 'UserProfileController@updateUserPass')->name('updateUserPass');


// Customer section routes
Route::get('/customers', 'CustomerController@index')->name('customers');
Route::get('/addCustomer', 'CustomerController@addCustomer')->name('addCustomer');
Route::post('/saveCustomer', 'CustomerController@store')->name('saveCustomer');
Route::get('/editCustomer/{id}','CustomerController@show')->name('editCustomer/{id}');
Route::post('/updateCustomer/{id}','CustomerController@edit')->name('updateCustomer/{id}');
Route::get('/deleteCustomer/{id}','CustomerController@destroy')->name('deleteCustomer/{id}');
Route::post('/archiveCustomer/{id}', 'CustomerController@archive')->name('archiveCustomer/{id}');
Route::get('/archivedCustomers', 'CustomerController@archivedCustomers')->name('archivedCustomers');


// File section routes
Route::get('/files', 'FileController@index')->name('files');
Route::get('/addFile', 'FileController@addFile')->name('addFile');
Route::post('/saveFile', 'FileController@store')->name('saveFile');
Route::get('/printFile/{id}','FileController@print')->name('printFile/{id}');
Route::get('/editFile/{id}','FileController@show')->name('editFile/{id}');
Route::post('/updateFile/{id}','FileController@edit')->name('updateFile/{id}');
Route::get('/deleteFile/{id}','FileController@destroy')->name('deleteFile/{id}');
Route::post('/archiveFile/{id}', 'FileController@archive')->name('archiveFile/{id}');
Route::get('/archivedFiles', 'FileController@archivedFiles')->name('archivedFiles');
Route::post('/search', 'SearchFileController@search')->name('search');
Route::get('/file_price/{from?}/{to?}', 'FileController@file_price')->name('/file_price/{from?}/{to?}');
Route::get('/file_advance_paid/{from?}/{to?}', 'FileController@file_advance_paid')->name('/file_advance_paid/{from?}/{to?}');
Route::get('/file_rent/{from?}/{to?}', 'FileController@file_rent')->name('/file_rent/{from?}/{to?}');



// contracts section routes
Route::get('/contracts', 'ContractController@index')->name('contracts');
Route::get('/addContract', 'ContractController@addContract')->name('addContract');
Route::post('/saveContract', 'ContractController@store')->name('saveContract');
Route::get('/editContract/{id}','ContractController@show')->name('editContract/{id}');
Route::post('/updateContract/{id}','ContractController@edit')->name('updateContract/{id}');
Route::get('/deleteContract/{id}','ContractController@destroy')->name('deleteContract/{id}');
Route::get('/userInfo/{id}','ContractController@userInfo')->name('userInfo/{id}');
Route::get('/customerInfo/{id}','ContractController@customerInfo')->name('customerInfo/{id}');
Route::get('/fileInfo/{id}','ContractController@fileInfo')->name('fileInfo/{id}');
Route::get('/contractInfo/{id}','ContractController@contractInfo')->name('contractInfo/{id}');
Route::post('/archiveContract/{id}', 'ContractController@archive')->name('archiveContract/{id}');
Route::get('/archivedContracts', 'ContractController@archivedContracts')->name('archivedContracts');
Route::post('/archiveMyFile/{id}', 'ContractController@archiveFile')->name('archiveMyFile/{id}');



// Project section routes
Route::get('/projects', 'ProjectController@index')->name('projects');
Route::get('/addProject', 'ProjectController@addProject')->name('addProject');
Route::post('/saveProject', 'ProjectController@store')->name('saveProject');
Route::get('/editProject/{id}','ProjectController@show')->name('editProject/{id}');
Route::post('/updateProject/{id}','ProjectController@edit')->name('updateProject/{id}');
Route::get('/deleteProject/{id}','ProjectController@destroy')->name('deleteProject/{id}');
Route::post('/isCompleted/{id}', 'ProjectController@completed')->name('isCompleted/{id}');
Route::get('/completedProjects', 'ProjectController@completedProjects')->name('completedProjects');


// Project Expense section routes
Route::get('/projectExpense/{id}','ProjectController@projectExpense')->name('projectExpense/{id}');
Route::post('/saveProjectExpense', 'ProjectExpenseController@store')->name('saveProjectExpense');
Route::get('/projectExpense/editProjectExpense/{id}','ProjectExpenseController@show')->name('ProjectExpense/editProjectExpense/{id}');
Route::post('/updateProjectExpense/{id}','ProjectExpenseController@edit')->name('ProjectExpense/updateProjectExpense/{id}');
Route::get('/projectExpense/deleteProjectExpense/{id}','ProjectExpenseController@destroy')->name('ProjectExpense/deleteProjectExpense/{id}');
Route::get('/printProjectExpense/{id}','ProjectExpenseController@print')->name('printProjectExpense/{id}');


// Task Controller section routes
Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::post('/saveTask', 'TaskController@store')->name('saveTask');
Route::post('/updateTask/{id}','TaskController@edit')->name('updateTask/{id}');
Route::get('/deleteTask/{id}','TaskController@destroy')->name('deleteTask/{id}');
Route::post('/changeStatus/{id}','TaskController@changeStatus')->name('changeStatus/{id}');


// Report Controller section routes
Route::get('/customerReport', 'ReportController@customerReport')->name('customerReport');
Route::get('/printCustomerReport','ReportController@printCustomerReport')->name('printCustomerReport');
Route::get('/fileReport', 'ReportController@fileReport')->name('fileReport');
Route::get('/printFileReport','ReportController@printFileReport')->name('printFileReport');
Route::get('/contractReport', 'ReportController@contractReport')->name('contractReport');
Route::get('/contractss/{from?}/{to?}', 'ReportController@contractss')->name('/contractss/{from?}/{to?}');
Route::get('/printContractReport','ReportController@printContractReport')->name('printContractReport');
Route::get('/projectReport', 'ReportController@projectReport')->name('projectReport');
Route::get('/projectDateSearch/{from?}/{to?}', 'ReportController@projectDateSearch')->name('/projectDateSearch/{from?}/{to?}');
Route::get('/printProjectReport','ReportController@printProjectReport')->name('printProjectReport');


// Company Controller section routes
Route::get('/info', 'CompanyInfoController@index')->name('info');
Route::post('/saveInfo', 'CompanyInfoController@store')->name('saveInfo');
Route::post('/updateInfo/{id}','CompanyInfoController@edit')->name('updateInfo/{id}');
Route::get('/deleteInfo/{id}','CompanyInfoController@destroy')->name('deleteInfo/{id}');



// Dairy Controller section routes
Route::get('/diaries', 'DairyController@index')->name('diaries');


// Tools Controller section routes
Route::get('/tools', 'ToolsController@tools')->name('tools');
Route::get('/calculator', 'ToolsController@calculator')->name('calculator');
Route::get('/calendar', 'ToolsController@calendar')->name('calendar');
Route::get('/dateConverter', 'ToolsController@dateConverter')->name('dateConverter');
