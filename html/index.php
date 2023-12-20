<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oline Course</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<!-- do not forget updatting js file -->
<body>
    <?php 
    session_start();
    ?>
<!-- Start Header -->
<div class="header" id="header">
    <div class="container">
        <a href="#" class="logo">books</a>
        <ul class="main-nav">
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li class="dropdown" id="myDropdown" onclick="coursesDropDown()">
                <a href="#course">course
                <ul class="dropdown-content">
                    <li><a href="#" onclick="goToLanguage()">Language</a></li>
                    <li><a href="#">english</a></li>
                    <li><a href="#">english</a></li>
                </ul>
            </a></li>
            <li><a href="#contact">contact</a></li>
            <?php 
            if(isset($_SESSION["username"])){
                ?>
            <li><a href="#">Your UserName: <?php
            echo $_SESSION["username"];
            ?>
            </a></li>
            <?php
            }
            ?>
        </ul>
        <!-- <div id="message-container">
            <div id="inbox">
                <a href="#" onclick="openChat('user1')">user</a>
            </div>
            <div id="chat-container">
                <div id="back-btn" onclick="closeChat()">back</div>
                <div id="chat"></div>
            </div>
        </div> -->
    </div>
</div>
<!-- End Header -->

<!-- Start Landding -->
<div class="landding">
    <div class="container">
        <div class="text">
            <h3>start to success</h3>
            <p>
                access to 5000+ courses from 300 instructors & institutions
            </p>
            <span>
                Various versions have evolved over the years, sometimes by accident,
            </span>
            <div class="search">
                <input type="search" placeholder="What do you want to learn?">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <div class="image">
            <img src="../images/Saly-10.png" alt="image">
        </div>
    </div>
</div>
<!-- End Landding -->

<!-- Start Popular Category -->
<div class="category">
    <div class="main-head">
        <h2>most <span>popular category</span></h2>
    </div>
    <div class="container">
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">Development</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        <div class="box">
            <i class="fa-solid fa-pen-nib"></i>
            <a href="#">design</a>
        </div>
        
    </div>
</div>
<!-- End Popular Category -->

<!-- Start Popular Course -->
<div class="popular">
    <div class="main-head">
        <h2>most <span>popular course</span></h2>
    </div>
    <div class="container">
        <div class="box">
            <div class="image">
                <div class="box-image">
                <img src="../images/Saly-1.png" alt="language">
                <p>language</p>
                </div>
                <p>Various versions have evolved daf</p>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <span>(15)</span>
                </div>
            </div>
            <div class="watch-bottom" id="watch" onclick="watch_bottom()">
                <a href="#">watch video</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <div class="box-image">
                <img src="../images/Saly-1.png" alt="html">
                <p>design</p>
                </div>
                <p>Various versions have evolved daf</p>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <span>(20)</span>
                </div>
            </div>
            <div class="watch-bottom" id="watch" onclick="watch_bottom()">
                <a href="#">watch video</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <div class="box-image">
                <img src="../images/Saly-1.png" alt="html">
                <p>business</p>
                </div>
                <p>Various versions have evolved daf</p>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <span>(102)</span>
                </div>
            </div>
            <div class="watch-bottom" id="watch" onclick="watch_bottom()">
                <a href="#">watch video</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <div class="box-image">
                <img src="../images/Saly-1.png" alt="html">
                <p>business</p>
                </div>
                <p>Various versions have evolved daf</p>
                <div class="rate">
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <i class="filled fas fa-star"></i>
                    <span>(102)</span>
                </div>
            </div>
            <div class="watch-bottom" id="watch" onclick="watch_bottom()">
                <a href="#">watch video</a>
            </div>
        </div>
        
    </div>
</div>
<!-- End Popular Course -->

<!-- Start Cards -->
<div class="cards">
    <div class="main-head">
        <h2>learn and <span>play</span></h2>
    </div>
    <div class="container">
        <div class="box">
            <div class="card">
            </div>
        </div>
        <div class="box">
            <div class="card">
            </div>
        </div>
        <div class="box">
            <div class="card">
            </div>
        </div>
    </div>
    <!-- old cards design -->
    <!-- <div class="container">
        <div class="box">
            <div class="info">
                <img src="../images/Rectangle 25.png" alt="photo">
                <h3>guy hawkins</h3>
                <p>ui-ux designer</p>
            </div>
            <p>
                Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra.
                Nam sed imperdiet turpis. In hac habitasse platea dictumst. 
                Praesent nulla massa, hendrerit vestibulum gravida in, feugiat auctor felis.
            </p>
        </div>
        <div class="box">
            <div class="info">
                <img src="../images/Rectangle 25.png" alt="photo">
                <h3>guy hawkins</h3>
                <p>ui-ux designer</p>
            </div>
            <p>
                Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra.
                Nam sed imperdiet turpis. In hac habitasse platea dictumst. 
                Praesent nulla massa, hendrerit vestibulum gravida in, feugiat auctor felis.
            </p>
        </div>
        <div class="box">
            <div class="info">
                <img src="../images/Rectangle 25.png" alt="photo">
                <h3>guy hawkins</h3>
                <p>ui-ux designer</p>
            </div>
            <p>
                Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra.
                Nam sed imperdiet turpis. In hac habitasse platea dictumst. 
                Praesent nulla massa, hendrerit vestibulum gravida in, feugiat auctor felis.
            </p>
        </div>
    </div> -->
</div>
<!-- End Cards -->

<!-- Start Second Card -->
<div class="smoth-card">
    <div class="main-head">
        <h2>smothing <span>cards</span></h2>
    </div>
    <div class="container">
        <div class="box">
            <div class="card">
                <h3>ahmed</h3>
            </div>
        </div>
        <div class="box">
            <div class="card">
                <h3>ahmed</h3>
            </div>
        </div>
        <div class="box">
            <div class="card">
                <h3>ahmed</h3>
            </div>
        </div>
    </div>
</div>
<!-- End Second Card -->

<!-- Start Floatting Button -->
<div class="floating-chat-button" onclick="toggleChat()">
    <span>&#9993;</span>
</div>
<div class="chat-container" id="chat-container">
    <div class="close-icon" onclick="closeChat()">✖</div>
    <div id="chat-display"></div>
    <div class="chat-input">
        <input type="text" id="message-input" placeholder="Type a message...">
        <button onclick="sendMessage()">Send</button>
    </div>
</div>
<!-- End Floatting Button -->
    
    <script src="../js/main.js"></script>
</body>
</html>