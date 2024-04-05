$(document).ready(function() {
  const slides= $('.header-swiper .slide')
  // console.log(slides);

});

function toggleMute() {
  let video=document.getElementById("header-vid");
  video.muted = !video.muted;
}


function nextSlide(){
  const slides= $('.header-swiper .slide')
  const currentSlide= $('.header-swiper .slide.active')[0]
  let currentSlideIndex=-1;
  for (let i = 0; i < slides.length; i++) {
    if( slides[i]==currentSlide){
      currentSlideIndex=i;
    }
  }
  slides.removeClass("active")
  nextS = (currentSlideIndex+1)%(slides.length)
  let nextSlide=slides[nextS]
  nextSlide.classList.add("active")
}

function previusSlide(){
  const slides= $('.header-swiper .slide')
  const currentSlide= $('.header-swiper .slide.active')[0]
  let currentSlideIndex=-1;
  for (let i = 0; i < slides.length; i++) {
    if( slides[i]==currentSlide){
      currentSlideIndex=i;
    }
  }
  
  slides.removeClass("active")
  nextS = (currentSlideIndex+slides.length-1)%(slides.length)
  let nextSlide=slides[nextS]
  nextSlide.classList.add("active")
}

function nextSlideP(){
  const slides= $('.projects .slide')
  const currentSlide= $('.projects .slide.active')[0]
  let currentSlideIndex=-1;
  for (let i = 0; i < slides.length; i++) {
    if( slides[i]==currentSlide){
      currentSlideIndex=i;
    }
  }
  slides.removeClass("active")
  nextS = (currentSlideIndex+1)%(slides.length)
  let nextSlide=slides[nextS]
  nextSlide.classList.add("active")
}

function previusSlideP(){
  const slides= $('.projects .slide')
  const currentSlide= $('.projects .slide.active')[0]
  let currentSlideIndex=-1;
  for (let i = 0; i < slides.length; i++) {
    if( slides[i]==currentSlide){
      currentSlideIndex=i;
    }
  }
  
  slides.removeClass("active")
  nextS = (currentSlideIndex+slides.length-1)%(slides.length)
  let nextSlide=slides[nextS]
  nextSlide.classList.add("active")
}

// test header
// const swiperWrapper = document.querySelector('.swiper-wrapper');
// const prevButton = document.querySelector('.prev');
// const nextButton = document.querySelector('.next');
// const slides = document.querySelectorAll('.swiper-slide');
// let currentSlide = 0;

// function showSlide(index) {
//     slides.forEach((slide, i) => {
//         slide.style.transform = `translateX(${100 * (i - index)}%)`;
//     });
// }

// prevButton.addEventListener('click', () => {
//     currentSlide = (currentSlide - 1 + slides.length) % slides.length;
//     showSlide(currentSlide);
// });

// nextButton.addEventListener('click', () => {
//     currentSlide = (currentSlide + 1) % slides.length;
//     showSlide(currentSlide);
// });
//============== end test header