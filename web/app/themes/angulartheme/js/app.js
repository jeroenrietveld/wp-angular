var app = angular.module('angular-app',
    ['ngRoute', 'appControllers']
);

app.run(['$rootScope', function($rootScope) {
    $rootScope.dir = BlogInfo.url;
    $rootScope.site = BlogInfo.site;
    $rootScope.api = AppAPI.url;
}]);

app.config(['$routeProvider',
  function($routeProvider) {
      $routeProvider.
          when('/', {
              templateUrl: BlogInfo.url+'/partials/post-list.html',
              controller: 'appcontroller'
          }).
          when('/:postId', {
              templateUrl: BlogInfo.url+'/partials/post-detail.html',
              controller: 'appcontrollerdetail'
          });
  }
]);
