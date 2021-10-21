<section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> TOUS LES OISEAUX</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Id </th>
                    <th>Nom</th>
                    <th>Bruit</th>
                    <th>Categorie</th>
                    <th>Prix</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $select_all_oiseaux->execute();
                        $i = 1 ;
                        while ($row = $select_all_oiseaux->fetch()){
                            echo "<tr>" ;
                           // echo "<td>$i</td>" ;
                                echo "<td>$row[id_oiseaux]</td>";
                                echo "<td>$row[nom_oiseaux]</td>" ;
                                echo "<td>$row[bruit_oiseaux]</td>" ;
                                echo "<td>$row[categorie_oiseaux]</td>" ;
                                echo "<td>$row[prix_oiseaux]</td>" ;
                                echo "<td>
                                    <a href=\"?delp=$row[id_oiseaux]\">Supprimer</a></td>" ;
                            echo "</tr>" ;
                            $i++ ;
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