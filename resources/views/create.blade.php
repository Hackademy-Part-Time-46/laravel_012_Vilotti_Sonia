<x-layout>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="insert a name" name="name" value="">
            <label for="name">Name</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="price" placeholder="Insert a price" name="price" value="">
            <label for="price">Price</label>
        </div>
        <button type="submit" class="btn btn-outline-warning">Create Product</button>
        <select name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</x-layout>