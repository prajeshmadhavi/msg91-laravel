/**
 * Created by jide on 26/04/16.
 */
'use strict';

angular.module('socialUniversity', ['ui.bootstrap']);

var app = angular.module('socialUniversity');
app.controller('AuthController', function AuthController($scope, $http) {


    $scope.studentLogin = function () {

        var request = {
            phone: $scope.phone,
            password: $scope.password
        };

        $scope.data = {};

        $http.post('/login', request).success(function (data, status) {

            if (status == 200) {
                window.location = '/';
            }

        }).error(function (error, status) {

            $scope.error_student = error;
        });
    }

    $scope.facultyLogin = function () {

        var request = {
            email: $scope.email,
            password: $scope.password
        };

        $scope.data = {};

        $http.post('/faculty/login', request).success(function (data, status) {

            if (status == 200) {
                window.location = '/';
            }

        }).error(function (error, status) {
            $scope.error_faculty = error;
        });
    }

    $scope.universityLogin = function () {

        var request = {
            email: $scope.college.email,
            password: $scope.college.password
        };
        $scope.data = {};

        $http.post('/university/login', request).success(function (data, status, header) {

            if (status == 200) {
                window.location = '/';
            }

        }).error(function (error, status, header) {

            $scope.error_college = error;
        });

    }


});

app.controller('registerUniversityController', function registerUniversityController($scope, $http) {

    $scope.registerUniversity = function () {

        var departments = $('#multiselect_to').val();

        var request = {
            name: $scope.name,
            email: $scope.email,
            phone: $scope.phone,
            address: $scope.address,
            alternate_phone: $scope.alternate_phone,
            additional_comment: $scope.additional_comment,
            departments: departments

        };
        $scope.data = {};

        $http.post('university/registerUniversity', request).success(function (data, status) {

            if (status == 200) {
                $('#register_university_form').trigger("reset");
                $('#registerModal').modal('toggle');
                swal(data);
            }
        });
    }

});

app.controller('loginOTPCntrl', function loginOTPCntrl($scope, $http, $uibModal) {

    $scope.loginWithOTP = function () {

        $http.post('/optlogin', {phone: $scope.phone}).success(function (response, status) {

            $scope.otp_error = [];
            $('#otpmodal').modal('hide');
            $uibModal.open({
                animation: $scope.animationsEnabled,
                templateUrl: 'verifyOTP.html',
                controller: 'verifyOTPCntrl',
                backdrop: "static"
                //windowClass: 'pdf'
            });

            // setTimeout(function () {
            //     $http.get('/nullifyOTP/'+$scope.phone)

            // }, 10000)


        }).error(function (error, response, status) {
            $scope.otp_error = error;
        });
    }

});

app.controller('verifyOTPCntrl', function verifyOTPCntrl($scope, $http, $uibModalInstance) {


    $scope.formData = {};

    $scope.verifyOTP = function () {

        $http.post('/verifyOTP', {otp_code: $scope.formData.otp_code}).success(function (response, status) {

            $scope.otp_error = [];
            if (status == 200) {
                $uibModalInstance.dismiss('cancel');
                window.location = '/';
            }

        }).error(function (error, response, status) {
            $scope.otp_error = error;
        });
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };

});