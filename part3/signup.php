<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
   <link rel="stylesheet" href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
        <div class="container">
            
                <div id="dotbox" class="dotbox">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                </div>

                <div class="content">
                       
                        <form action="./registerfunction.php" id="form" method="post" enctype="multipart/form-data">
                        <h1>Register with us</h1>
                             <div class="page">
                                                      
                                <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required/>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required/>
                                        <div>
                                        <input type="radio" name="newsletter" id="agree" class="form-check-input" value="1" checked/>
                                        <label for="agree" class="form-check-label">I agree to get newsletter.</label>
                                        <input type="radio" name="newsletter" id="noagree" class="form-check-input" value="0"/>
                                        <label for="noagree" class="form-check-label">I do not agree to get newsletter.</label>
                                        </div>
                                </div>
                             </div> 
                             <div class="page">
                                                      
                                                      <div class="form-group">
                                                              <label for="firstname">Personal Info:</label>
                                                              <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First Name"/>
                                                              <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Last Name"/>
                                                              <div>
                                                              <label for="profile">Profile Picture</label>
                                                              <input type="file" name="profile[]" id="profile"/>
                                                              </div>
                                                      </div>
                             </div>       

                             <div class="page">
                                                      
                                                      <div class="form-group">
                                                              <label for="dob">Date of Birth:</label>
                                                              <input type="date" name="dob" id="dob" class="form-control"/>
                            
                                                      </div>
                             </div>  
                             
                             <div class="page">
                                                      
                                                      <div class="form-group">
                                                              <label for="phone">Contact Info:</label>
                                                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number"/>
                                                              <input type="text" name="address" id="address" class="form-control" placeholder="Enter Detail Address"/>
                                                              <div>
                                                                <input type="checkbox" name="documents[]" id="docnrc" class="form-check-input" value=" nrc" checked/>
                                                                <label for="docnrc" class="form-check-label">I have NRC.</label>
                                                                <input type="checkbox" name="documents[]" id="docpassport" class="form-check-input" value="passport"/>
                                                                <label for="docpassport" class="form-check-label">I have Passport.</label>
                                                              </div>
                                                      </div>
                             </div>    
                        

                               <div class="d-flex">
                                        <button type="button"  id="prevbtn" class="btn" onclick="gonow(-1)">Previous</button>
                                        <button type="button"  id="nextbtn" class="btn" onclick="gonow(1)">Next</button>
                               </div>
                                    
                               <p>Already Register? <a href="signin.php">Signup Here !!!</a></p>
                        </form>


                        

                        <div id="result-container"> 
                                    <!-- <ul>
                                        <li>Name :Aung Kyaw</li>
                                        <li>EMail:aungkyaw@gmail.com</li>
                                    </ul>

                                    <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Name</button> -->
                        </div> 

                    
                </div>
        </div>
        <script src="app.js" type="text/javascript">
        </script>
</body>
</html>

