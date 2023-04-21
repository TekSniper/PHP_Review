<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wwwroot/node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="wwwroot/node_modules/bulma/css/bulma.min.css">
    <title>Accueil</title>
</head>

<body>
    <div class="container">
        <div class="columns is-centered is-vcentered ">
            <div class="column">
                <h2 style="margin-top:75px">Liste des clients</h2><br>
                <a href="./templates/create.php" class="button is-link">Nouveau client</a><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Adress</th>
                            <th>Create at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Merveille Lubenzo</td>
                            <td>lubenzo@pm.me</td>
                            <td>+243 898 775 637</td>
                            <td>Kinshasa, Ngaliema</td>
                            <td>2023</td>
                            <td>
                                <a href="./templates/edit.php" class="button is-link">Modifier</a>
                                <a href="./templates/edit.php" class="button is-danger">Supprimer</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>