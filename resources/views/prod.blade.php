@extends('layout.index')
@section('products')
    <ul class="list-group list-group-flush">
        @foreach($products as $product)
            <li class="list-group-item">
                <a href="{{ route('show', $product->id) }}">
                    {{$product->name}} - {{$product->price->price}}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
@endsection
