<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Travel Umrah</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Travel Umrah</li>
               </ol>
            </div>
         </div>
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-kaaba"></i></span>
               </div>
               <input id="cari-travel-id" type="text" class="form-control" placeholder="cari travel...">
            </div>
         </div>
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahTravel">Tambah Data Travel</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Travel</th>
                   <th scope="col">Email</th>
                   <th scope="col">No. Telp</th>
                   <th scope="col">Link</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Haji Umrah</td>
                     <td>hajiumrah@gmail.com</td>
                     <td>08223332112</td>
                     <td>google.com</td>
                     <td>
                        <button class="btn btn-primary btn-sm">Detail</button>
                        <button class="btn btn-warning btn-sm ">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus Travel</button>
                     </td>
                  </tr>
               </tbody>
             </table>
         </div>
      </div>
      <!-- modal tambah data travel-->
      <div class="modal fade" id="modalTambahTravel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Masukan Data Travel Umrah Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form action="" method="POST">
                  <div class="form-group">
                     <input name="nama_travel" type="text" class="form-control" placeholder="Nama Travel">
                  </div>
                  <div class="form-group">
                      <input name="keterangan" style="height: 100px;" type="text" class="form-control" placeholder="Keterangan">
                  </div>
                  <div class="form-group">
                     <input name="no_telp" type="number" class="form-control" placeholder="No. Telp">
                  </div>
                  <div class="form-group">
                     <input name="email" type="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input name="alamat" type="text" class="form-control" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                     <div>
                        <label for="gambarTravel">Gambar Travel</label>
                     </div>
                     <input name="gambar" type="file" id="gambarTravel">
                  </div>
                  <div class="form-group">
                     <input name="link_wa" type="text" class="form-control" placeholder="Link WA">
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               </form>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
