<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * category Controller constructor.
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        return new CategoryResource($this->categoryRepository->getAll());
    }

    public function store(Request $request)
    {
        return new CategoryResource($this->categoryRepository->create($request->all()));
    }

    public function update(Request $request, $id)
    {
        new CategoryResource($this->categoryRepository->update($id, $request->all()));
    }

    public function destroy($id)
    {
        new CategoryResource($this->categoryRepository->delete($id));
    }
}
