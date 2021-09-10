<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Hotel</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Hotel</li>
               </ol>
            </div>
         </div>
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-hotel"></i></span>
               </div>
               <input type="text" class="form-control" placeholder="cari hotel...">
            </div>
         </div>
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahHotel">Tambah Data Hotel</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Hotel</th>
                   <th scope="col">Keterangan</th>
                   <th scope="col">Gambar</th>
                   <th scope="col" class="text-center" colspan="2">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Hotel Nekopoi</td>
                     <td>Nekopoi Hotels Surabaya adalah hotel bintang empat dengan sentuhan nuansa Jawa, cocok untuk perjalanan bisnis maupun liburan di Surabaya.</td>
                     <td><img src="<?= base_url('assets/img/lihat.jpg')?>" class="w-50"></td>
                     <td><button class="btn btn-warning btn-sm">Edit</button></td>
                     <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                  </tr>    
               </tbody>
             </table>
         </div>
      </div>
      <!-- modal tambah data travel-->
      <div class="modal fade" id="modalTambahHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Masukan Hotel Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form action="" method="POST">
                  <div class="form-group">
                     <input name="nama_travel" type="text" class="form-control" placeholder="Nama Hotel">
                  </div>
                  <div class="form-group">
                      <input name="keterangan" style="height: 100px;" type="text" class="form-control" placeholder="Keterangan">
                  </div>
                  <div class="form-group">
                     <div>
                        <label for="gambarHotel">Gambar Hotel</label>
                     </div>
                     <input name="gambar" type="file" id="gambarHotel">
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               </form>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
