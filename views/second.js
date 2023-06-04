
const slider = document.querySelector('.slider');
const wrapper = document.querySelector('.slider-wrapper');
const prevBtn = document.querySelector('.slider-btn-prev');
const nextBtn = document.querySelector('.slider-btn-next');
const images = document.querySelectorAll('.slider-wrapper div');

let currentSlide = 0;
const slideWidth = images[0].clientWidth;
const slideCount = images.length;

function scrollToSlide(slide) {
  wrapper.style.transform = `translateX(${slide * -slideWidth}px)`;
}

function nextSlide() {
  currentSlide++;
  if (currentSlide >= slideCount) {
    currentSlide = 0;
  }
  scrollToSlide(currentSlide);
}

function prevSlide() {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slideCount - 1;
  }
  scrollToSlide(currentSlide);
}

let intervalId;
function startAutoSlide() {
  intervalId = setInterval(() => {
    nextSlide();
  }, 2000);
}

function stopAutoSlide() {
  clearInterval(intervalId);
}

prevBtn.addEventListener('click', () => {
  prevSlide();
  stopAutoSlide();
});

nextBtn.addEventListener('click', () => {
  nextSlide();
  stopAutoSlide();
});

slider.addEventListener('mouseover', () => {
  stopAutoSlide();
});

slider.addEventListener('mouseout', () => {
  startAutoSlide();
});

startAutoSlide();

document.querySelectorAll('.send_cart').forEach((cart)=>{
  cart.addEventListener('click',(evt)=>{

    let itemId=cart.getAttribute('href');
      data=itemId.split(',');
jsonData=JSON.stringify(data);
let xml=new XMLHttpRequest();
xml.open('post','../controller/cartController.php');
xml.send(jsonData);
let num=document.querySelector('.cartcash span').textContent;
console.log(num);
document.querySelector('.cartcash span').innerHTML=num++;
showAlert('success', 'Success', 'Item added to cart.');
setTimeout(window.location.reload,5000);    
evt.preventDefault();
    })
})
let alert = document.querySelector('.alert');
let alertMessage = document.querySelector('.alert-message');
let alertTitle = document.querySelector('.alert-title');

function showAlert(type, title, message) {
  alertTitle.textContent = title;
  alertMessage.textContent = message;
  alert.classList.add(`alert-${type}`);
  alert.style.display = 'block';
}

function closeAlert() {
  alert.classList.remove('alert-success', 'alert-info', 'alert-warning', 'alert-danger');
  alert.style.display = 'none';
}
