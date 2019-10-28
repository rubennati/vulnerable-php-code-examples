<?php

function bar() {
    foo($_GET['name']);
}

function foo($name) {
    mysql_query("SELECT * FROM foo WHERE name = '$name'");
}