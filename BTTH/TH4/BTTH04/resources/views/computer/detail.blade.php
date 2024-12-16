@extends('welcome')

@section('title', 'Computer Details')

@section('computer-content')
<div class="container mt-4">
    <h2>Computer Details</h2>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $computer->computer_id }}</td>
        </tr>
        <tr>
            <th>Computer Name</th>
            <td>{{ $computer->computer_name }}</td>
        </tr>
        <tr>
            <th>Model</th>
            <td>{{ $computer->model }}</td>
        </tr>
        <tr>
            <th>Operating System</th>
            <td>{{ $computer->operating_system }}</td>
        </tr>
        <tr>
            <th>Processor</th>
            <td>{{ $computer->processor }}</td>
        </tr>
        <tr>
            <th>Memory</th>
            <td>{{ $computer->memory }}</td>
        </tr>
        <tr>
            <th>Available</th>
            <td>{{ $computer->available ? 'Yes' : 'No' }}</td>
        </tr>
    </table>
    <a href="{{ route('computers.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
