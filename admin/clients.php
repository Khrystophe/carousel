<?php

require('./assets/components/header.php');
require('./assets/php/co_bdd.php');
require('./assets/php/function.php');


$clients = getClients();


?>

<h1>Page Clients</h1>



<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>

        </tr>
    </thead>

    <tbody>
        <?php foreach ($clients as $client) { ?>
            <tr>
                <th scope="col"><?= $client['id'] ?></th>
                <td scope="col"><?= $client['name'] ?></td>
                <td scope="col"><?= $client['lastname'] ?></td>
                <td scope="col"><?= $client['mail'] ?></td>
                <td scope="col"><?= $client['type'] ?></td>

                <td scope="col"><a href="./assets/clients/deleteClient.php?id=<?= $client['id'] ?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<?php

require('./assets/components/footer.php'); ?>