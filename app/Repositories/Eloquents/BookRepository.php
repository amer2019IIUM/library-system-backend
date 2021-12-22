<?php


namespace App\Repositories\Eloquents;

use App\Models\Book;
use \App\Repositories\Interfaces\BookRepositoryInterface;

class BookRepository extends BaseRepository implements BookRepositoryInterface
{

    /**
     * @var Book
     */
    private $book;

    /**
     * EloquentBook constructor.
     * @param Book $model
     */

    public function __construct(Book $book)
    {
        $this->book = $book;

        parent::__construct($book);
    }
}
