<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
     <?php
         $user_names = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

         foreach ($user_names as $index => $value) 
            echo "{$index}：{$value}<br>";
 

         ?>
 </body>
 
 </html>
