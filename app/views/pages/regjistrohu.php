<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Regjistrohu</title>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/header.php'; ?>
</head>


<body>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/navbar.php'; ?>
    <div class="homepage">
        <div class="regjistrohunidiv">
            <form id="regjistrohuform" form name="Formaperregjister" action="./submit.html" target="_blank" onsubmit="return REGJISTRIMI()" method="post">

                <div class="konga">
                    <center>
                        <audio controls autoplay>
                            <source src="../../../public/img/Muharrem Qena Mallengjimi.mp3" type="audio/mpeg">
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

        <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/footer.php'; ?>
        <script>
            const theme = document.querySelector("#stilicss");

            console.log(localStorage);

            remember();

            function darkMode() {

                theme.href = '../../../public/css/stylesdark.css';
                localStorage.setItem("color", "dark");
                console.log(localStorage);
                document.getElementById("teksti").className = "fa fa-sun-o";
                document.getElementById("teksti").style.color = "white";
                document.getElementById("teksti").style.backgroundColor = "transparent";

            }

            function lightMode() {

                theme.href = "../../../public/css/styles.css";
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
        <script src="../js/regjistrohu.js"></script>


</body>

</html>