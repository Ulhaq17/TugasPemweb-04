<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    table {
      border-collapse: collapse;
    }
      td {
        width: 30px;
        height: 30px;
      }
      .yellow {
        background-color: yellow;
      }
      .black {
        background-color: black;
      }
    </style>

    <table>
      <?php
      $size = 7;

      for ($row = 0; $row < $size; $row++) {
        echo "<tr>";
          for ($col = 0; $col <= $row; $col++) {
            if (($row + $col) % 2 == 0) {
              echo "<td class='yellow'></td>";
              } else {
                echo "<td class='black'></td>";
              }
            }
          echo "</tr>";
        }
        ?>
    </table>
</body>
</html>