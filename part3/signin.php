<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
   <link  href="loginstyle.css" rel="stylesheet" type="text/css"/>
</head>
<body>
        <div class="container">
            
                <div id="dotbox" class="dotbox">
                        <span class="dot"></span>
                </div>

                <div>
                        <h1>Login with us</h1>
                        <form action="./loginfunction.php" id="form" method="post">
                                
                                <div class="">
                                        <label for="email">Security :</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"/>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password"/>

                                </div>
                                
                               <div class="d-flex">
                                        <button type="submit" id="submit" class="btn">Login</button>
                               </div>

                        </form>
                        <p>You don't have account? <a href="signup.php">Signup Here !!!</a></p>
                </div>
        </div>
      
                
        </script>
</body>
</html>