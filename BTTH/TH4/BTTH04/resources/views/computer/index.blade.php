@extends('welcome')

@section('title', 'Computer List')

@section('computer-content')
<div class="container mt-4">
    <h2>Computer List</h2>
    <a href="{{ route('computers.create') }}" class="btn btn-primary mb-3">Add Computer</a>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Computer Name</th>
            <th>Model</th>
            <th>Operating System</th>
            <th>Processor</th>
            <th>Memory</th>
            <th>Available</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($computers as $computer)
            <tr>
                <td>{{ $computer->computer_id }}</td>
                <td>{{ $computer->computer_name }}</td>
                <td>{{ $computer->model }}</td>
                <td>{{ $computer->operating_system }}</td>
                <td>{{ $computer->processor }}</td>
                <td>{{ $computer->memory }}</td>
                <td>{{ $computer->available ? 'Yes' : 'No' }}</td>
                <td class="table-actions">
                    <a href="{{ route('computers.show', ['computer' => $computer->computer_id]) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('computers.edit', ['computer' => $computer->computer_id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('computers.destroy', ['computer' => $computer->computer_id]) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $computers->links('vendor.pagination.custom-pagination') }}
    </div>
</div>
@endsection
