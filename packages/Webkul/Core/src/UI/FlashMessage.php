<?php

namespace Webkul\Core\UI;

class FlashMessage
{
    public static function error($key = null, $replace = [], $locale = null)
    {
        app('session')->flash('error', trans($key, $replace, $locale));
    }

    public static function info($key = null, $replace = [], $locale = null)
    {
        app('session')->flash('info', trans($key, $replace, $locale));
    }

    public static function success($key = null, $replace = [], $locale = null)
    {
        app('session')->flash('success', trans($key, $replace, $locale));
    }
}