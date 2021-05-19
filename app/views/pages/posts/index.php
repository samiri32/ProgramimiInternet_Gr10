<!DOCTYPE html>
<html>

<head>
    <title>Lajmet</title>
    <?php require APPROOT . '/views/inc/header.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var currentZoom = 1.0;

        $(document).ready(function() {
            $('#ZoomIn').click(
                function() {
                    var div = $(".konga");
                    div.animate({
                        left: '33vw'
                    }, "slow");
                })

            $('#ZoomIn').click(
                function() {
                    $('.konga').animate({
                        'zoom': currentZoom += .2
                    }, 'slow');
                })

        });
    </script>

    <script>
        var currentZoom = 1.0;

        $(document).ready(function() {
            $('#ZoomReset').click(
                function() {
                    currentZoom = 1.0;
                    $('.konga').animate({
                        'zoom': 1
                    }, 'slow');
                })

            $('#ZoomReset').click(
                function() {

                    $(".konga").css('left', function() {
                            return $(this).offset().left;
                        })
                        .animate({
                            "left": "41vw"
                        }, "slow");
                })
        });
    </script>
</head>

<body>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
    <div class="title"><h1 style="color: #0075ff;">Lajmet Aktuale</h1></div><hr><br><br>

    <div class="prk">
        <div style="display:inline; margin-left:18vw;">
            <button class="boxat" id="ZoomIn">Zmadho Audion</button>
        </div>
        <div style="display:inline; float:right; margin-right:18vw;">
            <button class="boxat1" id="ZoomReset">Reseto Audion</button>
        </div>
    </div>
<!-- prk -->

 <div class="konga">
        <center><audio id="audio" controls>
                <source src="<?php echo URLROOT . '/public/img/Muharrem Qena Mallengjimi.mp3'; ?>" type="audio/mpeg">
                Shnosh :/
        </center>
        </audio>
    </div>
<!-- konga -->

    <div class="gridat">
        <h2 id="netrend" style=" text-align:center; margin-top:3em;">Te Rejat</h2>
<div class="containerlaj">
    <?php if(isLoggedIn()): ?>
    
        <a class="btn green" href="<?php echo URLROOT; ?>/posts/create">
            Create
        </a>
    <?php endif; ?>
    <?php var_dump($data);?>
    <?php foreach($data['posts'] as $post): ?>
       
        
        <div class="container-item">
            <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
                <a
                    class="btn orange"
                    href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">
                    Update
                </a>
                <form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn red">
                </form>
            <?php endif; ?>
            <h2>
                <?php echo $post->title; ?>
            </h2>

            <h3>
                <?php echo 'Created on: ' . date('F j h:m', strtotime($post->created_at)) ?>
            </h3>

            <p>
                <?php echo $post->body ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>
<!-- 
        <div class="usage">
            <div class="lajmet">

                <div class="gridi1">
                    <div class="ardy">
                        <img class="fototmodal" src=" //echo URLROOT . '/public/img/HIVZIABABOOO.jpg'; ?>">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="// echo URLROOT . '/public/img/HIVZIABABOOO.jpg'; ?>">
                            <p class="tekstimodal">
                                Biblioteka “Hivzi Sulejmani” pas punës dymujore të ofrimit të shërbimeve huazimi i librit do të rifillon punën me sallat e leximit nga dita e premte 9 tetor 2020 . Ky veprim bëhet në përputhje me masat e udhëzimet e Institutit Kombëtar të Shëndetësisë
                                Publike dhe të Ministrisë së Shëndetësisë të aprovuara nga Qeveria e Republikës së Kosovës si dhe në bashkëpunim të ngushtë me Drejtorinë e Kulturës dhe organet tjera të Komunës së Prishtinës.Në dy javët e para do të punohet
                                pesë ditë të javës nga ora 8.15 e deri në orën 16.00. Nëse shkon puna në rregull dhe pa pengesa që në javën e dytë do të filloj me orar të plotë do të thotë nga 8.00 – 19.00
                            </p>
                        </div>   modal -->


                        <!-- <span class="titulli1" id="hivzia"> Kanë filluar punimet për renovimin e ndërtesës së bibliotekës së qytetit, “Hivzi Sulejmani”</span>

                        <p>Biblioteka “Hivzi Sulejmani” pas punës dymujore të ofrimit të shërbimeve huazimi i librit do të rifillon punën me sallat e leximit nga dita e premte 9 tetor 2020 . Ky veprim bëhet në përputhje me masat e udhëzimet e Institutit
                            Kombëtar të Shëndetësisë Publike dhe të Ministrisë së Shëndetësisë të aprovuara nga Qeveria e Republikës së Kosovës si dhe në bashkëpunim të ngushtë me Drejtorinë e Kulturës dhe organet tjera të Komunës së Prishtinës.Në dy
                            javët e para do të punohet pesë ditë të javës nga ora 8.15 e deri në orën 16.00. Nëse shkon puna në rregull dhe pa pengesa që në javën e dytë do të filloj me orar të plotë do të thotë nga 8.00 – 19.00</p>
 -->

                    <!-- </div> ardy -->
                <!-- </div> gridi1 -->
            <!-- </div> ->lajmet -->
        <!-- </div>  usage -->
<!--    
    <br>
    <br>

    <div class="lyst">
        <ul style="margin-left:2em;">
            <li style="display:inline"><a href="lajme.php">1</a></li>
            <li style="display:inline"><a>, </a></li>
            <li style="display:inline"><a href="lajme2.php">2</a></li>
            <li style="display:inline"><a>, </a></li>
            <li style="display:inline"><a href="lajme3.php">3</a></li>
            <li style="display:inline"><a>, </a></li>
            <li style="display:inline"><a href="lajme4.php">4</a></li>
            <li style="display:inline"><a>, </a></li>
            <li style="display:inline"><a href="">...</a></li>
        </ul>
    </div>

  -->

    </div>

    <?php require APPROOT . '/views/inc/footer.php'; ?>

    <script>
        function viewModal() {
            const modal = $(this).children()[1];


            console.log(typeof(modal));


            const photo = $(this).children('#img').attr('src');
            modal.style.display = "block";

            span.onclick = function() {


                console.log(modal);
            }

        }



        const lajmet = document.getElementsByClassName('ardy');

        for (let i = 0; i < lajmet.length; i++) {
            lajmet[i].addEventListener('click', viewModal);
        }
        $(".close").on("click", function(event) {
            $(this).parent().fadeOut();
            event.preventDefault();
        });



        const theme = document.querySelector("#stilicss");

        console.log(localStorage);

        remember();

        function darkMode() {

            theme.href = "<?php echo URLROOT . '/CSS/stylesdark.css'; ?>";
            localStorage.setItem("color", "dark");
            console.log(localStorage);
            document.getElementById("teksti").className = "fa fa-sun-o";
            document.getElementById("teksti").style.color = "white";
            document.getElementById("teksti").style.backgroundColor = "transparent";

        }

        function lightMode() {

            theme.href = "<?php echo URLROOT . '/CSS/styles.css'; ?>";
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