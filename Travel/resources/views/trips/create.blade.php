<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<h1>Create Trip</h1>
<form action="{{ route('trips.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Destination</label>
        <input type="text" name="destination" class="form-control" value="{{ old('destination') }}" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}" step="0.01" required>
    </div>
    <div class="form-group">
        <label>Duration (days)</label>
        <input type="number" name="duration" class="form-control" value="{{ old('duration') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
