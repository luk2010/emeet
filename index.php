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
                        
                        <label for="email"><?php echo _("EMAIL_LABEL"); ?></label>
                        <input name="email" id="input-email" required type="text" place-holder=<?php echo "\""._("EMAIL_PLACEHOLDER")."\""; ?> />
                        <br />
                        <label for="password"><?php echo _("PASSWORD_LABEL"); ?></label>
                        <input name="password" id="input-password" required type="password" />
                        
                    </form>
                    
                    <?php echo _("PASSWORD_FORGOTTEN"); ?>
                
                </div>
                
                <connexion-button class="left"><?php echo _("SIGN_IN_BUTTON"); ?></connexion-button>
                <connexion-button name="login-button"><?php echo _("LOG_IN_BUTTON"); ?></connexion-button>
                
            </connexionblock>
            
            <contentblock>
                
                <a name="First" href="#"></a>
                
                <text-left>
                    <h1><?php echo _("EMEET_DEMO1"); ?></h1>
                    <h1>eMeet.</h1>
                </text-left>
                
                <a href="#Second" ><scroll-button class="first-button"><?php echo _("EMEET_DEMO_MORE"); ?></scroll-button></a>
                
            </contentblock>
            
            <contentblock style="background-color: #DDDDDD">
                
                <a name="Second" href="#First"><scroll-button class="second-button-up"><?php echo _("EMEET_DEMO_PREVIOUS"); ?></scroll-button></a>
                
                <text-right>
                    <h1><?php echo _("EMEET_DEMO2_TITLE"); ?></h1>
                    <hr class="hrbold" />
                    <p2><?php echo _("EMEET_DEMO2_TEXT"); ?></p2>
                </text-right>
                
                <a href="#Third"><scroll-button class="second-button-down"><?php echo _("EMEET_DEMO_MORE"); ?></scroll-button></a>
                
            </contentblock>
            
            <contentblock>
                
                <a name="Third" href="#Second"><scroll-button class="third-button-up"><?php echo _("EMEET_DEMO_PREVIOUS"); ?></scroll-button></a>
                
                <text-left>
                    <h1><?php echo _("EMEET_DEMO3_TITLE"); ?></h1>
                    <hr class="hrbold" />
                    <p2><?php echo _("EMEET_DEMO3_TEXT"); ?></p2>
                    <h1><?php echo _("EMEET_DEMO3_TEXT2"); ?></h1>
                </text-left>
                
                <a href="#Fourth"><scroll-button class="third-button-down"><?php echo _("EMEET_DEMO_MORE"); ?></scroll-button></a>
                
            </contentblock>
            
            <contentblock style="background-color: #EEEEEE">
                
                <a name="Fourth" href="#Third"><scroll-button class="third-button-up"><?php echo _("EMEET_DEMO_PREVIOUS"); ?></scroll-button></a>
                
                <text-center>
                    <h1><?php echo _("EMEET_DEMO4_P1"); ?></h1>
                    <h1><?php echo _("EMEET_DEMO4_P2"); ?></h1>
                </text-center>
                
                <a href="#First"><scroll-button class="third-button-down">To Top</scroll-button></a>
                
            </contentblock>
        </div>
       
    </body>
</html>