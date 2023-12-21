// Object to store user information
var userObject = {
    // email: "ahmet@gmail.com",
    // password: "123456"
};

function singup() {
     // Get form values
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Simple validation
    if (!username || !email || !password) {
        alert("Please fiil in all fields");
        return;
    }

    // Save data in the user object
    userObject = {
        "username": username,
        "password": password,
        "email": email
    };

    // Redirect to login page
    alert("Sign up successful");
    // window.location.href = "../html/login.html";

    // // Display the collected data (for demonstration purposes)
    // alert(
    //     "Sign up successful!\n\nUsername: " + userObject.username + 
    // "\nEmil: " + userObject.email
    // );
}