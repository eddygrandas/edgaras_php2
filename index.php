<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pirmas</title>
    <!--    <style>
            .class-1{
                font-size: 40px;
                color: brown;
                background-color: yellow;
            }
            .class-2{
                font-size: 80px;
                color: orange;
                background-color: lightgrey;
            }
            .class-3{
                font-size: 120px;
                color: greenyellow;
                background-color: lightskyblue;
            }
            .class-4{
                font-size: 70px;
                color: yellow;
                background-color: lightpink;
            }
            
            </style>
      </head>
       <body>
          <p class="<?php print 'class-' . rand(1, 4); ?>">
              Nemoka NetBeans Lorem ipsum, arba aš nemoku :D
        </p>
        
        <p class="<?php print 'class-' . rand(1, 4); ?>">
              Nemoka NetBeans Lorem ipsum, arba aš nemoku :D
        </p>
        
        <p class="<?php print 'class-' . rand(1, 4); ?>">
              Nemoka NetBeans Lorem ipsum, arba aš nemoku :D
        </p>-->
        <style>
            .langas{
                max-width: 1200px;
                margin: 0 auto;
                background-color: lightsteelblue;
            }
            .langas h1{
                font-size: 40px;
                color: gold;
                text-align: center;

            }
            .mygtukas{
                display: flex;
                margin: 0 auto;
                width: 150px;
                height: 50px;
                border: 1px solid green;
                border-radius: 25%;
                font-size: 26px;
            }
            .kauliukas{
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;

            }
        </style>

    </head>

    <body class="langas">
        <h1 class="langas h1">
            Spausk mygtuką! Čia tik vienas mygtukas!
        </h1>
        <div class="kauliukas">

            <img src="img/dice<?php print rand(1, 6); ?>.svg">
        </div>
        <div>
            <form>
                <input class="mygtukas" type="button" onClick="history.go(0)" value="Ridenti">
            </form>

        </div>

    </body>
</html>
