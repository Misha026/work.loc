<?php
error_reporting(E_ALL);

if ( isset($_GET['name']))
{
echo $_GET['name'];
}
else
{
    echo 'не установлено';
}
