<?php
session_start();
$dbconn;


function dbConnection()
{
    global $dbconn;
    $dbconn = mysqli_connect("localhost", "root", "", "restaurant");

    if (!$dbconn) {
        echo "Deshtoi krijimi i lidhjes me DB";
    }
}
// 

dbConnection();


function login($username, $fjalekalimi)
{
    global $dbconn;
    $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$fjalekalimi'";
    $result = mysqli_query($dbconn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $useri = array();
        $useri['id'] = $row['id'];
        $useri['emrimbiemri'] = $row['Emri'] . " " . $row['Mbiemri'];
        $useri['emri'] = $row['Emri'];
        $useri['mbiemri'] = $row['Mbiemri'];
        $useri['email'] = $row['Email'];
        $useri['roli'] = $row['Roli'];
        $useri['username'] = $row['Username'];

        $_SESSION['useri'] = $useri;

       
        if ($useri['roli'] == 'Administrator' or $useri['roli'] == 'Perdorues') {
            header("Location: dashboard/index.php");
        } elseif ($useri['roli'] == 'Klient') {
            header("Location: index.php");
        } else {
            
            echo "Invalid user role";
        }
    } else {
        echo "Nuk ka perdorues me keto shenime";
    }
}







function merrUshqimet(){
    global $dbconn;
    $sql = "SELECT * FROM ushqimet";
    return mysqli_query($dbconn, $sql);
}



function shtoUshqimin($Kategoria, $Lloji, $Cmimi, $Perberesit,$emri, $img)
{
    if ($Kategoria == '' or $Lloji == '' or $Cmimi == '' or $Perberesit == '') {
        echo "Ju lutem plotesoni te gjitha kolonat";
    } else if (!is_numeric($Cmimi)) {
        echo "Ju lutem rishkruani cmimin ne numer";
    } else {
        global $dbconn;

        if ($img['name']) {
            // Check if the image file is uploaded successfully
            if (move_uploaded_file($img['tmp_name'], "ushqimetimg/" . $img['name'])) {
                $img_path =  "ushqimetimg/" . $img['name'];
            } else {
                echo "Gabim gjate ngarkimit te fotos";
                return;
            }
        }

        $sql = "INSERT INTO ushqimet(Kategoria, Lloji, Cmimi, Perberesit,Img,InsertedBy )";
        $sql .= " VALUES ('$Kategoria','$Lloji','$Cmimi','$Perberesit','$img_path','$emri')";
        $result = mysqli_query($dbconn, $sql);
        if ($result) {
            echo "Ushqimi u shtua me sukses";
        } else {
            echo "Ushqimi nuk u shtua me sukses";
        }
    }
}

function merrUshqiminSpecifik($idushqimi)
{
    global $dbconn;
    $sql = "SELECT * FROM ushqimet where ID=$idushqimi";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function editoUshqimin($ID, $Kategoria, $Lloji, $Cmimi, $Perberesit,$emri, $img)
{
    global $dbconn;

    if ($img['name'] && $img['size'] > 0) {
      
        if (move_uploaded_file($img['tmp_name'], "ushqimetimg/" . $img['name'])) {
            $img_path = "ushqimetimg/" . $img['name'];
        } else {
            echo "Gabim gjate ngarkimit te fotos";
            return;
        }
    } else {
       
        echo "Nuk keni zgjedhur nje fajl per ngarkim.";
        return;
    }

    $sql = "UPDATE ushqimet SET Kategoria='$Kategoria', Lloji='$Lloji', Cmimi='$Cmimi', Perberesit='$Perberesit', ";
    $sql .= " WHERE ID=$id";
    $result = mysqli_query($dbconn, $sql);

    if ($result) {
        echo "Ushqimi u modifikua me sukses";
    } else {
        echo "Ushqimi nuk u modifikua me sukses";
    }
}


function fshijUshqimin($id)
{
    global $dbconn;
    $sql = "DELETE FROM ushqimet WHERE ID=$id";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Ushqimi u fshi me sukses";
    } else {
        echo "Ushqimi nuk u fshi me sukses";
    }
}






