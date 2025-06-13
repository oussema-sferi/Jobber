<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1 class="text-3xl font-bold text-red-500">Create New Jobs</h1>
    <form action="/jobs" method="post">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Job Title</label>
            @error('title')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            <input type="text" id="title" name="title" value="{{ old('title') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Job Description</label>
            @error('description')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description') }}</textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Submit</button>
    </form>
</x-layout>
