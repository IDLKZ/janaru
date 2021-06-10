<?php

namespace App\Repositories;

use App\Models\Video;
use App\Repositories\BaseRepository;

/**
 * Class VideoRepository
 * @package App\Repositories
 * @version June 8, 2021, 11:29 am UTC
*/

class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'title_ru',
        'title_kz',
        'subtitle_ru',
        'subtitle_kz',
        'desc_ru',
        'desc_kz',
        'link',
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
        return Video::class;
    }
}
