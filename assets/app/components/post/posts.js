/**
 * Created by jide on 25/08/16.
 */

var app = angular.module('socialUniversity')

.directive('mediumInsert', mediumInsert).controller('projectController', projectController);

projectController.$inject = ['$scope'];
mediumInsert.$inject = ['$timeout'];

function projectController($scope) {

}

function mediumInsert($timeout) {
    var directive = {};
    directive.restrict = 'EA';
    directive.scope = {
        insertAddons: '='
    }
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




app.controller('projectController', function projectController($scope, $http) {

    $scope.description = '';
    $scope.insertAddons = {
        "images": {
            "fileUploadOptions": {
                "url": "projectImages"
            }
        }
    };


    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
        console.log(data);
    });

    $scope.postProject = function () {

        $scope.post_status = true;
        var preview_image1 = '';
        var file = document.getElementById('preview_image1').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            var preview_image1 = e.target.result;

            //send you binary data via $http or $resource or do anything else with it

            var request = {

                'title': $scope.project_title,
                'preview_image': preview_image1,
                'privacy': $scope.privacy,
                'tags': $scope.tags,
                'description': $scope.description
            };


            $http.post('/postProject', request).success(function (data, status) {

                if(status == 200){

                    $scope.post_status = false;
                    $('#modal-postprojects').modal('hide');

                }

            });
        };
        fileReader.readAsDataURL(file);



    };


});


// app.directive('mediumInsert', mediumInsert).controller('projectController', projectController);
//
// projectController.$inject = ['$scope'];
// mediumInsert.$inject = ['$timeout'];
//
// newsController.$inject = ['$scope'];
// mediumInsert.$inject = ['$timeout'];
//
//
// function mediumInsert($timeout) {
//     var directive = {};
//     directive.restrict = 'EA';
//     directive.scope = {
//         insertAddons: '='
//     };
//     directive.require = '^ngModel';
//     directive.link = linkFunction;
//     return directive;
//
//     function linkFunction(scope, elem, attr, ngModel) {
//         $timeout(function() {
//             var editor = $('medium-editor').length ?
//                 $('medium-editor') : $('[medium-editor]');
//             editor.mediumInsert({
//                 editor: ngModel['editor'],
//                 addons: scope.insertAddons,
//             })
//         });
//     }
// }


app.controller('postNoteController', function postNoteController($scope, $http) {

    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
    });

    $http.get("/data/getSubjects").success(function (data, status) {
        $scope.subjects = data;
    });

    $scope.getSubjectLecture = function () {
        var subject = $scope.subject;
        $http.get('/data/lectures/' + subject).success(function (response, status) {
            $scope.lectures = response;
        })
    };

    $scope.fileNameChanged = function () {

        var file = document.getElementById('preview_image').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            //send you binary data via $http or $resource or do anything else with it
            $scope.preview_image = e.target.result;
            //console.log(e.target.result);
        };
        try {
            fileReader.readAsDataURL(file);
        } catch (r) {
        }
    };

    $scope.post_note = function () {

        if(!$scope.lecture)
        {
            swal("Choose a lecture");
            return;
        }

        $scope.post_status = true;
        //Check if the file hasn't been removed.
        var file = document.getElementById('preview_image').files[0];
        var request = {
            'title': $scope.note_title,
            'privacy': $scope.privacy,
            'subject_id': $scope.subject,
            'lecture_id': $scope.lecture,
            'department_id': $scope.department_id,
            'files': localStorage.getItem('tmp_files'),
            'tags': $scope.tags
        };
        if (file) {request.preview_image = $scope.preview_image;}

        $http.post('/postNote', request).success(function (data, status) {

            if (status == 200) {
                $scope.post_status = false;
                localStorage.removeItem('tmp_files');
                $('#modal-note').modal('hide');
                //$('#note_form').trigger("reset");
                //$('#note_file_form').trigger("reset");
            }

        });


    };


});

