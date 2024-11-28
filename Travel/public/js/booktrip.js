angular.module('bookingApp', [])
    .controller('BookingController', function($scope) {
        // Sample booking data
        $scope.bookings = [
            {
                id: "BK001",
                destination: "Bali, Indonesia",
                image: "/assets/destination-3.jpg",
                date: "May 15, 2024",
                duration: "7 Days",
                passengers: 2,
                price: 1299,
                rating: 4.8,
                status: "upcoming"
            },
            {
                id: "BK002",
                destination: "Paris, France",
                image: "/assets/destination-2.jpg",
                date: "June 20, 2024",
                duration: "5 Days",
                passengers: 1,
                price: 1599,
                rating: 4.5,
                status: "upcoming"
            },
            {
                id: "BK003",
                destination: "New York, USA",
                image: "/assets/destination-1.jpg",
                date: "March 10, 2024",
                duration: "4 Days",
                passengers: 3,
                price: 999,
                rating: 4.7,
                status: "completed"
            }
        ];

        // Initialize filter
        $scope.filterType = 'all';
        
        // Filter function
        $scope.setFilter = function(type) {
            $scope.filterType = type;
            filterBookings();
        };

        function filterBookings() {
            if ($scope.filterType === 'all') {
                $scope.filteredBookings = $scope.bookings;
            } else {
                $scope.filteredBookings = $scope.bookings.filter(booking => 
                    booking.status === $scope.filterType
                );
            }
        }

        // Initialize filtered bookings
        filterBookings();

        // Modal handling
        $scope.selectedBooking = null;

        $scope.viewDetails = function(booking) {
            $scope.selectedBooking = booking;
        };

        $scope.closeModal = function(event) {
            if (event.target.className === 'modal') {
                $scope.selectedBooking = null;
            }
        };
    }); 