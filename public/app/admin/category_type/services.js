/**
 * Created by chaow on 2/4/2015 AD.
 */

app.factory('CategoryTypeService', function ($http) {
    return {
        all : function(){
            return $http({
                method: 'get',
                url: '/admin/api/v1/category-type/all',
                header : 'application/json'
            })
        },
        list: function ($page, $filter) {
            return $http({
                method: 'get',
                url: '/admin/api/v1/category-type?page=' + $page + "&filter=" + $filter
            })
        },
        save : function ($categoryType){
            return $http({
                method: 'post',
                url: '/admin/api/v1/category-type/save',
                header : 'application/json',
                data : $categoryType
            })
        },
        edit : function($id){

            return $http({
                url : '/admin/api/v1/category-type/edit/'+$id,
                method : 'get'
            })
        },
        delete : function($categoryType){
            return $http({
                url : '/admin/api/v1/category-type/delete',
                method : 'post',
                header : 'application/json',
                data : $categoryType
            })
        }
    }
})
