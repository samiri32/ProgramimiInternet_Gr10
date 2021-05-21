<!DOCTYPE html>
<html>

<head>
    <title>Galeria</title>
    <?php require APPROOT . '/views/inc/header.php';?>
</head>

<body>
<?php require APPROOT . '/views/inc/navbar.php';?>
<?php
$api_url = 'https://api.hamatim.com/quote';
$quotes = json_decode(file_get_contents($api_url));
?>
<div class="homepage">
    
        <div class="faqjaa">
            <div class="quote" style=" width:100%;height:100%;overflow: auto; ">
           <?php echo $quotes->text;?>
                </div><br>
                <div class="quoteauthor" style=" width:100%;height:100%;overflow: auto;">
           <?php echo "-" . $quotes->book;
            if($quotes->book!=NULL)
             {echo ', ';
             } 
             echo  $quotes->author;?>
                </div>
            </div>
     
        <a href="#" style="text-decoration: none;">
            <h3 id="videogaleriah3" style="padding-top:1em; margin-bottom: -1em; display:grid; justify-content: center;">FOTOGALERIA</h3>
        </a>
        <div class="faqjaa">
            <div class="taggbox-container" style=" width:100%;height:100%;overflow: auto;">
         <div class="taggbox-socialwall" data-wall-id="59620" view-url="https://widget.taggbox.com/59620"></div><script src="https://widget.taggbox.com/embed.min.js" type="text/javascript"></script>
                </div>
            </div>
            <a href="#" style="text-decoration: none;">
            <h3 id="videogaleriah3" style="padding-top:1em; margin-bottom: -1em; display:grid; justify-content: center;">VIDEOGALERIA</h3>
        </a>
        <div class="faqjaa">
        <div class="taggbox-container" style="width:100%;height:100%;overflow: auto;">
        <div class="taggbox-socialwall" data-wall-id="59622" view-url="https://widget.taggbox.com/59622"></div><script src="https://widget.taggbox.com/embed.min.js" type="text/javascript"></script>
                </div>
            </div>

</div>
        <?php require APPROOT . '/views/inc/footer.php';?>
        <script>
            const theme = document.querySelector("#stilicss");

            console.log(localStorage);

            remember();

            function darkMode() {

                theme.href ="<?php echo URLROOT. '/public/CSS/stylesdark.css';?>";
                localStorage.setItem("color", "dark");
                console.log(localStorage);
                document.getElementById("teksti").className = "fa fa-sun-o";
                document.getElementById("teksti").style.color = "white";
                document.getElementById("teksti").style.backgroundColor = "transparent";

            }

            function lightMode() {

                theme.href ="<?php echo URLROOT. '/public/CSS/styles.css';?>";
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