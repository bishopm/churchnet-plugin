<?php namespace Bishopm\Churchnet\Models;

use Model;
use Bishopm\Churchnet\Models\Regional;

/**
 * Model
 */
class Local extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_locals';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo = [
        'regional' => ['Bishopm\Churchnet\Models\Regional']
    ];
    
    public $hasMany = [
        'layleaders' => ['Bishopm\Churchnet\Models\Layleader']
    ];
    
    public function scopeOtherLocals($query, $id)
    {
        return $query->where('regional_id', $id);
    }
}
