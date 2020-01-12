<?php
    namespace MT\mtlara;
    use Illuminate\Support\ServiceProvider;
    class MTServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'mtviews');
            $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        }
        public function register()
        {
        }
    }
    ?>