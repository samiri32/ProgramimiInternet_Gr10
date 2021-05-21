<div class="header"></div>
<div class="topnav">
    <div class="majtas">
        <div class="majtasnalt">homepage</div>
        <div class="majtasposht">
        <a href="<?php echo URLROOT; ?>/pages/homepage" class="menu-item" id="three" class="three">
            Ballina</a>
            <a href="<?php echo URLROOT; ?>/pages/autoret">Autorët</a>
            <a href="<?php echo URLROOT; ?>/pages/librat">Librat</a>
            <a href="<?php echo URLROOT; ?>/posts/lajme">Lajme</a>
        </div>
    </div>

    <div class="logoja">
        <div class="sinanibabo">
            <img src="<?php echo URLROOT . '/public/img/sinani.png'; ?>" alt="pldh" height="130em" width="175em" id='sinani'>
        </div>
        <a href="<?php echo URLROOT; ?>/pages/homepage" id='titulli' style="font-family:'Arnhem', Times, Courier, serif;"> <span>Biblioteka
                Sinan
                Dobreva</span></a>
    </div>

    <div class="djathtas">
        <div class="djathtasnalt">homepage</div>
        <div class="djathtasposht">
            <div class="search-form">
                <form >
                    <input type="text" name="" placeholder="Kërkoni" onkeyup="showPostin(this.value)">
                    <ul id="searchResult"></ul>

            <div class="clear"></div>
            <div id="userDetail"></div>

    <!-- Categories Widget -->
    
                </form>
            </div>
            <a href="<?php echo URLROOT; ?>/pages/galeria" class="menu-item" id="one">Galeria</a>
            <a href="<?php echo URLROOT; ?>/pages/kontakti" class="menu-item" id="two">Kontakti</a>
            <div class ="btn-kycu" style="display:inline;">
            <?php if(isset($_SESSION['user_id'])) : ?>
            <a href="<?php echo URLROOT; ?>/pages/profili" class="menu-item" id="three" class="three">
            Profili</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/users/kycu" class="menu-item" id="three" class="three">
            Kyçu</a>
            <?php endif; ?>
            </div>
            <a href="#" id="search"><i class="fa fa-search"></i></a>


        </div>
    </div>
</div>
<div style="align-self:right; display:block;">
   <a href="<?php ?>"> <i onclick="toggleButton()" class="fa fa-moon-o" id="teksti" style="margin-left:0.5em;margin-top:0.5em; font-size: 2em;font-weight: bold; position:-webkit-fixed;position:fixed;z-index: 9999;"></i></a>
</div>
<center>
<div id="txtHint" ></div>
<center>
<script>
    async function showPostin(str) {
  const rez = await (await fetch('http://localhost/ProgramimiInternet_Gr10/pages/ajax/' + str)).text();
  var parser = new DOMParser();
  var doc = parser.parseFromString(rez, "text/html");
  document.getElementById('txtHint').innerHTML = doc.body.innerHTML;

}

</script>
