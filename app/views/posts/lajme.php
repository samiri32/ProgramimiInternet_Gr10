<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lajme</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>

<body>
    <div class="header"></div>
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="homepage">
        <div class="row4">
            <?php if (isLoggedIn() && $_SESSION['status'] == 'admin') : ?>
                <center> <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
                        Krijo
                    </a></center>
            <?php endif; ?><br>

                <?php foreach ($data['posts'] as $post) : ?>
                    <div class="columnlajme" id="#columnnn">
                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id) :?>
                            <a class="btn orange" style="padding: 0 !important; padding-top: 0.5em !important; text-align: middle !important;" href="<?php echo URLROOT . '/posts/update/' . $post->id;?>">
                                Ndrysho
                            </a>
                            <a href="#" style="padding: 0;">
                                <form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST" style="padding: 0;">
                                    <input type="submit" name="delete" value="Fshij" class="btn red">
                                </form>
                            </a>
                        <?php endif; ?>
                        
                        <div class="lajmimeslajme">
                        <img src="<?php echo URLROOT . '/public/img/' . $post->image; ?>">
                        <span id='lajmekuqlajme'> <?php echo 'Postuar më: ' . $post->created_at . '<br>'; ?>
                            <?php echo 'Admin: ' . $post->user_id; ?></span><br>
                        <span> <?php echo $post->title; ?></span><br>
                        <span id='elaborimilajme'> <?php echo $post->body . "<br>"; ?></span>
                        </a>
                    </div><br><br> <?php endforeach; ?>
            </div>
        </div></div>
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