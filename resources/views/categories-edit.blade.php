<x-layout>
    <form method="POST" action="{{route('categories-update')}}">
        @csrf
        @method('PUT')
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="insert a category" name="name" value="{{$category->name}}">
            <label for="name">Category</label>
        </div>
        <input type="text" class="form-control" id="id" placeholder="Id" name="id" value="{{$category->id}}" hidden>
        <button type="submit" class="btn btn-outline-danger">Edit</button>
    </form>
</x-layout>