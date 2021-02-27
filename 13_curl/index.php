<?php

// what is curl?
echo "curl is a tool that gives you ability to interact remotely with other
services or other resources".'<br>';

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample example to get data.
// start the resource
$resource = curl_init($url);

//set options
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);

// curl_exec on resource to get a result 
$result = curl_exec($resource);
echo $result;

// get info
$info = curl_getinfo($resource);
echo '<pre>';
var_dump($info);
echo '</pre>';

// Get response status code
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
echo $code.'<br>';
curl_close($resource);


// Post request set_opt_array
$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$resource = curl_init();
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ["content-type: application/json"],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);
echo $result;