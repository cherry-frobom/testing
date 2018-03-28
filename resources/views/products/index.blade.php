@php
    $title = __('Prodcuts');
@endphp
@extends('layouts.default')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <a class="btn btn-small btn-success pull-right" href="products/create">New</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="border-top: none;">{{ ('Code') }}</th>
                    <th style="border-top: none;">{{ ('Name') }}</th>
                    <th style="border-top: none;">{{ ('Price') }}</th>
                    <th style="border-top: none;">{{ ('Description') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        <a href="{{ url('products/'.$product->id) }}">{{ $product->name }}</a>
                    </td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ ('products/'.$product->id) }}">Show</a>
                        <a class="btn btn-small btn-info" href="{{ ('products/'.$product->id. '/edit') }}">Edit</a>
                        <a onclick="return confirm('Are you sure?')" class="btn btn-small btn-danger" href="{{ route('products.destroy', $product->id) }}">Delete</a>
                    </td>
                 </tr>
            @endforeach
            <?php echo $products->render(); ?>
            </tbody>
        </table>
    </div>
</div>
@endsection