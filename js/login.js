function valitationEmail() {
// Get the email and password values
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;

// Assuming users is an array of user objects
var users = [
    {
        "email": "ahmet@gmail.com",
        "password": "123456"
}
];

// Check if the email exists in the user object
var userExists = users.some(function(user) {
    return user.email === email && user.password === password; 
});

// Display a simple alert for demonstration purposes
if (userExists) {
    window.location.href = "../html/index.html";
} else {
    alert ("Invalid email or password");
}
}

// // Toggle password visibility
// document.getElementById("showPassword").addEventListener("change", function() {
//     var pass = document.getElementById("password");
//     pass.type = this.checked ? "text" : "password";
// });











// After add database

// function loginFunction() {
//     // Get form values
//     var login_email = document.getElementById("login_email").value;
//     var login_password = document.getElementById("login_password").value;

//     // Simple validation
//     if (!login_email || !login_password) {
//         alert("Please fill in all fields");
//         return;
//     }

//     // Check if the login credentials match the signed-up user
//     if (login_email === userObject.email && login_password === userObject.password) {
//         window.location.href = "../index.html";
//     } else {
//         alert("Invalid email or password");
//     }
// }






