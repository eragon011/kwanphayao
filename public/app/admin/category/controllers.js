/**
 * Created by chaow on 2/4/2015 AD.
 */

app.controller('ListCtrl', function ($scope, categories,CategoryService) {
    console.log("ListCtrl Start...");

    $scope.dt = categories.data;
    $scope.categories = categories.data.data;
    console.log($scope.dt);

    $scope.currentPage;
    $scope.filterWord= "";

    $scope.pageChange = function () {
        CategoryService.list($scope.currentPage,$scope.filterWord).success(function(response){
            $scope.categories = response.data;
            $scope.dt = response;
        })
    }

    $scope.filterChange = function(){
        $scope.currentPage = 1;
        $scope.pageChange();
    }
})


app.controller('FormCtrl',function($scope,$state,category,mainCategories,CategoryService){

    function init(){
        $scope.category = category.data;
        $scope.mainCategories = mainCategories.data;

        $scope.category.parent = $scope.mainCategories[0];
    }

    init();

    $scope.selMainCategoryChanged = function(){
        console.log($scope.category.parent);
    }

    $scope.save = function(){
        console.log($scope.category);

        CategoryService.save($scope.category).success(function (response) {
            $state.go('list');
        })
    }

});
