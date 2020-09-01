
<form id="formubahdatapassword" method="post">
        <div class="form-group row">

            <label ondragstart="return false;" for="inputnama_user" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-6">
            <input type="password" class="form-control" id="editpassword" value="<?=$dataperakun['password']?>" placeholder="Nama Pengguna" required>
            <input type="hidden" name="id" id="iduser" value="<?=$dataperakun['id']?>">

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Ganti Password</button>
        </div>
</form>
