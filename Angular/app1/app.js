(function(){
  
  var gem = {
    name : 'Dedecahederon' ,
    price : '2.5' ,
    description : ' haha ksmxiw '
  } ;
  
  var app = angular.module('store',[]) ;
  app.controller('storeController',function(){
    this.product = gem ;
  });
  
  })()
