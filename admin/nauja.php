<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" id="manage-category">

        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Laikas</label>
							<input type="text" class="form-control form-control-sm" name="laikas" value="<?php echo isset($laikas) ? $laikas : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="form-group">
							<label for="" class="control-label">Vieta</label>
							<textarea name="vieta" id="" cols="30" rows="10" class="summernote form-control">
								<?php echo isset($vieta) ? $vieta : '' ?>
							</textarea>
						</div>
					</div>
				</div>
    </form>
    	</div>
    	<div class="card-footer border-top border-info">
    		<div class="d-flex w-100 justify-content-center align-items-center">
    			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-category">Išsaugoti</button>
    			<button class="btn btn-flat bg-gradient-secondary mx-2" type="button">Atšaukti</button>
    		</div>
    	</div>
	</div>
</div>
<script>
	$('#manage-category').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_category',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
						location.href = 'index.php?page=sarasas'
					},2000)
				}
			}
		})
	})
</script>
