<?php


namespace App\Repositories\Eloquents;

use App\Models\Category;
use \App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{

    /**
     * @var Category
     */
    private $category;

    /**
     * EloquentCategory constructor.
     * @param Category $model
     */

    public function __construct(Category $category)
    {
        $this->category = $category;

        parent::__construct($category);
    }
}
