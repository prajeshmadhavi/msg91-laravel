
'use strict';


var app = angular.module('socialUniversity');
app.controller('courseController', function courseController($scope, $http){


    $scope.enroll = function(id)
    {
        var enrolled_status = parseInt($('#enrolled_status').val());

		$http.get('/course/enroll/'+id).success(function(response, status){
            check(id);
		}).error(function(error, status){
            swal("Contact Admin to Optout of this course");
		});
	};

    function check(id)
    {
        //$('input.check_enroll').prop('checked', 'checked');
        //$('label.button_lg').attr('title', 'Click to unfollow');
        //$('.enroll_'+id+'').prop({'disabled': true});
        $('.enroll_'+id+'').css({'background-color': ' #7ED321'}).prop({"readOnly": true});
        $('#enroll_message_'+id+'').html('Enrolled');
        console.log(id);
    }


});

