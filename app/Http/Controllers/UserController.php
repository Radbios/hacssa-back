<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Requests\StoreUpdateUserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $data = User::all();

        return response()->json(['data' => $data]);
    }

    public function store(StoreUpdateUserRequest $request)
    {
        $request->password = Hash::make($request->password);
        $data = User::create($request->all());
        return new UserResource($data);
    }

    public function show(string $id)
    {
        $data = User::findOrFail($id);

        return new UserResource($data);
    }

    public function update(StoreUpdateUserRequest $request, string $id)
    {
        $request->password = Hash::make($request->password);
        $data = User::findOrFail($id);
        $data->update($request->all());

        return new UserResource($data);
    }

    public function destroy(string $id)
    {
        $data = User::findOrFail($id);
        $data->delete();

        return new UserResource($data);
    }
}
