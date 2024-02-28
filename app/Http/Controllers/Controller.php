<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function lang($lang)
    {
        session()->put('locale', $lang);
        if (auth()->check()) {
            app()->setLocale($lang);
            cache()->put('lang' . auth()->id(), $lang);
        }
        return redirect()->back();
    }
}
