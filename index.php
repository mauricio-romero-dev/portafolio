<!DOCTYPE html>
<html lang="es">
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
</head>
<body>
<div class="container">
  <div class="card wbfs_card bar" onclick="open_l('wbfs')"><div class="filledbar"></div></div>
  <div class="card tele_card bar" onclick="open_l('agendaTelefonica')"><div class="filledbar"></div></div>
  <div class="card tien_card bar" onclick="open_l('tienda')"><div class="filledbar"></div></div>
  <div class="card ecua_card bar" onclick="open_l('segundoGrado')"><div class="filledbar"></div></div>
</div>
</body>
</html>
<style>
  body {
    background-color: #100e17;
    font-family: 'Open Sans', sans-serif;
  }
  .wbfs_card{
    background-image: url('assets/wbfs_card_img.jpg');
    background-size: cover;
  }
  .tien_card{
    background-image: url('assets/tienda_card.jpg'); 
    background-size: cover;
  }
  .tele_card{
    background-image: url('assets/agenda.jpg');
    background-size: cover;
  }
  .ecua_card{
    background-image: url('assets/segundo_grado_card.jpg');
    background-size: cover;
  }
  .container {
    position: absolute;
    height: 300px;
    width: 600px;
    top: 60px;
    left: calc(50% - 300px);
    display: flex;
  }
  .wbfs_title{
    color: black !important;
  }
  .card {
    display: flex;
    height: 280px;
    width: 200px;
    background-color: #17141d;
    border-radius: 10px;
    box-shadow: -1rem 0 3rem #000;
    margin-left: -50px;
    transition: 0.4s ease-out;
    position: relative;
    left: 0px;
  }
  .card:not(:first-child) {
    margin-left: -50px;
  }
  .card:hover {
    transform: translateY(-20px);
    transition: 0.4s ease-out;
  }
  .card:hover ~ .card {
    position: relative;
    left: 50px;
    transition: 0.4s ease-out;
  }
  .title {
    color: white;
    font-weight: 300;
    position: absolute;
    left: 20px;
    top: 15px;
  }
  .card:hover .filledbar {
    width: 120px;
    transition: 0.4s ease-out;
  }
  .stroke {
    stroke: white;
    stroke-dasharray: 360;
    stroke-dashoffset: 360;
    transition: 0.6s ease-out;
  }
  svg {
    fill: #17141d;
    stroke-width: 2px;
  }
  .card:hover .stroke {
    stroke-dashoffset: 100;
    transition: 0.6s ease-out;
  }
</style>
<script>
    function open_l(link) {
      folder = 'templates/' + link
      open(folder, '_self')
    }
</script>