psible content -->

</nav>
<!--/.Navbar-->

<br>

<center> <p class="font-weight-light  "><h1 class="text-light-primary">Area administrativa</p></h1></center>


	<!-- Card -->

	<div class="container  h-100" id="card">

<div class="row h-100 justify-content-center align-items-center">

<div class="card my-5 animated zoomIn"  style="width: 30rem;" >

    <!-- Card body -->
    <div class="card-body">


			<?php
			echo validation_errors();
			echo form_open('cadastro');
			?>


					<p class="h4 text-center py-4">Cadastrar Aluno</p>


					<!-- Material input email -->
					<div class="md-form">
							<i class="fa fa-envelope prefix grey-text"></i>
							<input type="text" id="nome" name="nome" class="form-control">
							<label for="nome" class="font-weight-light">Nome:</label>
					</div>


					<!-- Material input password -->
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="curso" class="form-control">
							<label for="curso" class="font-weight-light">Curso</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="number" id="valor" class="form-control">
							<label for="valor" class="font-weight-light">valor</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="endereço" class="form-control">
							<label for="endereço" class="font-weight-light">endereço</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="Professor" class="form-control">
							<label for="Professor" class="font-weight-light">Professor</label>
					</div>



					<div class="text-center mt-4">
					<button class="btn btn-primary" type="submit">cadastrar</button><br><br>
					</div>

					<div class="modal-footer">
												<div class="options font-weight-light">
														<p></p>

												</div>
										</div>



	</div>
	<!-- Card body -->

</div>
</div>
</div>





			<?php
			echo form_close();
			?>
