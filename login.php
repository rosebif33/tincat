<?php require "head.php"; ?>

<body>

    <div class="stuff">
        <h1>TINCAT</h1>
           
            <div class="header">
                <h2>Login</h2>
            </div>

            <form action="functions/setUser.php" method="post">
                <input type="text" placeholder="pseudo">

                <div class="input-group">
                    <label for="Password"></label>
                    <input type="password" name="password_1"> 
                </div>
               
                <input type="submit" placeholder="login">

            <p>
               Not yet a member ? <a href="register.php">Sign Up </a>
            </p>
        
        
        
            </form>
    </div>
</body>
</html>
