<?php namespace Bishopm\Churchnet\Components;

use Cms\Classes\ComponentBase;

class Regionalmap extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Regionalmap',
            'description' => 'Display a leaflet cluster map for a region'
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
