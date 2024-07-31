<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Articles
        </h2>
    </x-slot>
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}">Create New Article</a>
    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->title }} ({{ $article->category->name }})
                <a href="{{ route('articles.edit', $article) }}">Edit</a>
                <form action="{{ route('articles.destroy', $article) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-app-layout>