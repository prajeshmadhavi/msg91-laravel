/**
 * Created by jide on 28/05/16.
 */


'use strict';

var app = angular.module('socialUniversity');
app.controller('postReportController', function postReportController($http, $scope){


    $http.get('/data/getSubjects').success(function (response, status) {
        $scope.subjects = response;
    });

    $scope.getSubjectStudent = function () {

        angular.forEach($scope.subjects, function (value, key) {
           if(value.id == $scope.subject)
           {
               $scope.subject_text = value.name
           }
        });

        $http.get('/data/getSubjectStudent/'+ $scope.subject).success(function(response, status){
           $scope.students = response;
        });

    };

});
