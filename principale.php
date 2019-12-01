<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

 

<body>
<div class="container">
<h2>Compte créé avec succès !</h2>        
<p>Voila vos informations :</p>
<table class="table table-striped">
    <thead>
        <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Mdp</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td> <?php echo $_POST['user_name'] ?></td>
        <td><?php echo $_POST['email'] ?></td>
        <td><?php echo $_POST['password'] ?></td>
        </tr>
    </tbody>
</table>
</div>
</body>
</html>