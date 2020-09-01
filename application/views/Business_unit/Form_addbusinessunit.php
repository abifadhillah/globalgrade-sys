<!-- Modal untuk tambah data businessunit -->
<div class="modal fade" id="tambahbusinessunit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Tambah Business Unit</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<div class="modal-body">
<div class="form-group">
    <label for="Company Role"><b>Company Role : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="radio" class="radio" data-id="Parent" name="company_role" id="rad1" value="Parent" class="rad"/> Parent</input>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="radio" class="radio" data-id="Subs" name="company_role" id="rad2" value="Subs" class="rad"/> Subs</input>
</div>
<div class="form form-Parent" style="display: none;" >
<form method="post" action="<?php echo base_url('Business_unit/tambahbusinessunit') ?>">
	 <h4 align="center">Form Parent</h4>
      	<center><hr width="80%"></center>
	<input hidden class="text" id="company_role" name="company_role" value="Parent">
	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="companycode">Company Code : </label>
      		<div class="col-sm-8">
      		<input type="text" class="form-control" name="company_code" id="company_code" required >
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="companyname">Company Name: </label>
      		<div class="col-sm-8">
      	   <input type="text" class="form-control" name="company_name" id="company_name" required>
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="Revenue">Revenue : </label>
      		<div class="input-group col-sm-8">
          <span class="input-group-addon">$</span>
        <input type="number" value="0.00" min="0" step="0.01" id="revenue" name="revenue" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" required /> <!-- <span class="input-group-addon">M</span> -->
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="FTE">FTE : </label>
      		<div class="col-sm-8">
      		<input type="number" class="form-control" name="fte" id="fte" required>
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="biz_diversity">Biz. Diversity : </label>
      		<div class="col-sm-8">
       		<select class="form-control" name="biz_diversity" id="biz_diversity">
       		<option disabled="disabled" selected value="" required> Choose </option>
       			<?php
       			foreach ($biz_diversity->result() as $baris) {
              echo "<option value='".$baris->diversity_description."'>".$baris->diversity_description."</option>";
              }
    		?>
         	</select>
         </div>
    	</div>
        <div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="complexity">Biz. Complexity : </label>
      		<div class="col-sm-8">
       		<select class="form-control" name="biz_complexity" id="biz_complexity">
       			<option  disabled="disabled" selected value="" required> Choose </option>
       			<?php
       			foreach ($complexityparent->result() as $baris) {
              echo "<option value='".$baris->complexity_description."'>".$baris->complexity_description."</option>";
            }
    		?>
      		</select>
      	</div>
  		</div>
  		<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="geo_breadth">Geo. Breadth : </label>
      		<div class="col-sm-8">
       		<select class="form-control" name="geo_breadth" id="geo_breadth">
       			<option disabled="disabled" selected value="" required> Choose </option>
       			<?php
       				foreach ($geographical->result() as $baris) {
        			echo "<option value='".$baris->geographical_description."'>".$baris->geographical_description."</option>";
         		}
         		?>
         	</select>
         </div>
  		</div>
      <div>
        <input type="hidden" name="grade_sub" value=" <?php echo '$grade_sub'; ?>  ">
      </div>
  		<div class="modal-footer">
		<button type="button"   class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()" >Tutup</button>
		<input type="submit" class="btn btn-primary" name="Tambah Data" value="Tambah Data Business">
		</div>
		</form>
		</div>


      <div class="form form-Subs" style="display: none;" >
      <form method="post" action="<?php echo base_url('Business_unit/tambahbusinessunit') ?>">
      	<h4 align="center">Form Subs</h4>
      	<center><hr width="80%"></center>
      <input hidden class="text" id="company_role" name="company_role" value="Subs">
      <div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="companycode">Company Code : </label>
      		<div class="col-sm-8">
      		<input type="text" class="form-control" name="company_code" id="company_code" required>
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="companyname">Company Name: </label>
      		<div class="col-sm-8">
      		<input type="text" class="form-control" name="company_name" id="company_name" required>
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="Revenue">Revenue : </label>
      		<div class="input-group col-sm-8">
      		<span class="input-group-addon">$</span>
        <input type="number" value="0.00" min="0" step="0.01" id="revenue" name="revenue" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" required /><!-- <span class="input-group-addon">M</span> -->
        </div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="FTE">FTE : </label>
      		<div class="col-sm-8">
      		<input type="number" class="form-control" name="fte" id="fte" required>
      	</div>
    	</div>
    	<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="biz_diversity">Biz. Diversity :	</label>
      		<div class="col-sm-8">
       		<select class="form-control" name="biz_diversity" id="biz_diversity">
       			<option disabled="disabled" selected value="" required> Choose </option>
       			<?php
       				foreach ($biz_diversity->result() as $baris) {
        			echo "<option value='".$baris->diversity_description."'>".$baris->diversity_description."</option>";
         			}
         		?>
         	</select>
         </div>
    	</div>
        <div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="complexity">Biz. Complexity : </label>
      		<div class="col-sm-8">
       		<select class="form-control" name="biz_complexity" id="biz_complexity">
       		<option disabled="disabled" selected value="" required> Choose </option>
       			<?php
       				foreach ($complexitysub->result() as $baris) {
        			echo "<option  value='".$baris->complexity_description."'>".$baris->complexity_description."</option>";
        			}
    			?>
      		</select>
      	</div>
  		</div>
  		<div class="form-group row">
      		<label class="col-sm-4 col-form-label" for="geo_breadth">Geo. Breadth : </label>
      		<div class="col-sm-8">
       		<select class="form-control" name="geo_breadth" id="geo_breadth">
       		<option disabled="disabled" selected value="" required> Choose </option>
       			<?php
       				foreach ($geographical->result() as $baris) {
        			echo "<option value='".$baris->geographical_description."' >".$baris->geographical_description."</option>";
         			}
         		?>
         	</select>
         </div>
  		</div>
      <div class="modal-footer">
		<button type="button"   class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()" >Tutup</button>
		<input type="submit" class="btn btn-primary" name="Tambah Data" value="Tambah Data Business">
		</div>
		</form>
      </div>