function showUshqimet($category) {
    global $dbconn;
    $sql = "SELECT * FROM ushqimet WHERE Kategoria = '$category'";
    $result = mysqli_query($dbconn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $ID = $row['ID'];
        $Kategoria = $row['Kategoria'];
        $Lloji = $row['Lloji'];
        $Cmimi = $row['Cmimi'];
        $Perberesit = $row['Perberesit'];
        $Img = $row['Img'];
?>
        
        <div class="box">
            <div class="image">
                 <img src="<?php echo 'dashboard/'; echo $Img; ?>" alt="" class="card-img">
            </div>
            <div class="content">
                <h3 class="name"><?php echo $Kategoria . ' ' . $Lloji; ?></h3>
                <div class="perberesit"><?php echo $Perberesit; ?></div>
                <div class="price"><?php echo number_format($Cmimi, 2); ?></div>
            </div>
        </div>
        
<?php
    }
}
?>





<?php

function merrUserat(){
    global $dbconn;
    $sql = "SELECT * FROM users";
    return mysqli_query($dbconn, $sql);
}

function merrUserinSpecifike($id)
{
    global $dbconn;
    $sql = "SELECT * FROM users where ID=$id";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function editoUserin($id,$emri, $email, $roli, $username, $password)
{
    global $dbconn;
    $sql = "UPDATE users SET Emri='$emri', Email='$email', Roli='$roli', Username='$username', Password='$password'";
    $sql .= " WHERE ID=$id";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Useri u modifikua me sukses";
    } else {
        echo "Useri nuk u modifikua me sukses";
    }
}

function shtoUser($emri, $email, $roli, $username, $password)
{
    if ($emri ==  '' or $email == ''  or $roli == '' or $username == '' or $password == '') {
        echo "Ju lutem plotesoni te gjitha fushat";
    } 
    else {
       
    global $dbconn;
    $sql = "INSERT INTO users(Emri, Email, Roli, Username, Password)";
    $sql .= " VALUES ('$emri','$email','$roli','$username','$password')";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Regjistrimi u be me sukses";
    } else {
        echo "Regjistrimi nuk u be me sukses";
    }
}
}

function fshijUserin($id)
{
    global $dbconn;
    $sql = "DELETE FROM users WHERE ID=$id";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Useri u fshi me sukses";
    } else {
        echo "Useri nuk u fshi me sukses";
    }
}

function numriUserave() {
    global $dbconn;
    $sql = "SELECT count(*) as NrUserave FROM users";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function numriUshqimeve() {
    global $dbconn;
    $sql = "SELECT count(*) as NrUshqimeve FROM ushqimet";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}


function numriKlientave() {
    global $dbconn;
    $sql = "SELECT count(*) as NrKlientave FROM users Where  roli='klient'";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function numriRezervimeve() {
    global $dbconn;
    $sql = "SELECT count(*) as NrRezervimeve FROM rezervimet";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}



function register($emri, $email,$username, $password)
{
    if ($emri == '' or $email == '' or $username == '' or $password == '') {
        echo "Ju lutem plotesoni te gjitha fushat";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ju lutem shkruani nje adrese email valide";
    } else {
        global $dbconn;
        
    
        $sql = "SELECT * FROM users WHERE Email = '$email' OR Username = '$username'";
        $result = mysqli_query($dbconn, $sql);

        if (mysqli_num_rows($result) > 0) {
          
            echo "Ky user veqse ekziston!";
        } else {
         
            $sql = "INSERT INTO users(Emri, Email,Username, Password, Roli)";
            $sql .= " VALUES ('$emri','$email','$username','$password','Klient')";

        
            if (mysqli_query($dbconn, $sql)) {
              
                echo "Regjistrimi u be me sukses";
                header("Location: Login.php");
            } else {
              
                echo "Regjistrimi nuk u be me sukses";
            }
        }
    }
}


function shtoRezervimin($Emri,$Phone,$Tavolina,$Koha)
{
    if ($Emri == '' or $Phone == '' ) {
        echo "Ju lutem plotesoni te gjitha kolonat";
    } else {
       
    global $dbconn;
    $sql = "INSERT INTO rezervimet(Emri, Phone, Tavolina, Koha)";
    $sql .= " VALUES ('$Emri','$Phone','$Tavolina','$Koha')";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        echo "Termini u shtua me sukses";
    } else {
        echo "Termini nuk u shtua me sukses";
    }
}
}

function merrRezervimin(){
    global $dbconn;
    $sql = "SELECT * FROM rezervimet";
    return mysqli_query($dbconn, $sql);
}


