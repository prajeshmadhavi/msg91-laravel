/**
 * Created by jide on 17/08/16.
 */


su.controller('noteSearchController', function noteSearchController($location, $scope, $http, $uibModal) {


    $scope.showNoteModal = function(id) {

        $http.get("/data/note/"+id).success(function(data, status) {
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

