<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Kalam:wght@300&family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <title>Kontakti</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="stilicss" rel="stylesheet" href="../CSS/styles.css">
    <link rel="shortcut icon" type="image/png" href="../img/sinani4.png">
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

    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            ev.target.appendChild(document.getElementById(data));
        }
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
    <div class="header" style="background-color:black;"></div>
    <div class="topnav">
        <div class="majtas">
            <div class="majtasnalt">homepage</div>
            <div class="majtasposht">
                <a href="../index.html">Ballina</a>
                <a href="../HTML/Autoret1.html">Autorët</a>
                <a href="../HTML/Librat.html">Librat</a>
                <a href="../HTML/lajmi.html">Lajme</a>
            </div>
        </div>

        <div class="logoja">
            <div class="sinanibabo">
                <img src="../img/sinani.png" alt="pldh" height="130em" width="175em" id='sinani'>
            </div>
            <a href="../index.html" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka Sinan
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
                <a href="../HTML/galeria.html" class="menu-item" id="one">Galeria</a>
                <a href="../HTML/Kontakti.html" class="menu-item" id="two">Kontakti</a>
                <a href="../HTML/kycu.html" class="menu-item" id="three">Kyçu</a>
                <a href="#" id="search"><i class="fa fa-search"></i></a>


            </div>
        </div>
    </div>


    <div>   
        <i onclick="toggleButton()" class="fa fa-moon-o" id="teksti" style="margin-left:0.5em;margin-top:1.1em; font-size: 2em;font-weight: bold; position:-webkit-fixed;position:fixed;z-index: 9999;"></i> 
         
       
       </div>

    <!--      -->
    <div class="pjesa1">
        <div class="foto">
            <center>

                <img src="../img/fadedpic2.jpg" alt="">
            </center>
        </div>
        <div class="banner">

            <center>
                <h3 style="font-family: 'Alfa Slab One', cursive;
font-family: 'Kalam', cursive;
font-family: 'M PLUS 1p', sans-serif; font-size:50px; color:black">SI MUND TË PËRMIRËSOHEMI?</h3>
                <h5 style="font-family: 'Alfa Slab One', cursive;
