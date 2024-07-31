<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Categories') }}
            </h2>
            <a href="{{ route('categories.create') }}">
                <x-bladewind::button size="small">Create New Category</x-bladewind::button>
            </a>
        </div>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <ul class="py-4">
            @foreach ($categories as $category)
                <li class="bg-white mb-2 shadow-lg rounded-md flex justify-between items-center p-3">{{ $category->name }}
                    <div class="flex items-center gap-3">  
                        <a href="{{ route('categories.edit', $category) }}">
                            <x-bladewind::button icon="pencil" icon_right="true" color="blue">
                                Edit
                            </x-bladewind::button>
                        </a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-bladewind::button icon="trash" icon_right="true" can_submit="true" color="red">
                                Delete
                            </x-bladewind::button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
