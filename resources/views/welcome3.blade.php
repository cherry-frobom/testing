@php
    $title = __('Posts');
@endphp
@extends('layouts.default')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Lists') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="{{ route('products.index') }}">User</a>
                    </td>
                 </tr>
                 <tr>
                    <td>
                        <a href="{{ route('products.index') }}">Product</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="{{ route('productsettings.create') }}">ProductSetting</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection