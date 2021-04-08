<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido al sistema</title>
</head>
<body>
  <div id="TbLista">Lista</div>
  
  <script src="Librerias/jquery-3.6.0.min.js"></script>
  <script>
    $.ajax({
      url: "http://localhost/PHPPRESTAMO/Servicio/SCliente.php",
      data: {txtbus: ''},
      type: 'GET',
      dataType: '',
      success: function(resp){
        var tabla = "";
        var JCli = JSON.parse(resp);
        console.log(JCli);
        for(var i=0; i < JCli.length; i++){
          tabla += "<tr>";
          tabla += "<td>"+JCli[i]['cod']+"</td>";
          tabla += "<td>"+JCli[i]['nom']+"</td>";
          tabla += "<td>"+JCli[i]['ape']+"</td>";
          tabla += "<td>"+JCli[i]['dni']+"</td>";
          tabla += "</tr>";
        }
        $('#TbLista').html(tabla);
      },
      error: function(mens){
        alert('Error 404'+mens);
      }
    });
  </script>
</body>
</html>