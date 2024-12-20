<x-layout>
    Category Name: {{$category->name}}
    <a href="{{route('categories-edit', ['category' => $category->id])}}"><button type="submit" class="btn btn-outline-info">Edit</button></a>
    <form action="{{route('categories-delete', ['category' => $category->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <span><button type="submit" class="btn btn-outline-danger">Delete</button></span>
    </form>
</x-layout>