// Show & Hide Password 
var myPass = document.getElementById("password");
var showBtn = document.getElementById("show-pass")

showBtn.onclick = function() {
    "user strict";

    if(this.textContent === "Show") {
        myPass.setAttribute("type", "text");
        this.textContent = "Hide";
    } else {
        myPass.setAttribute("type", "password");
        this.textContent = "Show";
    }
};



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
};

// Clear Input Placeholder On Focus


// For Email

var loEmail = document.getElementById("email");

loEmail.onfocus = function() {
    
    "use strict";

    if(this.placeholder === "email") {
        this.placeholder = "";
    }

};

loEmail.onblur = function() {

    "use strict";

    if(this.placeholder === "") {
        this.placeholder = "email";
    }


};


// For Password

var loPassword = document.getElementById("password");

loPassword.onfocus = function() {

    "use strict";

    if(this.placeholder === "Enter password") {
        this.placeholder = "";
    }
};

loPassword.onblur = function() {

    "use strict";

    if(this.placeholder === "") {
        this.placeholder = "Enter password";
    }
};



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






