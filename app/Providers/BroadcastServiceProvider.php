<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        file_put_contents(storage_path('logs/broadcast-service.log'), 
            date('Y-m-d H:i:s') . " - BroadcastServiceProvider booted\n", 
            FILE_APPEND
        );
        
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
