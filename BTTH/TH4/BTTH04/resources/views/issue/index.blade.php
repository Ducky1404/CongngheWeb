@extends('welcome')

@section('title', 'Issue List')

@section('issue-content')
<div class="container mt-4">
    <h2>Issue List</h2>
    <a href="{{ route('issues.create') }}" class="btn btn-primary mb-3">Add new</a>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Issue ID</th>
                <th>Computer ID</th>
                <th>Report By</th>
                <th>Report Date</th>
                <th>Description</th>
                <th>Urgency</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($issues as $issue)
            <tr>
                <td>{{ $issue->issue_id }}</td>
                <td>{{ $issue->computer_id }}</td>
                <td>{{ $issue->reported_by }}</td>
                <td>{{ $issue->reported_date }}</td>
                <td>{{ $issue->description }}</td>
                <td>{{ $issue->urgency }}</td>
                <td>{{ $issue->status }}</td>
                <td class="table-actions">
                    <a href="{{ route('issues.show', ['issue' => $issue->issue_id]) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('issues.edit', ['issue' => $issue->issue_id]) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('issues.destroy', ['issue' => $issue->issue_id]) }}" method="POST" style="display:inline-block;">
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
        {{ $issues->links('vendor.pagination.custom-pagination') }}
    </div>
</div>
@endsection
