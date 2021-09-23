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
							<h4 class="card-title ">Carros Cadastrados</h4>
							<p class="card-category"> </p>
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
									<button id="adcCarro" onclick="scripts.js" class="btn btn-primary pull-right">Adicionar Carro</button>
								</table>
							</div>
						</div>
				</div>
			</div>

<div class="row" id="formAdcCarro" >
<div class="col-md-2"></div>
	<div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Adicionar Carro</h4>
                  <p class="card-category">Complete your profile</p>
                </div>

                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Descrição</label>
                          <input type="text" class="form-control" id="descricao" name="descricao">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Marca</label>
                          <input type="text" class="form-control" id="marca" class="marca">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Modelo</label>
                          <input type="modelo" class="form-control" id="modelo" name="modelo">
                        </div>
                      </div>
					  <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Placa</label>
                          <input type="text" class="form-control" id="placa" nome="placa">
                        </div>
                    </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ano Fabricação</label>
                          <input type="text" class="form-control" id="anoFab" name="anoFab">
                        </div>
                      </div>
					  <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Ano Modelo</label>
                          <input type="text" class="form-control" id="anoMod" name="anoMod">
                        </div>
                      </div>
					  <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">KM Rodado</label>
                          <input type="text" class="form-control" id="km" name="km">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Obs.:</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Digite qualquer informação referente ao carro.</label>
                            <textarea class="form-control" rows="5" id="obsCarro" name="obsCarro"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
        </div>
    </div>
</div>

</section>
