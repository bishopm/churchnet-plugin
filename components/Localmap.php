<?php namespace Bishopm\Churchnet\Components;

use Cms\Classes\ComponentBase;

class Localmap extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Localmap',
            'description' => 'Display a local leaflet map'
        ];
    }

    public function defineProperties()
    {
        return [
            'icon' => [
                'title' => 'Map icon',
                'description' => 'Block icon for map',
                'type' => 'string'
            ],
            'latitude' => [
                'title' => 'Latitude',
                'description' => 'Latitude',
                'type' => 'string'
            ],
            'longitude' => [
                'title' => 'Longitude',
                'description' => 'Longitude',
                'type' => 'string'
            ],
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
