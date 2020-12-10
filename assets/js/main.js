
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
