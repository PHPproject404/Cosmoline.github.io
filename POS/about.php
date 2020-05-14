<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>ABOUT</legend>
                    <h4>This is a simple PHP/MYSQL Project made by Karl Agpaoa, Jessa Matocenio And Mika Ella Lintag.</h4>
				    <div class="form-group">
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputName" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10">
				        	<input type="text" class="form-control" id="inputEmail" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10">
				        	<textarea class="form-control" rows="3" id="textArea" placeholder="Comment"></textarea>
				        	<span class="help-block">Contact us for more info.</span>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">                            
				        	<button type="submit" class="btn btn-primary">Submit</button>
				        	<button type="reset" class="btn btn-default">Cancel</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
<?php
  require_once "./template/footer.php";
?>