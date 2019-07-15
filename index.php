<?php
/**
 * SignUp Teste para FocusNetwoks
 *
 * @category   SignUp
 * @package    signup
 * @copyright  Copyright (c) 2019 Mario SAM (https://www.mariosam.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SignUp Teste para FocusNetwoks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles.css" async>
    <script src="scripts.js"></script>
</head>

<body>
<div id="col1">
    <p>Discover the most exciting places<br />on our planet</p>
    <img src="rodagigante.jpg" alt="Ferris wheels in London" />
</div>
<div id="col2">
    <span id="opLogin"><a href="login.php">Log In</a></span><span id="opSignup">Sign Up</span>
    <p>Sign up for beta</p>
    <form method="POST" onSubmit="confirmForm(); return false;" id="frmSignup">
    <fieldset>
        <legend>Username:</legend>
        <input id="usrname" type=text class=input-text required placeholder="your username goes here..." size=20 name=usrname onFocus="inputOn(this)" onBlur="inputOff(this)"/>
        <legend>Password:</legend>
        <input id="pass" type=password class=input-text required placeholder="your password goes here..." minlength=6 name=pass onFocus="inputOn(this)" onBlur="inputOff(this)"/>
        <legend>Email:</legend>
        <input id="email" type=email class=input-text required placeholder="your e-mail goes here..." size=30 name=email onFocus="inputOn(this)" onBlur="inputOff(this)"/>
    </fieldset>

    <label for="cbxIagree"><input id="cbxIagree" type=checkbox value="1" name="cbxIagree[]" required />I agree to all statements subscribe in <a href="terms.php">Terms of Service</a></label>
    <label for="cbxSignup"><input type=submit class=button id="btnSalvar" value="Sign Up" /><a href="login.php">I am already a member</a></label>
    </form>
</div>

<p class="rodape">coded by <a href="https://mariosam.com.br/">Mario SAM</a></p>
</body>
</html>
