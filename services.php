<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        * {
            margin: 0 auto;
            padding: 0px;
        }

        div#services {
            background: #e49ab2;
            text-align: center;
            font-family: 'Metal Mania';
            padding: 25px;
            overflow: hidden;
        }

        .ServiceInner h2 {
            font-size: 35px;
            color: #000000;
        }

        .ServiceInner p {
            font-size: 25px;
            padding: 20px;
            color: #313d4a;
            margin-bottom: 20px;
        }

        div#serviceMainBlock {
            text-align: center;
            margin: auto;
            display: inline-flex;
        }

        .ServiceBox {
            float: left;
            display: inline-block;
            width: 30%;
        }

        .ServiceBox.web i {
            color: white;
            background: #FF3A46;
            text-align: center;
            border-radius: 50%;
            padding: 18px;
            margin: 15px;
        }

        .ServiceBox.web {
            background-color: aliceblue;
            padding: 30px 10px;
        }

        .ServiceBox.web p {
            font-size: 20px;
            padding: 41px;
        }

        .ServiceBox.web h2 {
            color: #FF3A46;
        }

        /* Graphic */
        .ServiceBox.graphic i {
            color: white;
            background: #00A0F0;
            text-align: center;
            border-radius: 50%;
            padding: 18px;
            margin: 15px;
        }

        .ServiceBox.graphic {
            background: white;
            padding: 30px 10px;
        }

        .ServiceBox.graphic p {
            font-size: 20px;
            padding: 41px;
        }

        .ServiceBox.graphic h2 {
            color: #00A0F0;
        }

        /* SEO */
        .ServiceBox.seo i {
            color: white;
            background: #00EBAC;
            text-align: center;
            border-radius: 50%;
            padding: 18px;
            margin: 15px;
        }

        .ServiceBox.seo {
            background: rgb(238, 236, 237);
            padding: 30px 10px;
        }

        .ServiceBox.seo p {
            font-size: 20px;
            padding: 41px;
        }

        .ServiceBox.seo h2 {
            color: #00EBAC;
        }

        .ServiceBox {
            box-shadow: 4px 4px 20px #afafaf;
            transition-duration: 0.6s;
        }

        .fa {
            font-size: 25px;
        }

        .ServiceBox.web:hover {
            box-shadow: -3px 3px 15px #FF3A46;
            cursor: pointer;
        }

        .ServiceBox.graphic:hover {
            box-shadow: -3px 3px 15px #00A0F0;
            cursor: pointer;
        }

        .ServiceBox.seo:hover {
            box-shadow: -3px 3px 15px #00EBAC;
            cursor: pointer;
        }

        .ServiceBox p {
            color: #3a3939;
        }
    </style>
    <meta charset="UTF-8">
    <title> Fn's Club Friends Inpirational Job</title>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
    <secion id="mainWrapper">
        <div id="services">
            <div class="ServiceInner">
                <h2> SERVICES
                    <?php
                    session_start();
                    echo "Welcome " . $_SESSION['firstname'];
                    ?>
                </h2><br>

            </div>
            <div id="serviceMainBlock">
                <div class="ServiceBox web">
                    <h2>MAKE UP</h2><br><br><br>
                    <img src="assets/img/makeup 1.jpg" border="4px" solid #0000c" height="200px" width="250px"></a><br>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga possimus explicabo veniam nobis
                        est quibusdam quas expedita, pariatur illum rem. Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="ServiceBox graphic">

                    <h2> HAIR STYLE </h2><br><br>
                    <img src="assets/img/h 1.jpg" border="4px" solid #0000c" height="200px" width="250px"><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quaerat minima, itaque,
                        necessitatibus aut cumque alias animi in, mollitia voluptas numquam quis quas laudantium
                        assumenda?
                    </p>
                </div>
                <div class="ServiceBox seo">

                    <h2> NAIL ART </h2><br><br>
                    <img src="assets/img/nail 2.jpg" border="4px" solid #0000c" height="200px" width="250px"><br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis impedit dignissimos aut
                        eveniet, sunt ex, soluta fugiat odit tempore architecto fuga facere! Lorem ipsum dolor.
                    </p>
                </div>
            </div>
        </div>
    </secion>
</body>

</html>