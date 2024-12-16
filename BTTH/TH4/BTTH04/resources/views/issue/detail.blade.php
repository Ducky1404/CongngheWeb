@extends('welcome')

@section('title', 'Issue Details')

@section('issue-content')
<div class="container mt-4">
    <h2>Issue Details</h2>
    <table class="table table-bordered">
        <tr>
            <th>Issue ID</th>
            <td>{{ $issue->issue_id }}</td>
        </tr>
        <tr>
            <th>Computer ID</th>
            <td>{{ $issue->computer_id }}</td>
        </tr>
        <tr>
            <th>Reported By</th>
            <td>{{ $issue->reported_by }}</td>
        </tr>
        <tr>
            <th>Reported Date</th>
            <td>{{ $issue->reported_date }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $issue->description }}</td>
        </tr>
        <tr>
            <th>Urgency</th>
            <td>{{ $issue->urgency }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $issue->status }}</td>
        </tr>
    </table>
    <a href="{{ route('issues.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
