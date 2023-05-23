<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyIbsController;
use App\Http\Controllers\InvoiceController;
use App\Models\Invoice;

use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('registrations.add', 'App\Http\Controllers\RegisterController@create')->name('registrations.add');
Route::post('registrations.store', 'App\Http\Controllers\RegisterController@store')->name('registrations.store');




Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () { return view('backend.home.dashboard');})->name('dashboard');

    Route::get('registrations', 'App\Http\Controllers\RegisterController@index')->name('registrations');
Route::get('registrations.destroy/{id}', 'App\Http\Controllers\RegisterController@destroy')->name('registrations.destroy');
Route::get('/user-add/{id}', [
    'uses' => 'App\Http\Controllers\UserController@add',
    'as'   => 'users.add',
]);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('companies', CompanyController::class);
    Route::resource('currencies', CurrencyController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('vendors', VendorController::class);
    Route::resource('taxes', TaxController::class);
    Route::resource('items', ItemController::class);
    Route::resource('incomes', IncomeController::class);
    Route::resource('expenses', ExpenseController::class);
    Route::resource('company_ibses', CompanyIbsController::class);
    Route::resource('invoices', InvoiceController::class);




    Route::get('items-export', 'App\Http\Controllers\ItemController@exportItem')->name('items-export');
    Route::get('import', 'App\Http\Controllers\ItemController@import')->name('import');
    Route::post('items-import', 'App\Http\Controllers\ItemController@importItem')->name('items-import');
    Route::get('downloadPDF/{id}', 'App\Http\Controllers\ItemController@downloadPDF')->name('downloadPDF');

    Route::get('categories-export', 'App\Http\Controllers\CategoryController@exportCategory')->name('categories-export');
    Route::get('category-import', 'App\Http\Controllers\CategoryController@import')->name('category-import');
    Route::post('categories-import', 'App\Http\Controllers\CategoryController@importCategory')->name('categories-import');
    Route::get('categorydownloadPDF/{id}', 'App\Http\Controllers\CategoryController@downloadPDF')->name('categorydownloadPDF');

    Route::get('customers-export', 'App\Http\Controllers\CustomerController@exportCustomer')->name('customers-export');
    Route::get('customer-import', 'App\Http\Controllers\CustomerController@import')->name('customer-import');
    Route::post('customers-import', 'App\Http\Controllers\CustomerController@importCustomer')->name('customers-import');
    Route::get('customerdownloadPDF/{id}', 'App\Http\Controllers\CustomerController@downloadPDF')->name('customerdownloadPDF');


    Route::get('taxes-export', 'App\Http\Controllers\TaxController@exportTax')->name('taxes-export');
    Route::get('tax-import', 'App\Http\Controllers\TaxController@import')->name('tax-import');
    Route::post('taxes-import', 'App\Http\Controllers\TaxController@importTax')->name('taxes-import');
    Route::get('taxdownloadPDF/{id}', 'App\Http\Controllers\TaxController@downloadPDF')->name('taxdownloadPDF');

    Route::get('vendors-export', 'App\Http\Controllers\VendorController@exportVendor')->name('vendors-export');
    Route::get('vendor-import', 'App\Http\Controllers\VendorController@import')->name('vendor-import');
    Route::post('vendors-import', 'App\Http\Controllers\VendorController@importVendor')->name('vendors-import');
    Route::get('vendordownloadPDF/{id}', 'App\Http\Controllers\VendorController@downloadPDF')->name('vendordownloadPDF');

    Route::get('incomes-export', 'App\Http\Controllers\IncomeController@exportIncome')->name('incomes-export');
    Route::get('income-import', 'App\Http\Controllers\IncomeController@import')->name('income-import');
    Route::post('incomes-import', 'App\Http\Controllers\IncomeController@importIncome')->name('incomes-import');
    Route::get('incomedownloadPDF/{id}', 'App\Http\Controllers\IncomeController@downloadPDF')->name('incomedownloadPDF');

    Route::get('expenses-export', 'App\Http\Controllers\ExpenseController@exportExpense')->name('expenses-export');
    Route::get('expense-import', 'App\Http\Controllers\ExpenseController@import')->name('expense-import');
    Route::post('expenses-import', 'App\Http\Controllers\ExpenseController@importExpense')->name('expenses-import');
    Route::get('expensedownloadPDF/{id}', 'App\Http\Controllers\ExpenseController@downloadPDF')->name('expensedownloadPDF');
    

    
    Route::get('invoices-export', 'App\Http\Controllers\InvoiceController@exportInvoice')->name('invoices-export');
    Route::get('invoice-import', 'App\Http\Controllers\InvoiceController@import')->name('invoice-import');
    Route::post('invoices-import', 'App\Http\Controllers\InvoiceController@importInvoice')->name('invoices-import');
    Route::get('invoicedownloadPDF/{id}', 'App\Http\Controllers\InvoiceController@downloadPDF')->name('invoicedownloadPDF');

    Route::get('customer-detail', 'App\Http\Controllers\InvoiceController@customerDetail')->name('customer-detail');

    Route::get('send-mail/{id}', 'App\Http\Controllers\InvoiceController@sendMail')->name('send-mail');
    
    
    Route::delete('/delete-multiple-invoice','App\Http\Controllers\InvoiceController@deleteMultiple')->name('invoice.delete-multiple-invoice');

    Route::delete('/delete-multiple-category','App\Http\Controllers\CategoryController@deleteMultiple')->name('category.delete-multiple-category');

    // Route::delete('/delete-multiple-category', [
    //     'uses' => '\App\Http\Controllers\CategoryController@deleteMultipleCategory',
    //     'as' => 'category.delete-multiple-category',
    // ]);

    Route::delete('/delete-multiple-company','App\Http\Controllers\CompanyController@deleteMultiple')->name('company.delete-multiple-company');

    Route::delete('/delete-multiple-company-ibs','App\Http\Controllers\CompanyIbsController@deleteMultiple')->name('company-ibs.delete-multiple-company-ibs');

    Route::delete('/delete-multiple-currency','App\Http\Controllers\CurrencyController@deleteMultiple')->name('currency.delete-multiple-currency');

    Route::delete('/delete-multiple-customer','App\Http\Controllers\CustomerController@deleteMultiple')->name('customer.delete-multiple-customer');

    Route::delete('/delete-multiple-expense','App\Http\Controllers\ExpenseController@deleteMultiple')->name('expense.delete-multiple-expense');

    Route::delete('/delete-multiple-income','App\Http\Controllers\IncomeController@deleteMultiple')->name('income.delete-multiple-income');

    Route::delete('/delete-multiple-vendor','App\Http\Controllers\VendorController@deleteMultiple')->name('vendor.delete-multiple-vendor');

    Route::delete('/delete-multiple-item','App\Http\Controllers\ItemController@deleteMultiple')->name('item.delete-multiple-item');

    Route::delete('/delete-multiple-permission','App\Http\Controllers\PermissionController@deleteMultiple')->name('permission.delete-multiple-permission');

    Route::delete('/delete-multiple-role','App\Http\Controllers\RoleController@deleteMultiple')->name('role.delete-multiple-role');

    Route::delete('/delete-multiple-register','App\Http\Controllers\RegisterController@deleteMultiple')->name('register.delete-multiple-register');

    Route::delete('/delete-multiple-user','App\Http\Controllers\UserController@deleteMultiple')->name('user.delete-multiple-user');

    Route::delete('/delete-multiple-tax','App\Http\Controllers\TaxController@deleteMultiple')->name('tax.delete-multiple-tax');
});
