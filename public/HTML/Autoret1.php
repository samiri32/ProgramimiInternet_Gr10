<!DOCTYPE html>
<html lang="en">

<head>
    <title>Autorët</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body>
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
            <a href="../index.html" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka
                    Sinan Dobreva</span></a>
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
    <div class="container">
        <br>
        <h2 id="nentitulli"><a href="../HTML/meshum.html">Autorë shqiptar</a></h2>
        <div class="autoret">
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/Naim_Frasheri.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <h2>Naim Frasheri</h2>
                        <p>Naim bej Frashëri i njohur më së shumti si Naim Frashëri (Frashër, 25 maj 1846 - Stamboll, 20 tetor 1900) ka qenë poet dhe shkrimtar shqiptar, një nga përfaqësuesit më të shquar të Rilindjes Kombëtare dhe figura qendrore e letërsisë
                            së Rilindjes. Për së gjalli u pagëzua "apostull i shqiptarizmës" dhe "bilbil i gjuhës shqipe". Vepra poetike e Naimit vuri bazat e letërsisë kombëtare dhe luajti rol të rëndësishëm në zgjimin e vetëdijes atdhetare. Naimi i
                            këndoi mallit e dashurisë për atdhe, krenarisë kombëtare dhe të kaluarës së lavdishme të shqiptarëve.Naimi është autor i gjithsej njëzetedy veprave

                            <div class="meshum">
                                <a href="../HTML/meshum.html#Naim-Frasheri"> Më shumë</a>
                            </div>

                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naim_Frash%C3%ABri" target=_blank> Naim Frasheri</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/download.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Naum Veqilharxhi</h2>
                        <p>
                            Naum Veqilharxhi, lindur Naum Bredhi (1797 - 1846) ka qenë një avokat dhe studjues shqiptar. Më 1844 krijoi një alfabet krejt origjinal për gjuhën shqipe, quajtur Alfabeti i Vithkuqit. Veqilharxhi shmangu përdorimin e shkronjave greke. Ai është ndër figurat
                            më të shquara të viteve të para të Rilindjes Kombëtare Shqiptare, dhe çmohet si njëri prej ideologëve të saj të parë .
                            <div class="meshum">
                                <a href="../HTML/meshum.html#Naum"> Më shumë</a>
                            </div>
                        </p>



                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Naum Veqilharxhi</a>
                </p>
            </div>

            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/Gjergj_Fishta.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Gjergj Fishta</h2>
                        <p>Gjergj Fishta (Fishtë, 23 tetor 1871 - Shkodër, 30 dhjetor 1940) ka qenë frat françeskan, arsimtar, shkrimtar, përkthyes dhe po ashtu kryetar i komisionit për hartimin e alfabetit në Kongresin e Manastirit, anëtar i delegacionit
                            të qeverisë Përmeti në Konferencën e Versajës dhe zëvendëskryetar i legjislativit shqiptar më 1921. Pas dekadës së dytë të shek. XX, Fishta iu imponua kulturës shqiptare jo vetëm si shkrimtar (poet, dramaturg, prozator etj.),
                            por edhe si kritik, historian i letërsisë dhe estet.Për gjysmë shekulli ishte figura mbizotëruese e letërsisë shqipe, madje që kur ishte gjallë u kurorëzua "poet kombëtar".

                            <div class="meshum">
                                <a href="../HTML/meshum.html#Gjergj-Fishta"> Më shumë</a>
                            </div>

                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Gjergj_Fishta" target=_blank>Gjergj Fishta</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/dritero.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Dritero Agolli</h2>
                        <p>Dritëro Agolli (13 tetor 1931 - 3 shkurt 2017) Ishte poet, prozator, publicist dhe politikan shqiptar. Që nga viti 1973 ai ishte kryetar i Lidhjes së Shkrimtarëve dhe të Artistëve të Shqipërisë.

                            <div class="meshum">
                                <a href="../HTML/meshum.html#Dritero-Agolli"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Drit%C3%ABro_Agolli" target=_blank> Dritero Agolli</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/Migjeni11.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Migjeni</h2>
                        <p>Millosh Gjergj Nikolla i njohur më shumë përmes nofkës Migjeni (Shkodër, 13 tetor 1911 - Torre Pellice, 26 gusht 1938) ka qenë poet dhe prozator i shquar shqiptar i viteve 1930. Migjeni konsiderohet si një ndër shkrimtarët më të
                            lexuar e më të rëndësishëm të letërsisë shqipe të shekullit të 20-të. Për epokën ishte një zë krejtësisht novator nga brendia dhe forma dhe ndikimi mbi letërsinë shqipe të kohës ishte i madh.


                            <div class="meshum">
                                <a href="../HTML/meshum.html#Migjeni"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Migjeni" target=_blank> Migjeni</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/NM.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Ndre Mjeda</h2>
                        <p>Ndre Mjeda ose Mjedja (Shkodër, 20 nëntor 1866 - 1 gusht 1937) ka qenë prift, gjuhëtar, poet lirik dhe deputet shqiptar. Është cilësuar nga Jakov Milaj "nji ndër letrarët ma të mëdhaj qi ka qitun Shqipnija".

                            <div class="meshum">
                                <a href="../HTML/meshum.html#Ndre"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Ndre_Mjeda" target=_blank> Ndre Mjeda</a>
                </p>
            </div>
        </div>
    </div>

    <br>


    <div class="container">
        <h2 id="nentitulli"><a href="../HTML/meshume.html">Autorë të huaj</a></h2>
        <div class="autoret">
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/FK.jpg" />
                    </div>
                    <div class="flip-card-back">
                        <h2>Franz Kafka</h2>
                        <p> <b>Franz Kafka</b> i lindur më3 korrik, 1883 në Pragë të Austro-Hungarisë, sot Republika Çeke; vdiq më 3 qershor, 1924 në Vjenë të Austrisë. ishte një nga shkrimtarët e historive të shkurtra, dhe romancierët më të mëdhenj të gjuhës
                            gjermane të shekullit XX, trupi i shkrimit i të cilit ishte i vetëm në llojin e tij. Disa nga shkrimet e tij mbetën të pambaruara dhe u botuan pas vdekjes së tij, megjithëse dëshira e tij ishte që ato të asgjësoheshin - janë
                            bërë ikona në letërsinë e Perëndimit.

                            <div class="meshum">
                                <a href="../HTML/meshume.html"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Franz Kafka</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/EH.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Ernest Hemingway</h2>
                        <p>Ishte një novelist amerikan, shkrimtar i historive të shkurtëra dhe gazetar i lindur ne date 21 Korrik 1899.I përket shkrimtarëve të periudhës klasike të letërsisë amerikane. Ernest Heminguej në profilin e tij shkrimtaresk përfaqëson
                            në menyrë të shkëlqyer realizmin letrar në SHBA. Stili i tij ekonomik dhe i nënvlerësuar kishte një ndikim të fortë në fiction të shekullit të 20-të, ndërsa jeta e tij e aventurës dhe imazhi i tij publik ndikuan në gjeneratat
                            e mëvonshme.

                            <div class="meshum">
                                <a href="../HTML/meshume.html#Ernest"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Ernest Hemingway</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/MT.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Mark Twain</h2>
                        <p>Samuel Langhorne Clemens lindur 30 nëntor 1835 ndryshe njihet me emrin Mark Twain, ishte një autor dhe humorist amerikan. Ai shquhet për novelat e tij, The Adventures of Tom Sawyer (Aventurat e Tom Sojerit, 1876), si dhe për (Adventures
                            of Huckleberry Finn) (Aventurat e Hakëllberri Finit), e cila me vone njihej si “Great American Novel” (Novela e famshme Amerikane). Twain u rrit në Hannibal, Missouri, ku shkroi Huckleberry Finn dhe Tom Sawyer, te cilat i shkroi
                            me makine shtypi.
                            <div class="meshum">
                                <a href="../HTML/meshume.html#MT"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Mark Twain</a>
                </p>
            </div>

            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/EAP.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Edgar Allan Poe</h2>
                        <p>Edgar Allan Poe lindi më 19 janar 1809 në Boston, Massachusetts, ShBA ; vdiq më 7 tetor 1849 në Baltimore, Maryland. Ka qenë një shkrimtarë amerikan. Ai e themeloi litertaurën e krimit, zhanrin science fiction dhe të horrorit.
                            Poezia e tij u bë fondamenti të simbolizmit dhe kështu të poezisë moderne. Poe kishte qenë një nga poetët më të përkthyer në të gjitha vendet e botës. Fan Noli e kishte përkthyer edhe në shqip. Ai kishte përkthyer dy poemat
                            më të njohura të tijat : “Korbi” dhe “Anabel Li”.

                            <div class="meshum">
                                <a href="../HTML/meshume.html#Edgar"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Edgar Allan Poe</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/DA.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Dante Alighieri</h2>
                        <p>Dante Alighieri, i pagëzuar Durante di Alighiero degli Alighieri dhe i njohur thjesht si Dante, nga familja Aligieri e Italise. Lindi me 21 qershor 1265. Ka qenë një poet, shkrimtar dhe politikan italian.Ai shquhet si ati i gjuhës
                            italiane; fama e tij është kryesisht për shkak të krijimit të veprës "Komedia" (italisht: Comedìa), dhe më pas e quajtur Divina nga Bokaço duke u bërë e famshme si Komedia Hyjnore (italisht: Divina Commedia), dhe në përgjithësi
                            konsiderohet si vepra më e madhe e shkruar në italisht.

                            <div class="meshum">
                                <a href="../HTML/meshume.html#Dante"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Dante Aligheri</a>
                </p>
            </div>
            <div class="mbajtesi-autoreve">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="../img/TD.jpg" />

                    </div>
                    <div class="flip-card-back">
                        <h2>Teodor Drajzer</h2>
                        <p>Teodor Drajzer romancier dhe gazetar amerikan. Lindi më 27 gusht të vitit 1871, në Terre Haute-Indiana të SHBA- së, dhe u nda nga jeta më 28 dhjetor të vitit 1945 në Los Anxhelos. Arsimin e lartë e kreu në universitetin Indianos,
                            në vitet 1889-90. Karrierën e tij ai e nisi si gazetar në të përditshmen “Chicago Tribune” ku u bë i njohur me disa shkrime të bukura për shkrimtarë të mëdhenj si, Nathaniel Haw Thorne, William Dean Howells dhe disa intervista
                            me personalitete të njohura të politikës së vendit.

                            <div class="meshum">
                                <a href="../HTML/meshume.html#Teodor"> Më shumë</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="autori">
                <p>
                    <a href="https://sq.wikipedia.org/wiki/Naum_Veqilharxhi" target=_blank> Teodor Drajzer</a>
                </p>
            </div>
        </div>
    </div>








    <br>
    <br>
    <br>
    <br>

    <br>
    <div class="center">
        <div class="meimiri">

            <h3>Autorët vendas me të lexuar të vitit 2020 janë: </h3>

        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Ranku</th>
                    <th>Emri</th>
                    <th>Mbiemri </th>
                    <th>Numri i lexuesve</th>

                </tr>
            </thead>
            <tbody>
                <tr class="cift">
                    <td>1</td>
                    <td>Naim</td>
                    <td>Frasheri</td>
                    <td>3843</td>
                </tr>
                <tr class="tek">
                    <td>2</td>
                    <td>Gjergj</td>
                    <td>Fishta</td>
                    <td>3244</td>

                </tr>
                <tr class="cift">
                    <td>3</td>
                    <td>Millosh</td>
                    <td>Nikolla</td>
                    <td>2932</td>

                </tr>
                <tr class="tek">
                    <td>4</td>
                    <td>Fan</td>
                    <td>Noli</td>
                    <td>2458</td>

                </tr>

                <tr class="cift">
                    <td>5</td>
                    <td>Sami</td>
                    <td>Frasheri</td>
                    <td>1067</td>

                </tr>



            </tbody>
        </table>
    </div>

    <div class="center">
        <div class="meimiri2">

            <h3>Autorët e huaj me të lexuar të vitit 2020 janë: </h3>

        </div>

        <table class="content-table2">
            <thead>
                <tr>
                    <th>Ranku</th>
                    <th>Emri</th>
                    <th>Mbiemri </th>
                    <th>Numri i lexuesve</th>

                </tr>
            </thead>
            <tbody>
                <tr class="cift">
                    <td>1</td>
                    <td>Dante </td>
                    <td>Aligheri</td>
                    <td>5102</td>

                </tr>
                <tr class="tek">
                    <td>2</td>
                    <td>Mark</td>
                    <td>Twain</td>
                    <td>4745</td>

                </tr>
                <tr class="cift">
                    <td>3</td>
                    <td>Franz</td>
                    <td>Kafka</td>
                    <td>3984</td>

                </tr>
                <tr class="tek">
                    <td>4</td>
                    <td>Ernest</td>
                    <td>Hemingway</td>
                    <td>3557</td>

                </tr>

                </tr>
                <tr class="cift">
                    <td>5</td>
                    <td>Edgar</td>
                    <td>Poe</td>
                    <td>2941</td>

                </tr>

            </tbody>
        </table>
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
                        gjith jetës. Shfeltoni galerinë për më shumë.</p>
                    <a href="../HTML/galeria.html">
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
                </form> <input type="checkbox" checked="checked" name="subscribe"><span id="perdite">E-mails të përditshme </span>
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

                    <li><a href="../HTML/Librat.html">
                            Libra shqip
                        </a>
                    </li>
                    <li><a href="../HTML/Librat.html#teHuaj">
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
                    <li><a href="../HTML/lajmi.html"><span>Lajme</span></a>
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
                    <li><a href="regjistrohu.html"><span>Regjistrohu</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>


    <!-- qitu kryhet homepage ;) -->
    </div>


    <footer class="futeri">
        <div class="futerimrena">

            <div class="futerimamrena">
                <div class="sbkol3">
                    <a href="#" id="socialmedia" style="padding-right:0.5em;"><i class="fa fa-instagram"></i></a>
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
                    <span style="font-size:0.85em;">©2020-2021 <abbr title="Biblioteka Sinan Dobreva">BSD</abbr> Të
                        gjitha të drejtat e rezervuara.</span>
                </div>
            </div>

        </div>
    </footer>
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