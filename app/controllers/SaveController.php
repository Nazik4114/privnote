<?php

// 0. accept and user input (&& validate it)
$note = htmlentities($_POST['note']);

/**
 * 1. generate uniq id
 * @todo:
 *  10 > в конфіг
 *  окрему ф-цію 
 */
$hash = bin2hex(random_bytes(10));

// 2. save to file (json)
$fileName = "$hash.json";
$filePath = NOTES_PATH . "/$fileName";
$fileContent = [
    'body' => $note,
    'hash' => $hash,
    'ip' => $_SERVER['REMOTE_ADDR'], 
    'created_at' => date("Y/m/d H:i:s")
];


// 3. save file (separate function)
$fileContent = json_encode($fileContent, JSON_UNESCAPED_SLASHES);

$save = file_put_contents($filePath , $fileContent);

// 3. build reference (link to view)
// 4. show reference.
// http://localhost:8181?action=show&hash=024bf51a4d1fbfdcb876
$show_url = BASE_URL . "?action=show&hash=".$hash;

$page = 'save';
require_once VIEWS_PATH."/master.php";