<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

namespace afsharmn\hyperuilaravel\Providers;

use Illuminate\Support\ServiceProvider;

class HyperUIComponentsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'hu');

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/hu')],
            ['hyperui-laravel-components']
        );
    }
}
