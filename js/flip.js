var init = function() {
  var card = document.getElementById('card');
  
  document.getElementById('flip').addEventListener( 'click', function(){
    card.toggleClassName('flipped');
  }, false);
};

window.addEventListener('DOMContentLoaded', init, false);


var init = function() {
  var card = document.getElementById('card');
  
  document.getElementById('flip1').addEventListener( 'click', function(){
    card.toggleClassName('flipped');
  }, false);
};

window.addEventListener('DOMContentLoaded', init, false);