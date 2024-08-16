@extends('layout')

@section('content')
<h1>Edit Contact</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $contact->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ $contact->email }}" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea name="address" class="form-control">{{ $contact->address }}</textarea>
    </div>
    <button type="submit" class="btn btn-success text-decoration-none">Update</button>
</form>

<a href="{{ route('contacts.index') }}" class="btn btn-secondary text-decoration-none">Back to Contacts</a>
@endsection
