<?php
namespace DreamFactory\Providers;

use Illuminate\Support\ServiceProvider;
use DreamFactory\Core\Utility\Enterprise;

class EnterpriseServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//******************************************************************************
//* Initialize the DFE integration
//******************************************************************************

        Enterprise::initialize();    }

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {

    }
}