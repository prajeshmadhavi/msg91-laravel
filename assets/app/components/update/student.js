/**
 * Created by jide on 27/08/16.
 */


/**
 * Created by jide on 27/08/16.
 */



var app = angular.module('socialUniversity');

app.controller('studentUpdateController', function studentUpdateController($scope, $http, $location, $uibModal) {


    $scope.updates = [];
    $scope.files = [];
    $scope.topics = [];
    $scope.projects = [];

    var student = $location.search().student;

    $http.get('/data/updates/student', {params: {student: student}}).success(function (data, status) {
        $scope.updates = data;
        sortFeedData();
    });

    $scope.viewPost = function (data, id) {

        switch (data) {
            case 'note' :
                showNoteModal(id);
                break;
            case 'topic' :
                showTopicModal(id);
                break;
            case 'project' :
                showProjectModal(id);
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

    showTopicModal = function (topic) {

        $http.get("/data/topic/" + topic).success(function (data, status) {
            if (data) {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'topicView.html',
                    controller: 'topicViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {topic: data}
                });
            } else {
                swal('Error Fetching Topic ');
            }
        }).error(function (msg, st) {
            swal('Error Fetching Topic ');
        });
    };

    showProjectModal = function (project) {

        $http.get("/data/project/" + project).success(function (data, status) {
            if (data) {
                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'projectView.html',
                    controller: 'projectViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {project: data}
                });
            } else {
                swal('Error Fetching Project ');
            }
        }).error(function (msg, st) {
            swal('Error Fetching Project ');
        });
    };

    $scope.likePost = function (type, id) {

        $http.get('/like/' + type + '/' + id).success(function (resp, status) {
            findAndReplaceFeedData(type, id);
        });
    };

    function findAndReplaceFeedData(type, id) {

        console.log("Reached !");
        switch (type) {
            case 'note' :

                console.log("Executed !");
                var post = _.find($scope.files, {'type': type, 'id': id});

                // Find item index using indexOf+find
                var index = _.indexOf($scope.files, post);
                $http.get("/data/" + post.type + "/" + post.id).success(function (response, status) {
                    $scope.files.splice(index, 1, response);
                });

                break;
            case 'topic' :

                post = _.find($scope.topics, {'type': type, 'id': id});

                // Find item index using indexOf+find
                index = _.indexOf($scope.topics, post);
                $http.get("/data/" + post.type + "/" + post.id).success(function (response, status) {
                    $scope.topics.splice(index, 1, response);
                });

                break;
            case 'project' :
                findAndReplaceFeedData($scope.news, type, id);

                post = _.find($scope.projects, {'type': type, 'id': id});

                // Find item index using indexOf+find
                index = _.indexOf($scope.projects, post);
                $http.get("/data/" + post.type + "/" + post.id).success(function (response, status) {
                    $scope.projects.splice(index, 1, response);
                });
                break;
        }

    }

    function sortFeedData() {
        $scope.updates = _.orderBy($scope.updates, ['created_at'], ['desc']);
        angular.forEach($scope.updates, function (value, index) {
            if (value.type == 'topic') {
                $scope.topics.push(value);
            }
            if (value.type == 'note') {
                $scope.files.push(value);
            }
            if (value.type == 'project') {
                $scope.projects.push(value);
            }
        });
        $scope.files = _.orderBy($scope.files, ['created_at'], ['desc']);
        $scope.topics = _.orderBy($scope.topics, ['created_at'], ['desc']);
        $scope.projects = _.orderBy($scope.projects, ['created_at'], ['desc']);
    }


});
