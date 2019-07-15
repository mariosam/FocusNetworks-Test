/**
 * SignUp Teste para FocusNetwoks
 *
 * @category   SignUp
 * @package    signup
 * @copyright  Copyright (c) 2019 Mario SAM (https://www.mariosam.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

//*****************************************************************************
// Metodo que prepara pagina
//
window.onload = function() {
}

//*****************************************************************************
// Metodo que altera a cor do input quando recebe o foco
//
function inputOn( obj ) {
	obj.style.backgroundColor = "#7b7b7b";
}

//*****************************************************************************
// Metodo que altera a cor do input quando perde o foco
//
function inputOff( obj ) {
	obj.style.backgroundColor = "#222222";
}

//*****************************************************************************
// Metodo que salva (ou atualiza) form de cadastro do cliente
//
function confirmForm() {
  var msg = "Please, review and confirm the data.\n\nUsername: "+document.getElementById("usrname").value+"\nEmail: "+document.getElementById("email").value;
  //caaixa de dialogo para confirmar envio dos dados
  if ( confirm(msg) ) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		//exibe mensagem de retorno do servidor
      	document.getElementById('col2').innerHTML = "<span id='opMsg'>"+this.responseText+"</span>";
    	} else {
    		document.getElementById('col2').innerHTML = "<span id='opMsg'>Erro na execucao do Ajax</span>";
    	}
  	};
  	//recupera valores do form para enviar via ajax
  	var formData = new FormData();
  	formData.append("usrname", document.getElementById("usrname").value);
  	formData.append("pass", document.getElementById("pass").value);
  	formData.append("email", document.getElementById("email").value);
  	//submete para server-side
  	xhttp.open("POST", "crud.php?action=save", true);
  	xhttp.send( formData );
  }
}
