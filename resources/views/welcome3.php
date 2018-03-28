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
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="{{ route('products.index') }}">User</a>
                    </td>
                    <td></td>
                    <td></td>
                 </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection