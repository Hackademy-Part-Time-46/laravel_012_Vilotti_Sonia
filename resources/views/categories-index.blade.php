<x-layout>
    <h1>Lista Categorie</h1>
    @foreach($categories as $category)
    <ul>
        <a href="{{route('categories-show', ['category' => $category->id])}}">
            <li>{{$category->name}}</li>
        </a>
    </ul>
    @endforeach
    <a href="{{route('categories-create')}}"><button type="button" class="btn btn-primary">Create Category</button></a>

</x-layout>