font-family: 'Kalam', cursive;
font-family: 'M PLUS 1p', sans-serif; font-size:30px;color:black;">Dërgo një sugjerim!</h5>
                <center>


        </div>
    </div>
    <!-- konteti i faqes poshte banner -->

    <div class="rreshtii">
        <div class="shtyllaa1" style="max-width: 30em;">
            <div class="formulari">
                <center>
                    <form class="formularii" action="index.html" method="">
                        <br>
                        <label for="emri">Emri (deri ne 15 shkronja):</label>
                        <input type="text" id="emri" name="name" required minlength="4" maxlength="15" style="height:1.6em; border:0.05px solid black; width:13.2em; background-color: white; z-index:999;">
                        <br><br>
                        <label for="mbiemri">Mbiemri (deri ne 15 shkronja):</label>
                        <input type="text" id="mbiemri" name="name" required minlength="4" maxlength="15" style="height:1.6em; border:0.05px solid black; width:11.7em; background-color: white; z-index:999;">

                        <br><br>

                        <label for="mesazhi">Mesazhi:</label>
                        <textarea id="mesazhi" name="mesazhi" rows="8" cols="44"></textarea>
                        <br><br>
                        <label for="vleresimi">Si e vleresoni kete faqe?</label><br><br>
                        <i class="fa fa-thumbs-o-down"></i><input type="range" id="vleresimi" name="vleresimi" min="0" max="11"><i class="fa fa-thumbs-o-up"></i>
                        <br><br>
                        <label for="id">ID e anetaresimit:</label>
                        <input type="text" id="id" name="id" style="height:1.6em; border:0.1px solid black; width:17em; background-color: white; z-index:999;"><br><br><br>
                        <input class="buton" type="reset" value="Fshij" style="height:2.2em; padding:0.2em; margin-right:0.5em;">
                        <input class="buton" type="submit" value="Dërgo" style="height:2.2em; padding:0.2em; margin-left:0.5em;">
                        <br><br><br>
                    </form>
                </center>
            </div>
        </div>

        <div class="shtyllaa1" style="max-width: 30em;">
            <button class="hapeHarten" type="button" name="button" style="height:2em; margin-right:0em;">Lokacioni</button>
            <button class="mbylleHarten" type="button" name="button" style="height:2em; margin-right:0em;">Mbyll</button>
            <button class="hapeVideon" type="button" name="button" style="height:2em; margin-right:0em;">Video</button>
            <button class="mbylleVideon" type="button" name="button" style="height:2em; margin-right:0em;">Mbyll</button>
            <button class="buton" onclick="getLocation()" style="height:2em; width:12em; margin-top:0em;">Koordinatat tuaja</button>
            <p id="koordinatat" style="display: inline; font-size: 0.75em; padding:0em; margin:0em;"></p>
            <br><br>
            <iframe class="harta" style="margin-top: -0.6em;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13628.870304395936!2d21.08080134046593!3d42.600693811548744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13536281728fbb4f%3A0xbec710e0df782273!2sMiradi%20e%20Eperme!5e1!3m2!1sen!2s!4v1610466107690!5m2!1sen!2s"
                width="550em" height="450em" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


            <video class="videoo" style="margin-top: -0.6em; background-color: black;" src="../img/theniengaSinani.mp4" poster="../img/sinani.jpg" height="450em" width="550em" controls></video>
        </div>
    </div>
    <br><br><br>

    <div class="rreshtii" style="margin-top: -2em;">
        <div class="shtyllaa1">
            <div class="tabela">
                <table id='tabelee'>
                    <tr id="headerr">
                        <th>Nr.</th>
                        <th>Qyteti</th>
                        <th>Viti i hapjes</th>
                        <th>Orari</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Prishtinë</td>
                        <td>2003</td>
                        <td>8:00-18:00</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mitrovicë</td>
                        <td>2006</td>
                        <td>8:00-16:00</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pejë</td>
                        <td>1997</td>
                        <td>8:00-12:00</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Prizren</td>
                        <td>2016</td>
                        <td>8:00-18:00</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Dobrevë</td>
                        <td>1980</td>
                        <td>non-stop</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Gjakovë</td>
                        <td>2008</td>
                        <td>8:00-22:00</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="shtyllaa1">
            <div class="tabela">
                <table id='tabelee'>

                    <tr id="headerr">
                        <td>Nr.</td>
                        <td>Emri</td>
                        <td>Ndrrimi</td>
                        <td>Pozita</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Latif Latifi</td>
                        <td>Paradite</td>
                        <td>Menaxher</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nuredin Vokrri</td>
                        <td>Paradite</td>
                        <td>Pastrues</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Shefki Veli Halilaqi</td>
                        <td>Pasdite</td>
                        <td>Administrate</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Donat Veliu</td>
                        <td>Pasdite</td>
                        <td>Administrate</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Faruk Zjermi</td>
                        <td>Pasdite</td>
                        <td>Ndihmes-menaxher</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Sami Ballabani</td>
                        <td>Paradite</td>
                        <td>Mirëmbajtes i faqes</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Ali Rakia</td>
                        <td>Pasdite</td>
                        <td>Mirëmbajtes i faqes</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <div class="rreshtii">
        <div class="shtyllaa1" style="max-width: 30em;">
            <div class="5" style="margin-top: 0em;">

                <span>Raporto parregullsi: </span><br><br>
                <textarea name="name" rows="8" cols="50" id="border-image"></textarea><br><br>
                <label for="Ankesa">Data dhe ora:</label>
                <input type="datetime-local" id="dataora" name="time" value="2021-01-06T19:30" min="2000-06-07T00:00" max="2021-06-14T00:00" style="border: 0.05px solid rgba(128, 128, 128, 0.322); margin-right: -2em;">
                <br> <br><input class="buton" style="height:2.2em; width:4.5em; font-size:0.9em; padding:0.2em; margin-right: -22em;" type="submit" value="Dërgo">

            </div>
        </div>

        <div class="shtylla1" style="max-width: 30em;">


            <div id="drag" ondrop="drop(event)" ondragover="allowDrop(event)">
                <img src="../img/sinani3.png" draggable="true" ondragstart="drag(event)" id="drag1">
            </div>

            <div id="drop" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
    </div>


    <div class="row4">
        <div class="shortcuts">
            <div class="shortcutnalt">
                <div class="bs">VEGËZA TË DOBISHME</div>
            </div>
            <div class="shortcutposht">
                <a href="../HTML/Librat.html" class="eee" id="sdds">Libra</a>
                <a href="../HTML/Autoret1.html" class="eee" id="fdsfdsf">Autorët</a>
                <a href="../HTML/lajmi.html" class="eee" id="fsdfdsf">Lajme</a>

            </div>
        </div>
    </div>

    <div class="row5">
        <div class="row5pjesepjese">
            <div class="logoja">
                <div class="sinanibabo">
                    <img src="../img/sinani3.png" alt="pldh" height="130em" width="175em" id='sinanibardh'>
                </div>
                <span id="sinaniposht">Biblioteka Sinan Dobreva</span>
            </div>
            <div class="perberja">
                <div class="kolona1p">
                    <span id="lajmekuq5" style="font-size: 1em;">Misioni</span>
                    <br>
                    <p id="kolona1pp">BSD është institucion kulturor, edukues e informues që grumbullon dhe ruan koleksionet e veta nga fushat e ndryshme të krijimtarisë intelektuale me qëllim që t’ i bëjë të njohura shfrytëzuesve për t’i studiuar dhe për t’ i lënë trashëgim
                        gjeneratave të ardhshme.</p>
                    <a href="./Librat.html">
                        <p id="katalogu">Shfleto katalogun</p>
                    </a>
                </div>

                <div class="kolona1p">
                    <span id="lajmekuq5" style="font-size: 1em;">Ofertat</span>
                    <br>
                    <p id="kolona1pp">Biblioteka BSD ofron qasje në materialin bibliotekar për të gjithë përdoruesit e qytetit të Prishtinës me rrethinë, pavarësisht nga raca, kombësia, gjinia, mosha, besimi fetar, gjuha, paaftësitë fizike dhe informon e ndihmon ata në
                        përdorimin e gjetjen e tyre.</p>
                    <a href="../HTML/regjistrohu.html">
                        <p id="katalogu">Regjistrohu</p>
                    </a>
                </div>

                <div class="kolona1p">
                    <span id="lajmekuq5" style="font-size: 1em;">Bashkëpunëtorët</span>
                    <br>
                    <p id="kolona1pp">Biblioteka "Sinan Dobreva" bashkëpunon me bibliotekat në vend dhe jashtë vendit; Bashkëpunon me institucionet kulturore, shtëpitë botuese, shkollat dhe me komunitetin me qëllim të nxitjes së interesimit për librin dhe të mësuarit gjatë
                        gjith jetës. Shfletoni galerinë për më shumë.
                    </p>
                    <a href="../HTML/galeria.html">
                        <p id="katalogu">Galeria</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!--QIThahahahahU JA NIS row6-->

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
                </form> <input type="checkbox" checked="checked" name="subscribe"> <span id="perdite">E-mails të përditshme </span> <br><br>
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

                    <li><a href="../HTML/Librat.html">
              Libra shqip
            </a>
                    </li>
                    <li><a href="../HTML/Librat.html#teHuaj">
              Libra të huaj
            </a></li>
                </ul>
            </div>

            <div class="sbkol2">

                <ul>


                    <li><a href="../HTML/meshum.html">
              Autorë shqiptar
            </a></li>
                    <li><a href="../HTML/meshume.html">
              Autorë të huaj
            </a></li>
                </ul>
            </div>
            <div class="sbkol2">

                <ul>
                    <li><a href="../HTML/lajmi.html"><span>Lajme</span></a>
                    </li>

                </ul>
            </div>
            <div class="sbkol2">

                <ul>

                    <li><a href="../HTML/galeria.html">
              Fotogaleria
            </a>
                    </li>
                    <li><a href="../HTML/galeria.html">
              Videogaleria
            </a>
                    </li>
                </ul>
            </div>
            <div class="sbkol2">

                <ul>
                    <li><a href="../HTML/Kontakti.html"><span>Kontakti</span></a>
                    </li>
                </ul>
            </div>
            <div class="sbkol2">

                <ul>
                    <li><a href="regjistrohu.html"><span>Regjistrohu</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <!-- qitu kryhet homepage ;) -->
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
    <script src="../js/Kontakti.js"></script>



</body>


</html>