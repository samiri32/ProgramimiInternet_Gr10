<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Profili</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>

<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div class="homepage" style="margin-top: -1em;"><br><br><br>
        <div class="row0" style="margin-top: 0.2em;">
            <div class="column side profili">
                <center>
                <div class="profilecard">
                    <img src=<?php echo 'https://eu.ui-avatars.com/api/?name=' . $_SESSION['emri'] . '+' . $_SESSION['mbiemri']; ?> style="width: 100%; max-height: 18em;" ;>
                    <h1><?php echo $_SESSION['emri'] . ' ' . $_SESSION['mbiemri']; ?></h1>
                    <p class="profiletitle"><?php echo 'Email: ' . $_SESSION['email']; ?></p>
                    <p><?php echo 'Adresa: ' . $_SESSION['adresa']; ?></p>
                    <p><?php echo 'Antarësuar më: ' . $_SESSION['user_datejoined']; ?></p>
                    <a href="<?php echo URLROOT . '/users/logout' ?>"> <button class="buton" id="shkycu" style="margin-top:0.6em; margin-bottom: 1.5em;">Shkyçu</button></a>
                    <?php if(isset($_COOKIE[$_SESSION['user_id']])){
                  echo "<p style='font-size: 0.8em;'>Keni vizituar profilin tuaj ";
                         $a = explode(":",$_COOKIE[$_SESSION['user_id']]);
                              $b = explode(";", $a[5]);
                              $c = $b[0];
                              echo $c;
                        echo " here kete muaj.";
                    }
                    ?>
                    </p>
                </div></center>
            </div>
        
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

</body>

</html>