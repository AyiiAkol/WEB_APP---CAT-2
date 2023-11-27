<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author's Detail Form</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <?php require "configs/DbConn.php"; ?>

    <div class="header">
    
    <h2>Author Details Form</h2>

    </div>
    

 <form action="processes/AutRegistration.php" method="post">
    <div class="mb-3">
    <label for="AuthorId"class="form-label" >Author ID:</label>
    <input type="text" class="form-control" name="AuthorId" required>
    </div>

    <div class="mb-3">
    <label for="AuthorFullName" class="form-label">Full Name:</label>
    <input type="text" class="form-control" name="AuthorFullName" required>
    </div>

    <div class="mb-3">
    <label class="form-label" for="AuthorEmail">Email:</label>
    <input type="email" class="form-control" name="AuthorEmail" required>
    </div>

    <div class="mb-3">
    <label class="form-label" for="AuthorAddress">Address:</label>
    <input class="form-control" type="text" name="AuthorAddress">
    </div>
    
    <div>
    <label class="form-label" for="AuthorBiography">Biography:</label>
    <textarea class="form-control" name="AuthorBiography" rows="5"></textarea>
    </div>

    <div>
    <label class="form-label" for="AuthorDateOfBirth">Date of Birth:</label>
    <input class="form-control" type="date" name="AuthorDateOfBirth">
    </div>
    
    <div>
    <label for="AuthorSuspended">Suspended:</label>
    <input type="checkbox" name="AuthorSuspended">
    </div>

    <br>

    <input type="submit" value="Submit">
</form>
   
</body>
</html>