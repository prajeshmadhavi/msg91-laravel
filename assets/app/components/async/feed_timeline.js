/**
 * Created by jide on 15/06/16.
 */

var su = angular.module('socialUniversity');

su.factory("feed_channel", function ($pusher) {

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = $pusher(client);
    return pusher.subscribe('feed-posted');
});

su.factory("private_channel", function ($pusher) {

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = $pusher(client);
    return pusher.subscribe('only_me_' + user);
});

su.factory("university_channel", function ($pusher) {

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = $pusher(client);
    return pusher.subscribe('only_me_' + user);
});



su.controller('feedTimeLineController', function feedTimeLineController($scope, $http, feed_channel, private_channel, $uibModal, $sce) {

    $scope.projects = [];
    $scope.notes = [];
    $scope.topics = [];
    $scope.news = [];
    $scope.events = [];

    /**
     * Private Post Subscription
     */
    private_channel.bind('note', function (data) {
        $scope.notes.unshift(data);
    });

    private_channel.bind('topic', function (data) {
        $scope.topics.unshift(data);
    });


    private_channel.bind('project', function (data) {
        $scope.projects.unshift(data);
    });

    private_channel.bind('event', function (data) {
        $scope.events.unshift(data);
    });


    /**
     * Newly Posted Notes Update
     */
    feed_channel.bind('note', function (data) {
        $scope.notes.unshift(data);
    });

    /**
     * Newly Posted Questions Update
     */
    feed_channel.bind('topic', function (data) {
        $scope.topics.unshift(data);
    });


    /**
     * Newly Posted Events Update
     */
    feed_channel.bind('event', function (data) {
        $scope.events.unshift(data);
    });


    /**
     * Newly Posted Project Update
     */
    feed_channel.bind('project', function (data) {

        $scope.projects.unshift(data);

    });


    /**
     * Newly Posted News Update
     */
    feed_channel.bind('news', function (data) {
        $scope.news.unshift(data);
    });

    /**
     * Get Notes on Page Load
     */
    $http.get("/data/notes").success(function (data, status) {
        $scope.notes = data;
    });


    /**
     * Get Questions on Page Load
     */
    $http.get("/data/topics").success(function (data, status) {
        $scope.topics = data;
    });


    /**
     * Get Project on Page Load
     */
    $http.get("/data/projects").success(function (data, status) {
        $scope.projects = data;
    });


    /**
     * Get Project on Page Load
     */
    $http.get("/data/news").success(function (data, status) {
        $scope.news = data;
    });


    /**
     * Get Project on Page Load
     */
    $http.get("/data/events").success(function (data, status) {
        $scope.events = data;
    });


    $scope.showNoteModal = function (note) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'noteView.html',
            controller: 'noteViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: {note: note}
        });
    };

    $scope.showTopicModal = function (topic) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'topicView.html',
            controller: 'topicViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: {topic: topic}
        });
    };


    $scope.showProjectModal = function (project) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'projectView.html',
            controller: 'projectViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: {project: project}
        });
    };


    $scope.showEventModal = function (event) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'eventView.html',
            controller: 'eventViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: {event: event}
        });
    };


    $scope.showNewsModal = function (newses) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'newsView.html',
            controller: 'newsViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: {newses: newses}
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

    $scope.readMore = function () {
        $('.readmore__button').click(function () {
            $(this).prev('.text_description').toggleClass('feed_description-head', 2000);
            if ($(this).prev('.text_description').hasClass('feed_description-head')) {
                $(this).html('Read more<i class="zmdi zmdi-caret-down zmdi-hc-fw"></i>');
            } else {
                $(this).html('Less<i class="zmdi zmdi-caret-up zmdi-hc-fw"></i>');
            }
        });

        //
        // var showbutton = 396;
        // $('.text_description').each(function () {
        //     var content = $(this).html();
        //     if (content.length <= showbutton) {
        //         $(this).next('.readmore__button').hide();
        //         console.log("Executed");
        //     }
        //
        // });
    }
});

