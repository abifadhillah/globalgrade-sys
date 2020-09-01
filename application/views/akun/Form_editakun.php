<form id="formubahdataakun" method="post">
        <div class="form-group row">

            <label ondragstart="return false;" for="inputnama_user" class="col-sm-4 col-form-label">Nama Pengguna</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editnama_user" value="<?=$dataperakun['nama_user']?>" placeholder="Nama Pengguna" required>
            <input type="hidden" name="id" id="iduser" value="<?=$dataperakun['id']?>">

            </div>
        </div>
         <div class="form-group row">
            <label ondragstart="return false;" for="inputusername" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="editusername" value="<?=$dataperakun['username']?>" placeholder="Username" required>
            </div>
        </div>
        <div class="row form-group">
          <label ondragstart="return false;" for="edituser_level" class="col-sm-4 col-form-label">Role</label>
            <div class="col col-sm-6">
                    <select required name="edituser_level" id="edituser_level" class="form-control">
                        <option value="admin" <?php if($dataperakun['user_level']=='admin') {echo 'selected';} ?> >Admin</option>
                        <option value="user" <?php if($dataperakun['user_level']=='user') {echo 'selected';} ?> >User</option>
                    </select>
                </div>
            </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Ubah Data Akun</button>
      </div>
</form>
