
<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css"/>
    <title>Butterfly</title>
   </head>

   <body>
    
<div class="container">

        <form action ="registerprocess.php" method="post">
            <label class="reg-design">Registration</label>
            <div class="form-group">
                <input type="text" class="form-control" name="first_name" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="business_name" placeholder="Business Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="contact_number" placeholder="Contact_Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="User Name">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password: morethan 8 characters">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password:">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="farm_permit" placeholder="Wildlife Farm Permit Number">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="collector_permit" placeholder="Wildlife Collector Permit Number">
            </div>

            <div class="form-btn">
                <input type="submit" class= "btn btn-primary" value="Register" name="submit">
            </div>

            
        
                
        </form>
        <div>
        <div><p>Already Registered <a href="login.php">Login Here</a></p></div>
      </div>
</div>
       
   </body>




</html>     