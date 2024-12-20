<x-layout>
    <h1>Lista Prodotti</h1>
    @foreach($products as $product)
    <ul>
        <a href="{{route('show', ['product' => $product->id])}}">
            <li>{{ $product->name }}</li>
        </a>
    </ul>
    @endforeach
</x-layout>