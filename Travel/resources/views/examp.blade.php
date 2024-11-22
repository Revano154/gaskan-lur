<!DOCTYPE html>
<html lang="en" ng-app="travelApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        section {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
        }

        form input {
            padding: 10px;
            margin: 5px 0;
            width: 100%;
            box-sizing: border-box;
        }
    </style>
</head>
<body ng-controller="travelController">
    <header>
        <h1>Explore the World</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="home">
        <h2>Welcome to Our Travel Website</h2>
        <p>Discover beautiful places around the world.</p>
    </section>

    <section id="destinations" ng-repeat="destination in destinations">
        <h2>{{destination.name}}</h2>
        <p>{{destination.description}}</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form ng-submit="submitForm()">
            <input type="text" ng-model="contact.name" placeholder="Your Name" required>
            <input type="email" ng-model="contact.email" placeholder="Your Email" required>
            <button type="submit">Submit</button>
        </form>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script>
        var app = angular.module('travelApp', []);

        app.controller('travelController', function($scope) {
            $scope.destinations = [
                {name: "Paris", description: "The city of lights and romance."},
                {name: "New York", description: "The city that never sleeps."},
                {name: "Tokyo", description: "A vibrant and modern city."}
            ];

            $scope.contact = {};

            $scope.submitForm = function() {
                alert("Form submitted by " + $scope.contact.name);
            };
        });
    </script>
</body>
</html>
