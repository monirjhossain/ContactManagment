@extends('layout')

@section('content')
<h1>Contact Details</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>Name:</strong> {{ $contact->name }}</li>
    <li class="list-group-item"><strong>Email:</strong> {{ $contact->email }}</li>
    <li class="list-group-item"><strong>Phone:</strong> {{ $contact->phone }}</li>
    <li class="list-group-item"><strong>Address:</strong> {{ $contact->address }}</li>
</ul>
<div class="mt-2">
<a href="{{ route('contacts.index') }}" class="btn btn-secondary text-decoration-none">Back to Contacts</a>
<a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning text-decoration-none">Edit</a>
<form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
@endsection
