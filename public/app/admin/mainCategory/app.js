/**
 * Created by chaow on 2/3/2015 AD.
 */
var app = angular.module('MainCategoryApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
app.config(function ($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/mainCategory/list.html",
            controller: "ListCtrl",
            resolve: {
                mainCategories: function (MainCategoryService, $stateParams) {
                    return MainCategoryService.list(1,"");
                }
            }
        })

        .state('create',{
            url : "/create",
            templateUrl : "/app/admin/mainCategory/form.html",
            controller : "FormCtrl",
            resolve : {
                mainCategory : function(MainCategoryService,$stateParams){
                    return { data : {} };
                }
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/mainCategory/form.html",
            controller : "FormCtrl",
            resolve : {
                mainCategory : function(MainCategoryService,$stateParams){
                    return MainCategoryService.edit($stateParams.id) ;
                }
            }
        })


    $urlRouterProvider.otherwise("/list");


});