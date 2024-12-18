<?php

namespace Ajifatur\FaturDocker;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class FaturDockerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        if($this->app->runningInConsole()) {
            // Register publishable resources
            $this->registerPublishableResources();
        }

        // Register commands
        $this->commands(InstallCommand::class);
    }
    
    /**
     * Register the publishable files.
     * 
	 * @return void
     */
    private function registerPublishableResources()
    {
        $publishablePath = dirname(__DIR__);

        $publishable = [
            'faturdocker' => [
                "{$publishablePath}/docker" => base_path('docker'),
                "{$publishablePath}/docker-compose.yml" => base_path('docker-compose.yml'),
            ],
        ];

        foreach($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}