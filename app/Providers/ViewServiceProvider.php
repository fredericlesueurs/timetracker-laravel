<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;

class ViewServiceProvider extends \Illuminate\View\ViewServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::anonymousComponentPath(resource_path('views/layouts/components'), 'layouts');
        Blade::anonymousComponentPath(resource_path('views/shared/components'), 'shared');
    }
}
