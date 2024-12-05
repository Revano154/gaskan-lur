<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<div ng-app="tripApp" ng-controller="tripController">
    <h1>Trips</h1>
    <div class="form-group mb-3">
        <input type="text" class="form-control" ng-model="searchText" placeholder="Search destination...">
    </div>
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
            <tr ng-repeat="trip in trips | filter:searchText">
                <td>@{{ trip._id }}</td>
                <td>@{{ trip.destination }}</td>
                <td>@{{ trip.description }}</td>
                <td>@{{ trip.price }}</td>
                <td>@{{ trip.duration }} days</td>
                <td>
                    <a href="/trips/@{{ trip._id }}/edit" class="btn btn-warning">Edit</a>
                    <form action="/trips/@{{ trip._id }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script>
    var app = angular.module('tripApp', []);
    app.controller('tripController', function($scope) {
        $scope.trips = @json($trips);
    });
</script>
@endsection
