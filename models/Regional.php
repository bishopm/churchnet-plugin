<?php namespace Bishopm\Churchnet\Models;

use Model;

/**
 * Model
 */
class Regional extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_regionals';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'provincial' => ['Bishopm\Churchnet\Models\Provincial']
    ];
    
    public $hasMany = [
        'locals' => ['Bishopm\Churchnet\Models\Local'],
        'ministers' => ['Bishopm\Churchnet\Models\Minister']
    ];
}
