<?php

$connect = mysqli_connect('localhost', 'root', '', 'pweb');
if (!$connect)
    exit('Error connecting to database');