app.factory('RoleService', function($http) {
    return {
        all : function() {
            return $http({
                method : 'get',
                url : '/admin/api/v1/role/all',
                header : 'application/json'
            })
        },
        list : function ($page, $filter) {
            return $http({
                method : 'get',
                url : '/admin/api/v1/role?page=' + $page + "&filter=" + $filter
            })
        },
        save : function ($role) {
            return $http({
                method : 'post',
                url : '/admin/api/v1/role/save',
                header : 'application/json',
                data : $role
            })
        },
        edit : function($id) {
            return $http({
                method : 'get',
                url : '/admin/api/v1/role/edit/'+$id
            })
        },
        delete : function($role) {
            return $http({
                method : 'post',
                url : '/admin/api/v1/role/delete',
                header : 'application/json',
                data : $role
            })
        }
    }
});
