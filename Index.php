<?php
// include_once "proses/session.php";

if (empty($_GET['x'])) {
    echo (" <script>
    window.location = 'home';
        </script>");
} else if ($_GET['x'] == 'home') {
    require "home.php";
} else {
    echo (" <script>
    window.location = 'home';
        </script>");
}