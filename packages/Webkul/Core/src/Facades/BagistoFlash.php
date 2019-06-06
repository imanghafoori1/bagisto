<?php

namespace Webkul\Core\Helpers;

use Illuminate\Support\Facades\Facade;
use Webkul\Core\UI\FlashMessage;

class BagistoFlash extends Facade
{
    public static function getFacadeAccessor()
    {
        return FlashMessage::class;
    }
}