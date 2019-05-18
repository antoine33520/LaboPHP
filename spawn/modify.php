<?php
require 'db.php';
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $req = $db->prepare('SELECT * FROM spawn WHERE id = ?');
    $req->execute([$id]);
    $data = $req->fetch();
}
?>


<form method="POST" action="editbase.php">
    <input type="text" name="namem" value="<?=$data['name']?>" />
    <input type="text" name="imagem" value="<?=$data['image']?>" />
    <input type="hidden" name="id" value="<?=$data['id']?>" />
    <button type="submit">Ajouter</button>
</form>