<?php

use POData\OperationContext\ServiceHost;
use qeti\SimplePOData\DataService;

require(__DIR__ . '/vendor/autoload.php');

require(__DIR__ . '/OperationContextAdapter.php');
require(__DIR__ . '/RequestAdapter.php');
require(__DIR__ . '/QueryProvider.php');
require(__DIR__ . '/models/MetadataProvider.php');
require(__DIR__ . '/models/Product.php');

// DB Connection
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'username';
$password = 'password';
$db = new \PDO($dsn, $user, $password);

// Realisation of QueryProvider
$db->queryProviderClassName = '\\QueryProvider';

// Controller
$op = new OperationContextAdapter($_GET);
$host = new ServiceHost($op);
$host->setServiceUri("/odata.svc/");
$service = new DataService($db, \models\MetadataProvider::create());
$service->setHost($host);
$service->handleRequest();
$odataResponse = $op->outgoingResponse();

// Headers for response
foreach ($odataResponse->getHeaders() as $headerName => $headerValue) {
    if (!is_null($headerValue)) {
        header($headerName . ': ' . $headerValue);
    }
}

// Body of response
echo $odataResponse->getStream();