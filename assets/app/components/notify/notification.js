/**
 * Created by jide on 25/08/16.
 */

'use strict';

var app = angular.module('socialUniversity');

app.factory("notification_channel", function ($pusher) {
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = $pusher(client);
    return pusher.subscribe('notify_me_' + user);
});

app.controller('followUniversityController', function followUniversityController($scope, $http) {

    //var follow_type = $('#follow_type').val();
    var follow_id = $('#follow_id').val();

    $scope.follow_unfollow = function () {

        var follow_status = parseInt($('#follow_status').val());
        switch (follow_status) {
            case 0 :
                follow();
                break;
            case 1 :
                unfollow();
                break;
        }
    };

    function follow() {
        $http.get('/follow/university/' + follow_id).success(function (response, status) {
            if (response) {
                check();
            }
        });
    }

    function unfollow() {
        $http.get('/unfollow/university/' + follow_id).success(function (response, status) {
            if (status == 200) {
                uncheck();
            }
        });
    }

    angular.element(document).ready(function () {

        $http.get('/is_following/university/' + follow_id).success(function (response, status) {
            if (response.message == 1) {
                check();
            }
        });
    });

    function check() {

        // $('input.check_follow').prop('checked', 'checked');
        // $('label.button_lg').attr('title', 'Click to unfollow');

        $('#university_follow_button').css({'background-color': '#4A90E2', color: 'white', width: '55%'});
        $('#university_follow_button').html('Following');

        $('#follow_status').val(1);
        follow_count();
    }

    function uncheck() {
        //var $check = $('input.check_follow');

        // $check.closest('.follow_button-lgscr').css({'background-color': '#4A90E2'});
        // $check.siblings('#followingmessage').html('Follow');
        // $('label.button_lg').attr('title', 'Click to follow');

        $('#university_follow_button').css({'background-color': 'transparent', color: '#4A90E2', width: '45%'});
        $('#university_follow_button').html('Follow');

        $('#follow_status').val(0);
        follow_count();

    }

    function follow_count() {

        $http.get('/follow_count/' + follow_type + '/' + follow_id).success(function (response, status) {
            if (response > 1) {
                $scope.follow_counter = response + ' Followers';
            }
            if (response == 1) {
                $scope.follow_counter = response + ' Follower';
            }
            if (response == 0) {
                $scope.follow_counter = '';
            }

        });
    }

});

app.controller('followStudentProfileController', function followUniversityController($scope, $http) {


    var follow_id = $('#follow_id').val();

    $scope.follow_unfollow = function () {

        var follow_status = parseInt($('#follow_status').val());
        switch (follow_status) {
            case 0 :
                follow();
                break;
            case 1 :
                unfollow();
                break;
        }
    };

    function follow() {
        $http.get('/follow/student/' + follow_id).success(function (response, status) {
            if (response) {
                check();
            }
        });
    }

    function unfollow() {
        $http.get('/unfollow/student/' + follow_id).success(function (response, status) {
            if (status == 200) {
                uncheck();
            }
        });
    }

    angular.element(document).ready(function () {

        $http.get('/is_following/student/' + follow_id).success(function (response, status) {
            if (response.message == 1) {
                check();
            }
        });
    });

    function check() {

        // $('input.check_follow').prop('checked', 'checked');
        // $('label.button_lg').attr('title', 'Click to unfollow');

        $('#student_follow_button').css({'background-color': '#4A90E2', color: 'white', width: '55%'});
        $('#student_follow_button').html('Following');

        $('#follow_status').val(1);
        //follow_count();
    }

    function uncheck() {
        //var $check = $('input.check_follow');

        // $check.closest('.follow_button-lgscr').css({'background-color': '#4A90E2'});
        // $check.siblings('#followingmessage').html('Follow');
        // $('label.button_lg').attr('title', 'Click to follow');

        $('#student_follow_button').css({'background-color': 'transparent', color: '#4A90E2', width: '45%'});
        $('#student_follow_button').html('Follow');
        $('#follow_status').val(0);
        //follow_count();

    }

    function follow_count() {

        $http.get('/follow_count/' + follow_type + '/' + follow_id).success(function (response, status) {
            if (response > 1) {
                $scope.follow_counter = response + ' Followers';
            }
            if (response == 1) {
                $scope.follow_counter = response + ' Follower';
            }
            if (response == 0) {
                $scope.follow_counter = '';
            }

        });
    }

});

app.controller('followStudentController', function followStudentController($scope, $http) {

    //var follow_type = $('#follow_type').val();
    var follow_id = $('#follow_id').val();

    $scope.follow_unfollow = function (id) {

        var status = $('#is_following_' + id);

        var follow_status = parseInt(status.val());

        switch (follow_status) {
            case 0 :
                follow(id);
                break;
            case 1 :
                unfollow(id);
                break;
        }
    };

    function follow(id) {
        $http.get('/follow/student/' + id).success(function (response, status) {
            if (response) {
                check(id);
            }
        });
    }

    function unfollow(id) {
        $http.get('/unfollow/student/' + id).success(function (response, status) {
            if (status == 200) {
                uncheck(id);
            }
        });
    }

    // angular.element(document).ready(function () {
    //
    //     $http.get('/is_following/' + follow_type + '/' + follow_id).success(function (response, status) {
    //         if (response.message == 1) {
    //             check();
    //         }
    //     });
    // });

    function check(id) {

        // $('input.check_follow').prop('checked', 'checked');
        // $('label.button_lg').attr('title', 'Click to unfollow');

        var holder = '#student_' + id;
        $(holder).css({'background-color': '#4A90E2'});
        //$(holder).html('Following');

        $(holder + ' span').css({'color': 'white'});
        $(holder + ' span').text('Following');

        // $('#follow_status').val(1);
        // follow_count();
    }

    function uncheck(id) {
        //var $check = $('input.check_follow');

        // $check.closest('.follow_button-lgscr').css({'background-color': '#4A90E2'});
        // $check.siblings('#followingmessage').html('Follow');
        // $('label.button_lg').attr('title', 'Click to follow');

        // $('#university_follow_button').css({'background-color': 'white', color: '#4A90E2', width: '45%'});
        // $('#university_follow_button').html('Follow');

        var holder = '#student_' + id;
        $(holder).css({'background-color': 'white'});
        // $(holder).html('Following');

        $(holder + ' span').css({'color': '#7a7a7a'});
        $(holder + ' span').text('Follow');

        // $('#follow_status').val(0);
        // follow_count();

    }

    function follow_count() {

        $http.get('/follow_count/' + follow_type + '/' + follow_id).success(function (response, status) {
            if (response > 1) {
                $scope.follow_counter = response + ' Followers';
            }
            if (response == 1) {
                $scope.follow_counter = response + ' Follower';
            }
            if (response == 0) {
                $scope.follow_counter = '';
            }

        });
    }

});

app.controller('notificationController', function notificationController($scope, $http, notification_channel, $uibModal) {

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

app.controller('sideBarNotifyController', function sideBarNotifyController($scope, $http, $uibModal, notification_channel) {

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

            if (value.hasOwnProperty('is_viewed') && !value.is_viewed) {
                $scope.unread_report_count += 1;

                if (value.type == 'result' || value.type == 'attendance') {
                    $scope.reports.unshift(value);
                }

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
        else {

            $uibModal.open({
                templateUrl: 'assignmentUploadModal.html',
                controller: 'assignmentViewUploadController',
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

app.controller('assignmentViewController', function assignmentViewController($scope, $http, quiz, $uibModalInstance) {

    //console.log(quiz);
    $scope.quiz = quiz;

    $scope.ok = function () {
        $uibModalInstance.dismiss('cancel');
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };
});

app.controller('assignmentViewUploadController', function assignmentViewController($scope, $http, quiz, $uibModalInstance) {

    //console.log(quiz);
    $scope.quiz = quiz;

    $scope.ok = function () {
        $uibModalInstance.dismiss('cancel');
    };

    $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
    };
});