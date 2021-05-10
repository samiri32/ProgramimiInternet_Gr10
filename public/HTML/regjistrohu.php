<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Regjistrohu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="stilicss" rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../img/sinani4.png">
    <link rel="stylesheet" href="../css/regjistrohu.css">
    <link rel="stylesheet" href="../css/kycu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        window.onscroll = function() {
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

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').click(function() {
                $('.menu-item').toggleClass('hide-item')
                $('.search-form').toggleClass('active')
            })
        })
    </script>

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
    </style>
</head>


<body>
    <div class="header" style="background-color: black;"></div>

    <div class="topnav">
        <div class="majtas">
            <div class="majtasnalt">homepage</div>
            <div class="majtasposht">
                <a href="../index.html">Ballina</a>
                <a href="./Autoret1.html">Autorët</a>
                <a href="../HTML/Librat.html">Librat</a>
                <a href="./lajmi.html">Lajme</a>
            </div>
        </div>

        <div class="logoja">
            <div class="sinanibabo">
                <img src="../img/sinani.png" alt="pldh" height="130em" width="175em" id='sinani'>
            </div>
            <a href="../index.html" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka Sinan Dobreva</span></a>
        </div>
        <div class="djathtas">
            <div class="djathtasnalt">homepage</div>
            <div class="djathtasposht">
                <div class="search-form">
                    <form>
                        <input type="text" name="" placeholder="Kërkoni">
                    </form>
                </div>
                <a href="../HTML/galeria.html" class="menu-item" id="one">Galeria</a>
                <a href="../HTML/Kontakti.html" class="menu-item" id="two">Kontakti</a>
                <a href="../HTML/kycu.html" class="menu-item" id="three">Kyçu</a>
                <a href="#" id="search"><i class="fa fa-search"></i></a>


            </div>
        </div>
    </div>
    <div>   
        <i onclick="toggleButton()" class="fa fa-moon-o" id="teksti" style="margin-left:0.5em;margin-top:0.5em; font-size: 2em;font-weight: bold; position:-webkit-fixed;position:fixed;z-index: 9999;"></i> 
         
       
       </div>

    <div class="homepage">
        <div class="regjistrohunidiv">
            <form id="regjistrohuform" form name="Formaperregjister" action="./submit.html" target="_blank" onsubmit="return REGJISTRIMI()" method="post">

                <div class="konga">
                    <center>
                        <audio controls autoplay>
                      <source src="../img/Muharrem Qena Mallengjimi.mp3" type="audio/mpeg">
                    Shnosh :/
                    </audio><br><br>
                        <h1 style="text-align: center; display: inline;">Regjistrohuni në BSD</h1><br>
                    </center>
                </div>


                <p>Emri:<br> <input type="text" size="65" style="background-color: white; border: 0.01em solid black; height:1.5em;" name="Emri" autocomplete="on" id="rrite"></p>
                <br>
                <p>Adresa:<br> <input type="text" style="background-color: white;border: 0.01em solid black; height:1.5em;" size="65" name="Adresa" id="rrite"></p>
                <br>
                <p>E-mail:<br> <input type="text" style="background-color:white;border: 0.01em solid black; height:1.5em;" size="65" autocomplete="on" name="Email" id="rrite"></p>
                <br>
                <p>Password:<br> <input type="password" style="background-color: white;border: 0.01em solid black; height:2em; width:44.1em;" title="Fjalekalimi juaj duhet te permbaje shkronja te vogla, shkronja te medha dhe numra." name="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"></p>
                <br>
                <p>Telefoni:<br><input type="text" pattern="[0-9]{9}" title="Numri i telefonit duhet te jete mobil, ti permbaje 9 shifra. Formati: 04x-xxx-xxx" style="background-color: white;border: 0.01em solid black; height:1.5em;" name="Telefoni" id="rrite"></p>
                <br>
                <p>Gjinia:</p>
                <input type="radio" name="Gjinia" value="mashkull">
                <label for="male">Mashkull</label><br>
                <input type="radio" name="Gjinia" value="femër">
                <label for="female">Femër</label><br>
                <input type="radio" name="Gjinia" value="tjetër">
                <label for="other">Tjetër</label>
                <br>
                <br>
                <p>
                    Kategoria:
                    <select type="text" value="" name="Lloji" id="rrite"> 
                      <option value="none" selected disabled hidden></option>
                        <option>Nxënës</option> 
                        <option>Student</option> 
                        <option>Staf</option> 
                        <option>Tjetër</option> 
                        
                    </select>
                </p><br>
                <p>Nga keni ndëgjuar për bibliotekën BSD?</p>
                <input type="text" list="referent" style="border:0.05px solid black; background-color: white; height:2em">
                <datalist id="referent">
                        <option value="Familja apo shoqëria">
                        <option value="Rrjetet sociale">    
                        <option value="Reklamat">
                        <option value="Në shkollë">
                        <option value="Në punë">
                        <option value="Tjetër">
                    </datalist>
                <br>
                <br>
                <p>Koment:<br> <textarea cols="55" name="Koment" id="komenti" style="background-color: white"> </textarea></p>
                <p style="display: flex; float: left; column-gap: 1em; height:2em; width:5em;">
                    <input type="submit" value="Regjistrohu" name="Regjistrohu" id="ndrysho" class="dergooo">
                    <input type="reset" value="Fshij" name="Fshij" id="ndrysho">
                </p>
                <div class="tekstikolona">
                    Duke klikuar 'Regjistrohu' ju i pranoni termet dhe kushtet për regjistrim në bibliotekën tonë. Pasi të keni klikuar 'Regjistrohu' ju do të dërgoheni në një faqe ku mund të zgjidhni pakon e regjistrimit varësisht prej kategorisë që i takoni. Apo mund të
                    klikoni "vazhdo" nëse nuk doni të bleni ndonjë pako menjëherë. Për çdo rast ju mund të shikoni profilin tuaj për të parë llojin e pakos në të cilën jeni abonuar. Biblioteka jonë ofron 1 muaj falas abonim. Ju do të pranoni email para
                    se të skadojë kjo ofertë.
                </div>
            </form>

        </div>



        <div class="row4">
            <div class="shortcuts">
                <div class="shortcutnalt">
                    <div class="bs">VEGËZA TË DOBISHME</div>
                </div>
                <div class="shortcutposht">
                    <a href="#" class="eee" id="sdds">Libra</a>
                    <a href="./Autoret1.html" class="eee" id="fdsfdsf">Autorët</a>
                    <a href="./lajmi.html" class="eee" id="fsdfdsf">Lajme</a>

                </div>
            </div>
        </div>

        <div class="row5">
            <div class="row5pjesepjese">
                <div class="logoja">
                    <div class="sinanibabo">
                        <img src="../img/sinani3.png" alt="pldh" height="130em" width="175em" id='sinanibardh' >
                    </div>
                    <span id="sinaniposht">Biblioteka Sinan Dobreva</span>
                </div>
                <div class="perberja">
                    <div class="kolona1p">
                        <span id="lajmekuq5" style="font-size: 1em;">Misioni</span>
                        <br>
                        <p id="kolona1pp">BSD është institucion kulturor, edukues e informues që grumbullon dhe ruan koleksionet e veta nga fushat e ndryshme të krijimtarisë intelektuale me qëllim që t’ i bëjë të njohura shfrytëzuesve për t’i studiuar dhe për t’ i lënë
                            trashëgim gjeneratave të ardhshme.</p>
                        <a href="./Librat.html">
                            <p id="katalogu">Shfleto katalogun</p>
                        </a>
                    </div>

                    <div class="kolona1p">
                        <span id="lajmekuq5" style="font-size: 1em;">Ofertat</span>
                        <br>
                        <p id="kolona1pp">Biblioteka BSD ofron qasje në materialin bibliotekar për të gjithë përdoruesit e qytetit të Prishtinës me rrethinë, pavarësisht nga raca, kombësia, gjinia, mosha, besimi fetar, gjuha, paaftësitë fizike dhe informon e ndihmon ata
                            në përdorimin e gjetjen e tyre.</p>
                        <a href="../HTML/regjistrohu.html">
                            <p id="katalogu">Regjistrohu</p>
                        </a>
                    </div>

                    <div class="kolona1p">
                        <span id="lajmekuq5" style="font-size: 1em;">Bashkëpunëtorët</span>
                        <br>
                        <p id="kolona1pp">Biblioteka "Sinan Dobreva" bashkëpunon me bibliotekat në vend dhe jashtë vendit; Bashkëpunon me institucionet kulturore, shtëpitë botuese, shkollat dhe me komunitetin me qëllim të nxitjes së interesimit për librin dhe të mësuarit
                            gjatë gjith jetës. Shfletoni galerinë për më shumë.</p>
                        <a href="../HTML/galeria.html">
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
                    <form autocomplete="on" action="/action_page.php">
                        <div class="autocomplete" style="width: 25em;">
                            <input id="myInput" type="text" name="myEmail" placeholder="E-mail" style="background-color:white;">
                        </div>
                        <button class="buton">Dërgo</button>
                    </form><input type="checkbox" checked="checked" name="subscribe"> <span id="perdite">E-mails të përditshme </span> <br><br>
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

                        <li><a href="./Librat.html">
           Libra shqip
          </a>
                        </li>
                        <li><a href="./Librat.html#teHuaj">

          Libra të huaj
        </a></li>
                    </ul>
                </div>

                <div class="sbkol2">

                    <ul>


                        <li><a href="./meshum.html">
           Autorë shqiptar
         </a></li>
                        <li><a href="./meshume.html">
          Autorë të huaj
        </a></li>
                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>
                        <li><a href="./lajmi.html"><span>Lajme</span></a>
                        </li>

                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>

                        <li><a href="../HTML/galeria.html">
              Fotogaleria
            </a>
                        </li>
                        <li><a href="./galeria.html">
            Videogaleria
          </a>
                        </li>
                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>
                        <li><a href="./Kontakti.html"><span>Kontakti</span></a>
                        </li>
                    </ul>
                </div>
                <div class="sbkol2">

                    <ul>
                        <li><a href="./regjistrohu.html"><span>Regjistrohu</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <footer class="futeri">
        <div class="futerimrena">

            <div class="futerimamrena">
                <div class="sbkol3">
                    <a href="#" id="socialmedia" style="padding-right:0.5em;"><i class="fa fa-instagram" ></i></a>
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
                    <span style="font-size:0.85em;">©2020-2021 <abbr title="Biblioteka Sinan Dobreva">BSD</abbr> Të gjitha të drejtat e rezervuara.</span>
                </div>
            </div>

        </div>
    </footer>
    <script>
        const theme = document.querySelector("#stilicss");
 
 console.log(localStorage);
 
 remember();
 
 function darkMode() {
 
     theme.href = '../CSS/stylesdark.css';
     localStorage.setItem("color", "dark");
     console.log(localStorage);
     document.getElementById("teksti").className = "fa fa-sun-o";
     document.getElementById("teksti").style.color = "white";
     document.getElementById("teksti").style.backgroundColor = "transparent";
 
 }
 
 function lightMode() {
 
     theme.href = "../CSS/styles.css";
     localStorage.setItem("color", "light");
     console.log(localStorage);
     document.getElementById("teksti").className = "fa fa-moon-o";
     document.getElementById("teksti").style.color = "black";
     document.getElementById("teksti").style.backgroundColor = "transparent";
 
 }
 
 function toggleButton() {
 
     if (localStorage.getItem("color") == ("light")) {
 
         darkMode();
     }
     else if (localStorage.getItem("color") == ("dark")) {
 
         lightMode();
     }
 }
 
 function remember() {
     if (localStorage.getItem("color") == ("light")) {
 
         lightMode();
 
     }
     else if (localStorage.getItem("color") == ("dark")) {
 
         darkMode();
 
     }
 }
 
 </script>
    <script src="../js/regjistrohu.js"></script>


</body>

</html>