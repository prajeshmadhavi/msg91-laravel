/**
 * Created by jide on 18/07/16.
 */
/**
 * Created by jide on 15/06/16.
 */

var su = angular.module('socialUniversity');

su.controller('collegeLibraryController', function collegeLibraryController($scope, $http, feed_channel, $uibModal) {


    $scope.showLibraryModal = function(id) {
        
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


