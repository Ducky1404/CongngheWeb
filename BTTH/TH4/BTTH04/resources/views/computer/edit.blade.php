@extends('welcome')

@section('title', 'Edit Computer')

@section('computer-content')
<div class="container mt-4">
    <h2>Edit Computer</h2>
    <form action="{{ route('computers.update', $computer->computer_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="computer_name" class="form-label">Computer Name</label>
            <input type="text" class="form-control" id="computer_name" name="computer_name" value="{{ $computer->computer_name }}" required>
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $computer->model }}" required>
        </div>
        <div class="mb-3">
            <label for="operating_system" class="form-label">Operating System</label>
            <input type="text" class="form-control" id="operating_system" name="operating_system" value="{{ $computer->operating_system }}" required>
        </div>
        <div class="mb-3">
            <label for="processor" class="form-label">Processor</label>
            <input type="text" class="form-control" id="processor" name="processor" value="{{ $computer->processor }}" required>
        </div>
        <div class="mb-3">
            <label for="memory" class="form-label">Memory</label>
            <input type="number" class="form-control" id="memory" name="memory" value="{{ $computer->memory }}" required>
        </div>
        <div class="mb-3">
            <label for="available" class="form-label">Available</label>
            <select class="form-control" id="available" name="available" required>
                <option value="1" {{ $computer->available ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$computer->available ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Computer</button>
    </form>
</div>
@endsection
