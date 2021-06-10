<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version June 8, 2021, 11:29 am UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Category::class;
    }
}
