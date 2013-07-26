<?php

namespace Ens\JobeetBundle\Utils;

class Jobeet
{
    static public function slugify($text)
    {
        //replace all letters or digits with -
        $text = preg_replace('/\W+/', '-', $text);

        //trim & lowercase:
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}