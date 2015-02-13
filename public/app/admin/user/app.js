var app = angular.module('UserApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
app.config(function ($stateProvider, $urlRouterProvider) {

    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/user/list.html",
            controller: "ListCtrl",
            resolve: {
                user: function (UserService, $stateParams) {
                    return UserService.list(1,"");
                }
            }
        })

        .state('create', {
            url: "/create",
            templateUrl: "/app/admin/user/form.html",
            controller : "FormCtrl",
            resolve : {
                user : function(UserService, $stateParams) {
                    return {data : {} };
                },
                role : function(RoleService) {
                    return RoleService.all();
                }
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/user/form.html",
            controller : "FormCtrl",
            resolve : {
                user : function(UserService, $stateParams) {
                    return UserService.edit($stateParams.id);
                },
                role : function(RoleService) {
                    return RoleService.all();
                }
            }
        });

    $urlRouterProvider.otherwise("/list");

});