psible content -->

</nav>
<!--/.Navbar-->

<br>



	<!-- Card -->

	<div class="container  h-100" id="card">

<div class="row h-200 justify-content-center -items-center">

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
							<input type="text" id="curso" name="curso" class="form-control">
							<label for="curso" class="font-weight-light">Curso</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="datan" name="datan" class="form-control">
							<label for="datan" class="font-weight-light">Data de Nascimento</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="vencimento" name="vencimento" class="form-control">
							<label for="vencimento" class="font-weight-light">Vencimento</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="mae" name="mae" class="form-control">
							<label for="mae" class="font-weight-light">Mãe</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="pai" name="pai" class="form-control">
							<label for="pai" class="font-weight-light">Pai</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="endereço" name="endereço" class="form-control">
							<label for="endereço" class="font-weight-light">endereço</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="number" id="valor" name="valor" class="form-control">
							<label for="valor" class="font-weight-light">valor</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="bairro" name="bairro" class="form-control">
							<label for="bairro" class="font-weight-light">Bairro</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="cidade" name="cidade" class="form-control">
							<label for="cidade" class="font-weight-light">Cidade</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="Professor" name="Professor" class="form-control">
							<label for="Professor" class="font-weight-light">Professor</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="text" id="dia" name="dia" class="form-control">
							<label for="dia" class="font-weight-light">Dia</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="number" id="hora" name="hora" class="form-control">
							<label for="hora" class="font-weight-light">Hora</label>
					</div>
					<div class="md-form">
							<i class="fa fa-lock prefix grey-text"></i>
							<input type="number" id="telefone" name="telefone" class="form-control">
							<label for="telefone" class="font-weight-light">Telefone</label>
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
