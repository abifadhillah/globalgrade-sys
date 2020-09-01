<form id="formubahdatabusinessunit">
    <div class="form-group">
    <label for="Company Role"><b>Company Role :</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="radio" class="radio" data-id="Parent" name="company_role" id="rad1" value="Parent" class="rad"  <?php if($databusiness['company_role'] == 'Parent') { echo 'checked' ;} ?> > Parent</input>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" class="radio" data-id="Subs" name="company_role" id="rad2" value="Subs" class="rad" <?php if($databusiness['company_role'] == 'Subs') { echo 'checked' ;} ?> > Subs</input>
    </div>
</form>
     
    <div class="form form-Parent" style="display: none;" >
      <form  method="POST" action="<?php echo base_url('Business_unit/ubahbusiness') ?>">
      <input hidden class="text" id="id" name="id" value="<?=$databusiness['id']?> ">
      <input hidden class="text" id="company_role" name="company_role" value="Parent">
      <div class="form-group row">
          <label class="col-sm-4" for="companycode">Company Code : </label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="company_code" id="company_code" value="<?=$databusiness['company_code']?> " required >
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="companyname">Company Name: </label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="company_name" id="company_name" value="<?=$databusiness['company_name']?>" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="Revenue">Revenue : </label>
          <div class="input-group col-sm-8">
          <span class="input-group-addon">$</span>
          <input type="number" class="form-control" name="revenue" id="revenue" value="<?=$databusiness['revenue']?>" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="FTE">FTE : </label>
          <div class="col-sm-8">
          <input type="number" class="form-control" name="fte" id="fte" value="<?=$databusiness['fte']?>" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="biz_diversity">Biz. Diversity : </label>
          <div class="col-sm-8">
          <select class="form-control" name="biz_diversity" id="biz_diversity">
            <option disabled="disabled" selected value="" required> Choose </option>
            <?php
            foreach ($biz_diversity->result() as $baris) { ?>
              <option value="<?php echo $baris->diversity_description ?>" <?php if($baris->diversity_description == $databusiness['biz_diversity']) { echo 'selected' ;} ?> > <?php echo $baris->diversity_description ?> </option>;
            <?php }  ?>
          </select>
        </div>
      </div>
        <div class="form-group row">
          <label class="col-sm-4" for="complexity">Biz. Complexity : </label>
          <div class="col-sm-8">
          <select class="form-control" name="biz_complexity" id="biz_complexity">
          <option disabled="disabled" selected value="" required> Choose </option>
            <?php
              foreach ($complexityparent->result() as $baris) { ?>
              <option value="<?php echo $baris->complexity_description ?>" <?php if($baris->complexity_description == $databusiness['biz_complexity']){ echo 'selected' ;} ?> > <?php echo $baris->complexity_description ?></option>";
             <?php }
          ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="geo_breadth">Geo. Breadth : </label>
          <div class="col-sm-8">
          <select class="form-control" name="geo_breadth" id="geo_breadth">
          <option disabled="disabled" selected value="" required> Choose </option>
            <?php
              foreach ($geographical->result() as $baris) { ?>
              <option value="<?php echo $baris->geographical_description ?>" <?php if($baris->geographical_description == $databusiness['geo_breadth'] ) { echo 'selected';} ?> > <?php echo $baris->geographical_description ?></option>";
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
    <button type="button"   class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()" >Tutup</button>
    <input type="submit" class="btn btn-primary" name="Edit Data" value="Edit Data Business">
    </div>
    </form>
    </div> 

    <div class="form form-Subs" style="display: none;" >
      <form  method="POST" action="<?php echo base_url('Business_unit/ubahbusiness') ?>">
      <input hidden class="text" id="id" name="id" value="<?=$databusiness['id']?> ">
      <input hidden class="text" id="company_role" name="company_role" value="Subs">
      <div class="form-group row">
          <label class="col-sm-4" for="companycode">Company Code : </label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="company_code" id="company_code" value="<?=$databusiness['company_code']?> " required >
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="companyname">Company Name: </label>
          <div class="col-sm-8">
          <input type="text" class="form-control" name="company_name" id="company_name" value="<?=$databusiness['company_name']?>" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="Revenue">Revenue : </label>
          <div class="input-group col-sm-8">
          <span class="input-group-addon">$</span>
          <input type="number" class="form-control" name="revenue" id="revenue" value="<?=$databusiness['revenue']?>" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="FTE">FTE : </label>
          <div class="col-sm-8">
          <input type="number" class="form-control" name="fte" id="fte" value="<?=$databusiness['fte']?>" required>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="biz_diversity">Biz. Diversity : </label>
          <div class="col-sm-8">
          <select class="form-control" name="biz_diversity" id="biz_diversity">
            <option disabled="disabled" selected value="" required> Choose </option>
            <?php
            foreach ($biz_diversity->result() as $baris) { ?>
              <option value="<?php echo $baris->diversity_description ?>" <?php if($baris->diversity_description == $databusiness['biz_diversity']) { echo 'selected' ;} ?> > <?php echo $baris->diversity_description ?> </option>;
            <?php }  ?>
          </select>
        </div>
      </div>
        <div class="form-group row">
          <label class="col-sm-4" for="complexity">Biz. Complexity : </label>
          <div class="col-sm-8">
          <select class="form-control" name="biz_complexity" id="biz_complexity">
          <option disabled="disabled" selected value="" required> Choose </option>
            <?php
              foreach ($complexitysub->result() as $baris) { ?>
              <option value="<?php echo $baris->complexity_description ?>" <?php if($baris->complexity_description == $databusiness['biz_complexity']){ echo 'selected' ;} ?> > <?php echo $baris->complexity_description ?></option>";
             <?php }
          ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
          <label class="col-sm-4" for="geo_breadth">Geo. Breadth : </label>
          <div class="col-sm-8">
          <select class="form-control" name="geo_breadth" id="geo_breadth">
          <option disabled="disabled" selected value="" required> Choose </option>
            <?php
              foreach ($geographical->result() as $baris) { ?>
              <option value="<?php echo $baris->geographical_description ?>" <?php if($baris->geographical_description == $databusiness['geo_breadth'] ) { echo 'selected';} ?> > <?php echo $baris->geographical_description ?></option>";
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
    <button type="button"   class="btn btn-secondary" data-dismiss="modal" onclick="javascript:window.location.reload()" >Tutup</button>
    <input type="submit" class="btn btn-primary" name="Edit Data" value="Edit Data Business">
    </div>
    </form>
    </div>
 

<script type="text/javascript">
  function selectForm() {
  $("div.form").hide();
  $("div.form-" + $("input:checked").val()).show();
}
selectForm();
$("input").click(function(){selectForm()});
</script>

