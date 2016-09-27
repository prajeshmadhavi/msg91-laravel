/**
 * Created by jide on 13/08/16.
 */


var su = angular.module('socialUniversity');


su.controller('subjectLectureController', function subjectLectureController($scope, $http) {


    $scope.showLectureModal = function(id) {

        $http.get("/data/notes/"+id).success(function(data, status) {
            $scope.notes = data;

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
