/**
 * Created by jide on 21/08/16.
 */



'use strict';


var app = angular.module('socialUniversity');
app.controller('searchController', function searchController($scope, $http, algolia, $uibModal){


    // $('.typeahead.input-sm').siblings('input.tt-hint').addClass('hint-small');
    // $('.typeahead.input-lg').siblings('input.tt-hint').addClass('hint-large');
    //
    // $scope.search = {
    //     query: null,
    //     hits: []
    // };
    // var client = algolia.Client(window.algolia_app_id, window.algolia_search_key);
    // var index = client.initIndex('social_university');
    // var templates = { suggestion: Hogan.compile($('#search_suggestion_template').html())};
    // var $searchInput = $('#search-input');


    Mousetrap.bind('/', function (e) {
        $('#search-input').focus();
    }, 'keyup');

    initAlgoliaSearch();

    function initAlgoliaSearch() {
        if (window.algolia_app_id === '') {
            return;
        }

        var client = algoliasearch(window.algolia_app_id, window.algolia_search_key);
        var index = client.initIndex('social_university');

        var templates = {suggestion: Hogan.compile($('#search_suggestion_template').html())};
        var $searchInput = $('#search-input');

        //typeahead datasets
        //https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md#datasets
        var datasets = [];

        datasets.push({
            source: function searchAlgolia(query, cb) {

                var results = [];
                index.search(query, {hitsPerPage: 5}, function searchCallback(err, content) {
                    if (err) {
                        throw err;
                    }
                    $.each(content.hits, function (index, value) {

                        switch (value.type) {

                            case 'note' :
                                value.note = 'note';
                                results.push(value);
                                break;
                            case  'topic' :
                                value.topic = 'topic';
                                results.push(value);
                                break;
                            case  'project' :
                                value.project = 'project';
                                results.push(value);
                                break;
                            case  'news' :
                                value.news = 'news';
                                results.push(value);
                                break;
                            case  'event' :
                                value.event = 'event';
                                results.push(value);
                                break;
                            case  'student' :
                                value.student = 'student';
                                results.push(value);
                                break;
                            case  'university' :
                                value.university = 'university';
                                results.push(value);
                                break;
                        }

                    });
                    cb(results);
                    //console.log(content.hits);

                });
            },
            templates: {suggestion: templates.suggestion.render.bind(templates.suggestion)}
        });

        var typeahead = $searchInput.typeahead({hint: false}, datasets);
        var old_input = '';

        typeahead.on('typeahead:selected', function changePage(e, item) {
            if(item.type == 'student')
            {
                window.location.href =  '/student/profile/' + item.id;
            }
            if(item.type == 'university')
            {
                window.location.href =  '/university/' + item.id +  '?university=' +item.id;
            }
            if(item.type == 'note')
            {
                showNoteModal(item.id);
            }
            if(item.type == 'topic')
            {
                showTopicModal(item.id);
            }
            if(item.type == 'project')
            {
                showProjectModal(item.id);
            }
            if(item.type == 'news')
            {
                showNewsModal(item.id);
            }
            if(item.type == 'event')
            {
                showEventModal(item.id);
            }

        });

        typeahead.on('keyup', function (e) {
            old_input = $(this).typeahead('val');

            if ($(this).val() === '' && old_input.length == $(this).typeahead('val')) {

                $searchInput.closest('#search-wrapper').removeClass('not-empty');
            } else {

                $searchInput.closest('#search-wrapper').addClass('not-empty');
            }
            if (e.keyCode === 27) {

            }
        });

        typeahead.on('typeahead:closed', function () {

        });

        $('#cross').click(function () {
            typeahead.typeahead('val', '').keyup();
        });
    }

    function showNoteModal(note_id) {

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

    function showTopicModal(topic) {

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

    function showProjectModal(project) {

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

     function showEventModal(event) {
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

     function showNewsModal(news_id) {
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

});

