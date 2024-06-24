const signin_form = document.getElementById("signin-form");
if (signin_form) {
  signin_form.addEventListener("submit", function (event) {
    event.preventDefault();
    let valid = true;

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (!validateEmail(email)) {
      document.getElementById("emailError").innerText = "Invalid email format";
      valid = false;
    } else {
      document.getElementById("emailError").innerText = "";
    }

    if (password.length < 6) {
      document.getElementById("passwordError").innerText =
        "Password must be at least 6 characters";
      valid = false;
    } else {
      document.getElementById("passwordError").innerText = "";
    }

    if (valid) {
      alert("Sign In Successful");
      signin - Form.reset();
    }
  });
}
