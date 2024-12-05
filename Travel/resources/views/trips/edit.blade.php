<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<h1>Edit Trip</h1>
<form action="{{ route('trips.update', ['trip' => (string)$trip['_id']]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Destination</label>
        <input type="text" name="destination" class="form-control" value="{{ $trip['destination'] }}" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ $trip['description'] }}</textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" value="{{ $trip['price'] }}" step="0.01" required>
    </div>
    <div class="form-group">
        <label>Duration (days)</label>
        <input type="number" name="duration" class="form-control" value="{{ $trip['duration'] }}" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection
