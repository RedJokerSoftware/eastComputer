﻿var botaosanduiche = document.getElementById('botaosanduiche');
const navbarlinks = document.getElementsByClassName('secaobotoescabecalho')[0]
botaosanduiche.addEventListener('click', () => {
navbarlinks.classList.toggle('active');
})

function trocartema(){
	var element = document.body;
  	element.classList.toggle("lightmode");
}

function botao1click(){
		
}

function main(){
	
}

window.onscroll = function() {
	scrollFunction();
}

function scrollFunction() {
 	if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		document.getElementById("header").style.height = "80px";
		document.getElementById("headerimg").style.height = "55px";
		document.getElementById("botaocarro").style.height = "55px";
		document.getElementById("botaologin").style.height = "55px";
  	} else {
    		document.getElementById("header").style.height = "110px";
		document.getElementById("headerimg").style.height = "80px";
		document.getElementById("botaocarro").style.height = "55px";
		document.getElementById("botaologin").style.height = "55px";
  	}
}

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 