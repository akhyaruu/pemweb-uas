<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar User</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar User</li>
               </ol>
            </div>
         </div>
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-user-friends"></i></span>
               </div>
               <input type="text" class="form-control" placeholder="cari user...">
            </div>
         </div>
         <div class="content mt-4">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama</th>
                   <th scope="col">Email</th>
                   <th scope="col">No. Telp</th>
                   <th scope="col">Jenis Kelamin</th>
                   <th scope="col">Gambar</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Alvian Ababil</td>
                     <td>alvian@gmail.com</td>
                     <td>08223332112</td>
                     <td>L</td>
                     <td>{{ $user->no_telp }}</td>
                     <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm" value="{{ $user->id }}"  data-toggle="modal" data-target="#modalKonfirmasiHapus">Hapus User</button>
                     </td>
                  </tr>
               </tbody>
             </table>
         </div>
      </div>
      <!-- modal -->
      <div class="modal fade" id="modalKonfirmasiHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Apakah kamu yakin untuk menghapus user ini?  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <form action="" method="POST">
                  <input type="text" id="inputuser" name="id_user" value="" hidden>
                  <button type="submit" class="btn btn-primary">Ya, hapus user</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
