<?php

require 'C:\xampp\htdocs\ancap\vendor\autoload.php';

use \GuzzleHttp\Exception\ClientException as GuzzleClientException;

if(isset($_POST['valor'])){
    $valor = str_replace(',', '.', $_POST['valor']);
    if(is_numeric($valor)){
        if($valor >= 3.9){
            $nome = $_POST['nome'];
            $cpfcnpj = $_POST['cpfcnpj'];
            $ptoken = '98E14338E309E3D658DF0A9F8CDE75E1D6280A047B77E25BB32AB1C733E37480';
            $cId = "OC1G9Q22uvoX3NNs";
            $cSec = "JHIsZN,VjdC+Y[cim,8V{7jHcAPrLof@";
            gerar($ptoken, $cId, $cSec, $nome, $cpfcnpj, $valor);
        }
        else{
            echo 'valor menor que 3,90';
        }
    }
    else{
        echo 'Valor inserido não é um numero';
    }
}

function gerar($ptoken, $cId, $cSec, $nome, $cpfcnpj, $valor){
    $args = array(
        'PRIVATE_TOKEN' => $ptoken,
        'CLIENT_ID' => $cId,
        'CLIENT_SECRET' => $cSec
    );
    
    try {
        $chargeService = new test\Charge($args);
        $charge = $chargeService->createCharge([
            'charge' => [
                'description' => 'Sparing some change ;)',
                'amount' => $valor
            ],
             'billing' => [
                 'name' => $nome,
                 'document' => $cpfcnpj,
                 'notify' => false
             ]
        ]);
        if(isset($charge->status)){
            if($charge->details[0]->message == 'O campo "billing.document" deve conter um CPF ou CNPJ válido'){               
                echo '<p>Insira um CPF ou CNPJ válido!</p>';
            } elseif($charge->details[0]->message == 'Cliente é obrigatório'){
                echo '<p>Nome é obrigatório!</p>';
            }
            else {
                echo '<p>'.$charge->details[0]->message.'</p>';
            }
        } else {
            $link = $charge->_embedded->charges[0]->checkoutUrl;
            echo '<a target="_blank" href="'.$link.'" class="btn change">Acessar boleto</a>';
        }
    } catch (GuzzleClientException $e) {
        echo '<p>"'.$e->getResponse()->getBody()->getContents().'"</p>';
    }
}

?>