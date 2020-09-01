      <!-- Modal untuk tambah data Akun -->
<div class="modal fade" id="tambahakun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="formtambahdataakun">
        <div class="form-group row">
            <label ondragstart="return false;" for="inputnama_user" class="col-sm-4 col-form-label">Nama Pengguna</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="nama_user" placeholder="Nama Pengguna" required>
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputusername" class="col-sm-4 col-form-label">Username</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputPassword" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-6">
            <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group row">
            <label ondragstart="return false;" for="inputuser_level" class="col-sm-4 col-form-label">Role</label>
            <div class="col-sm-6">
            <select name="level" id="user_level" class="form-control" required>
                                <option value="" disabled="" selected="">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
            </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data Pengguna</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal untuk edit data akun -->
<div class="modal fade" id="editakun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 ondragstart="return false;" class="modal-title" id="exampleModalLabel">Edit Data Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="formdataakun">

       </div>
    </div>
  </div>
</div>
<script>
      $(document).ready(function () {
        // ini adalah fungsi untuk mengambil data akun dan di include ke dalam datatable
          var Akun = $('#Akun').DataTable({
                  "ajax": "<?=base_url("Dataakun/Akun")?>",
                  stateSave: true,
                  "order": []
          })

           // fungsi untuk menambah data
          // pilih selector dari yang id formtambahdataakun
          $('#formtambahdataakun').on('submit', function () {
            var nama_user = $('#nama_user').val(); // diambil dari id nama_user yang ada diform modal
            var username = $('#username').val(); // diambil dari id username yang ada di form modal
            var password = $('#password').val(); // diambil dari id password yang ada di form modal
            var user_level = $('#user_level').val(); // diambil dari id user_level yang ada di form modal

            $.ajax({
              type: "post",
              url: "<?=base_url('Dataakun/tambahakun')?>",
              beforeSend :function () {
                swal({
                    title: 'Menunggu',
                    html: 'Memproses data',
                    onOpen: () => {
                      swal.showLoading()
                    }
                  })
                },
              data: {nama_user:nama_user,username:username,password:password,user_level:user_level}, // ambil datanya dari form yang ada di variabel
              dataType: "JSON",
              success: function (data) {
                Akun.ajax.reload(null,false);
                swal({
                    type: 'success',
                    title: 'Tambah Akun',
                    text: 'Anda Berhasil Menambah Akun'
                  })
                  // bersihkan form pada modal
                  $('#tambahakun').modal('hide');
                  // tutup modal
                  $('#nama_user').val('');
                  $('#username').val('');
                  $('#password').val('');
                  $('#user_level').val('');
                  $(".modal-backdrop").remove();

              }
            })
            return false;
          });
          // fungsi untuk edit data
          //pilih selector dari table id Akun dengan class .ubah-akun
          $('#Akun').on('click','.ubah-akun', function () {
            // ambil element id pada saat klik ubah
            var id =  $(this).data('id');

            $.ajax({
              type: "post",
              url: "<?=base_url('Dataakun/formedit')?>",
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
                $('#editakun').modal('show');
                $('#formdataakun').html(data);

                // proses untuk mengubah data
                $('#formubahdataakun').on('submit', function () {
                    var editnama_user = $('#editnama_user').val(); // diambil dari id nama yang ada diform modal
                    var editusername = $('#editusername').val(); // diambil dari id username yang ada di form modal
                    var edituser_level = $('#edituser_level').val(); // diambil dari id user_level yang ada di form modal
                    var id = $('#iduser').val(); //diambil dari id yang ada di form modal
                    $.ajax({
                      type: "post",
                      url: "<?=base_url('Dataakun/ubahakun')?>",
                      beforeSend :function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                              swal.showLoading()
                            }
                          })
                        },
                      data: {editnama_user:editnama_user,editusername:editusername,edituser_level:edituser_level,id:id}, // ambil datanya dari form yang ada di variabel

                      success: function (data) {
                        Akun.ajax.reload(null,false);
                        swal({
                            type: 'success',
                            title: 'Update Akun',
                            text: 'Anda Berhasil Mengubah Data Akun'
                          })
                          // bersihkan form pada modal
                          $('#editakun').modal('hide');
                      }
                    })
                    return false;
                  });
              }
            });
          });

          $('#Akun').on('click','.ubah-password', function () {
            // ambil element id pada saat klik ubah
            var id =  $(this).data('id');

            $.ajax({
              type: "post",
              url: "<?=base_url('Dataakun/formeditpassword')?>",
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
                $('#editakun').modal('show');
                $('#formdataakun').html(data);

                // proses untuk mengubah data
                $('#formubahdatapassword').on('submit', function () {
                    var editpassword = $('#editpassword').val(); // diambil dari id password yang ada di form modal
                    var id = $('#iduser').val(); //diambil dari id yang ada di form modal
                    $.ajax({
                      type: "post",
                      url: "<?=base_url('Dataakun/ubahpassword')?>",
                      beforeSend :function () {
                        swal({
                            title: 'Menunggu',
                            html: 'Memproses data',
                            onOpen: () => {
                              swal.showLoading()
                            }
                          })
                        },
                      data: {editpassword:editpassword,id:id}, // ambil datanya dari form yang ada di variabel

                      success: function (data) {
                        Akun.ajax.reload(null,false);
                        swal({
                            type: 'success',
                            title: 'Update Akun',
                            text: 'Anda Berhasil Mengubah Data Akun'
                          })
                          // bersihkan form pada modal
                          $('#editakun').modal('hide');
                      }
                    })
                    return false;
                  });
              }
            });
          });
          // fungsi untuk hapus data
          //pilih selector dari table id Akun dengan class .hapus-akun
          $('#Akun').on('click','.hapus-akun', function () {
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
                    url:"<?=base_url('Dataakun/hapusakun')?>",
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
                      Akun.ajax.reload(null, false)
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
