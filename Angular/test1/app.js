
  
var app = angular.module('store', []);
app.controller('testController', function ($scope) {
    var gem = {
        name: 'Dedecahederon',
        price: '2.5',
        description: ' haha ksmxiw '
    };

    this.product = gem;
    
  //   var x = 'test' + 'Dedecahederon';
  //   $scope.x = 123 ;
     
    var y = 'test' + 'Dedecahederon';
    $scope.pr = 123 ;
    
    $scope.y = 123 ; // same as $scope.testDedecahederon ;
    
    $scope.text = 123 ;
});
  
  


