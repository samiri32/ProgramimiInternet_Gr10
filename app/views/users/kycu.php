<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Kyçu</title>
     <?php // require APPROOT . '/views/inc/header.php'; ?>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $(".videoja").slideToggle("slow");
            });
        });
    </script>
</head>


<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div class="homepage">
        <div class="kycunidiv">
            <form id="kycuforma" action="../users/kycu" method="POST">
                <div class="kycunimrena">
                    <label for="email"><b>Email</b></label><br>
                    <input type="text" style="background-color: white; border: 0.01em solid black; height:1.5em;" title="Email adresa duhet te plotesohet." placeholder="Emaili juaj këtu." name="email" id="rrite"><br><br>
                    <span class="invalidFeedback">
                        <?php echo $data['emailError']; ?>
                    </span>
                    <label for="password"><b>Password</b></label><br>
                    <input type="password" style="border: 0.01em solid black;" title="Ju lutem mos harroni fjalekalimin." placeholder="Fjalëkalimi juaj këtu" name="password" size="26.999999999" id="rrite"><br><br>
                    <span class="invalidFeedback">
                        <?php echo $data['passwordError']; ?>
                    </span>
                    <button type="submit" id="kycuu" value="submit">Kyçu</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember" id="qek"> Më mbaj mend
                    </label>
                </div>

                <div class="harrovapsw" style>
                    <a><span class="psww">Keni harruar fjalëkalimin?</span></a><br>
                    <a href="../users/regjistrohu"><span class="psww">Nuk jeni regjistruar ende?</span></a>
                </div>
            </form>

            <div class="videoja">
                <div id="flip" style="color:black; padding: 0em 0.5em;">Largo videon</div>
                <video width="280" height="200" controls>
                    <source src="../../../ProgramimiInternet_Gr10/public/img/pasuria me e madhe eshte libri.mp4" type="video/mp4">
                    Qa ke hup :/
                </video>
            </div>

        </div>


        <?php require APPROOT . '/views/inc/footer.php'; ?>
        <script>
            const theme = document.querySelector("#stilicss");

            console.log(localStorage);

            remember();

            function darkMode() {

                theme.href = "../../../ProgramimiInternet_Gr10/public/CSS/stylesdark.css";
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