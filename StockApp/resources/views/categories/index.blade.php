<!DOCTYPE html>
<html>
<head>
    <title>Categories List</title>
</head>
<body>
    <h1>Categories List</h1>
    <a href="{{ route('categories.create') }}">Add Category</a>
    <ul>
        @foreach($categories as $category)
            <li>
                {{ $category->name }}
                <a href="{{ route('categories.edit', $category) }}">Edit</a>
                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
