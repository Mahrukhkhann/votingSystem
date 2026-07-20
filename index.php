<!DOCTYPE html>
<html lang="en">
<head>
    <title>
Voting System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="heading">Voting System</h1>
    <h2 class="heading2">Login</h2>

    <div>
        <form class="form" action="">
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
                <select name="std" >
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
            <button type="submit" class="btn">Login</button>
            <p>Don't have ana account  <a href="#"> Register here</a> </p>
            
            </div>
        </form>
    </div>

    
</body>
</html>