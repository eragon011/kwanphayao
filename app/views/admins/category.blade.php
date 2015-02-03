@extends('admins.layout')

@section('content')

    <div ng-app="CategoryApp">

        <div ui-view></div>

    </div>

@stop

@section('javascript')

    <script type="text/javascript">
        //app
        var app = angular.module('CategoryApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
        app.config(function ($stateProvider, $urlRouterProvider) {
            //
            // For any unmatched url, redirect to /state1
            $urlRouterProvider.otherwise("/");

            $stateProvider
                    .state('list', {
                        url: "/:page",
                        templateUrl: "/app/admin/category/list.html",
                        controller: "ListCtrl",
                        resolve: {
                            categories: function ($http, $stateParams) {
                                return $http({
                                    method : 'get',
                                    url : '/admin/api/v1/category?page=1'
                                });
                            }
                        }
                    })


        });

    </script>

    <script type="text/javascript">
        //services
    </script>

    <script type="text/javascript">
        //controllers

        app.controller('ListCtrl', function ($scope, categories, $http) {
            console.log("ListCtrl Start...");

            $scope.dt = categories.data;
            $scope.categories = categories.data.data;
            console.log($scope.dt);
            $scope.currentPage;
            $scope.pageChange = function () {
                $http({
                    method : 'get',
                    url : '/admin/api/v1/category?page=' + $scope.currentPage
                }).success(function(response){
                    $scope.categories = response.data;
                    $scope.dt = response;
                })

            }


        })

    </script>

@stop

