<!DOCTYPE html>
<html lang="en">

<head>
    <title>Libra</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>

<body>
    <div class="header"></div>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="homepage">
        <div class="rowlajme">
            <?php if (isLoggedIn() && $_SESSION['status'] == 'admin') : ?>
                <center> <a class="btn green" href="<?php echo URLROOT; ?>/books/add">
                        Shto
                    </a></center>
            <?php endif; ?><br>

            <?php foreach ($data['books'] as $book) : ?>
                <div class="columnlajme2">
                    <div class="gjyslajmi1"> <img src="<?php echo URLROOT . '/public/img/' . $book->img; ?>"></div>
                    <div class="gjyslajmi22">
                        <div class="qereklajmi">
                            <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $book->user_id) : ?>
                                <div class="divini">
                                    <a class="btn orange" href="<?php echo URLROOT . '/books/change/' . $book->id; ?>">
                                        Ndrysho
                                    </a>
                                </div>
                                <a href="#">
                                    <form action="<?php echo URLROOT . "/books/delete/" . $book->id ?>" method="POST">
                                        <input type="submit" name="delete" value="Fshij" class="btn red">
                                    </form>
                                </a><?php endif; ?>
                            <div class="dividy">
                                <span id="titullilajme"> <?php echo $book->titulli; ?></span><br>
                                <span id="posttitlelajmi" style="font-size: 1.2em !important;"> <?php echo $book->autori; ?>
                                </span>
                            </div>
                        </div>

                        <div class="qereklajmi2">
                            <span id="elaborimilajme" style="font-size: 0.9em"><?php echo 'Botuar më: ' . $book->datapub . " | "; ?></span>
                            <span id='elaborimilajme' style="font-size: 0.9em"><?php echo $book->zhanri . " | "; ?></span>
                            <span id='elaborimilajme' style="font-size: 0.9em"><?php echo $book->gjuha . " | <br><br>"; ?></span>
                            <span id='elaborimilajme'> <?php giveBreaks($book->caption) . "<br>"; ?></span><br>
                            <span id='posttitlelajmi' style="color: #0075ff !important;">
                            <?php if (isset($_SESSION['user_id'])):?>
                                <a id="<?php $book->id;?>" target="_blank" style="color: #0075ff !important;" onclick="toProfile($book->id);" href="<?php echo $book->link; ?>">SHKARKO</a></span>
                                <?php else:?>
                                    <span id="postitelajmi">Kycuni per te shkarkuar librin.</span>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
                <br><br> <br><br><br><?php endforeach; ?>
        </div>
    </div>

    <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>
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