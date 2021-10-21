<?php namespace Bishopm\Churchnet\Models;

use Model;

/**
 * Model
 */
class Provincial extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_provincials';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'denomination' => ['Bishopm\Churchnet\Models\Denomination']
    ];
    
    public $hasMany = [
        'regionals' => ['Bishopm\Churchnet\Models\Regional']
    ];
}