</div>

</div>
</div>
</div>

<script type="text/javascript">
			//
function selectForm() {
$("div.form").hide();
$("div.form-" + $("input:checked").val()).show();
}
selectForm();
$("input").click(function(){selectForm()});
</script>


			<!-- Modal untuk edit data businesunit -->
			<div class="modal fade" id="editbusinessunit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Edit Data Business Unit</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			 <div id="formdatabusinessunit">
			 </div>
			</div>
			</div>
			</div>

			</div>
			<script>
			$(document).ready(function () {
				// ini adalah fungsi untuk mengambil data businesunit dan di  incluce ke dalam datatable
					var Databusinessunit = $('#Databusinessunit').DataTable({
									"ajax": "<?=base_url("Business_unit/Databusiness")?>",
									stateSave: true,
									"order": []
					})
					// fungsi untuk edit data
					//pilih selector dari table id businesunit dengan class .ubah-businesunit
					$('#Databusinessunit').on('click','.ubah-business', function () {
						// ambil element id pada saat klik ubah
						var id =  $(this).data('id');

						$.ajax({
							type: "post",
							url: "<?=base_url('Business_unit/formedit')?>",
							beforeSend :function () {
								swal({
										title: 'Menunggu',
										html: 'Memproses data',
										onOpen: () => {
											swal.showLoading()
										}
									})
								},
							data: {id:id},
							success: function (data) {
								swal.close();
								$('#editbusinessunit').modal('show');
								$('#formdatabusinessunit').html(data);

								// proses untuk mengubah data

							}
						});
					});
					// fungsi untuk hapus data
					//pilih selector dari table id businesunit dengan class .hapus-businesunit
					$('#Databusinessunit').on('click','.hapus-business', function () {
					var id =  $(this).data('id');
					swal({
					title: 'Konfirmasi',
					text: "Anda ingin menghapus ",
					type: 'warning',
					showCancelButton: true,
					confirmButtonText: 'Hapus',
					confirmButtonColor: '#d33',
					cancelButtonColor: '#3085d6',
					cancelButtonText: 'Tidak',
					reverseButtons: true
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url:"<?=base_url('Business_unit/hapusbusiness')?>",
							method:"post",
							beforeSend :function () {
							swal({
									title: 'Menunggu',
									html: 'Memproses data',
									onOpen: () => {
										swal.showLoading()
									}
								})
							},
							data:{id:id},
							success:function(data){
								swal(
									'Hapus',
									'Berhasil Terhapus',
									'success'
								)
								Databusinessunit.ajax.reload(null, true)
							}

						})
				} else if (result.dismiss === swal.DismissReason.cancel) {
						swal(
							'Batal',
							'Anda membatalkan penghapusan',
							'error'
						)
					}
				})
			});

		});

</script>
