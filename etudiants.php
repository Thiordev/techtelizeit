<?php
    require_once("db\connexion.php");
    require_once("includ/header.php");
    $result=$crud->getliste();
   
   
   
    ?>
    <table border="1">
        <tr>
        <th>ID</th>
            <th>NON</th>
            <th>PRENOM</th>
                    <th>Action</th>
        </tr>
        <?php while($r=$result->fetch(PDO::FETCH_ASSOC)){?>
<tr>
    <td><?php echo $r['id']?> </td>
    <td><?php echo $r['Nom']?> </td>
    <td><?php echo $r['prenom']?></td>
    <td><a href="db\view.php?id=<?php echo $r['id']?>" class="btn btn-primary">View</a>
    <a href="edit.php?id=<?php echo $r['id']?>" class="btn btn-warning">Edit</a></td>
    </td>
    <td><a onclick= "return confirm ('DEFAL NDANK NGUIR YALLA')" href="delete.php?id=<?php echo $r['id']?>" class="btn btn-danger">delate</a></td>

</tr>

     <?php }?>
    </table>