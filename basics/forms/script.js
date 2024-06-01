// let firstname = document.getElementById("firsname").value;
// let email = document.getElementById("email").value;
// let message = document.getElementById("message").value;
// let favorites = document.getElementById('favorites').value;

// formValidtions(firstname, email, message, favorites);

function formValidtions() {
  let firstname = document.getElementById("firstname").value;
  let email = document.getElementById("email").value;
  let message = document.getElementById("message").value;
  let favorites = document.getElementById("favoritecity").value;

  if (firstname === "") {
    alert("Firtsname is required");
    return false;
  }
  if (email === "") {
    alert("Email is required");
    return false;
  }
  if (message === "") {
    alert("Message is required plz fill!");
    return false;
  }
  if (favorites === "") {
    alert("favorites is required plz choose a city of your favorites!");
    return false;
  }

  return true;
}
