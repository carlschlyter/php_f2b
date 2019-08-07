<?php

# PHP-FUNCTIONS FOR HANDLING FILES AND FOLDERS

    $path = '/dir1/myfile.php';
    $file = 'file1.txt';

    //Return filename
    echo basename($path) . '<br>';

    // without extension
    echo basename($path, '.php') . '<br>';

    // Retur the dir namne from the path
    echo dirname($path) . '<br>';

    // See it file exist
    echo file_exists('file1.txt') . '<br>';

    // Get absolue path
    echo realpath('file1.txt') . '<br>';

    // Open a file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    fclose($handle);
    echo $data . '<br>';

    // Open a file for writing
    $handle = fopen($file, 'w');
    $data = fwrite($handle, 'Hello Spikie!');
    fclose($handle);
    echo $data . '<br>';

    // Create a file for writing and write to it
    $handle = fopen('file2.txt', 'w');
    $text = "Hello Anna!\n";
    $data = fwrite($handle, $text);
    $text = "Hello Notting Hill\n";
    $data = fwrite($handle, $text);
    fclose($handle);
    echo $data;


    

?>