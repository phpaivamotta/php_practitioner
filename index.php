<?php

require 'functions.php';

$age = 18;

if (isOldEnough($age)) {
    echo 'You can come in.';
} else {
    echo 'Sorry, you cannot come in.';
}

require 'index.view.php';