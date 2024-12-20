<x-layout>
    <form method="POST" action="{{route('categories-store')}}">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" placeholder="insert a name" name="name" value="">
            <label for="name">Category</label>
        </div>
        <button type="submit" class="btn btn-outline-warning">Create Category</button>
    </form>
</x-layout>