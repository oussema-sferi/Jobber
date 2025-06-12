<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1 class="text-3xl font-bold text-red-500">Create New Jobs</h1>
    <form action="/jobs" method="post">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Job Title</label>
            <input type="text" id="title" name="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Job Description</label>
            <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Create Job</button>
    </form>
</x-layout>
