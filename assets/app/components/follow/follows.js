/**
 * Created by jide on 08/06/16.
 */

'use strict';

var app = angular.module('socialUniversity');

app.controller('followUniversityController', function followUniversityController($scope, $http) {
    
    //var follow_type = $('#follow_type').val();
    var follow_id = $('#follow_id').val();

    $scope.follow_unfollow = function () {

        var follow_status = parseInt($('#follow_status').val());
        switch (follow_status) {
            case 0 :
                follow();
                break;
            case 1 :
                unfollow();
                break;
        }
    };

    function follow() {
        $http.get('/follow/university/' + follow_id).success(function (response, status) {
            if (response) {
                check();
            }
        });
    }
    
    function unfollow() {
        $http.get('/unfollow/university/' + follow_id).success(function (response, status) {
            if (status == 200) {
                uncheck();
            }
        });
    }
    
    angular.element(document).ready(function () {

        $http.get('/is_following/university/' + follow_id).success(function (response, status) {
            if (response.message == 1) {
                check();
            }
        });
    });

    function check() {

        // $('input.check_follow').prop('checked', 'checked');
        // $('label.button_lg').attr('title', 'Click to unfollow');

        $('#university_follow_button').css({'background-color': '#4A90E2', color: 'white', width: '55%'});
        $('#university_follow_button').html('Following');

        $('#follow_status').val(1);
        follow_count();
    }

    function uncheck() {
        //var $check = $('input.check_follow');

        // $check.closest('.follow_button-lgscr').css({'background-color': '#4A90E2'});
        // $check.siblings('#followingmessage').html('Follow');
        // $('label.button_lg').attr('title', 'Click to follow');

        $('#university_follow_button').css({'background-color': 'transparent', color: '#4A90E2', width: '45%'});
        $('#university_follow_button').html('Follow');

        $('#follow_status').val(0);
        follow_count();

    }

    function follow_count() {

        $http.get('/follow_count/' + follow_type + '/' + follow_id).success(function (response, status) {
            if (response > 1) {
                $scope.follow_counter = response + ' Followers';
            }
            if (response == 1) {
                $scope.follow_counter = response + ' Follower';
            }
            if (response == 0) {
                $scope.follow_counter = '';
            }

        });
    }

});

app.controller('followStudentProfileController', function followUniversityController($scope, $http) {


    var follow_id = $('#follow_id').val();

    $scope.follow_unfollow = function () {

        var follow_status = parseInt($('#follow_status').val());
        switch (follow_status) {
            case 0 :
                follow();
                break;
            case 1 :
                unfollow();
                break;
        }
    };

    function follow() {
        $http.get('/follow/student/' + follow_id).success(function (response, status) {
            if (response) {
                check();
            }
        });
    }

    function unfollow() {
        $http.get('/unfollow/student/' + follow_id).success(function (response, status) {
            if (status == 200) {
                uncheck();
            }
        });
    }

    angular.element(document).ready(function () {

        $http.get('/is_following/student/' + follow_id).success(function (response, status) {
            if (response.message == 1) {
                check();
            }
        });
    });

    function check() {

        // $('input.check_follow').prop('checked', 'checked');
        // $('label.button_lg').attr('title', 'Click to unfollow');

        $('#student_follow_button').css({'background-color': '#4A90E2', color: 'white', width: '55%'});
        $('#student_follow_button').html('Following');

        $('#follow_status').val(1);
        //follow_count();
    }

    function uncheck() {
        //var $check = $('input.check_follow');

        // $check.closest('.follow_button-lgscr').css({'background-color': '#4A90E2'});
        // $check.siblings('#followingmessage').html('Follow');
        // $('label.button_lg').attr('title', 'Click to follow');

        $('#student_follow_button').css({'background-color': 'transparent', color: '#4A90E2', width: '45%'});
        $('#student_follow_button').html('Follow');
        $('#follow_status').val(0);
        //follow_count();

    }

    function follow_count() {

        $http.get('/follow_count/' + follow_type + '/' + follow_id).success(function (response, status) {
            if (response > 1) {
                $scope.follow_counter = response + ' Followers';
            }
            if (response == 1) {
                $scope.follow_counter = response + ' Follower';
            }
            if (response == 0) {
                $scope.follow_counter = '';
            }

        });
    }

});

app.controller('followStudentController', function followStudentController($scope, $http) {

    //var follow_type = $('#follow_type').val();
    var follow_id = $('#follow_id').val();

    $scope.follow_unfollow = function (id) {

        var status =  $('#is_following_'+id);

        var follow_status = parseInt(status.val());

        switch (follow_status) {
            case 0 :
                follow(id);
                break;
            case 1 :
                unfollow(id);
                break;
        }
    };

    function follow(id) {
        $http.get('/follow/student/' + id).success(function (response, status) {
            if (response) {
                check(id);
            }
        });
    }

    function unfollow(id) {
        $http.get('/unfollow/student/' + id).success(function (response, status) {
            if (status == 200) {
                uncheck(id);
            }
        });
    }

    // angular.element(document).ready(function () {
    //
    //     $http.get('/is_following/' + follow_type + '/' + follow_id).success(function (response, status) {
    //         if (response.message == 1) {
    //             check();
    //         }
    //     });
    // });

    function check(id) {

        // $('input.check_follow').prop('checked', 'checked');
        // $('label.button_lg').attr('title', 'Click to unfollow');

        var holder = '#student_'+id;
        $(holder).css({'background-color': '#4A90E2'});
        //$(holder).html('Following');

        $(holder+' span').css({'color': 'white'});
        $(holder+' span').text('Following');

        // $('#follow_status').val(1);
        // follow_count();
    }

    function uncheck(id)
    {
        //var $check = $('input.check_follow');

        // $check.closest('.follow_button-lgscr').css({'background-color': '#4A90E2'});
        // $check.siblings('#followingmessage').html('Follow');
        // $('label.button_lg').attr('title', 'Click to follow');

        // $('#university_follow_button').css({'background-color': 'white', color: '#4A90E2', width: '45%'});
        // $('#university_follow_button').html('Follow');

        var holder = '#student_'+id;
        $(holder).css({'background-color': 'white'});
       // $(holder).html('Following');

        $(holder+' span').css({'color': '#7a7a7a'});
        $(holder+' span').text('Follow');

        // $('#follow_status').val(0);
        // follow_count();

    }

    function follow_count()
    {

        $http.get('/follow_count/' + follow_type + '/' + follow_id).success(function (response, status) {
            if (response > 1) {
                $scope.follow_counter = response + ' Followers';
            }
            if (response == 1) {
                $scope.follow_counter = response + ' Follower';
            }
            if (response == 0) {
                $scope.follow_counter = '';
            }

        });
    }

});


