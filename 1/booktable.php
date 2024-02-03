<?php include("header.php");?>

<link rel="stylesheet" href="booktable.css">

<section class="container">
      <?php if(isset($_POST['booktable']) && !empty($_POST['booktable'])) {
        shtoRezervimin($_POST['emri'],$_POST['phone'],$_POST['tavolina'],$_POST['koha']);}?>
      <h1>Book your table now</h1>
      
      <form method="post" id="rezervimi" class="form">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="emri" placeholder="Enter full name" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phone" placeholder="Enter phone number" required />
          </div>
        </div>

        

       
      <div class="input-box">
        <label for="tableSelect"></label>
        <select id="tableSelect" name="tavolina" required>
          <option value="" disabled selected>Select your table</option>
          <option value="table1">Table 1</option>
          <option value="table2">Table 2</option>
          <option value="table3">Table 3</option>
          <option value="table4">Table 4</option>
          <option value="table5">Table 5</option>
          <option value="table6">Table 6</option>
          
        </select>
  

        
        <div class="input-box date">
           
        <label for="start">Date and time</label>

          <input type="datetime-local" id="start" name="koha"  />
        

         
          </div>

        </div>
        <button type="submit" name="booktable" value="booktable">Submit</button>
      </form>
    </section>


  </body>
