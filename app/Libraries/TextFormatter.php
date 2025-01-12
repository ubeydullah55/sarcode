<?php

namespace App\Libraries;

class TextFormatter
{
    public function toUpperCase($text)
    {
        // Metni büyük harfe çevirme işlemi
        return strtoupper($text);
    }

    public function toLowerCase($text)
    {
        // Metni küçük harfe çevirme işlemi
        return strtolower($text);
    }
}
