<?php
    session_start();
?>
    <?php include 'header.php'; ?>
    
    <div class="admin_log">
        <form action="admin_ver.php" method='post'>
            User <input type="text" name="user">
            Password <input type="password" name="pass"><br>
            <input type="submit" value="SUBMIT">
        </form>
        <iframe name="izlaz" frameborder="0"></iframe>
    </div>

    <?php include 'footer.php'; ?>
