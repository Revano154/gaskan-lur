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
                <td>@{{ trip._id.$oid }}</td>
                <td>@{{ trip.destination }}</td>
                <td>@{{ trip.description }}</td>
                <td>@{{ trip.price }}</td>
                <td>@{{ trip.duration }} days</td>
                <td>
                    <a ng-href="/trips/@{{ trip._id.$oid }}/edit" class="btn btn-warning">Edit</a>
                    <button ng-click="deleteTrip(trip._id.$oid)" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script>
    var app = angular.module('tripApp', []);
    app.controller('tripController', function($scope, $http) {
        $scope.trips = @json($trips);

        $scope.deleteTrip = function(id) {
            if(confirm("Are you sure you want to delete this trip?")) {
                $http({
                    method: 'DELETE',
                    url: '/trips/' + id,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(function(response) {
                    // Remove the deleted trip from the trips array
                    $scope.trips = $scope.trips.filter(trip => trip._id.$oid !== id);
                }, function(error) {
                    console.error('Error deleting trip:', error);
                });
            }
        };
    });
</script>
@endsection
