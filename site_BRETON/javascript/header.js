

function setLocale( lang ){

	if(lang == 'fr')
	$.get("../PHP/Locale/frLocale.php");
	else if((lang == 'gb')
	$.get("../PHP/Locale/gbLocale.php");
	else if(lang == 'de')
	$.get("../PHP/Locale/deLocale.php");
	
    return false;
}