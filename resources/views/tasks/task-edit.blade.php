<x-guest-layout>
    <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
        @csrf
        @method("PUT")
        <!-- Name -->
        <div>
            <x-input-label for="user_id" :value="__('User')" />
            <select name="user_id" id="user_id" required value="{{ $task->user_id ?? old('user_id') }}">
                <option value="">select user</option>
                @foreach ($users as $user)
                    <option
                        value="{{ $user->id }}"
                        @if ($user->id == $task->user_id)
                            selected
                        @endif
                    >{{ $user->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input
                id="description"
                class="block mt-1 w-full"
                type="text" name="description"
                value="{{ $task->description ?? old('description') }}"
                required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                Update Task
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
