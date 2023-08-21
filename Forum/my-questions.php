<?php require('actions/questions/myQuestionActoin.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>

    <?php 
    
        while ($question = $getAllMyQuestions->fetch()) {
            ?>
            <div class="card">
                <div class="card-header">
                    <?= $question['titre']; ?>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?= $question['description']; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Accéder à l'article</a>
                    <a href="#" class="btn btn-warning">Modifier l'article</a>
                </div>
            </div>
            <?php
        }
    
    ?>
</body>
</html>