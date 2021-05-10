<!DOCTYPE html>
<html>

<head>
    <title>Galeria</title>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/header.php'; ?>
</head>




<body>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/navbar.php'; ?>

    <div class="faqja">
        <a href="#" style="text-decoration: none;">
            <h3 id="fotogaleriah3" style="padding-top:1em; margin-bottom: 0em;display:grid; justify-content: center;">FOTOGALERIA</h3>
        </a>
        <div class="faqjaa">
            <div class="taggbox-container" style=" width:100%;height:100%;overflow: auto; ">
                <div class="taggbox-socialwall" data-wall-id="44950" view-url="https://app.taggbox.com/widget/e/44950">
                </div>
                <script src="https://widget.taggbox.com/embed.min.js" type="text/javascript">
                </script>
            </div>
        </div>

        <a href="#" style="text-decoration: none;">
            <h3 id="videogaleriah3" style="padding-top:1em; margin-bottom: 0em; display:grid; justify-content: center;">VIDEOGALERIA</h3>
        </a>
        <div class="faqjaa">
            <div class="taggbox-container" style=" width:100%;height:100%;overflow: auto;">
                <div class="taggbox-socialwall" data-wall-id="44961" view-url="https://app.taggbox.com/widget/e/44961">
                </div>
                <script src="https://widget.taggbox.com/embed.min.js" type="text/javascript">
                </script>
            </div>
        </div>


        <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/footer.php'; ?>
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