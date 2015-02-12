/**
 * Created by chaow on 2/4/2015 AD.
 */

app.controller('ListCtrl', function ($scope, mainCategories,MainCategoryService) {
    console.log("ListCtrl Start...");

    $scope.dt = mainCategories.data;
    $scope.mainCategories = mainCategories.data.data;

    $scope.currentPage;
    $scope.filterWord= "";

    $scope.pageChange = function () {
        MainCategoryService.list($scope.currentPage,$scope.filterWord).success(function(response){
            $scope.mainCategories = response.data;
            $scope.dt = response;
        })
    }

    $scope.filterChange = function(){
        $scope.currentPage = 1;
        $scope.pageChange();
    }

    $scope.delete = function(mainCategory){
        confirm_string = "Do you want to delete this Main Category id:"+mainCategory.id+" ?";
        if(confirm(confirm_string)){
            MainCategoryService.delete(mainCategory).success(function(){
                index = $scope.mainCategories.indexOf(mainCategory);
                $scope.mainCategories.splice(index,1);
            });
        }
    }
})


app.controller('FormCtrl',function($scope,$state,mainCategory,MainCategoryService){

    $scope.mainCategory = mainCategory.data;

    $scope.save = function(){

        MainCategoryService.save($scope.mainCategory).success(function (response) {
            console.log(response);
            $state.go('list');
        })
    }

});