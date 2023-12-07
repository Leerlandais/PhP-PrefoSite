<?php

if(isset($_GET['section'])){
    switch($_GET['section']){
        case 'home':
            include('../templates/home.php');
            break;
        case 'entreprise':
            include('../templates/rapport.php');
            break;
        case 'interview':
            include('../templates/interview.php');
            break;
        case 'museum':
            include('../templates/museum.php');
            break;
        case 'galerie':
            include('../templates/galerie1.php');
            break;
        case 'conclusion':
            include('../templates/conclusion.php');
            break;
        default:
            include('../templates/page404.php');
    }
}else{
    include('../templates/home.php');
}