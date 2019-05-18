<?php
session_start();
require 'db.php';
if(isset($_POST['nom']) && isset($_POST['image'])) {
    $nom = $_POST['nom'];
    $image = $_POST['image'];
    $req = $db->prepare('INSERT INTO spawn(name,image)
                  VALUES(?,?)');
    $req->execute([$nom, $image]);
    $_SESSION['success'] = "Vous venez d'ajouter un spawn";
} else if(isset($_POST['id'])) {
    $nom = $_POST['namem'];
    $image = $_POST['imagem'];
    $id = $_POST['id'];
    $req = $db->prepare('UPDATE spawn
                        SET name = ?, image= ?
                        WHERE id = ?');
    $req->execute([$nom,$image, $id]);
    $_SESSION['success'] = "Vous venez de modifier un spawn";
} else if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $req = $db->prepare('DELETE FROM spawn
                        WHERE id = ?');
    $req->execute([$id]);
    $_SESSION['success'] = "Vous venez de supprimer ce spawn";
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<?php if(isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
    <?=$_SESSION['success'];?>
    </div>

<?php 
unset($_SESSION['success']);
} ?>

<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
<?php 

$req = $db->prepare('SELECT * FROM spawn');
$req->execute();
$data = $req->fetchAll();

foreach($data as $spawn) { ?>
    <tr>
      <th scope="row"><?=$spawn['id'];?></th>
      <td><?=$spawn['name'];?></td>
      <td><?=$spawn['image'];?></td>
      <td><a href="editbase.php?deleteid=<?=$spawn['id']?>" class="btn btn-danger">SUPPRIMER</a>
          <a href="modify.php?id=<?=$spawn['id']?>" class="btn btn-primary">MODIFIER</a>
      </td>
    </tr>
<?php }

?>
</tbody>
</table>

<form method="POST">
    <input type="text" name="nom" />
    <input type="text" name="image" />
    <button type="submit">Ajouter</button>
</form>