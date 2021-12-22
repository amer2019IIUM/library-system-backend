<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\BookRepositoryInterface;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * @var BookRepositoryInterface
     */
    private $bookRepository;

    /**
     * Book Controller constructor.
     */
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        return new BookResource($this->bookRepository->getAll());
    }
}
