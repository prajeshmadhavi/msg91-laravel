/**
 * Created by jide on 03/07/16.
 */


'use strict';

var app = angular.module('socialUniversity');
app.controller('postQuestionController', function postQuestionController($scope, $http) {

    $scope.qData = {};

    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
    });
    
    $scope.postQuestion = function () {

        $scope.post_status = true;
        $http.post('postQuestion', $scope.qData).success(function (response, status) {
            $('#modal-question').modal('hide');
            $scope.post_status = false;
            //console.log(response);

        });
    };
});


