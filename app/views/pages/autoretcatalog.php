<!-- query qe na qet krejt autoret ne databaze edhe titujt e librave te tyre -->
<!-- query qe na qet krejt librat ne databaze -->
<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Katalogu i Librave</title>
     <?php require APPROOT . '/views/inc/header.php'; ?>

</head>


<body>
    <?php require APPROOT . '/views/inc/navbar.php';?>
    <div class="homepage">

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