<div class="row4">
    <div class="shortcuts">
        <div class="shortcutnalt">
            <div class="bs">VEGËZA TË DOBISHME</div>
        </div>
        <div class="shortcutposht">
            <a href="<?php echo URLROOT; ?>/pages/librat" class="eee" id="sdds">Libra</a>
            <a href="<?php echo URLROOT; ?>/pages/autoret" class="eee" id="fdsfdsf">Autorët</a>
            <a href="<?php echo URLROOT; ?>/posts/lajme/index" class="eee" id="fsdfdsf">Lajme</a>

        </div>
    </div>
</div>

<div class="row5">
    <div class="row5pjesepjese">
        <div class="logoja">
            <div class="sinanibabo">
                <img src="<?php echo URLROOT . '/public/img/sinani3.png'; ?>" alt="pldh" height="130em" width="175em" id='sinanibardh' style="background-color: black;">
            </div>
            <span id="sinaniposht">Biblioteka Sinan Dobreva</span>
        </div>
        <div class="perberja">
            <div class="kolona1p">
                <span id="lajmekuq5" style="font-size: 1em;">Misioni</span>
                <br>
                <p id="kolona1pp">BSD është institucion kulturor, edukues e informues që grumbullon dhe ruan
                    koleksionet e veta nga fushat e ndryshme të krijimtarisë intelektuale me qëllim që t’ i bëjë
                    të njohura shfrytëzuesve për t’i studiuar dhe për t’ i lënë
                    trashëgim gjeneratave të ardhshme.</p>
                <a href="<?php echo URLROOT; ?>/pages/librat">
                    <p id="katalogu">Shfleto katalogun</p>
                </a>
            </div>

            <div class="kolona1p">
                <span id="lajmekuq5" style="font-size: 1em;">Ofertat</span>
                <br>
                <p id="kolona1pp">Biblioteka BSD ofron qasje në materialin bibliotekar për të gjithë përdoruesit
                    e qytetit të Prishtinës me rrethinë, pavarësisht nga raca, kombësia, gjinia, mosha, besimi
                    fetar, gjuha, paaftësitë fizike dhe informon e ndihmon ata
                    në përdorimin e gjetjen e tyre.</p>
                <a href="<?php echo URLROOT; ?>/pages/kontakti">
                    <p id="katalogu">Kontakti</p>
                </a>
            </div>

            <div class="kolona1p">
                <span id="lajmekuq5" style="font-size: 1em;">Bashkëpunëtorët</span>
                <br>
                <p id="kolona1pp">Biblioteka "Sinan Dobreva" bashkëpunon me bibliotekat në vend dhe jashtë
                    vendit; Bashkëpunon me institucionet kulturore, shtëpitë botuese, shkollat dhe me
                    komunitetin me qëllim të nxitjes së interesimit për librin dhe të mësuarit
                    gjatë gjith jetës. Shfletoni galerinë për më shumë.
                </p>
                <a href="<?php echo URLROOT; ?>/pages/galeria">
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
            <span id="sf">Regjistrohu për të pranuar e-mail nga Biblioteka</span><br><br>
            <!-- Qitu ni form per Anetaresim (mail subscription)-->
            <form method="POST" action="../../../../phpmailer/" autocomplete="on">
                <div class="autocomplete" style="width: 25em;">
                    <input id="myInput" type="text" name="myEmail" placeholder="E-mail" style="background-color:white;">
                </div>
                <input type="submit" style="font-size:0.85em;"class="buton" name="submit"></input>
                <?php mailsender();?>
            </form><br><br>
        </div>
 
        
    </div>

    <div class="subfooterposht">

        <div class="sbkol2">

            <ul>

                <li><a href="<?php echo URLROOT; ?>/pages/librat">
                        Libra shqip
                    </a>
                </li>
                <li><a href="<?php echo URLROOT; ?>/pages/librat">
                        Libra të huaj
                    </a></li>
            </ul>
        </div>

        <div class="sbkol2">

            <ul>


                <li><a href="<?php echo URLROOT; ?>/pages/autoret">
                        Autorë shqiptar
                    </a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/autoret">
                        Autorë të huaj
                    </a></li>
            </ul>
        </div>
        <div class="sbkol2">

            <ul>
                <li><a href="<?php echo URLROOT; ?>/posts/lajme/index"><span>Lajme</span></a>
                </li>
            </ul>
        </div>
        <div class="sbkol2">

            <ul>

                <li><a href="<?php echo URLROOT; ?>/pages/galeria">
                        Fotogaleria
                    </a>
                </li>
                <li><a href="<?php echo URLROOT; ?>/pages/galeria">
                        Videogaleria
                    </a>
                </li>
            </ul>
        </div>
        <div class="sbkol2">

            <ul>
                <li><a href="<?php echo URLROOT; ?>/pages/kontakti"><span>Kontakti</span></a>
                </li>
            </ul>
        </div>
        <div class="sbkol2">

            <ul>
                <li>
                    <div class="btn-kycu" style="display:inline;">
                        <?php if (isset($_SESSION['user_id'])) : ?>
                            <a href="<?php echo URLROOT; ?>/pages/profili" class="menu-item" id="three" class="three">
                                Profili</a>
                        <?php else : ?>
                            <a href="<?php echo URLROOT; ?>/users/regjistrohu" class="menu-item" id="three" class="three">
                                Regjistrohu</a>
                        <?php endif; ?>
                    </div>

                </li>
            </ul>
        </div>
    </div>

</div>


<!-- qiky /div e mshel homepage ;) -->
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
                    gjitha të
                    drejtat e rezervuara.</span>
            </div>

        </div>

    </div>
</footer>