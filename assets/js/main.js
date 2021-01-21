
function menu_link_over(e) {
  let arrow = e.querySelector('.sub-menu');
  document.querySelector('#site-navigation').classList.add('z-1');
  arrow.classList.remove('hidden');
}

function menu_link_leave(e) {
  let arrow = e.querySelector('.sub-menu');
  document.querySelector('#site-navigation').classList.remove('z-1');
  if (arrow) {
    arrow.className += ' hidden';
  } else {
    e.className += ' hidden';
  }
}

function quantity_pick(e, step) {
  let qty_input = e.parentNode.querySelector('input.qty');
  let current_value = Number(qty_input.value);
  let min = Number(qty_input.min);
  let max = Number(qty_input.max);
  step = Number(step);

  let update_cart = document.querySelector('table.cart button[name="update_cart"]');
  if (update_cart) {
    update_cart.disabled = false;
  }
  if ((current_value <= min && step < 0) | (current_value >= max && step > 0)) {
    e.disabled = true;
  } else {
    now_value = current_value + step;
    qty_input.value = now_value;
    if (now_value <= min) {
      e.parentNode.querySelector('button[data-action="decrease-picker-quantity"]').disabled = true;
    } else if (now_value < max) {
      if (step < 0) {
        e.parentNode.querySelector('button[data-action="increase-picker-quantity"]').disabled = false;
      } else {
        e.parentNode.querySelector('button[data-action="decrease-picker-quantity"]').disabled = false;
      }      
    } else {
      e.parentNode.querySelector('button[data-action="increase-picker-quantity"]').disabled = true;
    }
  }
}

function header_cart_over(e) {
  let triangle = e.parentNode.querySelector('.nav-triangle-borderless');
  let cart = e.parentNode.querySelector('.header-cart-list');
  triangle.classList.remove('hidden');
  cart.classList.remove('hidden');
}

function header_cart_leave(e) {
  let triangle = e.parentNode.querySelector('.nav-triangle-borderless');
  let cart = e.parentNode.querySelector('.header-cart-list');
  triangle.classList.add('hidden');
  cart.className += ' hidden';
}


function click_show_content(e) {
  let target = document.querySelector(e.dataset.target);
  e.parentNode.parentNode.querySelector('li a.active').classList.remove('active');
  e.classList.add('active');
  target.parentNode.querySelector('li.click-item:not(.hidden)').classList.add('hidden');
  target.classList.remove('hidden');
}

function toggle_content(e) {
  let status = e.dataset.status;
  let icon = e.querySelector('i');
  let content = e.parentNode.querySelector('.content');
  if (status == 0) {
    content.classList.remove('hidden');
    icon.classList.remove('fa-plus');
    icon.classList.add('fa-minus');
  } else {
    content.classList.add('hidden');
    icon.classList.remove('fa-minus'); 
    icon.classList.add('fa-plus');
  }
  e.dataset.status = status ^ 1;
}


// document.addEventListener('DOMContentLoaded', vwshow); window load

function vwshow(){
  var html = document.documentElement;
  var vw = html.clientWidth;
  let nav = document.getElementById('site-navigation');
  if(vw>=750){
    nav.classList.remove('nav-mobile');
  }
}
window.onresize = vwshow;//window change
var  state = true;//global state
function shownav(){
  let body=document.querySelector('body')
  let svgmeau = document.getElementById('header-svg-nav');
  if(state){
  svgmeau.firstElementChild.style="display:none";
  svgmeau.lastElementChild.style="display:block";
  state=false;
  body.style="overflow:hidden";
  }else{
    svgmeau.firstElementChild.style="display:block";
    svgmeau.lastElementChild.style="display:none";
    state=true;
    body.style="overflow:auto";
  }
  let nav = document.getElementById('site-navigation');
  if(nav.classList.contains('nav-mobile')){
    nav.classList.remove('nav-mobile')
  }else{
    nav.classList.add('nav-mobile')
  }
}
var html = document.documentElement;
var vw = html.clientWidth;
if(vw>750){
  function faqcontentshow(){};
  function faqmenushow(){};
  function ctmcontentshow(){};
  function ctmenushow(){};
}else{
function faqcontentshow(){
var faqcontent = document.getElementById('faq-content');
var faqmenu = document.getElementById('faq-menu');
var gobackmenu = document.getElementById('gobackmenu');
   faqmenu.style = "display:none"
   faqcontent.style = "display:block";
   gobackmenu.style = "display:block"
}
function faqmenushow(){
  var faqcontent = document.getElementById('faq-content');
  var faqmenu = document.getElementById('faq-menu');
  var gobackmenu = document.getElementById('gobackmenu');
  faqmenu.style = "display:block";
  faqcontent.style = "display:none";
  gobackmenu.style = "display:none"
}
function ctmcontentshow(){
  var ct = document.getElementById('contomer-content');
  var mu = document.getElementById('contomer-menu');
  var gbt = document.getElementById('gobackct');
  ct.style = "display:block";
  mu.style = "display:none";
  gbt.style = "display:block"
}
function ctmenushow(){
  var ct = document.getElementById('contomer-content');
  var mu = document.getElementById('contomer-menu');
  var gbt = document.getElementById('gobackct');
  ct.style = "display:none";
  mu.style = "display:block"
  gbt.style = "display:none"
}
}


