// Right - Slider img
var maining = document.getElementById("mainimg");
var smallimg = document.getElementsByClassName("small-img");


smallimg[0].onclick = function(){
    maining.src = smallimg[0].src;
}

smallimg[1].onclick = function(){
    maining.src = smallimg[1].src;
}

smallimg[2].onclick = function(){
    maining.src = smallimg[2].src;
}

smallimg[3].onclick = function(){
    maining.src = smallimg[3].src;
}




// Amount decrement - increment
var numbers = document.getElementById('box');

for (i=0; i<10; i++) {
    var span = document.createElement('span');
    span.textContent = i;
    numbers.appendChild(span);
}


var num = numbers.getElementsByTagName('span');
var index = 0;

function nextNum() {
    num[index].style.display = 'none';
    index = (index + 1) % num.length;
    num[index].style.display = 'initial';
}

function prevNum() {
    num[index].style.display = 'none';
    index = (index - 1 + num.length) % num.length;
    num[index].style.display = 'initial';
}