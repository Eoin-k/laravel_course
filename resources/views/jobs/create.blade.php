<x-layout>
    <x-slot name='title'>Create Job</x-slot>
    <h1>Create New Job</h1>
    <form class="flex-col" action="/jobs" method="POST">
        @csrf
        <div class="my-5">
            <label class="flex flex-col gap-2" for="title">Title<input id="title" type="text"
                    name="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <div class="mb-5">
            <label class="flex flex-col gap-2" for="description">Description<input id="description"
                    type="text" name="description" placeholder="description"
                    value="{{ old('description') }}">
                @error('description')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </label>
        </div>
        <button type="submit">submit</button>
    </form>
</x-layout>
