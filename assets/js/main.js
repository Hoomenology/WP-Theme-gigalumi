
function menu_link_over(e) {
	let arrow = e.querySelector('.sub-menu');
  arrow.classList.remove('hidden');
}

function menu_link_leave(e) {
  let arrow = e.querySelector('.sub-menu');
  if (arrow) {
    arrow.className += ' hidden';
  } else {
    e.className += ' hidden';
  }
}
