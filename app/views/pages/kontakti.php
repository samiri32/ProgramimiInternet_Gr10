<!DOCTYPE html>
<html>

<head>
    <title>Kontakti</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>



<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <!--      -->
    <div class="pjesa1">
        <div class="foto">
            <center>

                <img src="<?php echo URLROOT . '/public/img/fadedpic2.jpg'; ?>" alt="">
            </center>
        </div>
        <div class="banner">

            <center>
                <h3 style="font-family: 'Alfa Slab One', cursive;
font-family: 'Kalam', cursive;
font-family: 'M PLUS 1p', sans-serif; font-size:50px; color:black" id="si">SI MUND TË PËRMIRËSOHEMI?</h3>
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
            <iframe class="harta" style="margin-top: -0.6em;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13628.870304395936!2d21.08080134046593!3d42.600693811548744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13536281728fbb4f%3A0xbec710e0df782273!2sMiradi%20e%20Eperme!5e1!3m2!1sen!2s!4v1610466107690!5m2!1sen!2s" width="550em" height="450em" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


            <video class="videoo" style="margin-top: -0.6em; background-color: black;" src="<?php echo URLROOT . '/public/img/theniengaSinani.mp4'; ?>" poster="<?php echo URLROOT . '/public/img/sinani.jpg'; ?>" height="450em" width="550em" controls></video>
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
                <img src="<?php echo URLROOT . '/public/img/sinani3.png'; ?>" draggable="true" ondragstart="drag(event)" id="drag1">
            </div>

            <div id="drop" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <script>
        const theme = document.querySelector("#stilicss");

        console.log(localStorage);

        remember();

        function darkMode() {

            theme.href = "<?php echo URLROOT . '/public/CSS/stylesdark.css'; ?>";
            localStorage.setItem("color", "dark");
            console.log(localStorage);
            document.getElementById("teksti").className = "fa fa-sun-o";
            document.getElementById("teksti").style.color = "white";
            document.getElementById("teksti").style.backgroundColor = "transparent";

        }

        function lightMode() {

            theme.href = "<?php echo URLROOT . '/public/CSS/styles.css'; ?>";
            localStorage.setItem("color", "light");
            console.log(localStorage);
            document.getElementById("teksti").className = "fa fa-moon-o";
            document.getElementById("teksti").style.color = "black";
            document.getElementById("teksti").style.backgroundColor = "transparent";

        }

        function toggleButton() {

            if (localStorage.getItem("color") == ("light")) {

                darkMode();
            } else if (localStorage.getItem("color") == ("dark")) {

                lightMode();
            }
        }

        function remember() {
            if (localStorage.getItem("color") == ("light")) {

                lightMode();

            } else if (localStorage.getItem("color") == ("dark")) {

                darkMode();

            }
        }
    </script>
   
<script src="<?php echo URLROOT . '/public/js/kontakti.js'; ?>";></script>
</body>
</html>