<!DOCTYPE html>
<html lang="sq">

<head>
    <title>Rezervime</title>

    <script>
        $(document).ready(function() {
            $("#clickk").click(1000, function() {
                confirm.render("Ju lutem kontrolloni me kujdes të dhënat.")
            });
        });


        function Konfirmimi() {
            this.render = function(dialog) {
                var winW = window.innerWidth;
                var winH = window.innerHeight;
                var dialogoverlay = document.getElementById('dialogoverlay');
                var dialogbox = document.getElementById('dialogbox');
                dialogoverlay.style.display = "block";
                dialogoverlay.style.height = winH + "px";
                dialogbox.style.left = (winW / 2) - (550 * .5) + "px";
                dialogbox.style.top = "100px";
                dialogbox.style.display = "block";

                document.getElementById('dialogboxhead').innerHTML = 'A jeni të sigurt që keni përfunduar?';
                document.getElementById('dialogboxbody').innerHTML = dialog;
                document.getElementById('dialogboxfoot').innerHTML =
                    '<button onclick="confirm.yes()" class="buton" style="height:2em; width:3em; ">Yes</button> <button onclick="confirm.no()" class="buton" style="height:2em; width:3em; ">No</button>';
            }
            this.no = function() {
                document.getElementById('dialogbox').style.display = "none";
                document.getElementById('dialogoverlay').style.display = "none";
            }
            this.yes = function() {
                document.getElementById('dialogbox').style.display = "none";
                document.getElementById('dialogoverlay').style.display = "none";
                setTimeout(() => {
                    window.location.href = alert("Lista u dërgua me sukses!");
                }, 500);
            }
        }

        var confirm = new Konfirmimi();
    </script>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/header.php';?>
</head>




<body>
    <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/navbar.php';?>
    <div class="homepage">
        <div class="containerforma">
            <div>
                <h2 class="tittle" id="tittle">Të dhënat e lexuesëve</h2>

                <form id="addForm">

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="text" id="item1" placeholder="Emri" style=" height: 2.5em;background-color: white; border:0.05px solid grey;">
                    </div>

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="text" id="item2" placeholder="Mbiemri" style="height:2.5em;background-color: white; border:0.05px solid grey;">
                    </div>

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="number" id="item3" placeholder="ID (numër)" style="height:2.5em;background-color: white; border:0.05px solid grey;">
                    </div>

                    <div class="error"></div>
                    <div class="form-group">
                        <input type="date" id="item4" style="color:grey; background-color: white; height: 2.5em;border:0.05px solid grey;">
                    </div>

                    <input type="submit" id="submit" value="Shto" class="buton" style="height:3em; width: 8em; font-size: 0.8em">

                </form>

            </div>
            <div>

                <div class="tabela">

                    <h2 class="titlee">Rezervimet</h2>

                    <table class="styled-table">
                        <thead>
                            <tr>
                                <th>Emri</th>
                                <th>Mbiemri</th>
                                <th> ID</th>
                                <th>Data</th>
                                <th>Anulo</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Andi</td>
                            <td>Dika</td>
                            <td>190714100170</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Arben</td>
                            <td>Dedaj</td>
                            <td>190714100160</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Arbresha</td>
                            <td>Zeqiri</td>
                            <td>190714100158</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Samir</td>
                            <td>Simnica</td>
                            <td>180715100031</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Ardi</td>
                            <td>Ismajli</td>
                            <td>190714100057</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tr>
                            <td>Adnit</td>
                            <td>Gashi</td>
                            <td>190714100180</td>
                            <td>2021-18-01</td>
                            <td><button class="deleteBtn">Fshij</button></td>
                        </tr>
                        <tbody>

                        </tbody>
                    </table>
                    <button class="buton" style=" height:3em; width: 8em; font-size: 0.8em" id="clickk">Dërgo</button>

                </div>

            </div>

        </div>

        <script>
            const form = document.getElementById("addForm");
            const tbody = document.querySelector('tbody');
            const table = document.querySelector('table')
            const emri = document.getElementById("item1");
            const mbiemri = document.getElementById("item2");
            const ID = document.getElementById("item3");
            const data = document.getElementById("item4");
            const errorElement = document.querySelectorAll(".error")


            function validate(e) {

                if (emri.value === '' || emri.value === null) {
                    errorElement[0].innerText = 'Emri duhet te mbushet!';
                    return false;
                }

                if (mbiemri.value === '' || mbiemri.value === null) {
                    errorElement[1].innerText = 'Mbiemri duhet te mbushet!';
                    return false;

                }

                if (ID.value === '' || ID.value === null) {
                    errorElement[2].innerText = 'ID duhet te mbushet!';
                    return false;

                }
                if (data.value === '' || data.value === null) {
                    errorElement[3].innerText = 'Data duhet te mbushet!';
                    return false;

                }
                return true;
            };

            form.addEventListener('submit', onAddWebsite);

            function onAddWebsite(e) {
                e.preventDefault();
                if (validate(e)) {
                    tbody.innerHTML += `
                <tr>
                    <td>${emri.value}</td>
                    <td>${mbiemri.value}</td>
                    <td>${ID.value}</td>
                    <td>${data.value}</td>
                    <td><button class ="deleteBtn">Fshij</button></td>
                </tr>
                `;
                    document.querySelectorAll(".error").forEach((element) => element.innerHTML = '');
                    form.reset();
                }
            }

            function onDeleteRow(e) {
                if (!e.target.classList.contains("deleteBtn")) {
                    return;
                }

                const button = e.target;
                button.closest('tr').remove();
            }


            table.addEventListener('click', onDeleteRow)
        </script>
        <div id="dialogoverlay"></div>
        <div id="dialogbox">
            <div>
                <div id="dialogboxhead"></div>
                <div id="dialogboxbody"></div>
                <div id="dialogboxfoot"></div>
            </div>
        </div>
        <?php require '/xampp/htdocs/ProgramimiInternet_Gr10/app/views/inc/footer.php';?>
        <script>
            const theme = document.querySelector("#stilicss");

            console.log(localStorage);

            remember();

            function darkMode() {

                theme.href = 'css/stylesdark.css';
                localStorage.setItem("color", "dark");
                console.log(localStorage);
                document.getElementById("teksti").className = "fa fa-sun-o";
                document.getElementById("teksti").style.color = "white";
                document.getElementById("teksti").style.backgroundColor = "transparent";

            }

            function lightMode() {

                theme.href = "css/styles.css";
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