<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pirmas</title>
    <style>
        .class-1{
            font-size: 20px;
            color: brown;
        }
        .class-2{
            font-size: 40px;
            color: orange;
        }
        .class-3{
            font-size: 60px;
            color: greenyellow;
        }
        </style>
  </head>
   <body>
      <p class="class-<?php print rand(1,3);?>">
          Lorem ipsum
    </p>
  </body>
</html>
