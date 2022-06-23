<?php
$page = 'panier';
session_start();

if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
  require('./require/co_bdd.php');
  require('./require/head.php');
  require('./actions/function.php');
  $ids = array_keys($_SESSION['panier']);

  $lesIdsDansLePanier = implode(',', $ids);

  $req = $bdd->query("SELECT * FROM produits WHERE id IN ($lesIdsDansLePanier)");

  $produitsDansLePanier = $req->fetchAll();
}

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prix</th>
      <th scope="col">Produit</th>
      <th scope="col">Quantité</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $total = 0;
    foreach ($produitsDansLePanier as $prod) { ?>
      <tr>
        <th scope="row">1</th>
        <td><?= $prod['nom'] ?></td>
        <td><?= $prod['prix'] ?></td>
        <td><img src="./admin/assets/uploads/<?= $prod['image'] ?>" width="100px" alt=""></td>
        <td><?= $_SESSION['panier'][$prod['id']] ?></td>
      </tr>
    <?php
      $total += $prod['prix'] * $_SESSION['panier'][$prod['id']];
    } ?>
  </tbody>
</table>
<p>Total : <?= $total ?> €</p>

<?php
require('./require/footer.php');
?>