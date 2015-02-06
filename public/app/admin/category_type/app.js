/**
 * Created by chaow on 2/3/2015 AD.
 */
var app = angular.module('CategoryTypeApp', ['ui.router', 'ngResource', 'ui.bootstrap']);
app.config(function ($stateProvider, $urlRouterProvider) {
    //
    // For any unmatched url, redirect to /state1

    $stateProvider
        .state('list', {
            url: "/list",
            templateUrl: "/app/admin/category_type/list.html",
            controller: "ListCtrl",
            resolve: {
                categoryTypes: function (CategoryTypeService, $stateParams) {
                    return CategoryTypeService.list(1,"");
                }
            }
        })

        .state('create',{
            url : "/create",
            templateUrl : "/app/admin/category_type/form.html",
            controller : "FormCtrl",
            resolve : {
                categoryType : function(CategoryTypeService,$stateParams){
                    return { data : {} };
                }
            }
        })

        .state('edit',{
            url : "/edit/:id",
            templateUrl : "/app/admin/category_type/form.html",
            controller : "FormCtrl",
            resolve : {
                categoryType : function(CategoryTypeService,$stateParams){
                    return CategoryTypeService.edit($stateParams.id) ;
                }
            }
        })


    $urlRouterProvider.otherwise("/list");


});