<?php

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Cross-Origin Resource Sharing (CORS) Configuration
//     |--------------------------------------------------------------------------
//     |
//     | Here you may configure your settings for cross-origin resource sharing
//     | or "CORS". This determines what cross-origin operations may execute
//     | in web browsers. You are free to adjust these settings as needed.
//     |
//     | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
//     |
//     */

//     'paths' => ['api/*', 'sanctum/csrf-cookie'],

//     'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'],

//     'allowed_origins' => ['http://localhost:5173'],

//     'allowed_origins_patterns' => [],

    
//     'allowed_headers' => ['Content-Type', 'X-Auth-Token', 'Authorization'], // Adjust as needed

//     'exposed_headers' => ['X-Custom-Header'], // Add custom headers your React app needs

//     'max_age' => 3600, // Cache preflight requests for 1 hour (optional)


//     'supports_credentials' => true,

// ];

return [

'paths' => ['*'],
'allowed_methods' => ['*'],
'allowed_origins' => ['*'],
'allowed_origins_patterns' => [],
'allowed_headers' => ['*'],
'max_age' => 3600,
'supports_credentials' => true,


];
