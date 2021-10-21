<?php namespace Bishopm\Churchnet\Models;

use Model;

/**
 * Model
 */
class Denomination extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_denominations';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $hasMany = [
        'provincials' => ['Bishopm\Churchnet\Models\Provincial']
    ];
}
