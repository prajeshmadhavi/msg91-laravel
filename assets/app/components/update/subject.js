/**
 * Created by jide on 13/08/16.
 */


var app = angular.module('socialUniversity');

app.controller('subjectUpdateController', function subjectUpdateController($scope, $http, $location, $uibModal) {


    $scope.updates = [];

    var subject = $location.search().subject;

    $http.get('/data/updates/subject', {params: {subject: subject}}).success(function (data, status) {
        $scope.updates = data;
    });

    $scope.showLectureModal = function(id) {

        $http.get("/data/note/"+id).success(function(data, status) {
            if(data)
            {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'noteView.html',
                    controller: 'noteViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: { note: data }
                });
            }

        });
    };

    $scope.loadLectureNotes = function (id) {

        $http.get('/data/lecture/'+id).success(function (response, status) {

            if(response.notes.length > 0)
            {
                console.log(response);
                $scope.notes = response.notes;
            }
        })


    }


});
