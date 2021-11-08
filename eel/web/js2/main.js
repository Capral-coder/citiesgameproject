
function sum() {
  var a = document.getElementById("location").value;
  eel.sum(a)(callback); // change here
}

// add function as
function callback(city) {
  document.getElementById("data").value = city;
}