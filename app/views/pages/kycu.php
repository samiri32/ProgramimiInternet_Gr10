<!DOCTYPE html>
<html lang="sq">

<head>

    <meta charset="utf-8">
    <title>Kyçu</title>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $(".videoja").slideToggle("slow");
            });
        });
    </script>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/header.php'; ?>
</head>


<body>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/navbar.php'; ?>
    <div class="homepage">
        <div class="kycunidiv">

            <form id="kycuforma" action="submit.html" target="_blank">
                <div class="kycunimrena">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" style="background-color: white; border: 0.01em solid black; height:1.5em;" title="Email adresa duhet te plotesohet." placeholder="Emaili juaj këtu" name="email" required id="rrite"><br><br>

                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" style="border: 0.01em solid black;" title="Ju lutem mos harroni fjalekalimin." placeholder="Fjalëkalimi juaj këtu" name="psw" required id="rrite" size="26.999999999"><br><br>

                    <button type="submit" id="kycuu">Kyçu</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember" id="qek"> Më mbaj mend
                    </label>
                </div>

                <div class="harrovapsw" style>
                    <a><span class="psww">Keni harruar fjalëkalimin?</span></a><br>
                    <a href="../../../app/views/pages/regjistrohu.php"><span class="psww">Nuk jeni regjistruar ende?</span></a>
                </div>
            </form>

            <div class="videoja">
                <div id="flip" style="color:black; padding: 0em 0.5em;">Largo videon</div>
                <video width="280" height="200" controls>
                    <source src="../../../public/img/pasuria me e madhe eshte libri.mp4" type="video/mp4">
                    Qa ke hup :/
                </video>
            </div>

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

</body>

</html>