/**
 * Created by jide on 18/07/16.
 */

var su = angular.module('socialUniversity');


su.controller('lecturesController', function lecturesController($location, $scope, $http, $uibModal) {

    
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


    // $scope.likePost = function(type, id) {

    //     $http.get('/like/' + type + '/' + id).success(function(resp, status) {

    //         if (type === 'note') {
    //             angular.forEach($scope.notes, function(value, key) {

    //                 console.log(value);
    //                 if (value.id === id) {
    //                     console.log(value);
    //                     value.likes.push(resp);
    //                 }
    //             })
    //         }

    //     });
    // };
});


su.controller('subjectUpdateController', function subjectUpdateController($scope, $http, $uibModal) {

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

});
