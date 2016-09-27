/**
 * Created by jide on 24/05/16.
 */


'use strict';

var su = angular.module('socialUniversity');

su.factory("notification_channel", function ($pusher) {
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = $pusher(client);
    return pusher.subscribe('notify_me_' + user);
});

su.controller('notificationController', function notificationController($scope, $http, notification_channel, $uibModal) {

    $scope.notifications = [];
    $scope.messages = [];

    notification_channel.bind('notification', function (data) {
        sortNotification(data);
    });

    $http.get('/data/notifications').success(function (response, status) {
        sortNotification(response.data);
    });

    function sortNotification(data) {

        angular.forEach(data, function (value, key) {

            switch (value.type) {
                case 'follow':
                    notifyFollow(value);
                    break;
                case 'like':
                    notifyLike(value);
                    break;
                case 'comment':
                    notifyComment(value);
                    break;
                case 'answer':
                    notifyAnswer(value);
                    break;
            }
        });

    }

    function notifyFollow(data) {

        $scope.notifications.unshift({

            'id': data.id,
            'type': data.type,
            'title': data.notification.follower.name,
            'description': 'started following you',
            'picture': data.notification.follower.avatar,
            'url': '/student/profile/' + data.notification.follower.id,
            'time': data.created_at
        });

        //clearNotification();
    }

    function notifyComment(data) {

        $scope.notifications.unshift({

            'id': data.id,
            'type': data.notification.commentable.type,
            'type_id': data.notification.commentable.id,
            'title': data.notification.poster.name,
            'description': 'commented on your ' + data.notification.commentable.type,
            'picture': data.notification.poster.avatar,
            'url': '#',
            'time': data.created_at
        });
    }

    function notifyLike(data) {

        $scope.notifications.unshift({

            'id': data.id,
            'type': data.notification.likeable.type,
            'type_id': data.notification.likeable.id,
            'title': data.notification.liker.name,
            'description': 'liked your ' + data.notification.likeable.type,
            'picture': data.notification.liker.avatar,
            'url': '#',
            'time': data.created_at
        });
    }

    function notifyAnswer(data) {

        $scope.notifications.unshift({

            'id': data.id,
            'type': data.type,
            'type_id': data.notification.topic_id,
            'title': data.notification.answerer.name,
            'description': 'posted an answer to your question',
            'picture': data.notification.answerer.avatar,
            'url': '#',
            'time': data.created_at
        });
    }

    function notifyEvent(data) {

    }

    function clearNotification() {

        var x = $(this).closest('.listview');
        var y = x.find('.lv-item');
        var z = y.size();

        var $butt = $('[data-clear="notification"]');

        $butt.parent().fadeOut();

        x.find('.list-group').prepend('<i class="grid-loading hide-it"></i>');
        x.find('.grid-loading').fadeIn(1500);


        var w = 0;
        y.each(function () {
            var z = $(this);
            setTimeout(function () {
                z.addClass('animated fadeOutRightBig').delay(1000).queue(function () {
                    z.remove();
                });
            }, w += 150);
        });


    }

    function reduceCount(notification) {
        $scope.notifications.splice($scope.notifications.indexOf(notification), 1);
    }

    $scope.markAsRead = function (notification) {

        switch (notification.type) {
            case 'note':
                loadNoteModal(notification.type_id);
                break;
            case 'answer':
                loadTopicModal(notification.type_id);
                break;
        }

        $http.get('/data/notifications/markAsRead/' + notification.id).success(function (response, status) {
            reduceCount(notification);
        });

    };

    function loadNoteModal(id) {

        $http.get("/data/note/" + id).success(function (data, status) {
            $scope.notes = data;

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
    }

    function loadTopicModal(id) {

        $http.get("/data/topics/" + id).success(function (data, status) {
            $scope.topic = data;

            if (data) {

                $uibModal.open({
                    animation: $scope.animationsEnabled,
                    templateUrl: 'topicView.html',
                    controller: 'topicViewController',
                    backdrop: "static",
                    windowClass: 'pdf',
                    resolve: {topic: $scope.topic}
                });
            }

        });

    }

});

su.controller('sideBarNotifyController', function sideBarNotifyController($scope, $http, $uibModal, notification_channel) {

    $scope.unread_assignment_count = 0;
    $scope.unread_report_count = 0;
    $scope.unread_event_count = 0;
    $scope.assignments = [];
    $scope.reports = [];
    $scope.events = [];

    notification_channel.bind('report-posted', function (data) {
        $scope.reports.unshift(
            data.hasOwnProperty('attendance') ? data.attendance : data.result
        );
        $scope.unread_report_count += 1;
    });

    notification_channel.bind('assignment-posted', function (data) {
        handleAssignmentNotification(data.assignment);
    });

    $http.get('/data/notifications/academic').success(function (response, status) {
        handleReportNotification(response);
    });

    function handleReportNotification(data) {

        angular.forEach(data, function (value, key) {
            $scope.reports.unshift(value);
            if (value.hasOwnProperty('is_viewed') && !value.is_viewed) {
                $scope.unread_report_count += 1;
            }
            if (value.type == 'assignment') {
                handleAssignmentNotification(value);
            }

        });
    }

    function handleAssignmentNotification(data) {
        $scope.assignments.unshift(data);
        $scope.unread_assignment_count += 1;
    }

    $scope.attemptAssignment = function (index) {

        if (index.has_quiz === true) {
            $uibModal.open({
                templateUrl: 'assignmentModal.html',
                controller: 'assignmentViewController',
                resolve: {
                    quiz: function () {
                        return index;
                    }
                }
            });
        }
    };

    $scope.markAsRead = function (notification) {

        switch (notification.type) {
            case 'note':
                loadNoteModal(notification.type_id);
                break;
            case 'answer':
                loadTopicModal(notification.type_id);
                break;
        }

        $http.get('/data/notifications/markAsRead/' + notification.id).success(function (response, status) {
            reduceCount(notification);
        });

    };
});

su.controller('assignmentViewController', function assignmentViewController($scope, $http, quiz, $uibModalInstance) {

    //console.log(quiz);
    $scope.quiz = quiz;

    $scope.ok = function () {
        $uibModalInstance.dismiss('cancel');
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };
});