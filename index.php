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
            });
        </script>
        
        <div>
            <contentblock>
                
                <a name="First" href="#"></a>
                
                <text-left>
                    <h1>Stop meeting.</h1>
                    <h1>eMeet.</h1>
                </text-left>
                
                <a href="#Second" ><scroll-button class="first-button">More</scroll-button></a>
                
            </contentblock>
            
            <contentblock style="background-color: #DDDDDD">
                
                <a name="Second" href="#First"><scroll-button class="second-button-up">Previous</scroll-button></a>
                
                <text-right>
                    <h1>Times changed. Adapt.</h1>
                    <hr class="hrbold" />
                    <p2>Everything you knew has changed. People don't interact the 
                    same way they did by the past. You don't need to know everyone
                    by obscurs ways to look for your girl.</p2>
                </text-right>
                
                <a href="#Third"><scroll-button class="second-button-down">More</scroll-button></a>
                
            </contentblock>
            
            <contentblock>
                
                <a name="Third" href="#Second"><scroll-button class="third-button-up">Previous</scroll-button></a>
                
                <text-left>
                    <h1>No money ? No problems.</h1>
                    <hr class="hrbold" />
                    <p2>
                        Every meeting websites urges you to pay. But we, in eMeet, 
                        are convinced that you shouldn't have to pay because meeting
                        people you might be with is a part of your life, and you
                        should not have to pay to live your life. So, 
                    </p2>
                    <h1>eMeet is totally free.</h1>
                </text-left>
                
                <a href="#Fourth"><scroll-button class="third-button-down">Subscribe</scroll-button></a>
                
            </contentblock>
            
            <contentblock style="background-color: #EEEEEE">
                
                <a name="Fourth" href="#Third"><scroll-button class="third-button-up">Previous</scroll-button></a>
                
                <text-center>
                    <h1>We offers to you the possibility to change your life.</h1>
                    <h1>Subscribe now.</h1>
                </text-center>
                
                <a href="#First"><scroll-button class="third-button-down">To Top</scroll-button></a>
                
            </contentblock>
        </div>
       
    </body>
</html>