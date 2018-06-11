<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Nova+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

    </head>
    <body>

        <div class="modal" data-modal>
            <span class="close">&times;</span>
            <img class="modal-content-img" data-modal-img>            
        </div>
        
        <div class="container">
            <div class="row h-100  align-items-center fixed-top" data-parallax style="z-index: 0;">                        
                <div class="col-12 h-100">                
                    <img class="fit-screen keyart_layer parallax" data-speed="2" src="img/parallax/parallaxe0.png"> 
                    <img class="fit-screen keyart_layer parallax" data-speed="10" src="img/parallax/parallaxe1.png">
                    <img class="fit-screen keyart_layer parallax" data-speed="15" src="img/parallax/parallaxe2.png">
                    <img class="fit-screen keyart_layer parallax" data-speed="22" src="img/parallax/parallaxe4.png">
                    <img class="lucius keyart_layer parallax" data-speed="36" src="img/parallax/parallaxe3.png">                    
                    <img class="fit-screen keyart_layer parallax" data-speed="100" src="img/parallax/parallaxe5.png">
                    <img class="fit-screen keyart_layer parallax" data-speed="100" src="img/parallax/parallaxe6.png">
                </div>
            </div>
            <?php  if (array_key_exists ('es',$_GET) && $_GET['es'] == 1){ 
                    echo ' <div class="alert alert-success alert-dismissible">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                             <strong>Email subscribed!</strong>
                           </div>';
                 } ?>
            <div class="content">               
                <div class="text-content">
                    <div class="row text-justify text-center" data-content>                    
                        <div class="col text-center">
                            <h2 class="header">Deep inside this mystery square world, Lucius searches for his lost child.</h2>
                        </div>                                    
                    </div>

                    <div class="row text-left padding-top">                               
                        <div class="col text text-column-rigth" data-row-col-rigth>                        
                            <div>Tetragon is a 2D puzzle game ambiented in a geometric square world with a four-sided world gravity. The gameplay goes as a sequence of puzzles guided by a deep contextual story.</div>
                        </div>                    
                        <div class="col text text-column-left" data-row-col-left>
                            <div>In order to find his kid, Lucius has to use the power of Tetragem to move towers and interact with rotation hotspots that turn the world ninety degrees.</div>
                        </div>                                                
                    </div>                    
                </div>     

                <div class="row padding-top">                               
                    <iframe class="video" src="https://www.youtube.com/embed/wjq9kwW0P_w" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>  
                <div class="row">                               
                    <div class="col sub-text text-center" style="padding-top:30px">                        
                        <div class=line-decoration style="margin-bottom: 15px"></div>
                        <div>Coming soon on</div>
                        <div>Google Play and Apple Store</div>
                        <div class=line-decoration style="padding-top: 15px"></div>

                    </div>     
                </div>    
                <div class="text-content">
                    <div class="row text-justify text-center">                    
                        <div class="col text-center">
                            <h2 class="sub-header padding-top" >Tetragon is an immersive game, with a gourgeous artstyle and a deep story open for all ages.</h2>
                        </div>                                    
                    </div>

                    <div class="row text-left padding-top">                               
                        <div class="col text text-column-rigth" data-row-col-rigth>                        
                            <div>Somewhere in a different dimension a world made out of planes exists. These planes are orbiting around a sacred jewel called Tetragem. No evil has existed in this world, everything was growing well until a strange energy appeared. A dark creature was born from this energy, destined to destroy the sacred jewel and bring chaos to Tetragon.</div>
                        </div>                    
                        <div class="col text text-column-left" data-row-col-left>
                            <div>The prophecy was accomplished, and the jewel was fragmented between many pieces. Using all his power to imprison the dark creature, Tetragon needed to find a substitute for the jewel. Meanwhile in Lucius world, his bored son is following him along into the woods. Hours passed before Lucius realized his kid was gone.</div>
                        </div>                                                
                    </div>   
                    
                    <div class="row text-left padding-top">
                        <img src="img/img1.jpg" class="thumbnail" data-img>
                        <img src="img/img2.jpg" class="thumbnail" data-img>
                    </div>    
                </div>    

                <div class="row text-justify text-center">                    
                    <div class="col text-center">
                        <h2 class="header padding-top footer-header">Follow our updates</h2>
                    </div>                                    
                </div>

                <div class="row text-justify text-center">                    
                    <div class="col-12 footer-social-midia">    
                        <a href="" class="link">
                            <img class="link" src="img/logo_tetragon.png" style="padding-top: 20px">   
                            <div class="devlog-link link">
                                Devlog
                            </div>                                       
                        </a>                        
                    </div>                                    
                </div>
                <div class="row text-justify text-center">                    
                    <div class="col-12 footer-news-letter">                                                    
                        <div> Subscribe to the Tetragon newsletter</div>
                        <div>
                            <form action="infsave.php" method="post" style="padding-top:5px"> 
                                <input type="text" name="email" class="email-field" id="email" placeholder="Email address">
                                <button type="submit" class="email-button">GO</button>
                            </form>
                        </div>
                    </div>                                    
                </div>
                <div class="row text-justify text-center">                    
                    <div class="col-12 footer-social-midia">
                        <a href="" class="link">
                            <img src="img/logo_insta.png" class="social-link link">                                                       
                        </a>       
                        <a href="" class="link">
                            <img src="img/logo_fb.png" class="social-link link">                                                                
                        </a>       
                        <a href="" class="link">
                            <img src="img/logo_twitter.png" class="social-link link">                                                          
                        </a>       
                    </div>                                    
                </div>
                <div class="row text-justify text-center">                    
                    <div class="col-12 footer-team">
                        <div class="col text-center">
                            <h2 class="header padding-top team-header">Development Team</h2>
                        </div> 
                    </div>                                    
                </div>
                <div class="row text-justify text-center footer-team-photo text-justify ">        
                    <div class="team-container">                  
                        <div class="team-member padding-top">
                            <div class="text-center team-photo">
                                <img src="img/perfil_C.jpg">     
                            </div>      
                            <div class="text-left team-member-detail">
                                <h4 class="team-member-title">Chaves chavito</h4>
                                <div class="team-member-description"> TesteTesteTesteTeste Teste TesteTeste Teste TesteTesteTeste Teste esteTeste Teste TesteTesteTeste Teste </div>                            
                            </div>             
                        </div> 
                        <div class="team-member padding-top">
                            <div class="text-center team-photo">
                                <img src="img/perfil_GC.jpg">     
                            </div>      
                            <div class="text-left team-member-detail">
                                <h4 class="team-member-title">Gabriel Original</h4>
                                <div class="team-member-description"> TesteTesteTesteTeste Teste TesteTeste Teste TesteTesteTeste Teste esteTeste Teste TesteTesteTeste Teste </div>                            
                            </div>             
                        </div> 
                        <div class="team-member padding-top">
                            <div class="text-center team-photo">
                                <img src="img/perfil_GM.jpg">     
                            </div>      
                            <div class="text-left team-member-detail">
                                <h4 class="team-member-title">Gabriel Marafigo II</h4>
                                <div class="team-member-description"> TesteTesteTesteTeste Teste TesteTeste Teste TesteTesteTeste Teste esteTeste Teste TesteTesteTeste Teste </div>                            
                            </div>             
                        </div> 
                        <div class="team-member padding-top">
                            <div class="text-center team-photo">
                                <img src="img/perfil_GU.jpg">     
                            </div>      
                            <div class="text-left team-member-detail">
                                <h4 class="team-member-title">Gustavo Malaco</h4>
                                <div class="team-member-description"> TesteTesteTesteTeste Teste TesteTeste Teste TesteTesteTeste Teste esteTeste Teste TesteTesteTeste Teste </div>                            
                            </div>             
                        </div> 
                        <div class="team-member padding-top">
                            <div class="text-center team-photo">
                                <img src="img/perfil_T.jpg">     
                            </div>      
                            <div class="text-left team-member-detail">
                                <h4 class="team-member-title">Garotinho Thalles</h4>
                                <div class="team-member-description"> TesteTesteTesteTeste Teste TesteTeste Teste TesteTesteTeste Teste esteTeste Teste TesteTesteTeste Teste </div>                            
                            </div>             
                        </div> 
                    </div>                  
                </div>            
            </div>
        </div>       

    </body>
</html>