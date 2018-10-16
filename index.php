<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pirmas</title>
    <style>
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
      <p class="<?php print 'class-'.rand(1,4);?>">
          Nemoka NetBeans Lorem ipsum, arba aš nemoku :D
    </p>
    
    <p class="<?php print 'class-'.rand(1,4);?>">
          Nemoka NetBeans Lorem ipsum, arba aš nemoku :D
    </p>
    
    <p class="<?php print 'class-'.rand(1,4);?>">
          Nemoka NetBeans Lorem ipsum, arba aš nemoku :D
    </p>
  </body>
</html>
