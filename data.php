<?php

if (isset($_POST['save'])) {
    file_put_contents('data.json', $_POST['save']);
};

if (isset($_POST['load'])) {
    if (file_exists('data.json')) {
        echo file_get_contents('data.json');
    }
    else echo json_encode(false);
}