<x-app-layout>
    <x-slot name="header flex gap-5">
        <div class="flex gap-5 items-center">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Task Details
                </h2>
            </div>
            <div>
                <a
                    href="{{ route('tasks.index') }}"
                    class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'
                    >
                    back to list
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h1 class="font-bold text-4xl">{{ $task->description }}</h1>
                        <br>
                        <p>{{ $task->user->name }}</p>
                        <p>{{ $task->description }}</p>
                        <p>{{ $task->created_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