su.controller('noteViewController', function noteViewController($scope, $http, note, $uibModalInstance) {

    $scope.note = note;
    $scope.comments = _.orderBy(note.comments, ['id'], ['desc']);
    $scope.likes = note.likes;
    $scope.commentData = {};

    $scope.postComment = function (event) {
        $scope.commentData.type = 'note';
        $scope.commentData.id = note.id;

        if (event.which === 13) {
            $http.post('/comment', $scope.commentData).success(function (resp, status) {
                $scope.comments.unshift(resp);
                $scope.commentData.body = '';
            });
        }
    };

    $scope.likePost = function (id) {
        $http.get('/like/note/' + id).success(function (resp, status) {
            $scope.note.likes = resp;
            $scope.likes = resp;
        });
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };

});

su.controller('topicViewController', function topicViewController($scope, $http, topic, $uibModalInstance) {
    $scope.topic = topic;
    $scope.answers = _.orderBy(topic.answers, ['id'], ['desc']);
    $scope.likes = topic.likes;
    angular.forEach(topic.answers, function (value, key) {
        if (value.is_best_answer) {
            $scope.best_answer = value;
        }
    });

    $scope.commentData = {};
    $scope.can_best_ans = topic.poster_id === parseInt(su_member);

    $scope.postAnswer = function (event) {

        if (event.which === 13) {

            $scope.commentData.topic = $scope.topic.id;
            $http.post('/postQuestionAnswer', $scope.commentData).success(function (resp, status) {
                $scope.answers.unshift(resp);
                $scope.commentData.body = '';
            });

        }
    };

    $scope.bestAnswer = function (answer_id) {
        var topic_id = $scope.topic.id;
        $http.get('/markCorrectAnswer/' + answer_id + '/' + topic_id).success(function (resp, status) {
            $scope.best_answer = resp;
        });
    };

    $scope.likePost = function (id) {
        $http.get('/like/topic/' + id).success(function (resp, status) {
            $scope.topic.likes = resp;
            $scope.likes = resp;
        });
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };
});

su.controller('projectViewController', function projectViewController($scope, $http, project, $uibModalInstance, $sce) {

    $scope.project = project;
    $scope.project.description = $sce.trustAsHtml(project.description);
    $scope.comments = _.orderBy(project.comments, ['id'], ['desc']);
    $scope.likes = project.likes;
    $scope.commentData = {};

    $scope.postComment = function (event) {
        $scope.commentData.type = 'project';
        $scope.commentData.id = project.id;

        if (event.which === 13) {
            $http.post('/comment', $scope.commentData).success(function (resp, status) {
                $scope.comments.unshift(resp);
                $scope.commentData.body = '';
            });
        }
    };

    $scope.likePost = function (id) {
        $http.get('/like/project/' + id).success(function (resp, status) {
            $scope.project.likes = resp;
            $scope.likes = resp;
        });
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };

});

su.controller('newsViewController', function newsViewController($scope, $http, newses, $uibModalInstance,$sce) {

    $scope.newses = newses;
    $scope.newses.description = $sce.trustAsHtml(newses.description);
    $scope.comments = _.orderBy(newses.comments, ['id'], ['desc']);
    $scope.likes = newses.likes;
    $scope.commentData = {};

    $scope.postComment = function (event) {
        $scope.commentData.type = 'newses';
        $scope.commentData.id = news.id;

        if (event.which === 13) {
            $http.post('/comment', $scope.commentData).success(function (resp, status) {
                $scope.comments.unshift(resp);
                $scope.commentData.body = '';
            });
        }
    };

    $scope.likePost = function (id) {
        $http.get('/like/news/' + id).success(function (resp, status) {
            $scope.newses.likes = resp;
            $scope.likes = resp;
        });
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };

});

su.controller('eventViewController', function eventViewController($scope, $http, event, $uibModalInstance) {

    $scope.event = event;
    $scope.comments = _.orderBy(event.comments, ['id'], ['desc']);
    $scope.likes = event.likes;
    $scope.commentData = {};

    $scope.postComment = function (event) {
        $scope.commentData.type = 'event';
        $scope.commentData.id = event.id;

        if (event.which === 13) {
            $http.post('/comment', $scope.commentData).success(function (resp, status) {
                $scope.comments.unshift(resp);
                $scope.commentData.body = '';
            });
        }
    };

    $scope.likePost = function (id) {
        $http.get('/like/event/' + id).success(function (resp, status) {
            $scope.event.likes = resp;
            $scope.likes = resp;
        });
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };

});