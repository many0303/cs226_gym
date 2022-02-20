@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <a href="{{ route('customers.index') }}"><button type="button" class="btn btn-primary">View Customers</button></a>
    <a href="{{ route('customers.create') }}"><button type="button" class="btn btn-success">Create Customers</button></a>
</div>
@endsection