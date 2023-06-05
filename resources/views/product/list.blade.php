@extends('layout/app')

@section('title', 'Product Manager')

@section('header')
@parent
<h2>child's header</h2>
@endsection

@section('content')
<div class="container">
    <h2 class="text-center text-primary">Product List</h2>
    <div class="d-flex float-end">
        <a role='button' class="btn btn-warning" href="{{route('product/create')}}">Create New Product</a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    console.log('hello');
</script>
@endpush