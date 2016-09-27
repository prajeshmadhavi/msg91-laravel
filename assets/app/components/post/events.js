/**
 * Created by mac on 7/22/16.
 */
/**
 * Created by jide on 16/05/16.
 */


'use strict';

var app = angular.module('socialUniversity');
app.controller('eventController', function eventController($scope, $http) {


    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
        console.log(data);
    });

    $scope.postEvent = function () {

        var preview_image3 = '';
        var file = document.getElementById('preview_image3').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            var preview_image3 = e.target.result;

            //send you binary data via $http or $resource or do anything else with it

            var request = {

                'title': $scope.event_title,
                'preview_image': preview_image3,
                'privacy': $scope.privacy,
                'tags': $scope.tags,
                'event_days': $scope.event_days,
                'starts': $scope.starts,
                'ends': $scope.ending,
                'location': $scope.location


            };

            $http.post('/postEvent', request).success(function (data, status) {

                if(status == 200){

                    $('#modal-event').modal('hide');

                }

            });
        };
        fileReader.readAsDataURL(file);



    };


});
