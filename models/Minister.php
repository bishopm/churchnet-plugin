<?php namespace Bishopm\Churchnet\Models;

use Model;

/**
 * Model
 */
class Minister extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_ministers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'regional' => ['Bishopm\Churchnet\Models\Regional']
    ];
    
    public $morphToMany = [
        'tags' => ['Bishopm\Churchnet\Models\Tag','name' => 'taggable','table' => 'bishopm_churchnet_taggable_tags']
    ];
}
