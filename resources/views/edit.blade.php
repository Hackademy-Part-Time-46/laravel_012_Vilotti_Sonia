<x-layout>
    <form method="POST" action="{{route('update')}}">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="insert a name" name="name" value="{{$product->name}}">
            <label for="name">Name</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="price" placeholder="Insert a price" name="price" value="{{$product->price}}">
            <label for="price">Price</label>
        </div>
        <input type="text" class="form-control" id="id" placeholder="Id" name="id" value="{{$product->id}}" hidden>
        <button type="submit" class="btn btn-outline-danger">Edit</button>
    </form>
</x-layout>