<?php
/**
 * SignUp Teste para FocusNetwoks
 *
 * @category   SignUp
 * @package    signup
 * @copyright  Copyright (c) 2019 Mario SAM (https://www.mariosam.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

//dados de conexao com banco de dados do sistema
$host   = "localhost";
$user   = "root";
$pass   = "root";
$db     = "db_signup_teste";

//captura acao que deve ser executada
$a = $_REQUEST["action"];

//identifica acao e invoca metodo a ser executado
switch ( $a ) {
    case "login":
        loginUser(); break;
    case "save":
        salvarForm(); break;
    case "check":
        consultaUser(); break;
}

//*****************************************************************************
// Metodo que salva ou atualiza form de cadastro do cliente
//
function salvarForm() {
    //var_dump($_POST);
    if ( ! isset( $_POST ) || empty( $_POST ) ) {
        echo "Dados do formulário não chegaram no PHP.";
        exit;
    }
    //recupera dados do formulario html
    $id    = -1; //(int) $_POST["id"];
    $usr   = $_POST["usrname"];
    $email = $_POST["email"];
    $pass  = $_POST["pass"];
    //verifica dados do form
    $v = validarForm( $id, $usr, $email, $pass );
    if ($v != null) {
        echo "Houston... We have a problem:<br>".$v;
        exit;
    }
    //abre conexao com banco
    //...
    //prepara SQL para insert ou update dependendo do ID do form
    //...
    //prepara e executa sql para insert dos dados
    //...
    //verifica se SQL de update foi executado
    //...
    //verifica se SQL de insert foi executado
    //...
    echo "Thanks!<br><br><img src='coolcat.jpeg' alt='' /><br><br>Welcome to the team ".$usr;
}

//*****************************************************************************
// Metodo que consulta registros de usuarios cadastrados
//
function consultaUser() {
}


//*****************************************************************************
// Metodo que verifica login de usuario ja registrado
//
function loginUser() {
}

//*****************************************************************************
// Metodo que persiste dados do formulario em server-side
//
function validarForm( $id, $usr, $email, $pass ) {
    //validar campo usuario
    if ( $usr == null || trim( $usr ) == "" ) {
        return "Username must be filled.";
    }
    //validar campo email
    if ( $email == null || trim( $email ) == "" ) {
        return "Email must be filled.";
    }
    //validar campo senha
    if ( $pass == null || trim( $pass ) == "" ) {
        return "Password cannot be empty.";
    }

    return null;
}
?>
