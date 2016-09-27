/**
 * Created by jide on 16/05/16.
 */


'use strict';

var app = angular.module('socialUniversity');
app.controller('postNoteController', function postNoteController($scope, $http) {

    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
    });

    $http.get("/data/getSubjects").success(function (data, status) {
        $scope.subjects = data;
    });

    $scope.getSubjectLecture = function () {
        var subject = $scope.subject;
        $http.get('/data/lectures/' + subject).success(function (response, status) {
            $scope.lectures = response;
        })
    };

    $scope.fileNameChanged = function () {

        var file = document.getElementById('preview_image').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            //send you binary data via $http or $resource or do anything else with it
            $scope.preview_image = e.target.result;
            //console.log(e.target.result);
        };
        try {
            fileReader.readAsDataURL(file);
        } catch (r) {
        }
    };

    $scope.post_note = function () {

        $scope.post_status = true;
        //Check if the file hasn't been removed.
        var file = document.getElementById('preview_image').files[0];
        var request = {

            'title': $scope.note_title,
            'privacy': $scope.privacy,
            'subject_id': $scope.subject,
            'lecture_id': $scope.lecture,
            'department_id': $scope.department_id,
            'files': localStorage.getItem('tmp_files'),
            'tags': $scope.tags
        };
        if (file) {request.preview_image = $scope.preview_image;}

        $http.post('/postNote', request).success(function (data, status) {

            if (status == 200) {
                $scope.post_status = false;
                localStorage.removeItem('tmp_files');
                $('#modal-note').modal('hide');
                //$('#note_form').trigger("reset");
                //$('#note_file_form').trigger("reset");
            }

        });


    };


});