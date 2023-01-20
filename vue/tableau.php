<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Liste des partipants</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="index.php" class="btn btn-sm btn-outline-danger">Ajouter un participant</a>
        </div>
    </div>
</div>

<!--h2>Section title</h2-->
<div class="table-responsive">
    <table class="table table-bordered table-striped" id="tab">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenoms</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody id="myTable">

            <?php
            $i = 1;
            while ($row = $select_participants->fetch()) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$row[nom]</td>";
                echo "<td>$row[prenom]</td>";
                echo "<td>$row[telephone]</td>";
                echo "<td>$row[email]</td>";
                $i++;
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</div>