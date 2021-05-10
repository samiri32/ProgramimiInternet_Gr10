<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../../public/img/sinani4.png">
    <link rel="stylesheet" id="stilicss" href="../../../public/CSS/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script>
        window.onscroll = function () {
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

#dialogoverlay {
    display: none;
    opacity: .8;
    position: fixed;
    top: 0px;
    left: 0px;
    background: rgba(7, 7, 7, 0.925);
    width: 100%;
    z-index: 10;
}

#dialogbox {
    margin-top: 2.6em;
    display: none;
    position: fixed;
    width: 550px;
    z-index: 10;
}

#dialogbox>div {
    background: #FFF;
    margin: 8px;
}

#dialogbox>div>#dialogboxhead {
    background-color: rgb(0, 0, 0);
    font-size: 19px;
    padding: 10px 20px;
    color: #fafbfd;
}

#dialogbox>div>#dialogboxbody {
    background-color: #eeeeee;
    padding: 40px;
    color: #0c0c0c;
    border-top: 0.5em solid #0077ff2c;
}

#dialogbox>div>#dialogboxfoot {
    background-color: white;
    padding: 10px;
    text-align: right;
}
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#search').click(function () {
                $('.menu-item').toggleClass('hide-item')
                $('.search-form').toggleClass('active')
            })
        })
    </script>