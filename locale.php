<?php

// Set up the locale i18n and gettext configuration.

session_start();

$language = "fr_FR";

// Get language preference
if(isset($_GET["lang"])) {
    $language = $_GET["lang"];
}
else if (isset($_SESSION["lang"])) {
    $language = $_SESSION["lang"];
}

$_SESSION["lang"] = $language;
$folder = "./locale";
$domain = "messages";
$encoding = "UTF-8";

putenv("LANG=".$language);
setlocale(LC_ALL, $language);

$domain = "messages";
bindtextdomain($domain, $folder."/nocache");
bindtextdomain($domain, $folder);

bind_textdomain_codeset($domain, $encoding);
textdomain($domain);

?>