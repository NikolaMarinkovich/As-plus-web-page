<?php include_once 'modules/init.php'; ?>
<?php include_once 'modules/bootstrap.php'; ?>

<?php

$upit = " SELECT * FROM cenovnik ";
$rez = $db->query($upit);
?>






<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Artikal</th>
        <th>Cena po kilogramu</th>
        
      </tr>
    </thead>
    <tbody>
      
	  
	  <?php while( $red = $rez->fetch_object()){ ?> 
    <tr> 
		<td> <?=$red->artikal ?> </td>
		<td> <?=$red->cena." "."din" ?> </td>
	</tr>
	
	
		
		
		<?php

		}

		?>
		
      </tr>
    </tbody>
  </table>
 </div>







