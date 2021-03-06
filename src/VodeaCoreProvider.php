<?php

namespace Vodea\VodeaCore;

use App\Blade\CustomBlade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class VodeaCoreProvider  extends ServiceProvider {
	public function boot() {
		self::IncludeMultipleFile([
			'/app/Blade/',
			'/app/CMSTrait/',
			'/app/Entity/Base/',
			'/app/Exceptions/',
			'/app/Http/Controllers/',
			'/app/Http/Controllers/Admin/',
			'/app/Http/Controllers/Auth/',
			'/app/Http/Middleware/',
			'/app/Helpers/',
			'/app/Scopes/',
			'/app/Service/',
			'/app/Util/',
			'/app/Util/DataTable/',
		]);

        $this->loadViewsFrom(__DIR__.'/views/cms', 'cms');

        CustomBlade::LoadCustomBlade();
    }

	public static function IncludeMultipleFile($pathList){
		foreach($pathList as $path){
			foreach(glob(__DIR__.$path.'*.php') as $filePhp){
				require_once($filePhp);
			}
		}
	}

	public function register() {
		// TODO: Implement register() method.
	}

}
