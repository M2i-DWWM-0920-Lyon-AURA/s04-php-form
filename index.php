<?php

// Si l'utilisateur revient sur cette page après avoir validé un formulaire
if (isset($_GET['success'])) {
    $success = $_GET['success'] === '1';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- Si on revient sur cette page après avoir validé un formulaire -->
        <?php if (isset($success)): ?>
        <div class="alert alert-<?php if ($success) { echo 'success'; } else { echo 'danger'; } ?>" role="alert">
            <?php

            if($success) {
                echo 'Votre message a bien été envoyé';
            } else {
                echo 'Veuillez vérifier votre saisie';
            }

            ?>
        </div>
        <?php endif; ?>

        <form action="process-form.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse e-mail</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">La raison de votre message</label>
                <select name="reason" class="form-control" id="exampleFormControlSelect1">
                    <option value="1">Je ne comprends rien au PHP</option>
                    <option value="2">J'ai un message d'erreur</option>
                    <option value="3">Je n'arrive pas à installer PHP</option>
                    <option value="4">Autre</option>
                </select>
            </div>        
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre message</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</body>
</html>