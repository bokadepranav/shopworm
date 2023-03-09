/* menu bar toggle button for responsive web page */

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
	bar.addEventListener('click' , () => {
		nav.classList.add('active');
	})
}

if (close) {
	close.addEventListener('click' , () => {
		nav.classList.remove('active');
	})
}

function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  let y = document.forms["myForm"]["email"].value;

  var letters = /^[A-Za-z]+$/;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


  if (x.match(letters)) {
    console.log("done....")
  }
  else {
    alert("Name must be filled out properly");
    return false;
  }

  if (y.match(mailformat)) {
    console.log("done....")
  }
  else {
    alert("You have entered an invalid email address!");

  }

  if (x.match(letters) && y.match(mailformat)) {
    alert("signin successful")
  }
}

