<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
include_once 'includes/consultas.php';

$userSession = new UserSession();
$user = new User();
$consulta = new Consultas();

$respuestas = $consulta->setConsulta(6);
$zonas = $consulta->setZona();
$clasificaciones = $consulta->setClasificacion();
$subnucleos1 = $consulta->setSubnucleo(1);
$subnucleos2 = $consulta->setSubnucleo(2);
$subnucleos3 = $consulta->setSubnucleo(3);
$subnucleos4 = $consulta->setSubnucleo(4);
$subnucleos5 = $consulta->setSubnucleo(5);
$subnucleos6 = $consulta->setSubnucleo(6);
$subnucleos7 = $consulta->setSubnucleo(7);
$subnucleos8 = $consulta->setSubnucleo(8);
$subnucleos9 = $consulta->setSubnucleo(9);
$subnucleos10 = $consulta->setSubnucleo(10);
$empresas = $consulta->setEmpresa();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    //$user->setUser($userSession->getCurrentUser());
    if(isset($_POST['buscador'])){
        $respuestas = $consulta->getBusqueda($_POST['buscador']);
    }
    else{
        if($_REQUEST['seleccionar_subnucleo'] != ""){
            $respuestas = $consulta->setConsulta($_REQUEST['seleccionar_subnucleo']);
        }
        if($_REQUEST['seleccionar_zona'] != ""){
            $respuestas = $consulta->getPorZona($_REQUEST['seleccionar_zona']);
        }
        if($_REQUEST['seleccionar_clasificacion'] != ""){
            $respuestas = $consulta->getPorClasificacion($_REQUEST['seleccionar_clasificacion']);
        }
    }
    include_once 'vistas/home.php';

}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'vistas/home.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'vistas/login.php';
    }
}else{
    //echo "login";
    include_once 'vistas/login.php';
}



?>