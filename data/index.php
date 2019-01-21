<?php

echo "<h1>Hello Tequila</h1>";

echo "<h3>getenv</h3>";
print "<pre>";
var_dump(getenv());
print "</pre>";

echo "<h3>$_SERVER</h3>";
print "<pre>";
var_dump($_SERVER);
print "</pre>";

echo "<h3>$_ENV</h3>";
print "<pre>";
var_dump($_ENV);
print "</pre>";
