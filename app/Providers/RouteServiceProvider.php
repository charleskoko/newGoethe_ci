<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();

        //
        $this->profileRoutes();
        $this->adminRoutes();

        //
        $this->movieRoutes();
        $this->loanRequestRoutes();

        //
        $this->frontendRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    /**
     *
     */
    protected function profileRoutes()
    {
        Route::prefix('profile')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/profile.php'));
    }

    /**
     *
     */
    protected function adminRoutes()
    {
        Route::prefix('admin')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }

    /**
     *
     */
    protected function movieRoutes()
    {
        Route::prefix('movie')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/movie.php'));
    }

    /**
     *
     */
    protected function loanRequestRoutes()
    {
        Route::prefix('loan_request')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/loanRequest.php'));
    }

    private function frontendRoutes()
    {
        Route::prefix('frontend')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/frontEnd.php'));
    }
}
