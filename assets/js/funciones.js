// JavaScript Document
function validarEmail(valor){ 
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)){
	return (true)
	} else {
	return (false);
	}
	}

function limpiar()
{
	document.form.reset();
	document.form.nom.focus();
}

function limpia_buscador()
{
	document.form.s.value="";;
	document.form.s.focus();
}
function validar()
{

	var form = document.form;
	if(form.nom.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El nombre está vacío.</font>";
		form.nom.value="";
		form.nom.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	
	if (form.apell.value==0)
	{
		document.getElementById("valido").innerHTML="<font color='#FF0000'>Debe introducir apellidos.</font>";
		form.apell.value="";
		form.apell.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";
	}
	
		if(form.email.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El email está vacío.</font>";
		form.email.value="";
		form.email.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	
		if(validarEmail(form.email.value)==false)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El email no es válido.</font>";
		form.email.value="";
		form.email.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	if(form.nick.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>Debe poner un nick de usuario.</font>";
		form.nick.value="";
		form.nick.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	if(form.pass.value==0)
	{
		document.getElementById("valido").innerHTML=
		"<font color='#FF0000'>El password está vacío.</font>";
		form.pass.value="";
		form.pass.focus();
		return false;
	}else{
		document.getElementById("valido").innerHTML="";	
	}
	form.submit()
}






