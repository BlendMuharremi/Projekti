<?php include("header.php"); 

$emri = $_SESSION['useri']['emri']; 
$mbiemri = $_SESSION['useri']['mbiemri'];
$roli = $_SESSION['useri']['roli']; 

?>

<html>
<body>

<div id="main-content-index" >

    <!-- <?php echo $roli; ?> -->
    <?php 
        $row=numriUserave();
        $NrUserave=$row['NrUserave'];

        $row=numriUshqimeve();
        $NrUshqimeve=$row['NrUshqimeve'];

        $row=numriKlientave();
        $NrKlientave=$row['NrKlientave'];
        ?>
        <?php if($roli == 'Administrator') { ?>
             <div class="card-indexdash" onclick="location.href = 'userscrud.php'">
        <?php } else{ ?>
            <div class="card-indexdash">
        <?php } ?>
        <h2>Përdoruesit</h2>
        <p><?php echo $NrUserave; ?></p>
        <i class="fa-solid fa-users"></i>
    </div>

    <div class="card-indexdash" onclick="location.href = 'Ushqimetcrud.php'">
        <h2>Ushqimet</h2>
        <p><?php echo $NrUshqimeve; ?></p>
        <i class="fa-solid fa-utensils"></i>
    </div>

    <?php if($roli == 'Administrator') { ?>
             <div class="card-indexdash" onclick="location.href = 'userscrud.php'">
        <?php } else{ ?>
            <div class="card-indexdash">
        <?php } ?>
        <h2>Klienta</h2>
        <p><?php echo $NrKlientave; ?></p>
        <i class="fa-solid fa-message"></i>
    </div>



    <!-- <?php echo $roli; ?> -->
    <?php 
        $row=numriRezervimeve();
        $NrRezervimeve=$row['NrRezervimeve'];
        ?>
        
    <div class="card-indexdash" onclick="location.href = 'rezervimet.php'">
        <h2>Rezervime</h2>
        <p><?php echo $NrRezervimeve; ?></p>
        <i class="fa-solid fa-calendar-check"></i>
    </div>
</div>



</body>
</html>