app.controller('postAdminNoteController', function postAdminNoteController($scope, $http) {

    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
    });

    $scope.fileNameChanged = function () {

        var file = document.getElementById('preview_image').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            //send you binary data via $http or $resource or do anything else with it
            $scope.preview_image = e.target.result;
            //console.log(e.target.result);
        };
        try {
            fileReader.readAsDataURL(file);
        } catch (r) {
        }
    };

    $scope.post_note = function () {

        if(!$scope.department_id)
        {
            swal("Choose Department");
            return;
        }

        $scope.post_status = true;
        //Check if the file hasn't been removed.
        var file = document.getElementById('preview_image').files[0];
        var request = {
            'title': $scope.note_title,
            'privacy': $scope.privacy,
            'department_id': $scope.department_id,
            'files': localStorage.getItem('tmp_files'),
            'tags': $scope.tags
        };
        if (file) {request.preview_image = $scope.preview_image;}

        $http.post('/postNote', request).success(function (data, status) {

            if (status == 200) {
                $scope.post_status = false;
                localStorage.removeItem('tmp_files');
                $('#modal-note').modal('hide');
                //$('#note_form').trigger("reset");
                //$('#note_file_form').trigger("reset");
            }

        });


    };


});


app.controller('postQuestionController', function postQuestionController($scope, $http) {

    $scope.qData = {};

    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
    });

    $scope.postQuestion = function () {

        $scope.post_status = true;
        $http.post('postQuestion', $scope.qData).success(function (response, status) {
            $('#modal-question').modal('hide');
            $scope.post_status = false;
            //console.log(response);

        });
    };
});

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

app.controller('postAssignmentController', function postAssignmentController($scope, $http) {

    $scope.questions_count = [1];
    $scope.formData = {};


    $scope.add_question = function () {
        $scope.questions_count.push($scope.questions_count.length+1);
    };

    $scope.remove_question = function () {
        $scope.questions_count.pop();
    };

    $scope.postAssignment = function () {

        $scope.post_status = true;
        $scope.formData.due_date = $('#due_date').val();
        $scope.formData.has_quiz = true;
        $scope.formData.question_count = $scope.questions_count.length;

        $http.post('postAssignment', $scope.formData).success(function (response, status) {
            console.log(response);
            $scope.post_status = false;
            $('#modal-assignment').modal('hide');

        });
    };
});

app.controller('postReportController', function postReportController($http, $scope){


    $http.get('/data/getSubjects').success(function (response, status) {
        $scope.subjects = response;
    });

    $scope.getSubjectStudent = function () {

        angular.forEach($scope.subjects, function (value, key) {
            if(value.id == $scope.subject)
            {
                $scope.subject_text = value.name
            }
        });

        $http.get('/data/getSubjectStudent/'+ $scope.subject).success(function(response, status){
            $scope.students = response;
        });

    };

});
/*
app.controller('projectController', function projectController($scope, $http) {

    $scope.description = '';
    $scope.insertAddons = {
        "images": {
            "fileUploadOptions": {
                "url": "projectImages"
            }
        }
    };



    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
        console.log(data);
    });

    $scope.postProject = function () {

        var preview_image1 = '';
        var file = document.getElementById('preview_image1').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            var preview_image1 = e.target.result;

            //send you binary data via $http or $resource or do anything else with it

            var request = {

                'title': $scope.project_title,
                'preview_image': preview_image1,
                'privacy': $scope.privacy,
                'tags': $scope.tags,
                'description': $scope.description
            };


            $http.post('/postProject', request).success(function (data, status) {

                if(status == 200){

                    $('#modal-postprojects').modal('hide');

                }

            });
        };
        fileReader.readAsDataURL(file);



    };


});*/

app.controller('eventController', function eventController($scope, $http) {


    $http.get("/data/getTaggable").success(function (data, status) {
        $scope.taggable = data;
        console.log(data);
    });

    $scope.postEvent = function () {

        $scope.post_status = true;
        var preview_image3 = '';
        var file = document.getElementById('preview_image3').files[0], fileReader = new FileReader();

        fileReader.onloadend = function (e) {
            var preview_image3 = e.target.result;

            //send you binary data via $http or $resource or do anything else with it

            var request = {

                'title': $scope.event_title,
                'preview_image': preview_image3,
                'privacy': $scope.privacy,
                'tags': $scope.tags,
                'event_days': $scope.event_days,
                'starts': $scope.starts,
                'ends': $scope.ending,
                'location': $scope.location


            };

            $http.post('/postEvent', request).success(function (data, status) {

                if(status == 200){

                    $scope.post_status = false;
                    $('#modal-event').modal('hide');

                }

            });
        };
        fileReader.readAsDataURL(file);



    };


});

