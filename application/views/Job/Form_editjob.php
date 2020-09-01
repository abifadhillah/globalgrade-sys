<form id="formubahdatajob" method="post" action="<?php echo base_url('Job/ubah') ?>">
        <div class="form-group row">
            <label ondragstart="return false;" for="inputjob_index" class="col-sm-4 col-form-label">Job Index</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="Job_index" name="Job_index" value="<?=$datajob['Job_index']?>" required>
            <input type="hidden" name="id" id="id" value="<?=$datajob['id']?>">
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputjob_title" class="col-sm-4 col-form-label">Job Title</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="Job_title" name="Job_title" value="<?=$datajob['Job_title']?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputbusiness_unit" class="col-sm-4 col-form-label">Business Unit</label>
            <div class="col-sm-6">
            <select class="form-control" id="business_unit" name="business_unit" required>
              <option selected value disabled>Choose</option>
                <?php 
                foreach ($business_unit as $value) { ?>
              <option value="<?php echo $value->id ?>" <?php if($value->id == $datajob['business_unit']) { echo 'selected';}  ?> > <?php echo $value->company_name ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputDoc_ref" class="col-sm-4 col-form-label">Doc. Ref</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="Doc_ref" name="Doc_ref" value="<?=$datajob['Doc_ref']?>" required>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data Job</button>
      </div>
</form>


