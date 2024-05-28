<?php

namespace Innovation\EightHrm;
use Illuminate\Support\ServiceProvider;


class HrmServiceProvider extends ServiceProvider
{

	public function boot(){

		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views', 'eight_hrm');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
		 $this->mergeConfigFrom(__DIR__.'/config/inno_contact.php', 'eight_hrm');

		 $this->publishes([__DIR__.'/config/inno_contact.php' => config_path('inno_contact.php'),]);
		 $this->publishes([
        __DIR__.'/public' => public_path('vendor/eight_hrm'),
    ], 'public');

	}


	public function register(){

	}
}