<section class="wrapper">
  <h3><i class="fa fa-angle-right"></i> TOUS LES ANIMAUX</h3>
  <div class="row mb">
    <!-- page start-->
    <div class="content-panel">
      <div class="adv-table">
        <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
          <thead>
            <tr>
              <th>Id </th>
              <th>Nom</th>
              <th>Race</th>
              <th>Poids</th>
              <th>Age</th>
              <th>Categorie</th>
              <th>Prix</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $select_all_animaux->execute();
            $i = 1;
            while ($row = $select_all_animaux->fetch()) {
              echo "<tr>";
              // echo "<td>$i</td>" ;
              echo "<td>$row[id_animaux]</td>";
              echo "<td>$row[nom_animaux]</td>";
              echo "<td>$row[race_animaux]</td>";
              echo "<td>$row[poids_animaux]</td>";
              echo "<td>$row[age_animaux]</td>";
              echo "<td>$row[categorie_animaux]</td>";
              echo "<td>$row[prix_animaux]</td>";
              echo "<td>
                                    <a href=\"?delp=$row[id_animaux]\">Supprimer</a></td>";
              echo "</tr>";
              $i++;
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- page end-->
  </div>
  <!-- /row -->
</section>