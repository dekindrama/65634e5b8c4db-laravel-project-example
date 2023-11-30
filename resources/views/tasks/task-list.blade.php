<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-5 items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Task List
                </h2>
            </div>
            <div>
                <a
                    href="{{ route('tasks.create') }}"
                    class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
                    >
                    Add Task
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="w-full">
                        <tr>
                            <th>Name</th>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                            @if ($tasks->count() > 0)
                                @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->user->name }}</td>
                                    <td class="">{{ $task->description }}</td>
                                    <td class="flex justify-center items-center">
                                        <div class="flex gap-5">
                                            <div>
                                                <a
                                                    href="{{ route('tasks.show', ['task' => $task->id]) }}"
                                                    class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
                                                    >
                                                    Show
                                                </a>
                                            </div>
                                            <div>
                                                <a
                                                    href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                                                    class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
                                                    >
                                                    Edit
                                                </a>
                                            </div>
                                            <div>
                                                <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="post">
                                                    @method("DELETE")
                                                    @csrf
                                                    <x-primary-button>
                                                        Delete
                                                    </x-primary-button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">Task Not found</td>
                                </tr>
                            @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
