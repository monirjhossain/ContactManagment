@extends('layout')

@section('content')

<h1 class="text-center">Contact Management</h1>
<hr>
<form action="{{ route('contacts.index') }}" method="GET">
    <input type="text" name="search" placeholder="Search by Name or Email" value="{{ request()->search }}">
    <button type="submit" class="mt-2">Search</button>
</form>

<table>
    <thead>
        <tr>
            <th><a href="{{ route('contacts.index', ['sort' => 'name', 'direction' => request()->direction == 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th><a href="{{ route('contacts.index', ['sort' => 'created_at', 'direction' => request()->direction == 'asc' ? 'desc' : 'asc']) }}">Created At</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->address }}</td>
            <td>{{ $contact->created_at }}</td>
            <td>
                <a class="btn btn-outline-primary text-decoration-none" href="{{ route('contacts.show', $contact->id) }}">View</a>
                <a class="btn btn-outline-info text-decoration-none" href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $contacts->appends(request()->query())->links() }}

<a class="btn btn-outline-success text-decoration-none" href="{{ route('contacts.create') }}">Add New Contact</a>
@endsection
