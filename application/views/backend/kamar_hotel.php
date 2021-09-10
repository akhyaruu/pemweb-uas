<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0 text-dark">Daftar Kamar Hotel</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item active">Daftar Kamar Hotel</li>
               </ol>
            </div>
         </div>
         <div class="content mt-4">
            <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="basic-addon1"><i class="fas fa-hotel"></i></span>
               </div>
               <input type="text" class="form-control" placeholder="cari kamar...">
            </div>
         </div>
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#modalTambahHotel">Tambah Data Kamar</button>
         <div class="content mt-2">
            <table class="table">
               <thead class="thead-dark">
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Nama Kamar</th>
                   <th scope="col">Fasilitas</th>
                   <th scope="col">Harga</th>
                   <th scope="col" class="text-center">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">1</th>
                     <td>Kamar R12</td>
                     <td>memiliki sound effect yang kuat dan warna ygapi sound system yg baguss</td>
                     <td>Rp. 8000000</td>
                     <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                     </td>
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
              <h5 class="modal-title" id="exampleModalLabel">Masukan Kamar Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               <form action="" method="POST">
                  <div class="form-group">
                     <input name="nama_kamar" type="text" class="form-control" placeholder="Nama Kamar">
                  </div>
                  <div class="form-group">
                      <input name="fasilitas" style="height: 100px;" type="text" class="form-control" placeholder="Fasilitas">
                  </div>
                  <div class="form-group">
                     <input name="harga" type="text" class="form-control" placeholder="Harga">
                  </div>
                  <label for="hotel">Pilih Hotel</label>
                  <div class="form-group">
                     <select name="cars" id="hotel">
                        <option value="volvo">Hotel A</option>
                        <option value="volvo">Hotel B</option>
                        <option value="volvo">Hotel C</option>
                     </select>
                  </div>
                  <input type="hidden" name="id_hotel">
                  <button type="submit" class="btn btn-primary float-right">Tambahkan Data</button>
               </form>
            </div>
          </div>
        </div>
      </div>
      

   </div>
</div>
