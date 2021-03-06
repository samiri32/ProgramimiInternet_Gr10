<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ndrysho Librin</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>

<body>
<div class="header"></div>
<div class="homepage">
<?php require APPROOT . '/views/inc/navbar.php'; ?>

        <div class="row4">
    <h1>
        Ndrysho librin
    </h1>

   <form action="<?php echo URLROOT; ?>/books/change/<?php echo $data['book']->id?>" method="POST">
                    <div class="form-item">
                        <input type="text" value="<?php echo $data['book']->titulli ?>" name="titulli" placeholder="Titulli..." style="max-width: 40em; height: 2.8em;">
                        <!--titulli, autori, vleresimi, zhanri, caption, gjuha, datapub, link, img-->
                        <span class="invalidFeedback">
                            <?php echo $data['titullierr']; ?>
                        </span>
                    </div>
                    <br>
                    <div class="form-item">

                        <!-- autori -->
                        <input type="text" name="autori" value="<?php echo $data['book']->autori ?>"placeholder="Autori..." style="max-width: 40em; height: 2.8em;">
                        <span class="invalidFeedback">
                            <?php echo $data['autorierr']; ?>
                        </span>
                    </div>
                    <br>
                    <!-- zhanri -->
                    <div class="form-item">
                        <input type="text" name="zhanri"value="<?php echo $data['book']->zhanri ?>" placeholder="Zhanri..." style="max-width: 40em; height: 2.8em;">
                        <span class="invalidFeedback">
                            <?php echo $data['zhanrierr']; ?>
                        </span>
                    </div>
                    <br>

                    <!-- gjuha -->
                    <div class="form-item">
                        <input type="text" name="gjuha" value="<?php echo $data['book']->gjuha ?>"placeholder="Gjuha..." style="max-width: 40em; height: 2.8em;">
                        <span class="invalidFeedback">
                            <?php echo $data['gjuhaerr']; ?>
                        </span>
                    </div>
                    <br>

                    <!-- vleresimi -->
                    <div class="form-item">
                        <input type="text" name="vleresimi" value="<?php echo $data['book']->vleresimi ?>"placeholder="Vleresimi..." style="max-width: 40em; height: 2.8em;">
                    </div>
                    <br>

                    <!-- YYYY-MM-DD. -->
                    <!-- datapub -->
                    <div class="form-item">
                        <input type="text" name="datapub" value="<?php echo $data['book']->datapub ?>"placeholder="Data e publikimit..." style="max-width: 40em; height: 2.8em;">
                        <span class="invalidFeedback">
                            <?php echo $data['datapuberr']; ?>
                        </span>
                    </div>
                    <br>

                    <!-- link -->
                    <div class="form-item">
                        <input type="text" name="link" value="<?php echo $data['book']->link ?>" placeholder="Linku.." style="max-width: 40em; height: 2.8em;">
                        <span class="invalidFeedback">
                            <?php echo $data['linkerr']; ?>
                        </span>
                    </div>
                    <br>
                    <!-- caption -->
                    <div class="form-item">
                        <textarea name="caption" placeholder="Pershkruani librin ketu..." style="min-width: 48em; height:10em"><?php echo $data['book']->caption?></textarea>
                        <span class="invalidFeedback">
                            <?php echo $data['captionerr']; ?>
                        </span>
                    </div>
                    <br>


                    <!-- img -->
                    <input type="file" name="img">
                    <span class="invalid-feedback"><?php echo $data['imgerr']; ?></span>
                    <button class="btn green" name="submit" type="submit" style="width: 7em !important; height: 2em !important; padding:0 !important;">Perfundo</button>
                </form>
            </div>

        </div>
    </div>

</body>
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
</html>