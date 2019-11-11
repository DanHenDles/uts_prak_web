<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">List Sepatu</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>



<div class="container">
	<table border='1' id="tabelToko" class="table table-striped table-bordered" cellspacing="0" width="100%"> 
		<thead>
			<tr>
			<th>id sepatu</th>
            <th>nama sepatu</th>
            <th>harga sepatu</th>
            <th>ukuran sepatu</th>
			</tr>
		</thead>
		<?php
		foreach ($data as $data) {
			?>
				<tr>
					<td><?= $data->id_sepatu?></td>
                    <td><?= $data->nama_sepatu?></td>
                    <td><?= $data->harga_sepatu?></td>
                    <td><?= $data->ukuran_sepatu?></td>
				</tr>
			<?php
		}
		?>
	</table>
</div>

