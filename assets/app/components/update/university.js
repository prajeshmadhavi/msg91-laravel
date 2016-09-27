/**
 * Created by jide on 27/08/16.
 */



var app = angular.module('socialUniversity');

app.controller('universityUpdateController', function universityUpdateController($scope, $http, $location, $uibModal) {


    $scope.updates = [];
    $scope.events = [];
    $scope.news = [];
    $scope.library = [];

    var university = $location.search().university;

    $http.get('/data/updates/university', {params: {university: university}}).success(function (data, status) {
        $scope.updates = data;
        sortFeedData();
    });

    $scope.viewPost = function (data, id) {

        switch (data) {
            case 'note' :
                showNoteModal(id);
                break;
            case 'event' :
                showEventModal(id);
                break;
            case 'news' :
                showNewsModal(id);
                break;
        }
    };

    showNoteModal = function (note_id) {

        $http.get("/data/note/" + note_id).success(function (data, status) {
            if (data) {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'noteView.html',
                    controller: 'noteViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {note: data}
                });
            } else {
                swal('Error Fetching Note ');
            }
        }).error(function (msg, st) {
            swal('Error Fetching Note ');
        });


    };

    showEventModal = function (event) {
        $http.get("/data/event/" + event).success(function (data, status) {
            if (data) {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'eventView.html',
                    controller: 'eventViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {data: data}
                });
            } else {
                swal('Error Fetching Event ');
            }
        }).error(function (msg, st) {
            swal('Error Fetching Event ');
        });
    };

    showNewsModal = function (news_id) {
        $http.get("/data/new/" + news_id).success(function (data, status) {
            if (data) {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'newsView.html',
                    controller: 'newsViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {newses: data}
                });
            } else {
                swal('Error Fetching News ');
            }
        }).error(function (msg, st) {
            swal('Error Fetching News ');
        });
    };

    $scope.likePost = function (type, id) {

        $http.get('/like/' + type + '/' + id).success(function (resp, status) {

            switch (type) {
                case 'note' :
                    findAndReplaceFeedData($scope.library,type, id);
                    break;
                case 'event' :
                    findAndReplaceFeedData($scope.events,type, id);
                    break;
                case 'news' :
                    findAndReplaceFeedData($scope.news,type, id);
                    break;
            }


        });
    };

    function findAndReplaceFeedData(which, type, id) {

        var post = _.find(which, { 'type': type, 'id': id });

        // Find item index using indexOf+find
        var index = _.indexOf(which, post);
        $http.get("/data/"+ post.type + "/" + post.id).success(function (response, status) {
            which.splice(index, 1, response);
        });
    }

    function sortFeedData() {
        $scope.updates = _.orderBy($scope.updates, ['created_at'], ['desc']);
        angular.forEach($scope.updates, function (value, index) {
            if (value.type == 'news') {
                $scope.news.push(value);
            }
            if (value.type == 'event') {
                $scope.events.push(value);
            }
            if (value.type == 'note') {
                $scope.library.push(value);
            }
        });
        $scope.news = _.orderBy($scope.news, ['created_at'], ['desc']);
        $scope.events = _.orderBy($scope.events, ['created_at'], ['desc']);
        $scope.library = _.orderBy($scope.library, ['created_at'], ['desc']);
    }

    $scope.showLectureModal = function (id) {

        $http.get("/data/note/" + id).success(function (data, status) {
            if (data) {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'noteView.html',
                    controller: 'noteViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {note: data}
                });
            }

        });
    };

    $scope.loadLectureNotes = function (id) {

        $http.get('/data/lecture/' + id).success(function (response, status) {

            if (response.notes.length > 0) {
                console.log(response);
                $scope.notes = response.notes;
            }
        })


    }


});
