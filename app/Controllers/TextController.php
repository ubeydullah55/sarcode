<?php

namespace App\Controllers;

use App\Libraries\TextFormatter;

class TextController extends BaseController
{
    public function index()
    {
        // TextFormatter kütüphanesini kullan
        $formatter = new TextFormatter();
        $upperText = $formatter->toUpperCase("hello world");
        $lowerText = $formatter->toLowerCase("HELLO WORLD");

        return view('text_view', ['upperText' => $upperText, 'lowerText' => $lowerText]);
    }
}
