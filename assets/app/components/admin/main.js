/**
 * Created by jide on 26/04/16.
 */

'use strict';


angular.module('socialUniversity', [
    'angular.chosen'
]);


var app = angular.module('socialUniversity');
app.controller('adminController', function adminController($scope, $http) {

    $scope.reg_uni_modal = true;
    $scope.uni_modal_table = false;
    $scope.formData = {};
    $scope.universities  = [];

    $scope.showRegisterModal = function( id ){

         $scope.formData = $scope.universities[(id-1)];   
         $scope.reg_uni_modal = false;
         $scope.uni_modal_table =  true;
    };
   
    $http.get('/backoffice/getUniversities').success(function(response, status){
       // console.log(response);
        $scope.universities = response;
    });

    $scope.createUniversity = function(){
      
        var request = {
            'id': $scope.formData.id,
            name : $scope.formData.name,
            email : $scope.formData.email,
            phone: $scope.formData.phone,
            'address': $scope.formData.address,
            'department': $scope.department
        };

        //console.log(request);
        
        $http.post('backoffice/createUniversity', request).success(function (data, status) {

            if(status == 200)
            {
                swal("University Created");
                $scope.reg_uni_modal = true;
                $scope.uni_modal_table =  false;
                console.log(data);

            }
        });
    }

    $scope.verifyUniversity = function (id) {

        $http.get('/backoffice/verifyUniversity/'+ id).success(function(response, status){
           // $scope.universities = response;
        });

    };

});