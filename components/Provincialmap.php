<?php namespace Bishopm\Churchnet\Components;

use Cms\Classes\ComponentBase;

class Provincialmap extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Provincialmap',
            'description' => 'Display a provincial leaflet map'
        ];
    }

    public function defineProperties()
    {
        return [
            'token' => [
                'title' => 'Access token',
                'description' => 'Mapbox access token',
                'type' => 'string'
            ]
        ];
    }
    
    public function onRun()
    {
        $this->addCss('/plugins/bishopm/churchnet/assets/css/leaflet.css');
    }
}
