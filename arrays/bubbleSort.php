<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
    <body>
      <?php
        $arr = array(7, 3, 9, 1, 1009, 2);
        $sortedArr = bubbleSortAsc($arr);
        echo '<pre>';
        print_r($sortedArr);
        echo '</pre>';

        $sortedArr = bubbleSortDesc($arr);
        echo '<pre>';
        print_r($sortedArr);
        echo '</pre>';

        function bubbleSortAsc(array $arr) {
          $sorted = false;
          while (false === $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($arr) - 1; ++$i) {
              $current = $arr[$i];
              $next = $arr[$i + 1];
              if ($next < $current) {
                $arr[$i] = $next;
                $arr[$i + 1] = $current;
                $sorted = false;
              }
            }
          }
          return $arr;
        }

        function bubbleSortDesc(array $arr) {
          $sorted = false;
          while (false === $sorted) {
            $sorted = true;
            for ($i = 0; $i < count($arr) - 1; ++$i) {
              $current = $arr[$i];
              $next = $arr[$i + 1];
              if ($next > $current) {
                $arr[$i] = $next;
                $arr[$i + 1] = $current;
                $sorted = false;
              }
            }
          }
          return $arr;
        }
      ?>
    </body>
</html>