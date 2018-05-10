<?php
require_once ('php/accessCheck.php');
require_once ('php/User.php');

/**
* @var $userData User
*/
?>

<div class="content">
    <br/>
    <div class="content-area">
        <h2>Update profile</h2>
        <br/>
        <?php
        if (isset($_SESSION['error_message'])) {
            echo '<p>' . $_SESSION['error_message'] . '</p>';
        } elseif (isset($_SESSION['success_message'])) {
            echo '<p>' . $_SESSION['success_message'] . '</p>';
        }
        ?>
        <form id="updateForm" action="php/updateHandler.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="data[id]" value="<?= $userData['id']; ?>"/>
            <p>
                <label>Email: </label>
                <input type="text" name="data[email]" value="<?= $userData['email']; ?>"/>
            <p>
            <p>
                <label>First Name: </label>
                <input type="text" name="data[firstname]" value="<?= $userData['firstname']; ?>"/>
            <p>
            <p>
                <label>Last Name: </label>
                <input type="text" name="data[lastname]" value="<?= $userData['lastname']; ?>"/>
            <p>
            <p>
                <label>Address: </label>
                <textarea name="data[address]"><?= $userData['address']; ?></textarea>
            <p>
            <p>
                <label>City: </label>
                <input type="text" name="data[city]" value="<?= $userData['city']; ?>"/>
            <p>
            <p>
                <label>Postcode: </label>
                <input type="text" name="data[postcode]" value="<?= $userData['postal_code']; ?>"/>
            <p>
            <p>
                <label>Telephone: </label>
                <input type="text" name="data[telephone]" value="<?= $userData['telephone']; ?>"/>
            <p>
            <p>
                <label>Profile Picture: </label>
                <input type="file" name="fileToUpload" id="fileToUpload">
            <p>
            <p>
                <input type="submit" name="btnSubmit" value="Update profile"/>
            <p>
        </form>
    </div>
</div>
