/**
 * Created by jide on 24/05/16.
 */


'use strict';

var app = angular.module('socialUniversity');
app.controller('homeController', function homeController($scope, $http) {


    $scope.showRegisterModal = function( id ){

        $scope.formData = $scope.universities[(id-1)];
        $scope.reg_uni_modal = false;
        $scope.uni_modal_table =  true;
    };


    $scope.showSubject = function(){
        var department = $scope.department_id;
        $http.get('/data/getDepartmentSubjects/'+ department).success(function(response, status){
            $scope.subject = response;
        });
    }


});