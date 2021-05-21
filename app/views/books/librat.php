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

                <?php foreach ($data['posts'] as $post) : ?>
                    <div class= "columnlajme">
                  <div class="gjyslajmi1">  <img src="<?php echo URLROOT . '/public/img/' . $post->image; ?>"></div>
                       <div class="gjyslajmi2"> 
                       <div class="qereklajmi"> 
                           <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id) :?>
                            <div class="divini">
                         <a class="btn orange" href="<?php echo URLROOT . '/books/ndrysho/' . $post->id;?>">
                                Ndrysho
                            </a></div>  
                            <a href="#">
                                <form action="<?php echo URLROOT . "/books/delete/" . $post->id ?>" method="POST">
                                    <input type="submit" name="delete" value="Fshij" class="btn red">
                                </form></a><?php endif; ?>
                                <div class="dividy">
                                <span id="titullilajme"> <?php echo $post->title; ?></span><br>
                                <span id="posttitlelajmi"> <?php echo 'Postuar më: ' . $post->created_at . '<br>'; ?>
                            <?php echo 'Admin: ' . $post->user_id; ?></span></div>
                           </div>
                      
                <div class="qereklajmi2">
                        <span id='elaborimilajme'> <?php giveBreaks($post->body) . "<br>"; ?></span>
                       </div></div>
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