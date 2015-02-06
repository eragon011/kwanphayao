/**
 * Created by chaow on 2/4/2015 AD.
 */

app.factory('CategoryService', function ($http) {
    return {
        list: function ($page, $filter) {
            return $http({
                method: 'get',
                url: '/admin/api/v1/category?page=' + $page + "&filter=" + $filter
            })
        },
        save : function ($category){
            return $http({
                method: 'post',
                url: '/admin/api/v1/category/save',
                header : 'application/json',
                data : $category
            })
        }
    }
})
