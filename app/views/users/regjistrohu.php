<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Regjistrohu</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>


<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div class="homepage">
        <div class="regjistrohunidiv">
            <form id="regjistrohuform" form name="Formaperregjister" action="../users/regjistrohu" method="POST">

                <div class="konga">
                    <center>
                        <audio controls autoplay>
                            <source src="../../../ProgramimiInternet_Gr10/public/img/Muharrem Qena Mallengjimi.mp3" type="audio/mpeg">
                            Shnosh :/
                        </audio><br><br>
                        <h1 style="text-align: center; display: inline;" id="regj">Regjistrohuni në BSD</h1><br>
                    </center>
                </div>


                <p>Emri:<br> <input type="text" size="65" style="background-color: white; border: 0.01em solid black; height:1.5em;" name="emri" autocomplete="on" id="rrite"></p>
                </br>
                <p>Mbiemri:<br> <input type="text" size="65" style="background-color: white; border: 0.01em solid black; height:1.5em;" name="mbiemri" autocomplete="on" id="rrite"></p>
                <br>
                <p>Username:<br> <input type="text" size="65" style="background-color: white; border: 0.01em solid black; height:1.5em;" name="username" autocomplete="on" id="rrite"></p>
                </br>
                <span class="invalidFeedback">
                    <?php echo $data['usernameError']; ?>
                    </span>
                <p>E-mail:<br> <input type="text" style="background-color:white;border: 0.01em solid black; height:1.5em;" size="65" autocomplete="on" name="email" id="rrite"></p>
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['emailError']; ?>
                    </span>
                <p>Password:<br> <input type="password" style="background-color: white;border: 0.01em solid black; height:2em; width:44.1em;" title="Fjalekalimi juaj duhet te permbaje shkronja te vogla, shkronja te medha dhe numra." name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"></p>
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                    </span>
                    <p>Password:<br> <input type="password" style="background-color: white;border: 0.01em solid black; height:2em; width:44.1em;" title="Fjalekalimi juaj duhet te permbaje shkronja te vogla, shkronja te medha dhe numra." name="confirmPassword" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$"></p>
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['confirmPasswordError']; ?>
                    </span>
                    <p>Gjinia:</p>
                <input type="radio" name="gjinia" value="mashkull">
                <label for="male">Mashkull</label><br>
                <input type="radio" name="gjinia" value="femër">
                <label for="female">Femër</label><br>
                <input type="radio" name="gjinia" value="tjetër">
                <label for="other">Tjetër</label></br>
                <p>Adresa:<br> <input type="text" style="background-color: white;border: 0.01em solid black; height:1.5em;" size="65" name="adresa" id="rrite"></p>
                <br>
                <p>Telefoni:<br><input type="text" pattern="[0-9]{9}" title="Numri i telefonit duhet te jete mobil, ti permbaje 9 shifra. Formati: 04x-xxx-xxx" style="background-color: white;border: 0.01em solid black; height:1.5em;" name="telefoni" id="rrite"></p>
                <br>
                <p>
                    Kategoria:
                    <select type="text" value="" name="kategoria" id="rrite">
                        <option value="none" selected disabled hidden></option>
                        <option>Student</option>
                        <option>Admin</option>
                    </select></br>
                </p>
            
                <div class="tekstikolona">
                    Duke klikuar 'Regjistrohu' ju i pranoni termet dhe kushtet për regjistrim në bibliotekën tonë. Pasi të keni klikuar 'Regjistrohu' ju do të dërgoheni në një faqe ku mund të zgjidhni pakon e regjistrimit varësisht prej kategorisë që i takoni. Apo mund të
                    klikoni "vazhdo" nëse nuk doni të bleni ndonjë pako menjëherë. Për çdo rast ju mund të shikoni profilin tuaj për të parë llojin e pakos në të cilën jeni abonuar. Biblioteka jonë ofron 1 muaj falas abonim. Ju do të pranoni email para
                    se të skadojë kjo ofertë.
                </div>
            </form>

        </div>

        <?php require APPROOT . '/views/inc/footer.php'; ?>
        <script>
            const theme = document.querySelector("#stilicss");

            console.log(localStorage);

            remember();

            function darkMode() {

                theme.href = '../../../ProgramimiInternet_Gr10/public/CSS/stylesdark.css';
                localStorage.setItem("color", "dark");
                console.log(localStorage);
                document.getElementById("teksti").className = "fa fa-sun-o";
                document.getElementById("teksti").style.color = "white";
                document.getElementById("teksti").style.backgroundColor = "transparent";

            }

            function lightMode() {

                theme.href = "../../../ProgramimiInternet_Gr10/public/CSS/styles.css";
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


</body>

</html>