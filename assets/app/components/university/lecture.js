/**
 * Created by jide on 25/06/16.
 */


'use strict';

var app = angular.module('socialUniversity');

app.controller('lectureController', function lectureController($http, $scope) {

    $scope.show_video_frame = true;

    $scope.loadFrame = function () {

        // http://(?:www\.)?youtu(?:be\.com/watch\?v=|\.be/)([\w\-]+)(&(amp;)?[\w\?=]*)?

        var link = matchYoutubeUrl($scope.video_url);

        if (link !== false) {
            // $scope.show_video_frame = false;

            //alert(encodeURI("https://www.youtube.com/watch?v="+link));
            //$scope.frame = '<iframe  width="560" height="315" src="https://www.youtube.com/embed/'+ link +'" frameborder="0"></iframe>';

            //iframe.style.visibility="hidden";
            // iframe.src = "https://www.youtube.com/embed/"+link;

            $scope.error_url = '';

        } else {
            $scope.error_url = "Invalid Youtube URL";
            //$scope.show_video_frame = true;
        }

    };

    function matchYoutubeUrl(url) {
        var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
        var matches = url.match(p);
        if (matches) {
            return matches[1];
        }
        return false;
    }

});

app.controller('courseLectureViewController', function courseLectureViewController($timeout, $http, $scope, $location) {

    var course_id = $location.search().course;

    $http.get('/data/courses_details/' + course_id).success(function (resp, status) {

        $scope.course = resp;

        if(resp && resp.lectures)
        {
            $scope.default_lecture = resp.lectures[0];
            $scope.video_id = resp.lectures[0].video_url;
        }
    });

    $scope.playCourseVideo = function (lecture) {

        $scope.video_id = lecture.video_url;
        $scope.default_lecture = lecture;
    };


});

