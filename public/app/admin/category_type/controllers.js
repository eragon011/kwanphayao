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

    $scope.delete = function(categoryType){
        confirm_string = "Do you want to delete this CategoryType id:"+categoryType.id+" ?";
        if(confirm(confirm_string)){
            CategoryTypeService.delete(categoryType).success(function(){
                index = $scope.categoryTypes.indexOf(categoryType);
                $scope.categoryTypes.splice(index,1);
            });
        }
    }
})


app.controller('FormCtrl',function($scope,$state,categoryType,CategoryTypeService){

    $scope.categoryType = categoryType.data;

    $scope.save = function(){

        CategoryTypeService.save($scope.categoryType).success(function (response) {
            console.log(response);
            $state.go('list');
        })
    }

});
