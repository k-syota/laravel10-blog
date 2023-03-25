<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use com_exception;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function about()
    {
        $widget = TextWidget::query()
        ->where('key', '=', 'about-page')
        ->where('active', '=', true)
        ->first();

        if(!$widget){
            throw new NotHttpException();
        }

        return view('about', compact('widget'));

    }
}
