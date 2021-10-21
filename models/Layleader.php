<?php namespace Bishopm\Churchnet\Models;

use Model;

/**
 * Model
 */
class Layleader extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_layleaders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $morphToMany = [
        'tags' => ['Bishopm\Churchnet\Models\Tag','name' => 'taggable','table' => 'bishopm_churchnet_taggable_tags']
    ];
    
    public $belongsTo = [
        'local' => ['Bishopm\Churchnet\Models\Local']
    ];
    
    public $hasOneThrough = [
        'regional' => [
            'Bishopm\Churchnet\Model\Regional',
            'through' => 'Bishopm\Churchnet\Model\Local'
        ],
    ];
}
