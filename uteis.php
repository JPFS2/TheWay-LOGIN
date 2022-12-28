<?php

if(isset($_FILES['arquivo']['tmp_name']))
move_uploaded_file($_FILES['arquivo']['tmp_name'],'uteis/'.$_FILES['arquivo']['name']);
$_FILES['arquivo']['tmp_name'] = null;
include __DIR__ . '/views/uteiss.php';
