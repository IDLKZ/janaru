<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Review
 * @package App\Models
 * @version June 9, 2021, 1:50 pm UTC
 *
 * @property \App\Models\Course $course
 * @property string $img
 * @property integer $course_id
 * @property string $author
 * @property string $title
 * @property string $description
 */
class Review extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'review';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'img',
        'course_id',
        'author',
        'title',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'img' => 'string',
        'course_id' => 'integer',
        'author' => 'string',
        'title' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'img' => 'nullable|file|image|max:10240',
        'course_id' => 'required',
        'author' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }
}
