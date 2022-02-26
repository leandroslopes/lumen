<?
$btn_send = filter_input ( INPUT_POST, 'btn-send' );

if (! empty ( $btn_send )) {

	$contact = new Contact ();

	$name = filter_input ( INPUT_POST, 'name' );
	$email = filter_input ( INPUT_POST, 'email' );
	$phone = filter_input ( INPUT_POST, 'phone' );
	$message = filter_input ( INPUT_POST, 'message' );

	$contact->setName ( $name );
	$contact->setEmail ( $email );
	$contact->setPhone ( $phone );
	$contact->setMessage ( $message );

	if (EmailUtil::send ( $contact )) {
		?>
		<script type="text/javascript"> alert("send");
			/*$(function() { alert("send enter");
				$('#msg-modal-send').modal('show');
			});*/
		</script>
		//<?
	} else {
		?>
		<script type="text/javascript"> alert("no send");
			/*$(function() {
				$('#msg-modal-error').modal('show');
			});*/
		</script>
		<?
	}
}
?>

	<div class="modal fade" id="msg-modal-send" tabindex="-1"
		role="dialog" aria-labelledby="mySmallModalLabel01">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title blue-color" id="mySmallModalLabel01">Sua
						mensagem foi enviada. Em breve retornaremos seu contato!</h4>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<div class="modal fade" id="msg-modal-error" tabindex="-1"
		role="dialog" aria-labelledby="mySmallModalLabel02">
		<div class="modal-dialog modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title red-color" id="mySmallModalLabel02">Sua
						mensagem não foi enviada. Tente novamente!</h4>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<div class="row">

		<div class="col-md-6">

			<p id="contacts">
				<label class="blue-color txt-bold">Celular:</label>+55 98 8848-5727 <br/> +55 98
				98133-1656 <br /> <label class="blue-color txt-bold">E-mail:</label>
				info@lumenstudiofotografia.com <br /> <label
					class="blue-color txt-bold">WebSite:</label>
				lumenstudiofotografia.com
			</p>

		</div>

		<div class="col-md-6">
			<form method="post" name="frm-contact" id="frm-contact" action=""
				data-toggle="validator" role="form">
				<div class="form-group">
					<label class="col-2 col-form-label mycol-form-label txt-bold black-color">Nome</label>
					<div class="col-10">
						<input class="form-control myform-control" type="text" value=""
							id="name" name="name" data-minlength="3" maxlength="45"
							required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-2 col-form-label mycol-form-label txt-bold black-color">E-mail</label>
					<div class="col-10">
						<input class="form-control myform-control" type="email" value=""
							id="email" name="email" maxlength="45" required>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-2 col-form-label mycol-form-label txt-bold black-color">Telefone</label>
					<div class="col-10">
						<input class="form-control myform-control" type="tel" value=""
							id="phone" name="phone" maxlength="13" pattern="^[0-9]{1,}$"
							required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-2 col-form-label mycol-form-label txt-bold black-color">Mensagem</label>
					<textarea class="form-control myform-control" id="textarea"
						name="message" rows="4" maxlength="255"></textarea>
				</div>

				<div id="form-btn">
					<input type="submit" class="btn btn-primary" name="btn-send"
						value="Enviar" id="mybtn" />
				</div>
			</form>
		</div>

	</div>
	<!-- /.row -->
