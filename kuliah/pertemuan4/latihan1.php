<?php

echo date("l, j F o");
echo "<br>";
echo time();
echo "<br>";
echo time() + 86400;
echo "<br>";
echo date("l, j F o", time() + 60 * 60 * 24 * 365 * 7);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", mktime(0, 0, 0, 2, 27, 2024));