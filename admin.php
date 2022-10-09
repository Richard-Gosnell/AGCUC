<?php
?>
<html>
    <head>
        <link rel="stylesheet" href="Styles/Admin.css">
    </head>
    <body>
        <header>
            <h1 class="warning">Admin Login</h1>
            <h3 class="warning">Warning: Unauthorized Access Is Strictly Prohibited!</h3>
        </header>
        <form>
            <label>Username:</label>
            <input type="text" id="username" name="username"><br>
            <label>Password:</label>
            <input type="password" id="password" name="password"><br>
            <label>I Am Authorized to Log In:</label>
            <input type="checkbox" id="authorized" name="authorized">
            <input type="submit" id="submit" name="submit">
        </form>
        <h3>Please click <a href="index.php">here</a> to return to our home page</h3>
    </body>
</html>

