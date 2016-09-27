/**
 * Created by jide on 26/04/16.
 */


'use strict';

/**
 *
 * Main module of the application.
 */

angular.module('socialUniversity', [

        'ngRoute',
        'pusher-angular',
        'angular.chosen',
        'ui.bootstrap',
        'youtube-embed',
        'angular-medium-editor',
        'algoliasearch'
    ],
    function ($locationProvider) {
        $locationProvider.html5Mode(
            true
        );
    });

window.client = new Pusher('5f80eff4cf85bac60647');
window.user = $('#_token').val();
window.su_member = $('#_member').val();
