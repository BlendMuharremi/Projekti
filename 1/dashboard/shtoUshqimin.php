<?php include "header.php" ?>
<div class="dashboard-shto">
   
        
        <section id="content" class="box-content">
            <?php
            if (isset($_POST['shto'])) {
               
                shtoUshqimin($_POST['kategoria'], $_POST['lloji'], $_POST['cmimi'], $_POST['perberesit'], $emri, $_FILES['img']);
            }
            ?>
            <form method="post" enctype="multipart/form-data" id="ushqimi" class="box-shto">
                  <fieldset>
                <label>Kategoria:</label>
                <input type="text" name="kategoria" id="kategoria"><br />
            </fieldset>
            <fieldset>
                <label>Lloji:</label>
                <input type="text" name="lloji" id="lloji"><br />
            </fieldset>
            <fieldset>
                <label>Cmimi:</label>
                <input type="text" name="cmimi" id="cmimi"><br />
            </fieldset>
            <fieldset>
                <label>Perberesit:</label>
                <input type="text" name="perberesit" id="perberesit"><br />
            </fieldset>
            
                <fieldset>
                    <label>Ngarko Foto:</label>
                    <input type="file" autocomplete="new-password" id="img" name="img" class="form-control"><br />
                </fieldset>

                <input type="submit" name="shto" value="Shto">
            </form>
        </section>
    </div>
</div>


