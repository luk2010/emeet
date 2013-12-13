<?php

require_once 'locale.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8" />
        <title>eMeet index page</title>
        <link rel="stylesheet" href="emeet_main.css" />
    </head>
    <body>
        
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript">
            $(function() {
             
            
            $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
                
            $('div[id="loginbox"]').hide();
            $('connexion-button[name="login-button"]').click(function () {
                $('div[id="loginbox"]').slideToggle('slow', function () {});
            });
            
            });
        </script>
        
        <div>
            
            <div>
                <a href="index.php?lang=fr_FR">Francais</a>
                <a href="index.php?lang=en_US">Anglais</a>
            </div>
            
            <connexionblock>
                
                <div id="loginbox">
                
                    <form id="login">
                        
                        <label for="email"><?php echo _("Email :"); ?></label>
                        <input name="email" id="input-email" required type="text" place-holder=<?php echo "\""._("dupont@gmail.com")."\""; ?> />
                        <br />
                        <label for="password"><?php echo _("Password :"); ?></label>
                        <input name="password" id="input-password" required type="password" />
                        
                    </form>
                    
                    <?php echo _("Password forgotten ?"); ?>
                
                </div>
                
                <connexion-button class="left"><?php echo _("Sign in"); ?></connexion-button>
                <connexion-button name="login-button"><?php echo _("Login"); ?></connexion-button>
                
            </connexionblock>
            
            <contentblock>
                
                <a name="First" href="#"></a>
                
                <text-left>
                    <h1><?php echo _("Stop meeting."); ?></h1>
                    <h1>eMeet.</h1>
                </text-left>
                
                <a href="#Second" ><scroll-button class="first-button"><?php echo _("More"); ?></scroll-button></a>
                
            </contentblock>
            
            <contentblock style="background-color: #DDDDDD">
                
                <a name="Second" href="#First"><scroll-button class="second-button-up"><?php echo _("Previous"); ?></scroll-button></a>
                
                <text-right>
                    <h1><?php echo _("Times changed. Adapt."); ?></h1>
                    <hr class="hrbold" />
                    <p2><?php echo _("Everything you knew has changed. People don't interact the same way they did by the past. You don't need to know everyone by obscurs ways to look for your girl."); ?></p2>
                </text-right>
                
                <a href="#Third"><scroll-button class="second-button-down"><?php echo _("More"); ?></scroll-button></a>
                
            </contentblock>
            
            <contentblock>
                
                <a name="Third" href="#Second"><scroll-button class="third-button-up"><?php echo _("Previous"); ?></scroll-button></a>
                
                <text-left>
                    <h1><?php echo _("No money ? No problems."); ?></h1>
                    <hr class="hrbold" />
                    <p2><?php echo _("Every meeting websites urges you to pay. But we, in eMeet, are convinced that you shouldn't have to pay because meeting people you might be with is a part of your life, and you should not have to pay to live your life. So,"); ?></p2>
                    <h1><?php echo _("eMeet is totally free."); ?></h1>
                </text-left>
                
                <a href="#Fourth"><scroll-button class="third-button-down"><?php echo _("More"); ?></scroll-button></a>
                
            </contentblock>
            
            <contentblock style="background-color: #EEEEEE">
                
                <a name="Fourth" href="#Third"><scroll-button class="third-button-up"><?php echo _("Previous"); ?></scroll-button></a>
                
                <text-center>
                    <h1><?php echo _("We offers you the possibility to change your life."); ?></h1>
                    <h1><?php echo _("Suscribe now."); ?></h1>
                </text-center>
                
                <a href="#First"><scroll-button class="third-button-down"><?php echo _("To Top"); ?></scroll-button></a>
                
            </contentblock>
        </div>
       
    </body>
</html>
