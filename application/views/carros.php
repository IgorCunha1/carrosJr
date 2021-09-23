<?php

use Igor\Carrosjr\helpers\EntityManagerFactory;
use Igor\Carrosjr\models\CarrosModel;
include_once 'vendor/autoload.php';

	$emf = new EntityManagerFactory();
	$em = $emf->getEntityManager();
	$carroRepository = $em->getRepository(CarrosModel::class);
	$carrosList = $carroRepository->findAll();

?>
<section>
<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header card-header-primary">
							<h4 class="card-title ">Simple Table</h4>
							<p class="card-category"> Here is a subtitle for this table</p>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
									<thead class=" text-primary">
										<tr>
											<th>ID</th>
											<th>Marca</th>
											<th>Modelo</th>
											
										</tr>
									</thead>
									<tbody>
									
									<?php  foreach ($carrosList as $carros) : ?>
										<tr>
											<td><?= $carros->getID() ?></td>
											<td><?= $carros->getMarca() ?></td>
											<td><?= $carros->getModelo() ?></td>			
										</tr>
									<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
</div>

</section>
