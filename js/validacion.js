//para números, útil para filtrar los famosos ids.
numeros = /^[0-9]+$/;

//sólo letras, pero esto no incluye los acentos, así que si introduces á no es correcto.
letras = /^[a-zA-Z]+$/;

//para caracteres latinos(acentos), espacios y guiones bajos. el espacio se indica con \s.
letras_latinas = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_.,\s]+$/;

letras_latinas_numeros = /^[0-9a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ_.,\s]+$/;

//para emails, válidos pueden ser: miemail@gmail.com, mi.email@gmail.es, ...
email = /^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;

//passwords que tienen que contener tanto números como letras
password = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i;

password_completa = /(?=^.{8,20}$)(?=.*\d)(?=.+[!@#\$%\^&\*\?_~\.\/])(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

//Para urls 
url = /^(ht|f)tps?:\/\/\w+([\.\-\w]+)?\.([a-z]{2,6})?([\.\-\w\/_]+)$/i;

//para localhost
localhost = /^http:\/\/(localhost|127\.0\.0\.1)/;

//Para códigos postales
codigo_postal = /^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/;

//Para el Documento NIF
NIF = /^\d{8}[a-zA-Z]{1}$/; 

//Para el Documento CIF
CIF = /^[a-zA-Z]{1}\d{7}[a-zA-Z0-9]{1}$/;

//Para el documento NIE
NIE = /^[XxTtYyZz]{1}[0-9]{7}[a-zA-Z]{1}$/;

//Tarjetas de crédito VISA
VISA = /^4[0-9]{3}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}$/;

//Tarjetas de crédito MASTERCARD
MASTERCARD = /^5[1-5][0-9]{2}-?[0-9]{4}-?[0-9]{4}-?[0-9]{4}$/; 

//Fecha formato: 12/12/2014 
fecha = /^([0-9]{2}\/[0-9]{2}\/[0-9]{4})$/;

//Números enteros y decimales
floatRegex = /[-+]?([0-9]*\.[0-9]+|[0-9]+)/; 

//1 número entre el 1 el 50
number1to50Regex = /(^[1-9]{1}$|^[1-4]{1}[0-9]{1}$|^50$)/gm;

//Validar tarjetas de crédito
creditCardRegex = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;

//Validar nombre
usernameRegex = /^[a-z0-9_-]{3,16}$/;

//Validar password
passwordRegex = /^[a-z0-9_-]{6,18}$/;

//Validar números de teléfono
phoneNumber = /^[0-9-()+]{3,20}/;

//Buscar Fecha (e.g. 21/3/2006)
dateRegex = /(\d{1,2}\/\d{1,2}\/\d{4})/gm;

//Buscar Fecha en formato MM/DD/YYYY
dateMMDDYYYRegex = /^(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d$/;

//Buscar fecha en formato DD/MM/YYYY
dateDDMMYYYRegex = /^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.](19|20)\d\d$/;

//Buscar una url
urlRegex = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;

//Buscar nombre de dominio (con HTTP)
domainRegex = /(.*?)[^w{3}\.]([a-zA-Z0-9]([a-zA-Z0-9\-]{0,65}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}/igm;

//Buscar nombre de dominio (sólo con www.)
domainRegex = /[^w{3}\.]([a-zA-Z0-9]([a-zA-Z0-9\-]{0,65}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}/igm;

//Buscar nombre de dominio alternativo
domainRegex = /(.*?)\.(com|net|org|info|coop|int|com\.au|co\.uk|org\.uk|ac\.uk|)/igm;

//Buscar subdominios: www, dev, int, stage, int.travel, stage.travel
subDomainRegex = /(http:\/\/|https:\/\/)?(www\.|dev\.)?(int\.|stage\.)?(travel\.)?(.*)+?/igm;

//Buscar jpg, gif o png imagen
imageRegex = /([^\s]+(?=\.(jpg|gif|png))\.\2)/gm;

//Buscar todas las imagenes
imgTagsRegex = /<img.+?src=\"(.*?)\".+?>/ig;

//Buscar imagenes sólo con formato .png
imgPNG = /<img.+?src=\"(.*?.png)\".+?>/ig;

//Buscar cadena RGB (color)
rgbRegex = /^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/;

//buscar cadena hex (color)
hexRegex = /^#?([a-f0-9]{6}|[a-f0-9]{3})$/;

//Buscar tags html (v1)
htmlTagRegex = /^<([a-z]+)([^<]+)*(?:>(.*)<\/\1>|\s+\/>)$/;

//Buscar todos los .js incluidos
jsTagsRegex = /<script.+?src=\"(.+?\.js(?:\?v=\d)*).+?script>/ig;
 
//Buscar todos los .css incluidos
cssTagsRegex = /<link.+?href=\"(.+?\.css(?:\?v=\d)*).+?>/ig;

$(document).ready(function() {
	$(".solo-letras").change(function(){
		if(!$(this).val().match(letras))
		{
			var valor = (this.value + '').replace(letras, '');
			$(this).val(valor);
			alert('Debe ingresar solo letras');
			$(".btn-success").attr('disabled', true);
		}
		else
		{
			$(".btn-success").attr('disabled', false);
		}
	});
	$(".letras_latinas").change(function(){
		if(!$(this).val().match(letras_latinas))
		{
			var valor = (this.value + '').replace(letras_latinas, '');
			$(this).val(valor);
			alert('Debe ingresar solo letras');
			$(".btn-success").attr('disabled', true);
		}
		else
		{
			$(".btn-success").attr('disabled', false);
		}
	});
	$(".solo-numeros").change(function(){
		if(!$(this).val().match(numeros))
		{
			var valor = (this.value + '').replace(numeros, '');
			$(this).val(valor);
			alert('Debe ingresar solo númeris');
			$(".btn-success").attr('disabled', true);
		}
		else
		{
			$(".btn-success").attr('disabled', false);
		}
	});
	$(".letras_numeros").change(function(){
		if(!$(this).val().match(letras_latinas_numeros))
		{
			var valor = (this.value + '').replace(letras_latinas_numeros, '');
			$(this).val(valor);
			alert('Debe ingresar solo letras o números');
			$(".btn-success").attr('disabled', true);
		}
		else
		{
			$(".btn-success").attr('disabled', false);
		}
	});
	
	$(".password_completa").change(function(){
		if(!$(this).val().match(password_completa))
		{
			var valor = (this.value + '').replace(password_completa, '');
			$(this).val(valor);
			alert('Debe introducir una contraseña que contenga entre 8 a 20 caracteres y debe contener al menos 1 letra mayúscula, 1 letra minúscula, 1 número y 1 símbolo.');
			$(".btn-success").attr('disabled', true);
		}
		else
		{
			$(".btn-success").attr('disabled', false);
		}
	});

	$(".btn-success").click(function(){
		require = $("input").attr('require');
		if(require){
			alert('Por favor debe ingresar los campos obligatorios');
			return false;
		}else{
			return true;
		}
	})
});