<!-- Modal untuk tambah data Jobcategory -->
<div class="modal fade" id="tambahjob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Tambah Job</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
<form method="post" action="<?php echo base_url('Job/tambahjob') ?>">
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobtext" class="col-sm-4 col-form-label">Job Index</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="Job_index" name="Job_index" placeholder="" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobcat" class="col-sm-4 col-form-label">Job Title</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="Job_title" name="Job_title" placeholder="" required>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobclass" class="col-sm-4 col-form-label">Business Unit</label>
			<div class="col-sm-6">
			<select class="form-control" id="business_unit" name="business_unit" required>
			<option selected value disabled>Choose</option>
			<?php 
			foreach ($business_unit as $value) { ?>
			<option value="<?php echo $value->id ?>" > <?php echo $value->company_name ?></option>
			<?php } ?>
			</select>
			</div>
	</div>
	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobclass" class="col-sm-4 col-form-label">Business Grade</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="business_grade" name="business_grade" placeholder="" required readonly>
			</div>
			</div>
  	<div class="form-group row">
			<label ondragstart="return false;" for="inputjobclass" class="col-sm-4 col-form-label">Doc. Ref</label>
			<div class="col-sm-6">
			<input type="text" class="form-control" id="Doc_ref" name="Doc_ref" placeholder="" required>
			</div>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
	<button type="submit" class="btn btn-primary">Tambah Data Job</button>
</div>

</form>
<script type="text/javascript">
	 let grade_sub = 0;
	 $('#business_unit').on('change', function() {
            $.getJSON("<?php echo site_url('Job/get_grade/') ?>" + this.value, 
            function(result) {
              grade_sub = result.grade_sub;
              let grade = grade_sub;
              $('#business_grade').val(grade);
            })
          });
	  $('#business_unit').on('change', function() {
	  	 let grade = grade_sub;
            $('#business_grade').val(grade);
          });
</script>
</div>
</div>
</div>

<!-- Modal untuk edit data persk -->
<div class="modal fade" id="editjob" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel"> Data Job</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
 <div id="formdatajob">

 </div>
</div>
</div>
</div>




<script>
$(document).ready(function () {
	// ini adalah fungsi untuk mengambil jobcategory dan di  incluce ke dalam datatable
		var DataJob = $('#DataJob').DataTable({
						"ajax": "<?=base_url("Job/DataJob")?>",
						stateSave: true,
						"order": []
		})

		 

		// fungsi untuk edit data
		//pilih selector dari table id jobcategory dengan class .ubah-jobcategory
		$('#DataJob').on('click','.ubah-job', function () {
						// ambil element id pada saat klik ubah
						var id =  $(this).data('id');

						$.ajax({
							type: "post",
							url: "<?=base_url('Job/formedit')?>",
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
								$('#editjob').modal('show');
								$('#formdatajob').html(data);

							}
						});
	});
    $('#DataJob').on('click','.hitung-band', function () {
			// ambil element id pada saat klik ubah
			var id = $(this).data('id');
			$.ajax({
				type: "post",
				url: "<?=base_url('Job/hitungband')?>",
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
					$('#editjob').modal('show');
					$('#formdatajob').html(data);
				}
			});
		});
     $('#DataJob').on('click','.hitung-grade', function () {
			// ambil element id pada saat klik ubah
			var id = $(this).data('id');
			$.ajax({
				type: "post",
				url: "<?=base_url('Job/hitunggrade')?>",
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
					$('#editjob').modal('show');
					$('#formdatajob').html(data);
				}
			});
		});
		// fungsi untuk hapus data
		//pilih selector dari table id DataJobcategory dengan class .hapus-jobcategory
		$('#DataJob').on('click','.hapus-job', function () {
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
							url:"<?=base_url('Job/hapusjob')?>",
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
								DataJob.ajax.reload(null, false)
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
