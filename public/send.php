<?php

$msg = Array (
        "sender" =>  $_GET["sender"],
        "text" => $_GET["text"],
        "time" => date('m/d/Y H:i:s', time())
);

// encode array to json
$json = json_encode(array('data' => $msg));

//write json to file
if (file_put_contents("messages.json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";

?>