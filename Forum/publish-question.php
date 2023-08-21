<?php 

    require('actions/questions/publishQuestionAction.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/navbar.php'; ?>
<br>
<br>
<form method="POST" style="margin: 25px">

    <?php
        if (isset($successMsg)) {
            echo '<p>'.$successMsg. '</p>';
        }
    ?>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Déscription de la question</label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contenue de la question</label>
    <textarea type="text" class="form-control" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="validate">Pulier la question</button>
</form>
</body>
</html>