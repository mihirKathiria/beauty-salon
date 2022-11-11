<html>
<title>Beauty Salon</title>

<body>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
        }

        .header {
            border: 1px solid black;
            width: 100%;
            height: 750px;
            background-position: center;
            background-size: cover;
            background-image: url("assets/img/homepage1.webp");
            color: rgba(255, 255, 255, 1);
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .nav-menu {
            width: 95%;
            height: 50px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-top: 6%;
            margin-left: 50px;
        }

        .nav-menu .logo {
            font-size: 45px;
            font-weight: 600;
            padding-left: 20px;
        }

        .nav-menu .menu ul {
            list-style: none;
            display: flex;
            height: 100%;

        }

        .nav-menu .menu ul li a {
            text-decoration: none;
            color: rgba(255, 255, 255, 1);
            padding: 1em 1.5em;
            line-height: 1px;
            font-size: 15px;
            text-transform: uppercase;

        }

        .nav-menu .menu li a:hover,
        .nav-menu .menu li a.active {
            border: 2px solid white;
            border-radius: 5px;
        }

        .banner {
            height: 400px;
            width: 60%;
            text-align: center;
            margin: 13% auto;
            font-family: 'Didact Gothic', sans-serif;
        }

        .banner h1 {
            font-size: 60px;
            font-weight: bold;

        }

        .banner p {
            padding-top: 20px;
            font-size: 30px;
            color: rgba(255, 255, 255, 0.60);
            font-weight: 200;
            word-spacing: 1px;
        }

        .banner a {
            text-decoration: none;
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
            margin: 90px auto;
            display: block;
            font-weight: bold;
            border: 2px solid rgba(255, 255, 255, 1);
            width: 27%;
            height: 70px;
            line-height: 70px;
            text-align: center;
            border-radius: 7px;
        }

        .container {
            width: 100%;
            height: 600px;
            text-align: center;
            font-family: 'Didact Gothic', sans-serif;
        }

        .text {
            padding-top: 50px;
            margin-top: 40px;

        }

        .text h1 {
            font-size: 30px;
            font-weight: 700;
            color: rgba(0, 0, 0, 0.8);
        }

        .text p {
            font-size: 18px;
            color: rgba(0, 0, 0, .5);
            padding-top: 4px;

        }

        .main {
            width: 90%;
            height: 400px;
            margin: 50px 5%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .single {
            width: 33%;
            height: 100%;
            text-align: center;
            padding: 40px 20px;
        }

        .single i {
            font-size: 45px;
        }

        .single p {
            padding-top: 40px;
            color: rgba(0, 0, 0, 0.6);
            display: block;
            line-height: 180%;
            font-size: 14px;
        }

        .single a {
            text-decoration: none;
            color: rgba(0, 0, 0, 0.8);
            font-size: 18px;
            font-weight: 700;
            width: 45%;
            height: 55px;
            line-height: 55px;
            border: 2px solid rgba(0, 0, 0, 0.8);
            display: block;
            border-radius: 5px;
            margin: 40px auto;
        }

        footer {
            width: 100%;
            height: 600px;
            background-color: rgba(0, 0, 0, 0.9);
            color: rgba(255, 255, 255, 0.60);
            text-align: center;
        }

        footer h1 {
            font-size: 40px;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.9);
            padding-top: 30px;

        }

        footer p {
            font-size: 19px;
            padding-top: 4px;
            word-spacing: 2px;
        }

        footer .txt {
            display: inline-block;
            width: 78%;
            height: 86px;
            margin-top: 70px;
            font-weight: normal;
            font-size: 16px;
            line-height: 180%;
            color: rgba(255, 255, 255, 0.8);
        }

        footer a {
            text-decoration: none;
            font-size: 18px;
            color: rgba(255, 255, 255, 1);
            margin: 90px auto;
            display: block;
            font-weight: bold;
            border: 2px solid rgba(255, 255, 255, 1);
            width: 18%;
            height: 75px;
            line-height: 75px;
            text-align: center;
            border-radius: 7px;
        }
    </style>
    <div class="header">
        <div class="nav-menu">
            <div class="logo">Beauty Salon</div>
            <div class="menu">
                <ul>
                    <li><a href="#" class="active">Homepage</a></li>

                    <li><a href="#">About us</a></li>
                    <li><a href="#">Appoiment</a></li>


                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Services</a></li><li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
        <div class="banner">
            <h2>Then you’ve landed in the right place.</h2>
            <p style="color:white"><b><i>
                        This is where I collect salon slogans, mottos, and tag lines to accompany your salon name.</p>

        </div>
    </div>
    <div class="container">
        <div class="text">
            <h1>Fusce ultrices fringilla fear</h1>
            <p>Until then, let's live the ferment of the present in the augury of the lake and the urn of the house</p>
        </div>
        <div class="main">
            <div class="single">
                <i class="fas fa-cloud-download-alt"></i>
                <p>It's easy for kids. The class is apt to be silent partners and twist through our marriages.
                </p>
                <a href="#">More info</a>
            </div>
            <div class="single">
                <i class="fas fa-cogs"></i>
                <p>And neither. We live the result at the players. I have never seen a single person. Until the real
                    estate.</p>
                <a href="#">More info</a>
            </div>
            <div class="single">
                <i class="fas fa-wrench"></i>
                <p>Aeneas has a bed, he needs a haircut, he needs to decorate it, and so on. Children are pure
                    adipiscing.</p>
                <a href="#">More info</a>
            </div>
        </div>
        <footer>
            <h1>Fusce ultrices fringilla metus</h1>
            <p>Until then, let's live the ferment of the present in the augury of the lake and the urn of the house</p>

            <a href="#">Etiam prousere</a>
        </footer>
    </div>
</body>

</html>