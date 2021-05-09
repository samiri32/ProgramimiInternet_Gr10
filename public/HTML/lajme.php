<!DOCTYPE html>
<html>

<head>
    <title>Lajmet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/lajmi.css">
    <link rel="stylesheet" id="stilicss" href="../CSS/styles.css">
    <link rel="shortcut icon" type="image/png" href="../img/sinani4.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        window.onscroll = function() {
            growShrinkLogo()
        };

        function growShrinkLogo() {
            var sinani = document.getElementById("sinani")
            if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
                sinani.style.width = "5em";
                sinani.style.height = "3.5em";

            } else {
                sinani.style.width = "8em";
                sinani.style.height = "6em";
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').click(function() {
                $('.menu-item').toggleClass('hide-item')
                $('.search-form').toggleClass('active')
            })
        })
    </script>


    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            margin: 0;
        }
        
        .sinanibabo {
            display: flex;
            justify-content: center;
        }
        
        .logoja {
            display: inline-grid;
            justify-content: center;
        }
        
        .titulli {
            color: white;
            font-size: 1.45em;
        }
        
        .titulli:hover {
            color: #0075ff;
        }
        
        .header {
            background-color: black;
            height: 1.25em;
            color: white;
            text-decoration: none;
        }
        
        .djathtas {
            display: grid;
            align-content: space-between;
        }
        
        .majtas {
            align-content: space-between;
            display: grid;
        }
        
        .topnav {
            display: flex;
            justify-content: center;
            overflow: hidden;
            position: -webkit-sticky;
            position: sticky;
            z-index: 1;
            top: 0;
            padding: 0px;
            background-color: black;
            border: 2px solid;
        }
        
        .topnav a {
            font-size: 1.45em;
            color: #f2f2f2;
            padding: 0px 30px;
            text-decoration: none;
        }
        
        .topnav a:hover {
            color: #0075ff;
        }
        
        .djathtasposht a.menu-item {
            transform: scale(1);
            display: inline-block;
            transition: 0.5s;
        }
        
        .djathtasposht a.menu-item.hide-item {
            transform: scale(0);
        }
        
        #one {
            transition-delay: 0.2s;
        }
        
        #two {
            transition-delay: 0.1s;
        }
        
        #three {
            transition-delay: 0s;
        }
        
        .konga {
            left: 41vw;
            position: absolute;
        }
        
        .search-form {
            display: inline-block;
            position: sticky;
            margin-bottom: 0.3em;
            top: 8em;
            right: 28em;
            transform: translateX(-50%);
            width: 0em;
            height: 1em;
            transition: 0.6s;
            opacity: 0;
            visibility: hidden;
        }
        
        .search-form.active {
            position: sticky;
            top: 8em;
            right: 28em;
            width: 0em;
            height: 1em;
            opacity: 1;
            transition-delay: 0.4s;
            visibility: visible;
            background: transparent;
        }
        
        .search-form input {
            margin-left: 1.5em;
            margin-top: -0.2em;
            width: 15em;
            height: 1.5em;
            color: white;
            border: none;
            background: transparent;
            outline: none;
            font-size: 1.1em;
        }
    </style>

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
    <title>Lajmet</title>
    <div class="header"></div>


    <div class="topnav">
        <div class="majtas">
            <div class="majtasnalt">homepage</div>
            <div class="majtasposht">
                <a href="../index.html">Ballina</a>
                <a href="../HTML/Autoret1.html">Autorët</a>
                <a href="../HTML/Librat.html">Librat</a>
                <a href="../HTML/lajmi.html">Lajme</a>
            </div>
        </div>

        <div class="logoja">
            <div class="sinanibabo">
                <img src="../img/sinani.png" alt="pldh" height="130em" width="175em" id='sinani'>
            </div>
            <a href="../index.html" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka Sinan
              Dobreva</span></a>
        </div>

        <div class="djathtas">
            <div class="djathtasnalt">homepage</div>
            <div class="djathtasposht">
                <div class="search-form">
                    <form>
                        <input type="text" name="" placeholder="Kërkoni">
                    </form>
                </div>
                <a href="../HTML/galeria.html" class="menu-item" id="one">Galeria</a>
                <a href="../HTML/Kontakti.html" class="menu-item" id="two">Kontakti</a>
                <a href="../HTML/kycu.html" class="menu-item" id="three">Kyçu</a>
                <a href="#" id="search"><i class="fa fa-search"></i></a>


            </div>
        </div>
    </div>

    <div>   
        <i onclick="toggleButton()" class="fa fa-moon-o" id="teksti" style="margin-left:0.5em;margin-top:0.5em; font-size: 2em;font-weight: bold; position:-webkit-fixed;position:fixed;z-index: 9999;"></i> 
         
       
       </div>

    <div class="title">

        <h1 style="color: #0075ff;">Lajmet Aktuale</h1>
    </div>
    <hr>
    <br>
    <br>

    <div class="prk">
        <div style="display:inline; margin-left:18vw;">
            <button class="boxat" id="ZoomIn">Zmadho Audion</button>
        </div>
        <div style="display:inline; float:right; margin-right:18vw;">
            <button class="boxat1" id="ZoomReset">Reseto Audion</button>
        </div>
    </div>
    <div class="konga">
        <audio id="audio" controls>
            <source src="../img/Muharrem Qena Mallengjimi.mp3" type="audio/mpeg">
          Shnosh :/
          </audio>
    </div>

