<!DOCTYPE html>
<html lang="sq">

<head>
    <title>BIBLIOTEKA SINAN DOBREVA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./img/sinani4.png">
    <link rel="stylesheet" href = "./CSS/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        window.onscroll = function () {
            growShrinkLogo()
        };

        function growShrinkLogo() {
            var sinani = document.getElementById("sinani")
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                sinani.style.width = "5em";
                sinani.style.height = "3.5em";

            } else {
                sinani.style.width = "8em";
                sinani.style.height = "6em";
            }
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#search').click(function () {
                $('.menu-item').toggleClass('hide-item')
                $('.search-form').toggleClass('active')
            })
        })
    </script>


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
        }

        .sinanibabo {
            display: flex;
            justify-content: center;
        }

        .logoja {
            display: inline-grid;
            justify-content: center;
        }

        .titulli {
            color: white;
            font-size: 1.45em;
        }

        .titulli:hover {
            color: #0075ff;
        }

        .header {
            background-color: black;
            height: 1.25em;
            color: white;
            text-decoration: none;
        }

        .djathtas {
            display: grid;
            align-content: space-between;
        }

        .majtas {
            align-content: space-between;
            display: grid;
        }

        .topnav {
            display: flex;
            justify-content: center;
            overflow: hidden;
            position: -webkit-sticky;
            position: sticky;
            z-index: 1;
            top: 0;
            padding: 0px;
            background-color: black;
            border: 2px solid;
        }

        .topnav a {
            font-size: 1.45em;
            color: #f2f2f2;
            padding: 0px 30px;
            text-decoration: none;
        }

        .topnav a:hover {
            color: #0075ff;
        }

        .djathtasposht a.menu-item {
            transform: scale(1);
            display: inline-block;
            transition: 0.5s;
        }

        .djathtasposht a.menu-item.hide-item {
            transform: scale(0);
        }

        #one {
            transition-delay: 0.2s;
        }

        #two {
            transition-delay: 0.1s;
        }

        #three {
            transition-delay: 0s;
        }

        .search-form {
            display: inline-block;
            position: sticky;
            margin-bottom: 0.3em;
            top: 8em;
            right: 28em;
            transform: translateX(-50%);
            width: 0em;
            height: 1em;
            transition: 0.6s;
            opacity: 0;
            visibility: hidden;
        }

        .search-form.active {
            position: sticky;
            top: 8em;
            right: 28em;
            width: 0em;
            height: 1em;
            opacity: 1;
            transition-delay: 0.4s;
            visibility: visible;
            background: transparent;
        }

        .search-form input {
            margin-left: 1.5em;
            margin-top: -0.2em;
            width: 15em;
            height: 1.5em;
            color: white;
            border: none;
            background: transparent;
            outline: none;
            font-size: 1.1em;
        }

        #dialogoverlay {
            display: none;
            opacity: .8;
            position: fixed;
            top: 0px;
            left: 0px;
            background: rgba(7, 7, 7, 0.925);
            width: 100%;
            z-index: 10;
        }

        #dialogbox {
            margin-top: 2.6em;
            display: none;
            position: fixed;
            width: 550px;
            z-index: 10;
        }

        #dialogbox>div {
            background: #FFF;
            margin: 8px;
        }

        #dialogbox>div>#dialogboxhead {
            background-color: rgb(0, 0, 0);
            font-size: 19px;
            padding: 10px 20px;
            color: #fafbfd;
        }

        #dialogbox>div>#dialogboxbody {
            background-color: #eeeeee;
            padding: 40px;
            color: #0c0c0c;
            border-top: 0.5em solid #0077ff2c;
        }

        #dialogbox>div>#dialogboxfoot {
            background-color: white;
            padding: 10px;
            text-align: right;
        }
    </style>
</head>




