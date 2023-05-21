// form validation js

function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  let y = document.forms["myForm"]["email"].value;

  var letters = /^[A-Za-z]+$/;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


  if (x.match(letters)) {
    alert("SignIn Successful");
    myRedirect();
    // console.log("done....")
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
