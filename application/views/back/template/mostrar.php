
</nav>
<!--/.Navbar-->

<br>



	<!-- Card -->

	<div class="container  h-100" id="card">

<div class="row h-100 justify-content-center align-items-center">

<div class="card my-5 animated zoomIn"  style="width: 30rem;" >

		<!-- Card body -->
		<div class="card-body">

				<!-- Material form register -->
				<form>
						<p class="h4 text-center py-4">Alunos</p>


						<!-- Material input email -->

								<?php
								foreach ($info as $infos) {
								?>
							 <center><li>NOME:  <?php echo $infos->nome ?></li></center>
								<center><li>CURSO:  <?php echo $infos->curso ?></li></center>
								<center><li>Data Nas:  <?php echo $infos->dataN ?></li></center>
								<center><li>vencimento:  <?php echo $infos->Vencimento ?></li></center>
								<center><li>NOME da mae:  <?php echo $infos->mae ?></li></center>
								<center><li>NOME do pai:  <?php echo $infos->pai ?></li></center>

								<?php
								}
								?>





						</div>





				</form>
				<!-- Material form register -->

		</div>
		<!-- Card body -->

</div>
</div>
</div>
