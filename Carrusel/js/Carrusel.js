let slider_index=0;
function show_slider(index){
  let slides=document.querySelectorAll('.slide');
  let dots=document.querySelectorAll('.dot-nav');
  if (index >= slides.length)slider_index= 0;
  if (index < 0) slider_index=sli.length-1;
  for (let i=0; i<slides.length; i++) {
     slides[i].style.display='none';//css pero desde js
     dots[i].classList.remove('active-dot');
  }
  slides[slider_index].style.display='block';
  dots[slider_index].classList.add('active-dot');
}
show_slider(slider_index);
document.querySelector('#flecha-izquierda')element.addEventListener('click', function() => {show_slider(--slider_index);});