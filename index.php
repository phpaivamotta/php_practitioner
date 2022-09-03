<?php

$query = require 'bootstrap.php';
require 'functions.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
