@extends('layout')

@section('content')
<h1>Create New Contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea name="address" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success text-decoration-none">Create</button>
</form>

<a href="{{ route('contacts.index') }}" class="btn btn-secondary text-decoration-none">Back to Contacts</a>
@endsection
