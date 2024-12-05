<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<h1>Trips</h1>
<a href="{{ route('trips.create') }}" class="btn btn-primary">Add Trip</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Destination</th>
            <th>Description</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trips as $trip)
        <tr>
            <td>{{ $trip->id }}</td>
            <td>{{ $trip->destination }}</td>
            <td>{{ $trip->description }}</td>
            <td>{{ $trip->price }}</td>
            <td>{{ $trip->duration }} days</td>
            <td>
                <a href="{{ route('trips.edit', $trip->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('trips.destroy', $trip->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
