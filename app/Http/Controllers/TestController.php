<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index() {

        $path = base_path('.env');

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'APP_KEY='.$this['config']['app.key'], 'APP_KEY='.$key, file_get_contents($path)
            ));
        }
        dd('done');

    }

}