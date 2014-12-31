var controllers = angular.module('appControllers', []);

controllers.controller('appcontroller', ['$scope', '$http', function($scope, $http) {
    $http({
        method: 'GET',
        url: $scope.api+'news-articles',
    }).
    success(function(data, status, headers, config) {
        $scope.postdata = data;
    }).
    error(function(data, status, headers, config) {
    });
}]);

controllers.controller('appcontrollerdetail', ['$scope', '$routeParams', '$http', function($scope, $routeParams, $http) {
    $http({
        method: 'GET',
        url: $scope.api+'posts/'+$routeParams.postId,
    }).
    success(function(data, status, headers, config) {
        $scope.post = data;
    });
}]);
