<?php

namespace Lolibrary\Optimizer;

use Illuminate\Support\ServiceProvider;
use ImageOptimizer\Optimizer;
use ImageOptimizer\OptimizerFactory;

class OptimizerServiceProvider extends ServiceProvider
{
    /**
     * Register this service in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Optimizer::class, function () {
            return (new OptimizerFactory)->get();
        });
    }
}