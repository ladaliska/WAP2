<?php
    $brand = [];
    $name = [];
    $alc = [];  
    $api = "https://random-data-api.com/api/v2/beers?size=10";
    $json = file_get_contents($api);
    $data = json_decode($json, true);
    for ($i=0; $i < 10; $i++) { 
        array_push($brand, $data[$i]["brand"]);
        array_push($name, $data[$i]["name"]);
        array_push($alc, $data[$i]["alcohol"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
th, td {
  position: sticky;
  border: 1px solid;
  border-collapse: collapse;
  overflow-x: auto;
  padding: 10px;
  max-height: 15px;
}
table {
  width: 100%;
  border: 1px solid;
  border-collapse: collapse;
  padding: 10px;  
}
body {
  margin: 0;
}
</style>
<body>
<table id="table">
  <tr>
    <th>Brand</th>
    <th>Name</th>
    <th>Alcohol</th>
  </tr>
  <?php
                for ($i=0; $i < 10; $i++) { 
            ?>
            <tr id=<?php echo $i?>>
                <td><?php echo $brand[$i];?></td>
                <td><?php echo $name[$i];?></td>
                <td><?php echo $alc[$i];?></td>
            </tr>
            <?php
                }
            ?>
</table>
<script>

    var table = document.getElementById("table");
    var n = table.rows.lenght
    switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = table.rows[i].cells[2].innerHTML;
      y = table.rows[i+1].cells[2].innerHTML;
      x.replace("%","")
      y.replace("%","")
      if (parseFloat(x) > parseFloat(y)) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      table.rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }


</script>
</body>
</html>