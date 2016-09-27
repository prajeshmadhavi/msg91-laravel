/**
 * Created by jide on 15/08/16.
 */


var app = angular.module('socialUniversity');

app.controller('topicFeedController', function topicFeedController($scope, $http, $uibModal) {


    $scope.topics = [];
    /**
     * Get Questions on Page Load
     */
    $http.get("/data/topics").success(function(data, status) {
        $scope.topics = data;
        console.log(data);
    });


    $scope.showTopicModal = function(topic) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'topicView.html',
            controller: 'topicViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: { topic: topic }
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


app.controller('myTopicFeedController', function myTopicFeedController($scope, $http, $uibModal) {


    $scope.topics = [];
    /**
     * Get Questions on Page Load
     */
    $http.get("/data/mytopics").success(function(data, status) {
        $scope.topics = data;
        console.log(data);
    });


    $scope.showTopicModal = function(topic) {

        $uibModal.open({
            animation: $scope.animationsEnabled,
            templateUrl: 'topicView.html',
            controller: 'topicViewController',
            backdrop: "static",
            windowClass: 'pdf',
            resolve: { topic: topic }
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
