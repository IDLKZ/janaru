<?php

namespace App\Repositories;

use App\Models\Review;
use App\Repositories\BaseRepository;

/**
 * Class ReviewRepository
 * @package App\Repositories
 * @version June 9, 2021, 1:50 pm UTC
*/

class ReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'img',
        'course_id',
        'author',
        'title',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Review::class;
    }
}
