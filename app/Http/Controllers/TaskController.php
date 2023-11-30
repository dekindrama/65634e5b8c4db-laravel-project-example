<?php

namespace App\Http\Controllers;

use App\Http\Requests\task\StoreTaskRequest;
use App\Http\Requests\task\UpdateTaskRequest;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index() : View {
        $tasks = Task::with('user')->get();
        return view('tasks.task-list')->with(compact('tasks'));
    }

    public function show(Task $task) : View {
        return view('tasks.task-detail')->with(compact('task'));
    }

    public function create() : View {
        $users = User::select('id', 'name')->get();
        return view('tasks.task-create')->with(compact('users'));
    }

    public function store(StoreTaskRequest $request) : RedirectResponse {
        $request = (object)($request->validated());
        $storedTask = Task::create([
            'user_id' => $request->user_id,
            'description' => $request->description,
        ]);

        return redirect(route('tasks.index'));
    }

    public function edit(Task $task) : View {
        $users = User::select('id', 'name')->get();
        return view('tasks.task-edit')->with(compact('users', 'task'));
    }

    public function update(UpdateTaskRequest $request, Task $task) : RedirectResponse {
        $request = (object)($request->validated());
        $updatedTask = $task->update([
            'user_id' => $request->user_id,
            'description' => $request->description,
        ]);
        return redirect(route('tasks.index'));
    }

    public function destroy(Task $task) : RedirectResponse {
        $task->delete();
        return redirect(route('tasks.index'));
    }
}