<body onload="showSlides(1)">
    
    <div class="header"></div>
    <div class="topnav">
        <div class="majtas">
            <div class="majtasnalt">homepage</div>
            <div class="majtasposht">
                <a href="./index.html">Ballina</a>
                <a href="./HTML/Autoret1.html">Autorët</a>
                <a href="./HTML/Librat.html">Librat</a>
                <a href="./HTML/lajmi.html">Lajme</a>
            </div>
        </div>

        <div class="logoja">
            <div class="sinanibabo">
                <img src="./img/sinani.png" alt="pldh" height="130em" width="175em" id='sinani'>
            </div>
            <a href="./index.html" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka
                    Sinan
                    Dobreva</span></a>
        </div>

        <div class="djathtas">
            <div class="djathtasnalt">homepage</div>
            <div class="djathtasposht">
                <div class="search-form">
                    <form>
                        <input type="text" name="" placeholder="Kërkoni">
                    </form>
                </div>
                <a href="./HTML/galeria.html" class="menu-item" id="one">Galeria</a>
                <a href="./HTML/Kontakti.html" class="menu-item" id="two">Kontakti</a>
                <a href="./HTML/kycu.html" class="menu-item" id="three">Kyçu</a>
                <a href="#" id="search"><i class="fa fa-search"></i></a>


            </div>
        </div>
    </div>
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

        <div class="row4">
            <div class="shortcuts">
                <div class="shortcutnalt">
                    <div class="bs">VEGËZA TË DOBISHME</div>
                </div>
                <div class="shortcutposht">
                    <a href="./HTML/Librat.html" class="eee" id="sdds">Libra</a>
                    <a href="./HTML/Autoret1.html" class="eee" id="fdsfdsf">Autorët</a>
                    <a href="./HTML/lajmi.html" class="eee" id="fsdfdsf">Lajme</a>

                </div>
            </div>
        </div>

        <div class="row5">
            <div class="row5pjesepjese">
                <div class="logoja">
                    <div class="sinanibabo">
                        <img src="./img/sinani3.png" alt="pldh" height="130em" width="175em" id='sinanibardh'
                            style="background-color: black;">
                    </div>
                    <span id="sinaniposht">Biblioteka Sinan Dobreva</span>
                </div>
                <div class="perberja">
                    <div class="kolona1p">
                        <span id="lajmekuq5" style="font-size: 1em;">Misioni</span>
                        <br>
                        <p id="kolona1pp">BSD është institucion kulturor, edukues e informues që grumbullon dhe ruan
                            koleksionet e veta nga fushat e ndryshme të krijimtarisë intelektuale me qëllim që t’ i bëjë
                            të njohura shfrytëzuesve për t’i studiuar dhe për t’ i lënë
                            trashëgim gjeneratave të ardhshme.</p>
                        <a href="./HTML/Librat.html">
                            <p id="katalogu">Shfleto katalogun</p>
                        </a>
                    </div>

                    <div class="kolona1p">
                        <span id="lajmekuq5" style="font-size: 1em;">Ofertat</span>
                        <br>
                        <p id="kolona1pp">Biblioteka BSD ofron qasje në materialin bibliotekar për të gjithë përdoruesit
                            e qytetit të Prishtinës me rrethinë, pavarësisht nga raca, kombësia, gjinia, mosha, besimi
                            fetar, gjuha, paaftësitë fizike dhe informon e ndihmon ata
                            në përdorimin e gjetjen e tyre.</p>
                        <a href="./HTML/regjistrohu.html">
                            <p id="katalogu">Regjistrohu</p>
                        </a>
                    </div>

                    <div class="kolona1p">
                        <span id="lajmekuq5" style="font-size: 1em;">Bashkëpunëtorët</span>
                        <br>
                        <p id="kolona1pp">Biblioteka "Sinan Dobreva" bashkëpunon me bibliotekat në vend dhe jashtë
                            vendit; Bashkëpunon me institucionet kulturore, shtëpitë botuese, shkollat dhe me
                            komunitetin me qëllim të nxitjes së interesimit për librin dhe të mësuarit
                            gjatë gjith jetës. Shfletoni galerinë për më shumë.
                        </p>
                        <a href="./HTML/galeria.html">
                            <p id="katalogu">Galeria</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <!--QITU JA NIS row6-->

        <div class="row6">
            <div class="subfooternalt">
                <div class="sbkol1">
                    <span id="sf">Regjistrohu për të pranuar e-mails nga Biblioteka</span><br><br>
                    <!-- Qitu ni form per Anetaresim (mail subscription)-->
                    <form autocomplete="on">
                        <div class="autocomplete" style="width: 25em;">
                            <input id="myInput" type="text" name="myEmail" placeholder="E-mail"
                                style="background-color:white;">
                        </div>
                        <button class="buton">Dërgo</button>
                    </form> <input type="checkbox" checked="checked" name="subscribe" ><span id="perdite">E-mails të përditshme </span><br><br>
                </div>

                <div class="sbkol1">
                    <span id="sf">Porosit katalogun e librave</span><br><br>
                    <button class="buton">Porosit</button>
                    <h5 id="h5">Plotësisht falas!</h5>
                </div>

            </div>

            <div class="subfooterposht">

                <div class="sbkol2">

                    <ul>

                        <li><a href="./HTML/Librat.html">
                                Libra shqip
                            </a>
                        </li>
                        <li><a href="./HTML/Librat.html#teHuaj">
                                Libra të huaj
                            </a></li>
                    </ul>
                </div>

                <div class="sbkol2">

                    <ul>


                        <li><a href="./HTML/meshum.html">
                                Autorë shqiptar
                            </a></li>
                        <li><a href="./HTML/meshume.html">
                                Autorë të huaj
                            </a></li>
                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>
                        <li><a href="./HTML/lajmi.html"><span>Lajme</span></a>
                        </li>

                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>

                        <li><a href="./HTML/galeria.html#fotogaleriah3">
                                Fotogaleria
                            </a>
                        </li>
                        <li><a href="./HTML/galeria.html#videogaleriah3">
                                Videogaleria
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>
                        <li><a href="./HTML/Kontakti.html"><span>Kontakti</span></a>
                        </li>
                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>
                        <li><a href="./HTML/regjistrohu.html"><span>Regjistrohu</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>


        <!-- qiky /div e mshel homepage ;) -->
    </div>


    <footer class="futeri">
        <div class="futerimrena">

            <div class="futerimamrena">
                <div class="sbkol3">
                    <a href="#" id="socialmedia" style="padding-right:0.5em;"><i class="fa fa-instagram"></i></a>
                    <a href="#" id="socialmedia" style="padding-right:0.5em;"><i class="fa fa-facebook"></i></a>
                    <a href="#" id="socialmedia"><i class="fa fa-twitter"></i></a>
                </div>

                <div class="sbkol3">
                    <span id="suxhuki">Për sugjerime:</span>
                    <a href="mailto: BSDa@biblioteka.com" id="socialmedia" style="padding-left: 0.15em;">
                        <i class="fa fa-envelope"></i></a>
                </div>

                <div class="sbkol3">
                    <address style="font-size:0.8em">
                        Dobrevë, 10000<br>
                        Kosovë
                    </address>
                </div>

                <div class="sbkol33">
                    <span style="font-size:0.85em;">©2020-2021 <abbr title="Biblioteka Sinan Dobreva">BSD</abbr> Të
                        gjitha të
                        drejtat e rezervuara.</span>
                </div>
                
            </div>

        </div>
    </footer>



    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register('sw.js')
                .then(function () {
                    console.log("Service Worker Registered");
                });
        }
    </script>

    <script src="./js/skripta.js"></script>
    <script src="./js/konfirmimi.js"></script>

 
</body>

</html>