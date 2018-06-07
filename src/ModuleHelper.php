<?php
namespace Rndwiga\UiGentella;

class ModuleHelper
{
    public static function getWebRoutes(){
        return __DIR__.'/Routes/web.php';
    }

    public static function getApiRoutes(){
        return __DIR__.'/Routes/api.php';
    }

    public static function getConfig(){
        return __DIR__.'/Config/gentella.php';
    }

    public static function getViews(){
        return __DIR__.'/Resources/Views';
    }
}