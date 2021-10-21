<?php namespace Bishopm\Churchnet\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Bishopm\Churchnet\Widgets\Map;

class Local extends Controller
{
    public $implement = ['Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.RelationController'];
        
    public $relationConfig = 'config_relation.yaml';
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Bishopm.Churchnet', 'churchnet-menu-item', 'locals-menu-item');
    }
}
