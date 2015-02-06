/**
 * Created by chaow on 2/4/2015 AD.
 */

app.controller('ListCtrl', function ($scope, categoryTypes,CategoryTypeService) {
    console.log("ListCtrl Start...");

    $scope.dt = categoryTypes.data;
    $scope.categoryTypes = categoryTypes.data.data;

    $scope.currentPage;
    $scope.filterWord= "";

    $scope.pageChange = function () {
        CategoryTypeService.list($scope.currentPage,$scope.filterWord).success(function(response){
            $scope.categoryTypes = response.data;
            $scope.dt = response;
        })
    }

    $scope.filterChange = function(){
        $scope.currentPage = 1;
        $scope.pageChange();
    }
})


app.controller('FormCtrl',function($scope,$state,categoryTypes,CategoryTypeService){

    $scope.categoryType = categoryTypes.data;

    $scope.save = function(){
        console.log($scope.categoryType);

        CategoryTypeService.save($scope.categoryType).success(function (response) {
            $state.go('list');
        })
    }

});
