<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    /**
     * User Controller constructor.
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return new UserResource($this->userRepository->getAll());
    }

    public function show($id)
    {
        return new UserResource($this->userRepository->getById($id));
    }

    public function store(Request $request)
    {
        return new UserResource($this->userRepository->create($request->all()));
    }

    public function update(Request $request, $id)
    {
        new UserResource($this->userRepository->update($id, $request->all()));
    }

    public function destroy($id)
    {
        new UserResource($this->userRepository->delete($id));
    }
}
