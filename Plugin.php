<?php namespace Bishopm\Churchnet;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    
    public function pluginDetails()
    {
        return [
            'name' => 'ChurchNet Plugin',
            'description' => 'Provides components for the ChurchNet frontend site.',
            'author' => 'ChurchNet',
            'icon' => 'icon-globe'
        ];
    }

    public function registerComponents()
    {
        return [
            \Bishopm\Churchnet\Components\Denominationmap::class => 'denominationmap',
            \Bishopm\Churchnet\Components\Provincialmap::class => 'provincialmap',
            \Bishopm\Churchnet\Components\Localmap::class => 'localmap',
            \Bishopm\Churchnet\Components\Regionalmap::class => 'regionalmap'
        ];
    }
    
    public function registerSettings()
    {
    }
    
    public function registerFormWidgets()
    {
        return [
            'Bishopm\Churchnet\FormWidgets\Map' => 'map'
        ];
    }
}
