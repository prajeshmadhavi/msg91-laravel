/**
 * Created by jide on 16/05/16.
 */


'use strict';

var app = angular.module('socialUniversity');
app.controller('postAssignmentController', function postAssignmentController($scope, $http) {

    $scope.questions_count = [1];
    $scope.formData = {};


    $scope.add_question = function () {
        $scope.questions_count.push($scope.questions_count.length+1);
    };

    $scope.remove_question = function () {
        $scope.questions_count.pop();
    };

    $scope.postAssignment = function () {

        $scope.formData.due_date = '09/07/2016';
        $scope.formData.has_quiz = true;
        $scope.formData.question_count = $scope.questions_count.length;
        
        $http.post('postAssignment', $scope.formData).success(function (response, status) {
            console.log(response);
            $('#modal-assignment').modal('hide');
        
        });
    };
});


