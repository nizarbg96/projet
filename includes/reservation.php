<?php include_once "db.connect.inc.php" ;
$nameErr="";$dateErr="";$emailErr="";$telephoneErr="";$error=false;


$nom_valid=false;$email_valid=false;$date_valid=false;$telephone_valid=false;
if (isset($_POST['reserve'])){



$usrnm = $_POST['usrnm'];
$email = $_POST['email'];
$adultes = $_POST['adultes'];
$date = $_POST['date'];
$date1=date("d/m/Y", strtotime($date));
$telephone = $_POST['telephone'];
$enfants = $_POST['enfants'];

function testDate( $value )
{
return preg_match( '^\d{1,2}/\d{1,2}/\d{4}$^' , $value ) ;
}
function validateDate($date, $format = 'Y/m/d')
{
    $d = DateTime::createFromFormat($format, $date);
    
    return $d && $d->format($format) === $date;
}

if (empty($_POST["usrnm"])) {
    $nameErr = "cette etape est obligatoire";
  } elseif (!preg_match('`^[a-zA-Z]+$`',$usrnm)) {
  	$nameErr = "nom et prénom invalides";
  }
  else{
  	$nom_valid=true;
  } 
    
  
  if (empty($_POST["email"])) {
    $emailErr = "cette etape est obligatoire";
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   	$emailErr = "email invalide";
   }
   else{
   	$email_valid=true;
   } 
    
  if (empty($_POST["date"])) {
    $dateErr = "cette etape est obligatoire";}
    elseif (!validateDate($date)) {
    	$dateErr = "format date invalide  ";
    }
   
   elseif  (new DateTime() > new DateTime($date)) {
      $dateErr = "chosissez une date dans le futur ";
    } 
     else{
    	$date_valid=true;
    }

    
 

  if (empty($_POST["telephone"])) {
    $telephoneErr = "cette etape est obligatoire";
  } elseif (!preg_match('`[0-9]{8}`',$telephone))  {
      $telephoneErr = "numéro télephone invalide";
  }
  else{
  	$telephone_valid = true;
  }

  

if ($nom_valid and $email_valid and $telephone_valid and $date_valid){
$sql="INSERT INTO reservation (usrnm,date,email,telephone,adultes,enfants) VALUES ('$usrnm','$date', '$email','$telephone','$adultes','$enfants'); ";
$result=mysqli_query($connect,$sql);
header("location: index.php?reserv=success");
}
else {
$error=true;

}}

?>