<x-layout>
    Name:{{$product->name}}
    Price:{{$product->price}}
    <a href="{{route('edit', ['product' => $product->id])}}"><button type="submit" class="btn btn-outline-info">Edit</button></a>
    <form action="{{route('delete', ['product' => $product->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <span><button type="submit" class="btn btn-outline-danger">Delete</button></span>
    </form>
</x-layout>