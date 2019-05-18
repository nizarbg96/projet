<?php include "includes/reservation.php" ?>
<div id="id01" style=" position: fixed; /* Stay in place */
    z-index: 900000000000000000000000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    overflow-y: hidden;
    display: none; " >

        <div id="moda1_contenent"class="bodypageReservation animate">

            <img class="reserv-img" src="img/logo.png"  >
            <div class="gray-bar"><h2>Réservation</h2> <img src="img/logo1.png" style="position: absolute;top:50px;left:50px;transform: scale(1.3)"><i href="index.php" class="fas fa-times-circle" onclick="document.getElementById('id01').style.display='none'" "location.href='index.php'" ></i>

</div>
              

<form method="POST" id="content"  >
  
    <div class="gauche-reservation">
    <h2>Nom & Prénom</h2><?php echo '<p style="color:red;margin-top:0;float:left width:100%">'.$nameErr.'</p>' ?>
  <div class="input-container">
    <i class="fa fa-user icon" style="font-size: 150%"></i>
    <input class="input-field" type="text" placeholder="nom et prénom" name="usrnm" value="<?php echo $usrnm ?>">
   
  </div>

  
    <h2>Email</h2>
<?php echo '<p style="color:red;margin-top:0;float:left width:100%">'.$emailErr.'</p>' ?>
  <div class="input-container">
    <i class="fa fa-envelope icon" style="font-size: 150%"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" value="<?php echo $email ?>">
  </div>
  
      <h2>Nbr Adultes</h2>

  <div class="input-container">
    <i class="fas fa-male icon" style="font-size: 150%"></i>


      <select  class="input-field" name="adultes" value="<?php echo $adultes ?>">
        <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
      </select>
    
  </div>
    </div>
    <div class="bar-reservation"></div>
<div class="droite-reservation">
        <h2>Date</h2>
        <?php echo '<p style="color:red;margin-top:0;float:left width:100%">'.$dateErr.'</p>' ?>

  <div class="input-container">
    <i class="fas fa-calendar-alt icon" style="font-size: 150%"></i>
    <input class="input-field" type="text" placeholder="31/mm/aaaa" name="date" value="<?php echo $date ?>"  >
  </div>
  
    <h2>Téléphone</h2><?php echo '<p style="color:red;margin-top:0;float:left width:100%">'.$telephoneErr.'</p>' ?>

  <div class="input-container">
<i class="fas fa-phone icon" style="font-size: 150%"></i>

    <input class="input-field" type="text" placeholder="téléphone" name="telephone" value="<?php echo $telephone ?>" >
  </div>
  
      <h2>Nbr Enfants</h2>

  <div class="input-container">    <i class="fas fa-child icon" style="font-size: 150%"></i>


    <select  class="input-field" name="enfants" value="<?php echo $enfants ?>">
        <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
      </select>
  </div>
    </div>


                
            <div class="gray-bar1">  <button  name="reserve" class="btn" >Réserver</button>
</div>

</form>
</div>
 </div>
