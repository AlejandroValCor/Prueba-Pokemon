 <!DOCTYPE html>
<html>
<body>

<h1>Prueba Pokemon</h1>
<h2>Lista de Pokemon</h2>
<ul>

  <div id="prueba"></div>

  <script>

  var x ="", i;

  for (i=1; i<=10; i++)
  {
    x = x + "<li>" + "<a href='prueba.php'>" + "Pokemon " + i + "</a>" + "</li>";
  }

  document.getElementById("prueba").innerHTML = x;

  </script>

<!-- <?php echo$data["results"][$i]["name"] ?> -->
</ul>

</body>
</html> 