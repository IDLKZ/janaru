<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Category
 * @package App\Models
 * @version June 8, 2021, 11:29 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $courses
 * @property string $title_ru
 * @property string $title_kz
 * @property string $subtitle_ru
 * @property string $subtitle_kz
 * @property string $desc_ru
 * @property string $desc_kz
 * @property string $alias
 * @property string $img
 */
class Category extends Model
{
//    use SoftDeletes;

    use HasFactory;
    use Sluggable;
    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'title_kz'
            ]
        ];
    }

    public $fillable = [
        'title_ru',
        'title_kz',
        'subtitle_ru',
        'subtitle_kz',
        'desc_ru',
        'desc_kz',
        'alias',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'subtitle_ru' => 'string',
        'subtitle_kz' => 'string',
        'desc_ru' => 'string',
        'desc_kz' => 'string',
        'alias' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'required|string|max:255',
        'subtitle_ru' => 'required|string|max:255',
        'subtitle_kz' => 'required|string|max:255',
        'desc_ru' => 'required|string',
        'desc_kz' => 'required|string',
        'img' => 'sometimes|nullable|file|image|max:10240',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function courses()
    {
        return $this->hasMany(\App\Models\Course::class, 'category_id');
    }
}
