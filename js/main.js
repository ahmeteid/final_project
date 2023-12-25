// Scroller
let scrolLine = document.querySelector(".scroller");
let scrollWidth = document.documentElement.scrollHeight - document.documentElement.clientHeight;
window.addEventListener("scroll", () => {
    let scrolTop = document.documentElement.scrollTop;
    scrolLine.style.width = `${(scrolTop / scrollWidth) * 100}%`;
});



function coursesDropDown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.getElementsByClassName("dropdown-content")[0].classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches(".dropdown button")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; dropdowns.length; i++) {
            var openDropDown = dropdowns[i];
            if (openDropDown.classList.contains("show")) {
                openDropDown.classList.remove("show");
            }
        }
    }
}

function goToLanguage() {
    window.location.href = "../html/video_content.html"
}

function watch_bottom() {
    // var watch = document.getElementById("watch");
    window.location.href = "../html/video_content.html"
}

function openChat(user) {
    document.getElementById("inbox").style.display = "none";
    document.getElementById("back-btn").style.display = "block";


    const message = getMessages(user);


    const chatElement = document.getElementById("chat");
    chatElement.innerHTML = message.map(message => `<div>${message}</div>`).join('');

    document.getElementById("chat").style.display = "block";
}

function closeChat() {
    document.getElementById("back-btn").style.display = "none";
    document.getElementById("inbox").style.display = "block";
    document.getElementById("chat").style.display = "none";
}

function getMessages(user) {
    const messages = {
        user1: ["Hello", "How are you?", "Nice to meet you"]
    };
    return messages[user] || [];
}

// Start Floattin Button
var chatContainer = document.getElementById("chat-container");

function toggleChat() {
    chatContainer.style.display = chatContainer.style.display === "block" ? "none" : "block";
}

function closeChat() {
    chatContainer.style.display = "none";
}

function sendMessage() {
    var messageInput = document.getElementById("message-input");
    var message = messageInput.value;

    if (message.trim() !== "") {
        var chatDisplay = document.getElementById("chat-display");
        chatDisplay.innerHTML += "<p><strong>You:</strong> " + message + "</p>";

        // Simulate receiving a fake message
        setTimeout(function () {
            chatDisplay.innerHTML += "<p><strong>Friend:</strong> Hi there!</p>";
            chatDisplay.scrollTop = chatDisplay.scrollHeight;
        }, 1000);

        // Clear the input field
        messageInput.value = "";

        // Scroll to the bottom of the chat display
        chatDisplay.scrollTop = chatDisplay.scrollHeight;
    }
}

// End Floattin Button