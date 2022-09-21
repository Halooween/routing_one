<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Routing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        form{
            margin-left: 500px;
            margin-top: 30px;
            height: auto;
            width: 15%;
        }
    </style>
</head>
<body>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username"  value= "<?php echo $user?>" class="form-control" >
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" value= "<?php echo $pass?>" class="form-control">
        </div>
        <input type="submit" name="create" class="btn btn-primary" value="Submit">
        <a href="" class="btn btn-secondary ml-2">Cancel</a>
    </form>
</body>
</html>