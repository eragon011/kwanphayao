/**
 * Created by chaow on 2/4/2015 AD.
 */

app.controller('ListCtrl', function ($scope, contents,ContentService) {
    console.log("ListCtrl Start...");

    $scope.dt = contents.data;
    $scope.contents = contents.data.data;
    console.log($scope.dt);

    $scope.currentPage;
    $scope.filterWord= "";

    $scope.pageChange = function () {
        ContentService.list($scope.currentPage,$scope.filterWord).success(function(response){
            $scope.contents = response.data;
            $scope.dt = response;
        })
    }

    $scope.filterChange = function(){
        $scope.currentPage = 1;
        $scope.pageChange();
    }

    $scope.delete = function(content){
        confirm_string = "Do you want to delete this Content id:"+content.id+" ?";
        if(confirm(confirm_string)){
            ContentService.delete(content).success(function(){
                index = $scope.contents.indexOf(content);
                $scope.contents.splice(index,1);
            });
        }
    }
})


app.controller('FormCtrl',function($scope,$state,content,mainCategories,MainCategoryService,CategoryService,ContentService){

    function init(){
        $scope.content = content.data;
        $scope.mainCategories = mainCategories.data;
        $scope.categories = [];
        initMainCategory();

    }

    function initCategory(response){


        $scope.categories = response;

        if ($scope.content.category==null){
            $scope.content.category = $scope.categories[0];
            console.log("test");
        }else {
            // do nothing
            var index = 0;
            $scope.categories.forEach(function(el,idx){
                if (el.id == $scope.content.category.id){
                    index = idx;
                }
            })
            $scope.content.category = $scope.categories[index];
        }
    }

    function initMainCategory() {
        $scope.content.mainCategory = $scope.content.category.parent;
        if ($scope.content.mainCategory == null) {
            $scope.content.mainCategory = $scope.mainCategories[0];

        } else {
            var index = 0;
            $scope.mainCategories.forEach(function (el, idx) {
                if (el.id == $scope.content.mainCategory.id) {
                    index = idx;
                }
            })
            console.log(index);
            $scope.content.mainCategory = $scope.mainCategories[index];
        }

        MainCategoryService.categories($scope.content.mainCategory.id)
            .success(initCategory);
    }

    init();

    $scope.selMainCategoryChanged = function(){
        MainCategoryService.categories($scope.content.mainCategory.id)
            .success(initCategory);
    }

    $scope.save = function(){
        console.log($scope.content);

        ContentService.save($scope.content).success(function (response) {
            $state.go('list');
        })
    }

});
