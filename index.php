<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col">
                <form  method="POST" action="insert.php">
<h2>Fill Data</h2>
<p class="hint-text">Fill below form.</p>
 <div class="form-group">
 
<div class="row">
<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
</div>        	
</div>
 
<div class="form-group">
<input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>
 
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">
 
</div>
 
<div class="form-group">
<textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
</div>        
 
<div class="form-group">
<button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
</div>
</form>
                </div>
            </div>
        </div>
</body>
</html>


