@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Students List</h1>
    <a href="{{ route('customers.create') }}"><button type="button" class="btn btn-success">Create Customers</button></a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Level</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>


        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <th scope="row">{{$student->id}}</th>
                <td>{{$student->full_name}}</td>
                <td>{{$student->grade}}</td>
                <td>{{$student->dob}}</td>
                <td><a href="{{ route('students.edit', $student->id) }}" type="button" class="btn btn-secondary">Edit</a></td>
                <td>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection