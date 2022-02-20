@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" name="full_name" value="{{ $customer->full_name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Level</label>
            <input type="number" class="form-control" name="grade" value="{{ $customer->grade }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="date" class="form-control" name="tel" value="{{ $customer->dob }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection