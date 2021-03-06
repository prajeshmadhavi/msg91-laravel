

var su = angular.module('socialUniversity');

su.factory("feed_channel", function($pusher) {

    // Enable pusher logging - don't include this in production
    //Pusher.logToConsole = true;
    var pusher = $pusher(client);
    return pusher.subscribe('feed-posted');
});

su.controller('projectController', function projectController($scope, $http, feed_channel, $uibModal) {


    $scope.Projects = [];

    /**
     * Newly Posted Questions Update
     */
    feed_channel.bind('project', function(data) {
        $scope.projects.unshift(data);
    });

    /**
     * Get Questions on Page Load
     */
    $http.get("/data/projects").success(function(data, status) {
        $scope.projects = data;
    });

    $scope.showProjectModal = function(project) {

        var modalInstance = $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'projectView.html',
            controller: 'projectViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: { project: project }
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

    $scope.readMore = function() {
        $('.readmore__button').click(function() {
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


