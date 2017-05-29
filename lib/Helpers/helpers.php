<?php
/**
 * Created by PhpStorm.
 * User: tomiiide
 * Date: 20/04/2017
 * Time: 04:47 PM
 */

session_start();
require_once(__DIR__."/../classes/Database.php");


function redirect($url){
 echo "<script> window.location = '$url' ;</script>" ;
}

function getActiveCohort(){
    $conn = Database::dbConnection();
    $query = $conn->prepare("SELECT id FROM cohorts WHERE status = 'ACTIVE'");
    $query->execute();
     return $query->rowCount() == 1 ? $query->fetch(PDO::FETCH_OBJ) : false ;
}

function getCohortStates($id){
    $conn = Database::dbConnection();
    $query = $conn->prepare("SELECT * FROM c_states WHERE cohorts_id = '$id'");
    $query->execute();
    return  $query->fetchAll() ;
}

function getState($id){
    $conn = Database::dbConnection();
    $query = $conn->prepare("SELECT * FROM c_states WHERE id = '$id'");
    $query->execute();
    return  $query->fetch() ;
}

function createUserSession($user, $user_type){
    /*if(isset($_SESSION)) {
        session_destroy();
    }*/

    $_SESSION['user_type'] = $user_type;
    $_SESSION['id'] = $user->getID();
    $_SESSION['useremail'] = $user->useremail;
    if($user_type == 'student') {
        $_SESSION['cohorts_id'] = $user->cohort_id;
    }else if($user_type == 'applicant'){
    $_SESSION['cohorts_id'] = 1;// getActiveCohort()->id;
    }
    $_SESSION['fullname'] = $user->fullname;
    $_SESSION['shortname'] = ucfirst(explode(' ',$user->fullname)[0]);

    return true;
}

function validateSession(){
    if(isset($_SESSION)){
        if(empty($_SESSION['useremail'])){
           redirect('logout.php');
        }
    }
    else{
        redirect('logout.php');
    }
}

function getMediaWeeks($cohort_id){
    $query  =  Database::dbConnection()->prepare("SELECT week FROM media LEFT JOIN media_cohorts ON media_cohorts.media_id = media.id WHERE media_cohorts.cohort_id = '$cohort_id' GROUP BY week");
    $query->execute();
    return $query->fetchAll();
}
