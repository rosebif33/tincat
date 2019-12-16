<?php require "head.php"; ?>

<body>

    <div class="stuff">
        <h1>TINCAT</h1>
           
            <div class="header">
                <h2>Register</h2>
            </div>

            <form action="functions/setUser.php" method="post">
                <input type="text" placeholder="pseudo">
                <input type="text" placeholder="e-mail">
                
                <div class="input-group">
                    <label for="Password"></label>
                    <input type="password" name="password_1"> 
                </div>

                <div class="input-group">
                    <label for="Confirm Password"></label>
                    <input type="password" name="password_2"> 
                </div>

                <input type="submit" placeholder="register">

            <p>
                Already a member ? <a href="login.php">Sign In </a>
            </p>
        
        
        
            </form>
    </div>
</body>
</html>