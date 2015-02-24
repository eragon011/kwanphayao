/**
 * Created by chaow on 2/15/2015 AD.
 */

var app = angular.module('ContentApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
app.config(function ($stateProvider, $urlRouterProvider) {
    ////
    //// For any unmatched url, redirect to /state1
    //
    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/content/list.html",
            controller: "ListCtrl",
            controller: "ListCtrl",
            resolve: {
                contents: function (ContentService, $stateParams) {
                    return ContentService.list(1,"");
                },
                mainCategories : function(MainCategoryService){
                    return MainCategoryService.all();
                }
            }
        })

        .state('create',{
            url : "/create",
            templateUrl : "/app/admin/content/form.html",
            controller : "FormCtrl",
            resolve : {
                content : function(ContentService){
                    return { data : {} };
                },
                mainCategories : function(MainCategoryService){
                    return MainCategoryService.all();
                }
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/content/form.html",
            controller : "FormCtrl",
            resolve : {
                content : function(ContentService,$stateParams){
                    return ContentService.edit($stateParams.id);
                },
                mainCategories : function(MainCategoryService){
                    return MainCategoryService.all();
                }
            }
        })


    $urlRouterProvider.otherwise("/list");


});