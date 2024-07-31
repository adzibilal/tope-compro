<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Category
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg p-4 rounded-md mt-5">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <x-bladewind::input label="Category name" name="name" id="name" value="{{ $category->name }}" />
                <x-bladewind::button size="small" can_submit="true">Update</x-bladewind::button>
            </form>
        </div>
    </div>
   
</x-app-layout>
