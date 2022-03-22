<?php
require 'C:\xampp\htdocs\test\vendor\autoload.php';

use \GuzzleHttp\Exception\ClientException as GuzzleClientException;

$ptoken = '98E14338E309E3D6D595A517A55AA490BCB1536BA5D5DF8D358B74232013A2E5';
$cId = "OC1G9Q22uvoX3NNs";
$cSec = "JHIsZN,VjdC+Y[cim,8V{7jHcAPrLof@";

$args = array(
    'PRIVATE_TOKEN' => $ptoken,
    'CLIENT_ID' => $cId,
    'CLIENT_SECRET' => $cSec
);

try {
    $chargeService = new test\Charge($args);
    $charges = $chargeService->getCharges();
    var_dump($charges->_embedded->charges[0]);
} catch (GuzzleClientException $e) {
    var_dump($e->getResponse()->getBody()->getContents());
}

?>