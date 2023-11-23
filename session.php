<?php
session_start();

function checkLoggedInUser()
{
    if (isset($_SESSION['username'])) {
        echo json_encode(['loggedIn' => true, 'username' => $_SESSION['username']]);
    } else {
        echo json_encode(['loggedIn' => false]);
    }
}

checkLoggedInUser();
