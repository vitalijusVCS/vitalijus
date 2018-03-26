(jQuery(document).ready(function($){
$('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

if ($(window).width() < 790) {
  $('.productslider').slick({
    
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
  });
} else {
  $('.productslider').slick({
   
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
  });
}


/*
function getPrice() {
  var x = document.querySelector('.price span').innerHTML;
  var y = x.slice(55);
  document.querySelector('#myRange').max = y / 2;
}

function avansFun() {
  var z = document.querySelector('#myRange');
  var t = document.querySelector('.avansas');
  t.value = z.value;
  z.oninput = function() {
    t.value = this.value;
  }
  t.oninput = function() {
    z.value = this.value;
  }
}

function termFun() {
  var zz = document.querySelector('#myRange2');
  var tt = document.querySelector('.terminas');
  tt.value = zz.value;
  zz.oninput = function() {
    tt.value = this.value;
  }
  tt.oninput = function() {
    zz.value = this.value;
  }
}


function myFunction() {
    var x = document.querySelector('.price span').innerHTML;
    var y = x.slice(55);
    var t = document.querySelector('.avansas');
    var tt = document.querySelector('.terminas');
    var price = parseInt(y);
    var avans = parseInt(t.value);
    var term = parseInt(tt.value);
    var place = document.querySelector('.paypm');
    var result = (price - avans) / term;
    place.innerHTML = result.toFixed(2);

  
}

getPrice();
avansFun();
termFun();

*/
}));
	
