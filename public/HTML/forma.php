<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Rezervime</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="./img/sinani4.png">
    <link id="stilicss" rel="stylesheet" href="../CSS/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" type="image/png" href="../img/sinani4.png">
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
    <script>
        $(document).ready(function () {
            $("#clickk").click(1000, function () {
                confirm.render("Ju lutem kontrolloni me kujdes të dhënat.")
            });
        });


        function Konfirmimi() {
            this.render = function (dialog) {
                var winW = window.innerWidth;
                var winH = window.innerHeight;
                var dialogoverlay = document.getElementById('dialogoverlay');
                var dialogbox = document.getElementById('dialogbox');
                dialogoverlay.style.display = "block";
                dialogoverlay.style.height = winH + "px";
                dialogbox.style.left = (winW / 2) - (550 * .5) + "px";
                dialogbox.style.top = "100px";
                dialogbox.style.display = "block";

                document.getElementById('dialogboxhead').innerHTML = 'A jeni të sigurt që keni përfunduar?';
                document.getElementById('dialogboxbody').innerHTML = dialog;
                document.getElementById('dialogboxfoot').innerHTML =
                    '<button onclick="confirm.yes()" class="buton" style="height:2em; width:3em; ">Yes</button> <button onclick="confirm.no()" class="buton" style="height:2em; width:3em; ">No</button>';
            }
            this.no = function () {
                document.getElementById('dialogbox').style.display = "none";
                document.getElementById('dialogoverlay').style.display = "none";
            }
            this.yes = function () {
                document.getElementById('dialogbox').style.display = "none";
                document.getElementById('dialogoverlay').style.display = "none";
                setTimeout(() => {
                    window.location.href = alert("Lista u dërgua me sukses!");
                }, 500);
            }
        }

        var confirm = new Konfirmimi();
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
            <a href="../index.html" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka
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
                <a href="../HTML/galeria.html" class="menu-item" id="one">Galeria</a>
                <a href="../HTML/Kontakti.html" class="menu-item" id="two">Kontakti</a>
                <a href="../HTML/kycu.html" class="menu-item" id="three">Kyçu</a>
                <a href="#" id="search"><i class="fa fa-search"></i></a>


            </div>
        </div>
    </div>
    <div>
        <i onclick="toggleButton()" class="fa fa-moon-o" id="teksti"
            style="margin-left:0.5em;margin-top:0.5em; font-size: 2em;font-weight: bold; position:-webkit-fixed;position:fixed;z-index: 9999;"></i>


    </div>

    <div class="homepage">




        <div class="containerforma">
            <div>
                <h2 class="tittle">Të dhënat e lexuesëve</h2>

                <form id="addForm">

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="text" id="item1" placeholder="Emri"
                            style=" height: 2.5em;background-color: white; border:0.05px solid grey;">
                    </div>

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="text" id="item2" placeholder="Mbiemri"
                            style="height:2.5em;background-color: white; border:0.05px solid grey;">
                    </div>

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="number" id="item3" placeholder="ID (numër)"
                            style="height:2.5em;background-color: white; border:0.05px solid grey;">
                    </div>

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="date" id="item4"
                            style="color:grey; background-color: white; height: 2.5em;border:0.05px solid grey;">
                    </div>

                    <input type="submit" id="submit" value="Shto" class="buton"
                        style="height:3em; width: 8em; font-size: 0.8em">

                </form>

            </div>
            <div>

                <div class="tabela">

                    <h2 class="titlee">Rezervimet</h2>

                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Emri</th>
                                <th>Mbiemri</th>
                                <th> ID</th>
                                <th>Data</th>
                                <th>Anulo</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Andi</td>
                            <td>Dika</td>
                            <td>190714100170</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Arben</td>
                            <td>Dedaj</td>
                            <td>190714100160</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Arbresha</td>
                            <td>Zeqiri</td>
                            <td>190714100158</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Samir</td>
                            <td>Simnica</td>
                            <td>180715100031</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Ardi</td>
                            <td>Ismajli</td>
                            <td>190714100057</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Adnit</td>
                            <td>Gashi</td>
                            <td>190714100180</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tbody>

                        </tbody>
                    </table>
                    <button class="buton" style=" height:3em; width: 8em; font-size: 0.8em" id="clickk">Dërgo</button>

                </div>

            </div>

        </div>

        <script>
            const form = document.getElementById("addForm");
            const tbody = document.querySelector('tbody');
            const table = document.querySelector('table')
            const emri = document.getElementById("item1");
            const mbiemri = document.getElementById("item2");
            const ID = document.getElementById("item3");
            const data = document.getElementById("item4");
            const errorElement = document.querySelectorAll(".error")


            function validate(e) {

                if (emri.value === '' || emri.value === null) {
                    errorElement[0].innerText = 'Emri duhet te mbushet!';
                    return false;
                }

                if (mbiemri.value === '' || mbiemri.value === null) {
                    errorElement[1].innerText = 'Mbiemri duhet te mbushet!';
                    return false;

                }

                if (ID.value === '' || ID.value === null) {
                    errorElement[2].innerText = 'ID duhet te mbushet!';
                    return false;

                }
                if (data.value === '' || data.value === null) {
                    errorElement[3].innerText = 'Data duhet te mbushet!';
                    return false;

                }
                return true;
            };

            form.addEventListener('submit', onAddWebsite);

            function onAddWebsite(e) {
                e.preventDefault();
                if (validate(e)) {
                    tbody.innerHTML += `
                <tr>
                    <td>${emri.value}</td>
                    <td>${mbiemri.value}</td>
                    <td>${ID.value}</td>
                    <td>${data.value}</td>
                    <td><button class ="deleteBtn">Fshij</button></td>
                </tr>
                `;
                    document.querySelectorAll(".error").forEach((element) => element.innerHTML = '');
                    form.reset();
                }
            }

            function onDeleteRow(e) {
                if (!e.target.classList.contains("deleteBtn")) {
                    return;
                }

                const button = e.target;
                button.closest('tr').remove();
            }


            table.addEventListener('click', onDeleteRow)
        </script>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
            <div>
                <div id="dialogboxhead"></div>
                <div id="dialogboxbody"></div>
                <div id="dialogboxfoot"></div>
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
                        <p id="kolona1pp">BSD është institucion kulturor, edukues e informues që grumbullon dhe ruan
                            koleksionet e veta nga fushat e ndryshme të krijimtarisë intelektuale me qëllim që t’ i bëjë
                            të njohura shfrytëzuesve për t’i studiuar dhe për t’ i lënë
                            trashëgim gjeneratave të ardhshme.</p>
                        <a href="./Librat.html">
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
                        <a href="../HTML/regjistrohu.html">
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
                            <input id="myInput" type="text" name="myEmail" placeholder="E-mail"
                                style="background-color:white;">
                        </div>
                        <button class="buton">Dërgo</button>
                    </form> <input type="checkbox" checked="checked" name="subscribe"> <span id="perdite">E-mails të
                        përditshme </span> <br><br>
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

                        <li><a href="../HTML/galeria.html#fotogaleriah3">
                                Fotogaleria
                            </a>
                        </li>
                        <li><a href="../HTML/galeria.html#videogaleriah3">
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
                        <li><a href="../HTML/regjistrohu.html"><span>Regjistrohu</span></a>
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


</body>

</html>