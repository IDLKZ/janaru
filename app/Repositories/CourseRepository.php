<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepository;

/**
 * Class CourseRepository
 * @package App\Repositories
 * @version June 8, 2021, 11:29 am UTC
*/

class CourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
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
        return Course::class;
    }
}
