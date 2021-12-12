    <div class="navbar">
        <div class="logo">
            <a href=""><img src="docs/logo.png" alt=""></a>
        </div>
        <div class="search">
            <img src="docs/search_icon.png" alt="">
            <form action="">
                <input type="text" name="search" id="all_search" placeholder="Search..">
            </form>
        </div>
        <ul>
            <li><a href="facebook"><img src="docs/facebook.png" alt=""></a></li>
            <li><a href="twiter"><img src="docs/twiter.png" alt=""></a></li>
            <li><a href="instagram"><img src="docs/instagram.png" alt=""></a></li>
            <li><a href="youtube"><img src="docs/youtube.png" alt="youtube"></a></li>
        </ul>
    </div>
    <hr class="line">
    <ul class="down_navbar">
        <li><a class="<?php if($_GET['x']=='home') echo 'active';?>" href="home">Home</a></li>
        <li><a class="<?php if($_GET['x']=='about') echo 'active';?>" href="about">About</a></li>
        <li><a class="<?php if($_GET['x']=='blog') echo 'active';?>" href="blog">Blog</a></li>
        <li><a class="<?php if($_GET['x']=='member') echo 'active';?>" href="member">Member</a></li>
        <li><a class="<?php if($_GET['x']=='profile') echo 'active';?>" href="profile">Profile</a></li>
        <li><a href="sign-in/index.html">Login</a></li>
    </ul>