<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Profili</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>


<body>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div class="homepage"><br><br><br>

        <center>
            <h2 class="autori" style="text-align:center">Mirësevini në Profilin tuaj</h2>
           <center> <div class="profilecard">
            <img src="<?php echo URLROOT. '/public/img/ismail-kadare-j-foley-opale-w-1-990x556.jpg';?>" style = "width: 100%";>
                <h1>John Doe</h1>
                <p class="profiletitle">CEO & Founder, Example</p>
                <p>Harvard University</p>
           <br>
            </div></center>
            <a href="<?php echo URLROOT . '/users/logout' ?>"> <button class="buton" id="shkycu" style="margin-top:5em;">Shkyçu</button></a>

        </center>
    </div>




    <?php require APPROOT . '/views/inc/footer.php'; ?>
    <script>
        const theme = document.querySelector("#stilicss");

        console.log(localStorage);

        remember();

        function darkMode() {

            theme.href = "<?php echo URLROOT. '/public/CSS/stylesdark.css';?>";
            localStorage.setItem("color", "dark");
            console.log(localStorage);
            document.getElementById("teksti").className = "fa fa-sun-o";
            document.getElementById("teksti").style.color = "white";
            document.getElementById("teksti").style.backgroundColor = "transparent";

        }

        function lightMode() {
            theme.href = "<?php echo URLROOT. '/public/CSS/styles.css';?>";
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