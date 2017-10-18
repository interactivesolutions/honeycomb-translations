<?php

namespace interactivesolutions\honeycombtranslations\app\providers;


use InteractiveSolutions\HoneycombCore\Providers\HCBaseServiceProvider;

class HCTranslationsServiceProvider extends HCBaseServiceProvider
{
    protected $homeDirectory = __DIR__;

    protected $commands = [];

    protected $namespace = 'interactivesolutions\honeycombtranslations\app\http\controllers';

    public $serviceProviderNameSpace = 'HCTranslations';
}





