
<?php include "header.php" ?>

<div class="dashboard-user">
    <div class="dashboard-shto-item">
        
        <section id="content" class="box-content">
        <?php
        if (isset($_POST['shto'])) {
            shtoUser($_POST['emri'],$_POST['email'],
            $_POST['roli'],$_POST['username'],$_POST['password']);
        }
        ?>
        <form method="post" id="useri" class="box-shto">
            <fieldset>
                <label>Emri:</label>
                <input type="text" name="emri" id="emri"><br />
            </fieldset>
            <fieldset>
                <label>Email:</label>
                <input type="text" name="email" id="email"><br />
            </fieldset>
            <fieldset>
                <label>Roli:</label>
                <!-- <input type="text" name="roli" id="roli"><br /> -->
                <select type="text" name="roli" id="roli">
                    <option value="">-- Zgjedh Rolin --</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Perdorues">Perdorues</option>
                </select><br />
            </fieldset>
            <fieldset>
                <label>Username:</label>
                <input type="text" name="username" id="username"><br />
            </fieldset>
            <fieldset>
                <label>Password:</label>
                <input type="text" name="password" id="password"><br />
            </fieldset>
            <input type="submit" name="shto" value="Shto">
        </form>
    </section>
    </div>
</div>
