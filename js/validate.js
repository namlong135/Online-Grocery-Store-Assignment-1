function validateAdd(stock) {
  let value = document.getElementById('quantity').value;
  let number = new RegExp(/^\+?(0|[1-9]\d*)$/);
  let other = new RegExp(/[^0-9]+/);

  if (value.match(number)) {
    let quantity = parseInt(value);
    if (quantity <= 0) {
      alert('Invalid quantity, please try again');
      return false;
    }
    if (quantity > stock) {
      alert('Invalid quantity, please try again');
      return false;
    }
  } else if (value.match(other)) {
    alert('Invalid quantity, please try again');
    return false;
  } else {
    alert('Invalid quantity, please try again');
    return false;
  }

  return true;
}

function validateCheckout() {
  let fname = document.getElementById('fname').value;
  let lname = document.getElementById('lname').value;
  let email = document.getElementById('email').value;
  let address = document.getElementById('address').value;
  let suburb = document.getElementById('suburb').value;
  let state = document.getElementById('state').value;
  let zip = document.getElementById('zip').value;
  let country = document.getElementById('country').value;

  if (email == '' || fname == '' || lname == '' || address == '' ||
    suburb == '' || state == '' || zip == '' || country == '') {
    alert('All fields must be completed');
    return false;
  }
  return true;
}
