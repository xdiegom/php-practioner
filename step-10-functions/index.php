<?php

require 'functions.php';

$age = isset($_GET['age']) ? $_GET['age'] : 0;

if (allowNightClubAccess($age)) {
    echo 'You are allow';
} else {
    echo "You don't have access";
}
