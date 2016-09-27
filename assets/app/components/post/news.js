/**
 * Created by jide on 16/05/16.
 */


'use strict';

var app = angular.module('socialUniversity')


//.directive('mediumInsert', mediumInsert).controller('newsController', newsController);

newsController.$inject = ['$scope'];
mediumInsert.$inject = ['$timeout'];

function newsController($scope) {

}

function mediumInsert($timeout) {
    var directive = {};
    directive.restrict = 'EA';
    directive.scope = {
        insertAddons: '='
    };
    directive.require = '^ngModel';
    directive.link = linkFunction;
    return directive;

    function linkFunction(scope, elem, attr, ngModel) {
        $timeout(function() {
            var editor = $('medium-editor').length ?
                $('medium-editor') : $('[medium-editor]');
            editor.mediumInsert({
                editor: ngModel['editor'],
                addons: scope.insertAddons,
            })
        });
    }
}




app.controller('newsController', function newsController($scope, $http) {

    $scope.description = '';
    $scope.insertAddons = {
        "images": {
            "fileUploadOptions": {
                "url": "projectImages"
            }
        }
    }



    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
        console.log(data);
    });

    $scope.postNews = function () {

        var preview_image2 = '';
        var file = document.getElementById('preview_image2').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            var preview_image2 = e.target.result;

            //send you binary data via $http or $resource or do anything else with it

            var request = {

                'title': $scope.news_title,
                'preview_image': preview_image2,
                'privacy': $scope.privacy,
                'tags': $scope.tags,
                'description': $scope.description
            };


            $http.post('/postNews', request).success(function (data, status) {

                if(status == 200){

                    $('#modal-postnews').modal('hide');

                }

            });
        };
        fileReader.readAsDataURL(file);



    };


});