</body>

<body onload="showSlides(1)">
    <div class="gridat">
        <h2 style=" text-align:center; margin-top:3em;">Te Rejat</h2>

        <div class="usage">
            <div class="lajmet">

                <div class="gridi1">
                    <div class="ardy">
                        <img class="fototmodal" src="../img/HIVZIABABOOO.jpg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/HIVZIABABOOO.jpg">
                            <p class="tekstimodal">
                                Biblioteka “Hivzi Sulejmani” pas punës dymujore të ofrimit të shërbimeve huazimi i librit do të rifillon punën me sallat e leximit nga dita e premte 9 tetor 2020 . Ky veprim bëhet në përputhje me masat e udhëzimet e Institutit Kombëtar të Shëndetësisë
                                Publike dhe të Ministrisë së Shëndetësisë të aprovuara nga Qeveria e Republikës së Kosovës si dhe në bashkëpunim të ngushtë me Drejtorinë e Kulturës dhe organet tjera të Komunës së Prishtinës.Në dy javët e para do të punohet
                                pesë ditë të javës nga ora 8.15 e deri në orën 16.00. Nëse shkon puna në rregull dhe pa pengesa që në javën e dytë do të filloj me orar të plotë do të thotë nga 8.00 – 19.00
                            </p>
                        </div>


                        <span class="titulli1" id="hivzia"> Kanë filluar punimet për renovimin e ndërtesës së bibliotekës së qytetit, “Hivzi Sulejmani”</span>

                        <p>Biblioteka “Hivzi Sulejmani” pas punës dymujore të ofrimit të shërbimeve huazimi i librit do të rifillon punën me sallat e leximit nga dita e premte 9 tetor 2020 . Ky veprim bëhet në përputhje me masat e udhëzimet e Institutit
                            Kombëtar të Shëndetësisë Publike dhe të Ministrisë së Shëndetësisë të aprovuara nga Qeveria e Republikës së Kosovës si dhe në bashkëpunim të ngushtë me Drejtorinë e Kulturës dhe organet tjera të Komunës së Prishtinës.Në dy
                            javët e para do të punohet pesë ditë të javës nga ora 8.15 e deri në orën 16.00. Nëse shkon puna në rregull dhe pa pengesa që në javën e dytë do të filloj me orar të plotë do të thotë nga 8.00 – 19.00</p>


                    </div>
                </div>

                <div class="gridi2">
                    <div class="ardy">
                        <img style="float: right" class="fototmodal" src="../img/ismail-kadare-j-foley-opale-w-1-990x556.jpg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/ismail-kadare-j-foley-opale-w-1-990x556.jpg">
                            <p class="tekstimodal">
                                Lindur në vitin 1936, Ismail Kadare është poeti dhe romancieri më i njohur i Shqipërisë. Në 2005 ai u vlerësua me çmimin inaugurues Man Booker International për "një pjesë të veprës të shkruar nga një autor i cili ka pasur një ndikim vërtet global". Ai
                                është gjithashtu marrës i Çmimit Princi i Asturias 2009 në Spanjë, dhe në 2015 ai fitoi Çmimin Jeruzalem për Lirinë e Individit në Shoqëri. Kadare është një kampion i demokracisë ndërkombëtare dhe në 1990 hyri në azil politik
                                në Francë.Kadare jeton në Paris. Ai shpesh përmendet si pretendent për çmimin Nobel në letërsi.
                            </p>
                        </div>
                        <span class="titulli1" id="kadare"> Ismail Kadare: Fituesi i sivjetshëm i &ccedilmimit Neustadt Prize p&eumlr Literatur&euml</span>

                        <p>Lindur në vitin 1936, Ismail Kadare është poeti dhe romancieri më i njohur i Shqipërisë. Në 2005 ai u vlerësua me çmimin inaugurues Man Booker International për "një pjesë të veprës të shkruar nga një autor i cili ka pasur një
                            ndikim vërtet global". Ai është gjithashtu marrës i Çmimit Princi i Asturias 2009 në Spanjë, dhe në 2015 ai fitoi Çmimin Jeruzalem për Lirinë e Individit në Shoqëri. Kadare është një kampion i demokracisë ndërkombëtare dhe
                            në 1990 hyri në azil politik në Francë.Kadare jeton në Paris. Ai shpesh përmendet si pretendent për çmimin Nobel në letërsi.</p>


                    </div>
                </div>

                <div class="gridi3">
                    <div class="ardy">
                        <img class="fototmodal" src="../img/ekspozita.jpeg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/ekspozita.jpeg">
                            <p class="tekstimodal">Në Qendrën për Hapje dhe Dialog, në kryeministri u çel të hënën ekspozita "Përtej Kujtimeve", me rastin e 70-vjetorit të marrëdhënieve Shqipëri-Kinë. "Përtej Kujtimeve" ekspozon një koleksion pullash përkujtimore me tematikë
                                Kinën, të lëshuara nga Posta Shqiptare përgjatë viteve 1968-2009, gjithashtu dhe vepra tradicionale artistike nga qyteti Nanjing, Kinë. Në fjalimin e tij, ambasadori Zhou Ding tha se gjatë 70 vjetëve pas vendosjes së marrëdhënieve
                                diplomatike midis Kinës e Shqipërisë, marrëdhëniet dypalëshe kanë kaluar provën e ndryshimit të situatës ndërkombëtare, dy palët kanë ruajtur gjithmonë lidhjen e ngushtë, miqësia midis dy popujve është trashëguar brez pas
                                brezi.
                            </p>
                        </div>
                        <span class="titulli1" id="ekspozita"> Ekspozita e librit e mbajtur për nder të 70 vjetorit të lidhjes Shqiptaro-kineze</span>

                        <p>Në Qendrën për Hapje dhe Dialog, në kryeministri u çel të hënën ekspozita "Përtej Kujtimeve", me rastin e 70-vjetorit të marrëdhënieve Shqipëri-Kinë. "Përtej Kujtimeve" ekspozon një koleksion pullash përkujtimore me tematikë Kinën,
                            të lëshuara nga Posta Shqiptare përgjatë viteve 1968-2009, gjithashtu dhe vepra tradicionale artistike nga qyteti Nanjing, Kinë. Në fjalimin e tij, ambasadori Zhou Ding tha se gjatë 70 vjetëve pas vendosjes së marrëdhënieve
                            diplomatike midis Kinës e Shqipërisë, marrëdhëniet dypalëshe kanë kaluar provën e ndryshimit të situatës ndërkombëtare, dy palët kanë ruajtur gjithmonë lidhjen e ngushtë, miqësia midis dy popujve është trashëguar brez pas brezi.
                        </p>


                    </div>
                </div>

                <div class="gridi4">
                    <div class="ardy">
                        <img style="float: right" class="fototmodal" src="../img/noli.jpg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/noli.jpg">
                            <p class="tekstimodal">“Një figurë themelore e lëvizjes nacionaliste shqiptare të sapolindur, dijetari Fan S. Noli krijoi forcën e lëvizjes në Shtetet e Bashkuara, ku ai themeloi Kishën Ortodokse Shqiptare”. “Daily Sabah” e ka nisur kështu artikullin
                                kushtuar figurës, rolit dhe veprimtarisë së rëndësishme të Fan. S Nolit, veprat e të cilit tashmë do të jenë të ekspozuara në një librari në Boston.<br> E vendosur modestisht në katin e dytë të ndërtesës pranë Katedrales,
                                biblioteka arkivore e rrallë që zotëron Neka Doko hap dyert e saj në një zyrë me dritare dhe pamje nga lokalet të lagjes së ngushtë të Greater Bostonit.
                            </p>
                        </div>
                        <span class="titulli1" id="nolinjo"> Libraria e Fan Nolit në Boston, rikthim në nacionalizmin shqiptar</span>

                        <p>“Një figurë themelore e lëvizjes nacionaliste shqiptare të sapolindur, dijetari Fan S. Noli krijoi forcën e lëvizjes në Shtetet e Bashkuara, ku ai themeloi Kishën Ortodokse Shqiptare”. “Daily Sabah” e ka nisur kështu artikullin
                            kushtuar figurës, rolit dhe veprimtarisë së rëndësishme të Fan. S Nolit, veprat e të cilit tashmë do të jenë të ekspozuara në një librari në Boston.<br> E vendosur modestisht në katin e dytë të ndërtesës pranë Katedrales, biblioteka
                            arkivore e rrallë që zotëron Neka Doko hap dyert e saj në një zyrë me dritare dhe pamje nga lokalet të lagjes së ngushtë të Greater Bostonit.
                        </p>


                    </div>
                </div>

                <div class="gridi5">
                    <div class="ardy">
                        <img class="fototmodal" src="../img/mini-biblioteka.jpg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/mini-biblioteka.jpg">
                            <p class="tekstimodal">Hapet mini-biblioteka e parë në Prishtinë me moton “Sill një libër merr një tjetër”. Sot u hap mini-biblioteka e parë në Parkun e vjetër në lagjen “Dardania” të Prishtinës, e cila u mundësua nga ETEA, Kuvendi i të Rinjve të
                                Prishtinës, Libraria “Dukagjini” dhe FIQ.Mini-biblioteka do të ketë qasje 24 orë në 7 ditë të javës dhe do të jetë nën kujdesin e banorëve të lagjes. E njëjta do të ketë mbi 100 libra në dispozicion të banorëve të lagjes
                                dhe të të gjithë të interesuarve për shkëmbim të librave apo huazim të librit përgjatë qëndrimit në lagje.
                            </p>
                        </div>
                        <span class="titulli1" id="minibibliotekat"> Lagjet e Prishtinës bëhen me mini-biblioteka</span>

                        <p>​Hapet mini-biblioteka e parë në PrishtinëMe moton “Sill një libër merr një tjetër”, sot u hap mini-biblioteka e parë në Parkun e vjetër në lagjen “Dardania” të Prishtinës, e cila u mundësua nga ETEA, Kuvendi i të Rinjve të Prishtinës,
                            Libraria “Dukagjini” dhe FIQ.Mini-biblioteka do të ketë qasje 24 orë në 7 ditë të javës dhe do të jetë nën kujdesin e banorëve të lagjes. E njëjta do të ketë mbi 100 libra në dispozicion të banorëve të lagjes dhe të të gjithë
                            të interesuarve për shkëmbim të librave apo huazim të librit përgjatë qëndrimit në lagje.</p>


                    </div>
                </div>

                <div class="gridi6">
                    <div class="ardy">
                        <img style="float: right" class="fototmodal" src="../img/arsimimi.png">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/arsimimi.png">
                            <p class="tekstimodal">Në ambientet e Këndit Amerikan, znj. Maja Adiga, zëvendës - asistente e sekretarit të shtetit për programe Akademike në kuadër të Byrosë për çështje arsimore dhe kulturore të Departamentit Amerikan te Shtetit u takua me partnerë
                                si; Biblioteka Hivzi Sulejmani Dega – “ Biblioteka Përkujtimore”, Këndi Amerikan dhe SOS – Fshatrat e fëmijëve të Kosovës. Qëllimi i takimit ishte programi që u ndihmon grave të margjinalizuara të shoqërisë të mësojnë shkrim-lexim,
                                anglisht dhe kompjuter.
                            </p>
                        </div>
                        <span class="titulli1"> Arsimimi i grave përmes aktiviteteve</span>

                        <p>Në ambientet e Këndit Amerikan, znj. Maja Adiga, zëvendës - asistente e sekretarit të shtetit për programe Akademike në kuadër të Byrosë për çështje arsimore dhe kulturore të Departamentit Amerikan te Shtetit u takua me partnerë
                            si; Biblioteka Hivzi Sulejmani Dega – “ Biblioteka Përkujtimore”, Këndi Amerikan dhe SOS – Fshatrat e fëmijëve të Kosovës. Qëllimi i takimit ishte programi që u ndihmon grave të margjinalizuara të shoqërisë të mësojnë shkrim-lexim,
                            anglisht dhe kompjuter.</p>


                    </div>
                </div>

                <div class="gridi7">
                    <div class="ardy">
                        <img class="fototmodal" src="../img/Dukagjinn-640x480.jpg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/Dukagjinn-640x480.jpg">
                            <p class="tekstimodal">Mbyllja si pasojë e pandemisë shkaktoi tkurrje drastike të vizitorëve në bibliotekat e vendit ndërkohë që libraritë shënuan rritje në shitje të librave gjatë këtij viti. E pajisur me 70 mijë libra e me 80 ulëse për lexim, biblioteka
                                “Sadik Tafarshiku” në Ferizaj këtë të martë kishte mbetur vetëm me tetë lexues në sallë. Ky është një numër jo i zakonshëm për bibliotekën e cila vizitohet nga nxënës, studentë, studiues e banorë të Ferizajt e rrethinës.
                            </p>
                        </div>
                        <span class="titulli1" id="leximi"> Leximi gjatë pandemisë, bibliotekat pa vizitorë dhe lulëzim i shitjes së librave</span>

                        <p>Mbyllja si pasojë e pandemisë shkaktoi tkurrje drastike të vizitorëve në bibliotekat e vendit ndërkohë që libraritë shënuan rritje në shitje të librave gjatë këtij viti. E pajisur me 70 mijë libra e me 80 ulëse për lexim, biblioteka
                            “Sadik Tafarshiku” në Ferizaj këtë të martë kishte mbetur vetëm me tetë lexues në sallë. Ky është një numër jo i zakonshëm për bibliotekën e cila vizitohet nga nxënës, studentë, studiues e banorë të Ferizajt e rrethinës.
                        </p>


                    </div>
                </div>

                <div class="gridi8">
                    <div class="ardy">
                        <img style="float: right" class="fototmodal" src="../img/dhurohenlibra.png">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/dhurohenlibra.png">
                            <p class="tekstimodal">Fëmijët e kopshtit “Elita”, kanë dhuruar ndihma simbolike për fëmijët e fshatit “SOS”, kurse arushi “Lino”, ka shpërblyer fëmijët për humanitetin e tyre , me libra për ngjyrosje. Në kuadër të kampanjës “Fëmijët ndihmojnë fëmijët”,
                                fëmijë të kopshteve të ndryshme në Komunën e Prishtinës janë duke dhuruar rrobe për fëmijët e SOS Fshatit, kampanjë kjo që është duke u zhvilluar me brendin Lino, shkruan KultPlus.
                            </p>
                        </div>
                        <span class="titulli1" id="sos"> Dhurohen libra në SOS Fshatin e fëmijëve</span>

                        <p>Fëmijët e kopshtit “Elita”, kanë dhuruar ndihma simbolike për fëmijët e fshatit “SOS”, kurse arushi “Lino”, ka shpërblyer fëmijët për humanitetin e tyre , me libra për ngjyrosje. Në kuadër të kampanjës “Fëmijët ndihmojnë fëmijët”,
                            fëmijë të kopshteve të ndryshme në Komunën e Prishtinës janë duke dhuruar rrobe për fëmijët e SOS Fshatit, kampanjë kjo që është duke u zhvilluar me brendin Lino, shkruan KultPlus.</p>


                    </div>
                </div>

                <div class="gridi9">
                    <div class="ardy">
                        <img style="float: right" class="fototmodal" src="https://kallxo.com/wp-content/uploads/2020/12/Ekspozita-per-Atm%C3%A9-e-f%C3%A9--640x480.jpg">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="https://kallxo.com/wp-content/uploads/2020/12/Ekspozita-per-Atm%C3%A9-e-f%C3%A9--640x480.jpg">
                            <p class="tekstimodal">Në 80 vjetorin e vdekjes së At Gjegj Fishtës, Biblioteka Kombëtare, “Pjetër Bogdani” në Prishtinë ka hapur sot ekspozitën, “per Atmé e fé” – Gjergj Fishta. Në këtë ekspozitë janë ekspozuar vepra e dorëshkrime të rralla e të
                                pabotuara të Fishtës, por edhe vepra monografike e tematike të shkruara për Fishtën, që gjenden në koleksionin e BKK-së, “Pjetër Bogdani”. Në ceremoninë e hapjes së kësaj ekspozite mori pjesë edhe Ipeshkvi i Kosovës, Dodë
                                Gjergji dhe zv/ministri i Kulturës, Rinisë dhe Sportit, Engelbert Zefaj.
                            </p>
                        </div>
                        <span class="titulli1" id="fishta"> Dorëshkrime të rralla të Fishtës ekspozohen në Bibliotekën Kombëtare</span>

                        <p>Në 80 vjetorin e vdekjes së At Gjegj Fishtës, Biblioteka Kombëtare, “Pjetër Bogdani” në Prishtinë ka hapur sot ekspozitën, “per Atmé e fé” – Gjergj Fishta. Në këtë ekspozitë janë ekspozuar vepra e dorëshkrime të rralla e të pabotuara
                            të Fishtës, por edhe vepra monografike e tematike të shkruara për Fishtën, që gjenden në koleksionin e BKK-së, “Pjetër Bogdani”. Në ceremoninë e hapjes së kësaj ekspozite mori pjesë edhe Ipeshkvi i Kosovës, Dodë Gjergji dhe
                            zv/ministri i Kulturës, Rinisë dhe Sportit, Engelbert Zefaj.</p>


                    </div>
                </div>

                <div class="gridi10">
                    <div class="ardy">
                        <img class="fototmodal" src="../img/Aktiviteti.png">
                        <div class="modal">
                            <span class="close">×</span>
                            <img class="modal-content" src="../img/Aktiviteti.png">
                            <p class="tekstimodal"> Në kuadër të festivalit PrishtinaLexon, banorët e kryeqytetit patën mundësinë të regjistrohen pa pagesë në të gjitha degët e Bibliotekës "Hivzi Sulejmani", kjo një gjë e cila u mirëpritë nga të gjithë qytetarët pa dallim, ndërsa
                                në sheshin "Zahir Pjaziti", nga të gjithë lexuesit u shpallën lexuesit e dalluar të Komunës së Prishtinës, duke përfshirë të gjitha grupmoshat, si në vijim:<br> Era Dragusha, nxënëse;<br> Flamur Foniqi, student;<br> Hazir
                                Mehmeti, pensionist;<br> Tre lexuesit e vitit morën mirënjohje dhe libra, dhuratë nga libraria "Dukagjiin", Biblioteka "Hivzi Sulejmani" dhe Aleanca franceze. Kryetari i qytetit shfrytëzoi rastin të inkurajojë të gjithë
                                të rinjët të lexojnë sa më shumë duke pasur parasysh se niveli i të lexuarit në vendin tonë nuk është i kënaqshëm.

                            </p>

                        </div>
                        <span class="titulli1"> Aktiviteti Prishtina lexon</span>

                        <p>
                            Në kuadër të festivalit PrishtinaLexon, banorët e kryeqytetit patën mundësinë të regjistrohen pa pagesë në të gjitha degët e Bibliotekës "Hivzi Sulejmani", kjo një gjë e cila u mirëpritë nga të gjithë qytetarët pa dallim, ndërsa në sheshin "Zahir Pjaziti",
                            nga të gjithë lexuesit u shpallën lexuesit e dalluar të Komunës së Prishtinës, duke përfshirë të gjitha grupmoshat, si në vijim: </p>

                        <ol class="lista">
                            <li>Era Dragusha, nxënëse;</li>
                            <li>Flamur Foniqi, student;</li>
                            <li>Hazir Mehmeti, pensionist;</li>
                        </ol>
                        <p>
                            Tre lexuesit e vitit morën mirënjohje dhe libra, dhuratë nga libraria "Dukagjiin", Biblioteka "Hivzi Sulejmani" dhe Aleanca franceze.
                        </p>

                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>
        <div class="lyst">
            <ul style="margin-left:2em;">
                <li style="display:inline"><a href="lajmi.html">1</a></li>
                <li style="display:inline"><a>, </a></li>
                <li style="display:inline"><a href="lajmi2.html">2</a></li>
                <li style="display:inline"><a>, </a></li>
                <li style="display:inline"><a href="lajmi3.html">3</a></li>
                <li style="display:inline"><a>, </a></li>
                <li style="display:inline"><a href="lajmi4.html">4</a></li>
                <li style="display:inline"><a>, </a></li>
                <li style="display:inline"><a href="">...</a></li>
            </ul>
        </div>



    </div>

    <div class="row4">
        <div class="shortcuts">
            <div class="shortcutnalt">
                <div class="bs">VEGËZA TË DOBISHME</div>
            </div>
            <div class="shortcutposht">
                <a href="../HTML/Librat.html" class="eee" id="sdds">Libra</a>
                <a href="../HTML/Autoret1.html" class="eee" id="fdsfdsf">Autorët</a>
                <a href="../HTML/lajmi.html" class="eee" id="fsdfdsf">Lajme</a>

            </div>
        </div>
    </div>

    <div class="row5">
        <div class="row5pjesepjese">
            <div class="logoja">
                <div class="sinanibabo">
                    <img src="../img/sinani3.png" alt="pldh" height="130em" width="175em" id='sinanibardh'>
                </div>
                <span id="sinaniposht">Biblioteka Sinan Dobreva</span>
            </div>
            <div class="perberja">
                <div class="kolona1p">
                    <span id="lajmekuq5" style="font-size: 1em;">Misioni</span>
                    <br>
                    <p id="kolona1pp">BSD është institucion kulturor, edukues e informues që grumbullon dhe ruan koleksionet e veta nga fushat e ndryshme të krijimtarisë intelektuale me qëllim që t’ i bëjë të njohura shfrytëzuesve për t’i studiuar dhe për t’ i lënë trashëgim
                        gjeneratave të ardhshme.</p>
                    <a href="./Librat.html">
                        <p id="katalogu">Shfleto katalogun</p>
                    </a>
                </div>

                <div class="kolona1p">
                    <span id="lajmekuq5" style="font-size: 1em;">Ofertat</span>
                    <br>
                    <p id="kolona1pp">Biblioteka BSD ofron qasje në materialin bibliotekar për të gjithë përdoruesit e qytetit të Prishtinës me rrethinë, pavarësisht nga raca, kombësia, gjinia, mosha, besimi fetar, gjuha, paaftësitë fizike dhe informon e ndihmon ata në
                        përdorimin e gjetjen e tyre.</p>
                    <a href="regjistrohu.html">
                        <p id="katalogu">Regjistrohu</p>
                    </a>
                </div>

                <div class="kolona1p">
                    <span id="lajmekuq5" style="font-size: 1em;">Bashkëpunëtorët</span>
                    <br>
                    <p id="kolona1pp">Biblioteka "Sinan Dobreva" bashkëpunon me bibliotekat në vend dhe jashtë vendit; Bashkëpunon me institucionet kulturore, shtëpitë botuese, shkollat dhe me komunitetin me qëllim të nxitjes së interesimit për librin dhe të mësuarit gjatë
                        gjith jetës. Shfletoni galerinë për më shumë.</p>
                    <a href="galeria.html">
                        <p id="katalogu">Galeria</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <!--QITU JA NIS row6-->

    <div class="row6">
        <div class="subfooternalt">
            <div class="sbkol1">
                <span id="sf">Regjistrohu për të pranuar e-mails nga Biblioteka</span><br><br>
                <!-- Qitu ni form per Anetaresim (mail subscription)-->
                <form autocomplete="on" action="/action_page.php">
                    <div class="autocomplete" style="width: 25em;">
                        <input id="myInput" type="text" name="myEmail" placeholder="E-mail" style="background-color:white;">
                    </div>
                    <button class="buton">Dërgo</button>
                </form> <input type="checkbox" checked="checked" name="subscribe"> <span id="perdite">E-mails të përditshme </span> <br><br>
            </div>

            <div class="sbkol1">
                <span id="sf">Porosit katalogun e librave</span><br><br>
                <button class="buton">Porosit</button>
                <h5 id="h5">Plotësisht falas!</h5>
            </div>

        </div>

        <div class="subfooterposht">

            <div class="sbkol2">

                <ul>

                    <li><a href="./Librat.html">
             Libra shqip
            </a>
                    </li>
                    <li><a href="./Librat.html#teHuaj">
            Libra të huaj
          </a></li>
                </ul>
            </div>

            <div class="sbkol2">

                <ul>


                    <li><a href="../HTML/meshum.html">
             Autorë shqiptar
           </a></li>
                    <li><a href="../HTML/meshume.html">
            Autorë të huaj
          </a></li>
                </ul>
            </div>
            <div class="sbkol2">

                <ul>
                    <li><a href="./HTML/lajmi.html"><span>Lajme</span></a>
                    </li>

                </ul>
            </div>
            <div class="sbkol2">

                <ul>

                    <li><a href="../HTML/galeria.html">
                Fotogaleria
              </a>
                    </li>
                    <li><a href="../HTML/galeria.html">
              Videogaleria
            </a>
                    </li>
                </ul>
            </div>
            <div class="sbkol2">

                <ul>
                    <li><a href="../HTML/Kontakti.html"><span>Kontakti</span></a>
                    </li>
                </ul>
            </div>
            <div class="sbkol2">

                <ul>
                    <li><a href="../HTML/regjistrohu.html"><span>Regjistrohu</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <!-- qiky /div e mshel homepage ; -->



    <footer class="futeri">
        <div class="futerimrena">

            <div class="futerimamrena">
                <div class="sbkol3">
                    <a href="#" id="socialmedia" style="padding-right:0.5em;"><i class="fa fa-instagram" ></i></a>
                    <a href="#" id="socialmedia" style="padding-right:0.5em;"><i class="fa fa-facebook"></i></a>
                    <a href="#" id="socialmedia"><i class="fa fa-twitter"></i></a>
                </div>

                <div class="sbkol3">
                    <span id="suxhuki">Për sugjerime:</span>
                    <a href="mailto: BSDa@biblioteka.com" id="socialmedia" style="padding-left: 0.15em;">
                        <i class="fa fa-envelope"></i></a>
                </div>

                <div class="sbkol3">
                    <address style="font-size:0.8em">
            Dobrevë, 10000<br>
            Kosovë
            </address>
                </div>

                <div class="sbkol33">
                    <span style="font-size:0.85em;">©2020-2021 <abbr title="Biblioteka Sinan Dobreva">BSD</abbr> Të gjitha të drejtat e rezervuara.</span>
                </div>
            </div>

        </div>
    </footer>


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
    }
    else if (localStorage.getItem("color") == ("dark")) {

        lightMode();
    }
}

function remember() {
    if (localStorage.getItem("color") == ("light")) {

        lightMode();

    }
    else if (localStorage.getItem("color") == ("dark")) {

        darkMode();

    }
}


    </script>


</body>


</html>