<?php namespace Bishopm\Churchnet\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;

class Map extends FormWidgetBase
{
    public $accesstoken = '';
    
    protected $defaultAlias = 'map';

    public function render()
    {
        //$this->vars['latitude'] = $this->getLatitude();
        //$this->vars['longitude'] = $this->getLongitude();
        return $this->makePartial('mymap');
    }
    
    public function init()
    {
        $this->fillFromConfig([
            'accesstoken'
        ]);
        parent::init();
    }
}