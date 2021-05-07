<!DOCTYPE html>
<html lang="sq">
<head>
<?php require '../app/views/inc/header.php';?>

<?php require '../app/views/inc/navbar.php';?>

<link id="stilicss" rel="stylesheet" href="./CSS/styles.css">
</head>
    <div>   
         <i onclick="toggleButton()" class="fa fa-moon-o" id="teksti" style="margin-left:0.5em;margin-top:0.5em; font-size: 2em;font-weight: bold; position:-webkit-fixed;position:fixed;z-index: 9999;"></i> 
          
        
        </div>

    <div class="homepage">

        <!--QITU JA NIS row3-->
       
    
               
           
   
        <div class="row">
            <div class="column side">
                
                <div class="lajmi">
                    <a href="./HTML/lajmi.html#kadare"> <img src="./img/ismail-kadare-j-foley-opale-w-1-990x556.jpg"
                            alt="Ismail Kadare duke u dukur bukur!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Ismail Kadare: Fituesi i sivjetshëm i &ccedilmimit Neustadt Prize p&eumlr
                            Literatur&euml</span></a>
                </div><br><br>

                <div class="lajmi">
                    <a href="./HTML/lajmi.html#ekspozita"> <img src="./img/ekspozita.jpeg" alt="Ekspozitaaa!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Ekspozita e librit e mbajtur për nder të 70 vjetorit të lidhjes
                            Shqiptaro-kineze</span></a>
                </div><br><br>

                <div class="lajmi">
                    <a href="./HTML/lajmi.html#nolinjo"> <img src="./img/noli.jpg" alt="Fan STILIAN Noli!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Libraria e Fan Nolit në Boston, rikthim në nacionalizmin shqiptar</span></a>
                </div>

            </div>
            <div class="column middle">
                <div class="lajmimes">
                    <a href="./HTML/lajmi.html#hivzia"> <img src="./img/HIVZIABABOOO.jpg"
                            alt="pls qelu ma shpejt kena me msu pls plsplspslsp!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Kanë filluar punimet për renovimin e ndërtesës së bibliotekës së qytetit, “Hivzi
                            Sulejmani”</span><br>
                        <span id='elaborimi'>Kanë filluar punimet e renovimit të ndërtesës së bilbliotekës “Hivzi
                            Sulejmani” me
                            qëllim të përmirësimit
                            të infrastruktures, hapësirës brenda bibliotekës dhe kushteve për shërbime më cilësore për
                            lexuesit.</span>
                    </a>
                </div><br><br>

                <div class="lajmimes">
                    <a href="./HTML/lajmi.html#minibibliotekat"> <img src="./img/mini-biblioteka.jpg"
                            alt="Biblioteka!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Lagjet e Prishtinës bëhen me mini-biblioteka</span><br>
                        <span id='elaborimi'>OJQ “Etea” dhe Kuvendi i të Rinjve të Prishtinës kanë bërë hapjen e
                            mini-bibliotekës në lagjet e Prishtinës. </span></a>
                </div><br><br>


            </div>


            <div class="column side">
                <div class="lajmi">
                    <a href="./HTML/lajmi.html#leximi"> <img src="./img/Dukagjinn-640x480.jpg"
                            alt="Ismail Kadare duke u dukur bukur!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Leximi gjatë pandemisë, bibliotekat pa vizitorë dhe lulëzim i shitjes së
                            librave</span></a>
                </div><br><br>

                <div class="lajmi">
                    <a href="./HTML/lajmi.html#sos"> <img src="./img/dhurohenlibra.png
            " alt="Ekspozitaaa!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Dhurohen libra në SOS Fshatin e fëmijëve</span></a>
                </div><br><br>

                <div class="lajmi">
                    <a href="./HTML/lajmi.html#fishta"> <img
                            src="https://kallxo.com/wp-content/uploads/2020/12/Ekspozita-per-Atm%C3%A9-e-f%C3%A9--640x480.jpg"
                            alt="Fan STILIAN Noli!!!">
                        <span id='lajmekuq'>LAJME</span><br>
                        <span>Dorëshkrime të rralla të Fishtës ekspozohen në Bibliotekën Kombëtare</span></a>
                </div>
            </div>
        </div>

        <!--QITU JA NIS row2-->
        <div class="row2">
            <div class="kolonarresht">

                <div class="slideshow-container">

                    <div class="Sllajdet">
                        <a href="#"><img src="./img/rezervo.png" style="width:100%" id="kliko"></a>
                    </div>

                    <div id="dialogoverlay"></div>
                    <div id="dialogbox">
                        <div>
                            <div id="dialogboxhead"></div>
                            <div id="dialogboxbody"></div>
                            <div id="dialogboxfoot"></div>
                        </div>
                    </div>

                    <div class="Sllajdet">
                        <img src="./img/noli.jpg" style="width:100%">
                    </div>

                    <div class="Sllajdet">
                        <img src="./img/ismail-kadare-j-foley-opale-w-1-990x556.jpg" style="width:100%">
                    </div>

                    <a class="mrapa" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="para" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>

            </div>
        </div>

        <div class="bs">LIBRAT MË TË HUAZUAR</div>
        <div class="bestsellers">

            <div class="libri">
                <article>
                    <div class="bestsellersimg">
                        <img class="fototmodal" src="./img/hasha.jpg" style="width:100%; max-height:30em">
                        <div id="myModal">
                            <span class="close">×</span>
                            <img id="img">

                        </div>
                    </div>
                    <div class="bestsellerstitulli">New State, Modern Statesman: Hashim Thaçi - A Biography
                    </div>
                </article>
            </div>


            <div class="libri">
                <section>
                    <div class="bestsellersimg">
                        <img class="fototmodal" src="./img/joe.jpg" style="width:100%; max-height:30em">
                        <div id="myModal">
                            <span class="close">×</span>
                            <img id="img">

                        </div>
                    </div>
                    <div class="bestsellerstitulli"> Promise Me, Dad: The heartbreaking story of Joe Biden
                    </div>
                </section>
            </div>


            <div class="libri">
                <div class="bestsellersimg">
                    <img class="fototmodal" src="./img/melania.jpg" style="width:100%; max-height:30em">
                    <div id="myModal">
                        <span class="close">×</span>
                        <img id="img">

                    </div>
                </div>
                <div class="bestsellerstitulli"> The Art of Her Deal: The Untold Story of Melania Trump
                </div>
            </div>

            <div class="libri">
                <div class="bestsellersimg">
                    <img class="fototmodal" src="./img/kupi.png" style="width:100%; max-height:30em">
                    <div id="myModal">
                        <span class="close">×</span>
                        <img id="img">

                    </div>
                </div>
                <div class="bestsellerstitulli"> Kosova in a historical context
                </div>
            </div>

            <div class="libri">
                <div class="bestsellersimg">
                    <img class="fototmodal" src="./img/xhaxhienver.png" style="width:100%; max-height:30em">
                    <div id="myModal">
                        <span class="close">×</span>
                        <img id="img">

                    </div>
                </div>
                <div class="bestsellerstitulli"> Enver Hoxha: The Iron Fist of Albania
                </div>
            </div>
        </div>
        <br><br>

        <div class="bs">AUTORËT E HUAJ MË TË LEXUAR</div>


        <!--QITU JA NIS row3-->


        <div class="row3">
            <div class="kolona1">
                <div class="autori">
                    <a href="./HTML/meshume.html#MT"> <img src="./img/MT.jpg" alt="Ekspozitaaa!!!"><br>
                        <span id='lajmekuq'>Më shumë</span><br>
                        <span>Mark Twain</span></a>
                </div><br><br>

                <div class="autori">
                    <a href="./HTML/meshume.html#Edgar"> <img src="./img/EAP.jpg" alt="Fan STILIAN Noli!!!"><br>
                        <span id='lajmekuq'>Më shumë</span><br>
                        <span>Edgar Allan Poe</span></a>
                </div>

            </div>
            <div class="kolona2">
                <div class="autori">
                    <a href="./HTML/meshume.html#FK"> <img src="./img/FK.jpg"
                            alt="pls qelu ma shpejt kena me msu pls plsplspslsp!!!"><br>
                        <span id='lajmekuq'>Më shumë</span><br>
                        <span>Franz Kafka</span><br>
                    </a>
                </div><br><br><br>

                <div class="autori">
                    <a href="./HTML/meshume.html#Ernest"> <img src="./img/EH.jpg" alt="!!!"><br>
                        <span id='lajmekuq'>Më shumë</span><br>
                        <span>Ernest Hemingway</span><br></a>
                </div><br><br>


            </div>


            <div class="kolona3">
                <div class="autorimmv">
                    <div class="dantepjesepjese">
                        <div class="fotojadantes">
                            <a href="/HTML/meshume.html#Dante"> <img src="./img/dante.png" alt="!!!">
                        </div><br>
                        <div class="emrietj">Dante Alighieri<br>
                            <span id='lajmekuq'>Më shumë</span><br>
                            <span id="perdanten"><strong>'Dantja i pashmangshëm'</strong> ose <br> <strong>'Histori e
                                    shkurtër e
                                    Shqipërisë me
                                    Dante
                                    Aligerin'</strong> <br> sprovë me Autor Ismail Kadare.</span>
                        </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <br><br>


        <!--QITU JA NIS SUBFOOTER-->

        
        <!-- qiky /div e mshel homepage ;) -->
    </div>


   <?php require '../app/views/inc/footer.php';?>