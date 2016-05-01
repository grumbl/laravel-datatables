<?php namespace Grumbl\LaravelDataTables\Providers;

use Grumbl\LaravelDataTables\DataTable;
use Illuminate\Support\ServiceProvider;
use Response;
use Request;

class LaravelDataTableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Response::macro('dataTable', function ($configuration) {
            $dataTable = new DataTable;
            $dataTable->setRequest(Request::duplicate())
                ->setConfig($configuration);

            return Response::json($dataTable->makeResponse());
        });
    }
}