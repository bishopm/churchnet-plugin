<?php namespace Bishopm\Churchnet\Models;

use Model;

/**
 * Model
 */
class Tag extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bishopm_churchnet_tags';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public function beforeCreate()
    {
        $this->setInitialSlug();
    }

    protected function setInitialSlug()
    {
        $this->slug = str_slug($this->tag);
    }
    
    public $fillable = [
        'tag',
        'slug',
    ];
    
    public $morphedByMany = [
        'ministers'  => ['Bishopm\Churchnet\Models\Minister', 'name' => 'taggable', 'table' => 'bishopm_churchnet_taggable_tags'],
        'layleaders'  => ['Bishopm\Churchnet\Models\Layleader', 'name' => 'taggable', 'table' => 'bishopm_churchnet_taggable_tags']
    ];
}
