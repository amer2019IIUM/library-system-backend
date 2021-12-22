<?php


namespace App\Repositories\Eloquents;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use \App\Repositories\Interfaces\EloquentRepositoryInterface;
use Illuminate\Support\Collection;

class BaseRepository implements EloquentRepositoryInterface
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        $models = $this->getById($id);

        $models->update($attributes);

        return $models;
    }

    public function delete($id)
    {
        $this->getById($id)->delete();

        return true;
    }
}
