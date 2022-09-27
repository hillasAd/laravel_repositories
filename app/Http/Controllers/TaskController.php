<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        return $this->service->store($data);
    }

    public function getList()
    {
        return $this->service->getList();
    }
    public function get($id)
    {
        return $this->service->get($id);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        return $this->service->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }
}
