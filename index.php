<?php
if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
        case 'info':
            phpinfo();
            exit();
            break;
    }
}

date_default_timezone_set('africa/douala');

function formatsimpledate($string, $language, $seprator)
{
    $stringEx = explode('-', $string);
    if ($language == 'fr') {
        $year = [
            '01' =>
            'Janvier', '02' => 'fevrier', '03' => 'mars', '04' => 'avril', '05' => 'mai',
            '06' => 'juin', '07' => 'juillet', '08' => 'aout', '09' => 'septembre', '10' =>
            'octobre', '11' => 'novembre', '12' => 'decembre'];
        $day = ['1' => 'Lundi',
            '2' => 'Mardi', '3' => 'Mercredi', '4' => 'Jeudi', '5' => 'Vendredi', '6' =>
            'Samedi', '7' => 'Dimanche'];} elseif ($language == 'es') {$year = ['01' =>
        'enero', '02' => 'febrero', '03' => 'marso', '04' => 'april', '05' => 'mayo',
        '06' => 'juno', '07' => 'julio', '08' => 'augosto', '09' => 'septiembre', '10' => 'octubre', '11' => 'noviembre', '12' => 'deciembre'];} else { $year = [
        '01' => 'Janary', '02' => 'febuary', '03' => 'march', '04' => 'april', '05' =>
        'may', '06' => 'june', '07' => 'july', '08' => 'august', '09' => 'september',
        '10' => 'october', '11' => 'november', '12' => 'december'];
        $day = ['1' => 'Monday',
            '2' => 'Tuesday', '3' => 'Wednesday', '4' => 'Thursday', '5' => 'Friday', '6' =>
            'Saturday', '7' => 'Sunday'];}
    return
        $day[$stringEx[0]] . $seprator . $stringEx[3] . $seprator . $year[$stringEx[2]]
        . $seprator . $stringEx[1];
}
?>

<script>
    function horloge(el) {
        if (typeof el == 'string') {
            el = document.getElementById(el)
        }

        function actualiser() {
            var date = new Date()
            var jour = date.getDate()
            var Month = date.getMonth()
            var day = date.getDay()
            var year =
                date.getFullYear() + '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
            var str
            //Jour
            var jours = [
                'Dimanche, ',
                'Lundi, ',
                'Mardi, ',
                'Mercredi, ',
                'Jeudi, ',
                'Vendredi, ',
                'Samedi, ',
            ]
            day = jours[day]
            var Months = [
                'janvier ',
                'fevrier ',
                'mars ',
                'avril ',
                'mai ',
                'juin ',
                'juillet ',
                'aout ',
                'septembre ',
                'octobre ',
                'novembre ',
                'decembre ',
            ]
            Month = Months[Month]
            str =
                day +
                (date.getDate() < 10 ? '0' : '') +
                jour +
                ' ' +
                Month +
                year
            str += (date.getHours() < 10 ? '0' : '') + date.getHours()
            str += ':' + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes()
            str += ':' + (date.getSeconds() < 10 ? '0' : '') + date.getSeconds()
            el.innerHTML = str
        }
        actualiser()
        setInterval(actualiser, 100)
    }

    window.onload = function () {
        horloge('horloge')
    }
</script>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Kratos237: <?php echo formatsimpledate(date('w-o-m-d'), 'fr', ' '); ?>
        </title>

        <link
            href="https://fonts.googleapis.com/css?family=Karla:400"
            rel="stylesheet"
            type="text/css"
        />

        <link href="./src/w3fclocktimer.css"/>
        <link rel="stylesheet" href="./src/animate.css">

        <style>
            html,
            body {
                height: 100%;
                font-family: sans-serif;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                line-height: 27px;
                color: rgba(255, 255, 255, 0.6);
                background-color: rgba(0, 0, 0, 0.9);
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                color: rgb(13, 102, 13);
            }

            .opt {
                margin-top: 30px;
            }
            .info {
                text-align: left;
                display: inline;
            }
            .opt a {
                text-decoration: none;
                font-size: 150%;
                color: rgb(168, 93, 0);
            }

            a:hover {
                color: teal;
                transition: 401ms ease-in;
            }
            a {
                color: rgb(168, 93, 0);
                transition: 401ms ease-in;
            }
            a:active {
                color: teal;
            }
            div.date_print {
                position: absolute;
                top: 10px;
                right: 20px;
            }
            .Started:hover {
                background-color: rgb(168, 93, 0);
                color: white;
            }

            .title a.name {
                font-size: 96px;
                color: rgb(13, 102, 13) !important;
            }
        </style>
    </head>

    <?php $imgs = array("Kratos.jfif", "loremIpsum.png", "Hassan Visage.jfif", "Hassan.jfif", "kratos_god_of_war_iii-wallpaper-1920x1080.jpg");?>

    <body id="main-show">
        <div class="container">
            <div class="content animated" id="app">
                <div class="title" title="Kratos">
                    <center>
                        <div style="background:url('./img/<?php echo $imgs[mt_rand(0, 4)]; ?>'); padding:10px 10px; background-size:cover; background-position:center; background-attachment:local; width:300px; height:300px; border-radius:50%; margin-bottom:30px; border:1px double rgb(168, 93, 0);" alt="Kratos"></div>
                    </center>
                    <span style="color: rgb(168, 93, 0);"><</span
                    ><a
                        class="name"
                        href="http://github.com/kratos237"
                        style="color: rgb(168, 93, 0); text-decoration: none;"
                        > Kratos
                        <span style="color: rgb(168, 93, 0);">/></span>
                </div>

                <div class="info">
                    <br /><br />
                    <?php print $_SERVER['SERVER_SOFTWARE'];?><br />

                    <span id="typed"><a title="phpinfo()" href="/?q=info" id="typed-strings"></a></span
                    >
                    PHP Version:
                    <?php print phpversion();?> <br>
                    Server root:
                    <a href="./server"
                        ><?php print $_SERVER['DOCUMENT_ROOT'];?></a
                    ><br />
                    Server date:
                    <?php echo formatsimpledate(date('w-o-m-d'), 'en', ' '); ?>
                    <br />
                    <span
                        style="
                            position: fixed;
                            left: 20px;
                            bottom: 10px;
                            color: gray;
                        "
                        id="horloge"
                    ></span>
                    <span id="typed" style="white-space:pre;"></span>
                </div>
                <div class="opt">
                    <div>
                        <a
                            style="
                                border: 1px solid rgb(168, 93, 0);
                                padding: 10px 10px;
                                border-radius: 5px;
                            "
                            title="Switch to projects"
                            class="Started"
                            href="server"
                            >Projects
                            </a>
                    </div>
                </div>
            </div>

            <div id="html" class="animated" style="width: 400px;">
                <!-- optional: display the digits -->
                <div style="text-align: center; font-size: 200px; text-shadow:inset 0px 0px 10px;">
                  <!-- <span data-digit="d"></span>/<span data-digit="n"></span>/<span data-digit="y"></span> -->
                  <span data-digit="h"></span>:<span data-digit="i"></span>:<span data-digit="s"></span>
                  <!-- <span data-digit="m"></span> -->
                </div>
            </div>

        </div>
    </body>

    <style>
        span[data-digit]{
            font-size:200px;
            text-shadow:thistle 0px 0px 10px;
        }
        div#html{

            position:absolute;
            top:50%;
            left:50%;
            transform:translateX(-100%);
        }
    </style>
    <script src="./src/w3fclocktimer.js"></script>
    <script src="./src/jquery.js"></script>
    <script src="./src/main.js"></script>

</html>
