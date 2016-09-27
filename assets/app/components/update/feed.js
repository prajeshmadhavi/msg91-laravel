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

su.controller('feedTimeLineController', function feedTimeLineController($scope, $http, feed_channel, private_channel, $uibModal, $sce) {

    /**
     * Private Post Subscription
     */
    private_channel.bind('post', function (data) {
        $scope.posts.unshift(data);
        sortFeedData();
    });
    feed_channel.bind('post', function (data) {
        $scope.posts.unshift(data.post);
        sortFeedData();
    });

    $http.get("/data/posts").success(function (data, status) {
        $scope.posts = data;
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
            //var liked = resp[0].likeable;
            findAndReplaceFeedData(type, id);
        });
    };
    
    function findAndReplaceFeedData(type, id) {

        var post = _.find($scope.posts, { 'type': type, 'id': id });

        // Find item index using indexOf+find
        var index = _.indexOf($scope.posts, post);
            $http.get("/data/"+ post.type + "/" + post.id).success(function (response, status) {
                $scope.posts.splice(index, 1, response);
            });
    }
    
    function sortFeedData() {
        $scope.posts = _.orderBy($scope.posts, ['created_at'],['desc']);
    }

    // $scope.readMore = function () {
    //     $('.readmore__button').click(function () {
    //         $(this).prev('.text_description').toggleClass('feed_description-head', 2000);
    //         if ($(this).prev('.text_description').hasClass('feed_description-head')) {
    //             $(this).html('Read more<i class="zmdi zmdi-caret-down zmdi-hc-fw"></i>');
    //         } else {
    //             $(this).html('Less<i class="zmdi zmdi-caret-up zmdi-hc-fw"></i>');
    //         }
    //     });
    //     //
    //     // var showbutton = 396;
    //     // $('.text_description').each(function () {
    //     //     var content = $(this).html();
    //     //     if (content.length <= showbutton) {
    //     //         $(this).next('.readmore__button').hide();
    //     //         console.log("Executed");
    //     //     }
    //     //
    //     // });
    // }
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
        console.log($scope.commentData);
        if (event.which === 13) {

            $scope.commentData.topic = $scope.topic.id;
            $http.post('/postQuestionAnswer', $scope.commentData).success(function (resp, status) {
                $scope.answers.unshift(resp);
                $scope.commentData.body = '';
            });

        }
    };

    $scope.postCommentAnswer = function (event) {
        $scope.commentData.topic = $scope.topic.id;
        $http.post('/postQuestionAnswer', $scope.commentData).success(function (resp, status) {
            $scope.answers.unshift(resp);
            $scope.commentData.body = '';
        });
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

su.controller('newsViewController', function newsViewController($scope, $http, newses, $uibModalInstance, $sce) {

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

su.controller('eventViewController', function eventViewController($scope, $http, data, $uibModalInstance) {

    $scope.event = data;
    $scope.comments = _.orderBy(event.comments, ['id'], ['desc']);
    $scope.likes = event.likes;
    $scope.commentData = {};

    $scope.postComment = function (event) {
        $scope.commentData.type = 'event';
        $scope.commentData.id = $scope.event.id;

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