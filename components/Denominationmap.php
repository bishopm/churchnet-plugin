<?php namespace Bishopm\Churchnet\Components;

use Cms\Classes\ComponentBase;

class Denominationmap extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Denominationmap',
            'description' => 'Display a denomination leaflet map'
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
