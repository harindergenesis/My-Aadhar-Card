var app = angular.module('cards', ['ngFileUpload']);

app.controller('cards-controller', function($scope, $http, Upload) {

    // store all the cards

    $scope.file_form = {};
    $scope.enrollment_form = {};

    $scope.cards = [];

    $scope.reset = function() {
        $scope.file_form = {};
        $scope.enrollment_form = {};
        angular.element('#file_pdf_input').val(null);
    }

    $scope.edit_card = function(index) {
    	console.log(index);
        $scope.cards[index].editing = true;
    }

    $scope.delete_card = function(index) {
    	$scope.cards[index].editing = false;
    	var card = $scope.cards[index];
    	console.log(card);
        $.post('index.php/cart/deletefromcart', card, function(data){
        		$scope.$apply(function() {
            		$scope.cards = [];
            	});
            	console.log(data);
                var cards = JSON.parse(data);
                console.log(cards);
                for (var property in cards) {
                    if (cards.hasOwnProperty(property)) {
                        $scope.$apply(function() {
                        	var new_card = {};
                        	new_card = cards[property];
                        	if(new_card.type != 'file') {
                        		new_card.mobile = parseInt(cards[property].mobile);
                        	}
                        	new_card.pincode = parseInt(cards[property].pincode);
                        	new_card.qty = parseInt(cards[property].qty);
                        	new_card.editing = false;
                            $scope.cards.push(new_card);
                        });
                    }
                }
        });
    }

    $scope.add_card = function(type) {

    	var formData = angular.element('#file_pdf_input').val();
    	console.log(formData);

        if (type == 'file') {
            var card = {
                pincode: parseInt($scope.file_form.pincode),
                name: $scope.file_form.name,
                copies: parseInt($scope.file_form.copies),
                file: $scope.file_form.file,
                editing: false,
                type: 'file'
            }
        } else if (type = 'enrollment') {
            var card = {
                enroll: $scope.enrollment_form.enroll,
                name: $scope.enrollment_form.name,
                copies: parseInt($scope.enrollment_form.copies),
                mobile: parseInt($scope.enrollment_form.mobile),
                pincode: parseInt($scope.enrollment_form.pincode),
                editing: false,
                type: 'enrollment'
            }
        }

        $.post('index.php/cart/addcart', card,
            function(data) {
            	$scope.cards = [];
            	console.log(data);
                var cards = JSON.parse(data);
                console.log(cards);
                for (var property in cards) {
                    if (cards.hasOwnProperty(property)) {
                        $scope.$apply(function() {
                        	var new_card = {};
                        	new_card = cards[property];
                        	if(new_card.type != 'file') {
                        		new_card.mobile = parseInt(cards[property].mobile);
                        	}
                        	new_card.pincode = parseInt(cards[property].pincode);
                        	new_card.qty = parseInt(cards[property].qty);
                        	new_card.editing = false;
                            $scope.cards.push(new_card);
                        });
                    }
                }
            });
    }

    $scope.update_card = function(index) {
    	$scope.cards[index].editing = false;
    	var card = $scope.cards[index];
    	console.log(card);
        $.post('index.php/cart/updatefromcart', card, function(data){
        	$scope.cards = [];
            	console.log(data);
                var cards = JSON.parse(data);
                console.log(cards);
                for (var property in cards) {
                    if (cards.hasOwnProperty(property)) {
                        $scope.$apply(function() {
                        	var new_card = {};
                        	new_card = cards[property];
                        	if(new_card.type != 'file') {
                        		new_card.mobile = parseInt(cards[property].mobile);
                        	}
                        	new_card.pincode = parseInt(cards[property].pincode);
                        	new_card.qty = parseInt(cards[property].qty);
                        	new_card.editing = false;
                            $scope.cards.push(new_card);
                        });
                    }
                }
        });
    }

    // the order button

    $scope.order = function() {
        $http.post('index.php/cart/cards', { cards: $scope.cards }).success(
            function(data) {
                $scope.response = data;
                console.log(data);
            })
    }

    $scope.empty = function() {
        $.post('index.php/cart/emptycart', function(){
        	$scope.$apply(function(){
        		$scope.cards = [];
        	});
        })
    }

});

// directive 

app.directive('fdInput', ['$timeout', function($timeout) {
    return {
        link: function(scope, element, attrs) {
            element.on('change', function(evt) {
                var files = evt.target.files;
                var ext = files[0].name.split('.').pop();
                if (ext != 'pdf') {
                    alert('Upload a Pdf');
                    angular.element('#file_pdf_input').val(null);
                }
            });
        }
    }
}]);


app.directive("limitTo", [function() {
    return {
        restrict: "A",
        link: function(scope, elem, attrs) {
            var limit = parseInt(attrs.limitTo);
            angular.element(elem).on("keydown", function() {
                if (this.value.length == limit) {
                    if (event.keyCode > 47 && event.keyCode < 127) {
                        if (this.value.length == limit) return false;
                    }
                }
            });
        }
    }
}]);
