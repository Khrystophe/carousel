<?php

session_start();

if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = [];
}

if (isset($_SESSION['panier'][$_GET['id']])) {
  $_SESSION['panier'][$_GET['id']]++;
} else {
  $_SESSION['panier'][$_GET['id']] = 1;
}

if ($_GET['route'] == 'products') {
  header('location: ../products.php');
} else {
  header('location: ../product.php?id=' . $_GET['id']);
}
