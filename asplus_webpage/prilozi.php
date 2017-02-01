<?php include_once 'modules/init.php'; ?>
<?php include_once 'modules/bootstrap.php'; ?>

<?php

$upit = " SELECT * FROM prilozi ";
$rez = $db->query($upit);
?>






<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Artikal</th>
        <th>Cena u din</th>
		<th>Gramaza</th>
        
      </tr>
    </thead>
    <tbody>
      
	  
	  <?php while( $red = $rez->fetch_object()){ ?> 
    <tr> 
		<td> <?=$red->artikal ?> </td>
		<td> <?=$red->cena ?> </td>
		<td> <?=$red->kolicina ?> </td>
	</tr>
	
	
		
		
		<?php

		}

		?>
		
      </tr>
    </tbody>
  </table>
 </div>