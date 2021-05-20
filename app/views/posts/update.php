<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perditeso Lajme</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>
</head>

<body>
<div class="header"></div>
<div class="homepage">
<?php require APPROOT . '/views/inc/navbar.php'; ?>

        <div class="row4">
    <h1>
        Ndrysho postimin
    </h1>

    <form
    action="<?php echo URLROOT; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST">
        <div class="form-item">
            <input
                type="text"
                name="title"
                value="<?php echo $data['post']->title ?>"style="max-width: 40em; height: 2.8em;">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>
<br>
        <div class="form-item">
            <textarea name="body" placeholder="Shkruani lajmin ketu..." style="min-width: 48em; height:10em"><?php echo $data['post']->body ?></textarea>

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div></br>
        <input type="file" name="image">
        <span class="invalid-feedback"><?php echo $data['imageError']; ?>
        <button class="btn green" name="submit" type="submit"style="height: 2em !important; width: 7em !important; padding:0 !important;">Ndrysho</button>
    </form>
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