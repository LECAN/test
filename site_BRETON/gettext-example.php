<?php

/**
 * Example of using gettext, the GNU Project that enables easy
 * internationalization (i18n). Please use gettext over coming up with
 * another scheme.
 * 
 * @author vmc <vmc@codegroove.net>
 * @date 05.28.2010
 */

if ( false === function_exists('gettext') ) {
	echo "You do not have the gettext library installed with PHP.";
	exit(1);
}

/**
 * Set the specific locale information we want to change. We could also
 * use LC_MESSAGES, but because we may want to use other locale information
 * for things like number separators, currency signs, we'll say all locale
 * information should be updated.
 * 
 * The second parameter is the locale and encoding you want to use. You
 * will need this locale and encoding installed on your system before you
 * can use it.
 * 
 * On an Ubuntu/Debian system, adding a new locale is simple.
 * 
 * $ sudo apt-get install language-pack-de # German
 * $ sudo apt-get install language-pack-ja # Japanese
 * 
 * You can also generate a specific locale using locale-gen.
 * 
 * $ sudo locale-gen en_US.UTF-8
 * $ sudo locale-gen de_DE.UTF-8
 */
 
 $locale = "de_DE";
setlocale(LC_ALL, 'de_DE.UTF-8');
putenv("LANG=" . $locale);
/**
 * Because the .po file is named messages.po, the text domain must be named
 * that as well. The second parameter is the base directory to start
 * searching in.
 */
 $domain1 = "example";
bindtextdomain($domain1, 'locale');
bind_textdomain_codeset($domain1,'UTF-8');

textdomain($domain1);

$domain2 = "messages";
bindtextdomain($domain2, './locale');
bind_textdomain_codeset($domain2,'UTF-8');

echo dgettext("messages","home");

/**
 * Tell the application to use this text domain, or messages.mo.
 */



$name = "Vic";
printf(_("home"), $name);

exit(0);