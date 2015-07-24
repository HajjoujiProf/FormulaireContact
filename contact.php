<?php
/**
 * Created by PhpStorm.
 * User: SmartyChams
 * Date: 19/06/15
 * Time: 07:30
 */

session_start();

include_once'libs/PHPMailerAutoload.php';

$erreurs = [];

if(isset($_POST['lastname'],$_POST['firstname'],$_POST['mobile_phone_number'],$_POST['home_phone_number'],$_POST['email'])){


    $fields = [

        'Nom' => $_POST['lastname'],
        'Prenom' => $_POST['firstname'],
        'Mobile Tel' => $_POST['mobile_phone_number'],
        'Domicile Tel' => $_POST['home_phone_number'],
        'Email' => $_POST['email']

    ];

    foreach($fields as $field => $data){

        if(empty($data)){

            $erreurs [] = 'Le Champ '.$field.' est requis';
        }


    }

}else{

    $erreurs [] = 'Quelques Erreurs ';

}

$_SESSION['erreurs'] = $erreurs;

header('Location : inscription.php');