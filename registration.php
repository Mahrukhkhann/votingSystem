<!DOCTYPE html>
<html lang="en">
<head>
    <title>
Voting System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="heading">Voting System</h1>
    <h2 class="heading2">Register Account</h2>

    <div>
        <form class="form" action="register.php" method="POST" enctype="multipart/form-data">
            <div class="fields">
                 <input type="text" name="username" placeholder="Enter your name" required="required" >
            </div>
            <div class="fields">
                 <input type="text" name="mobile" placeholder="Enter your Mobile No" required="required" >
            </div>
            <div class="fields">
                 <input type="password" name="password" placeholder="Enter your Password" required="required" >
            </div>
             <div class="fields">
                 <input type="password" name="cpassword" placeholder="Confirm Password" required="required" >
            </div>
             <div class="fields">
                 <input type="file" name="photo"  >
            </div>

            <div class="fields">
                <select name="std" >
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
            <button type="submit" class="btn">Register</button>
            <p>Already have an account <a href="../">Login here</a> </p>
            
            </div>
        </form>
    </div>

    
</body>
</html>