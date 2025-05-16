<!DOCTYPE html>
<html lang="ta">
<head>
  <meta charset="UTF-8">
  <title>பதிவு படிவம்</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      position: relative;
    }
    .background-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      
      background-size: contain;
      opacity: 0.15;
      z-index: -1;
    }

    .container {
      max-width: 500px;
      min-height: 600px;
      margin: 60px auto;
      border: 1.5px black solid;
      background-color: rgba(233, 237, 240, 0.95);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      text-align: center;
    }
    .container footer{
      position: absolute;
      padding-left: 200px;
      padding-top: 140px;
      text-align: center;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }

    .logo {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 15px;
      border: 2px solid #b30000;
    }

    .logo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h2 {
      color: #b30000;
      margin: 0;
    }

    p {
      font-size: 18px;
      color: #fc0808f6;
    }

    .notice {
      background-color: #fff0f0;
      border: 2px dashed #b30000;
      padding: 10px;
      margin: 20px 0;
      font-weight: bold;
      color: #b30000;
    }

    label {
      display: block;
      text-align: left;
      margin-top: 15px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 16px;
      margin-top: 5px;
    }

    button {
      margin-top: 50px;
      background-color: #007bff;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }
    

    button:hover {
      background-color: #0056b3;
    }
    h2{
        font-size: xx-large;
    }
    span{
      color: red;
    }

  </style>
</head>
<body>

  <div class="background-overlay"></div>

  <div class="container">
    <div class="header">
      <div class="logo">
        <img src="ch.jpg" alt="">
      </div>
      <h2>பதிவு படிவம்</h2>
    </div>

    <p>இராயப்பர் சின்னப்பர் கபாடிக் குழு நடத்தும் மாபெரும் முதலாம் ஆண்டு கபாடிப் போட்டி</p>
    <div class="notice">நுழைவுக் கட்டணம் ரூ.301/- மட்டுமே</div>

    <form id="registerForm">
      <label for="place">அணியின் பெயர்(Team Name)</label>
      <input type="text" id="place" name="place" placeholder="உங்கள் இடத்தை உள்ளிடவும்">
      <span id="a1"></span>
    
      <label for="number">தொலைபேசி எண் (Phone Number)</label>
      <input type="number" id="number" name="number" placeholder="உங்கள் எண்ணை உள்ளிடவும்">
      <span id="a2"></span>
    
      <button type="submit" name="btn">சமர்ப்பிக்கவும் (Submit)</button>
    </form>
  <?php
    if(isset($_POST['btn'])){
    $place=$_POST['place'];
    $number=$_POST['number'];

    $con=mysqli_connect("localhost","root","","kabbadi");
    if($con){
        echo"successful";

    }
    else{
        echo"connection failed";
    }
    $qry="insert into player values('$place','$number')";
    $sql=mysqli_query($con,$qry);
    if($sql){
        header("Location: sub.html");
        exit();
    }
        else{
            echo"failed";
        }
    
}
    ?>



</html>
