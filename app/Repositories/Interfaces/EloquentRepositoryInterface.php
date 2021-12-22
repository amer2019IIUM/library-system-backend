<?php


namespace App\Repositories\Interfaces;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface EloquentRepositoryInterface
{
    public function getAll();


    public function getById($id);


    public function create(array $attributes);


    public function update($id, array $attributes);


    public function delete(array $attributes);
}
