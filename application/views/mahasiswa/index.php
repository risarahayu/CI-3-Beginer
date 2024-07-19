<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <?=$title?> <?= PAR2?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <!-- <a href="<?=BASEURL?>Mahasiswa/tambah" class="btn btn-primary" style="margin-bottom:5px;" type="button" >Add data</a> -->
                                    <a href="#" class="btn btn-primary" style="margin-bottom:5px;" type="button" data-toggle="modal" id="inputData" data-target="#myModal">Add data</a>
                                    <div class="table-responsive">
                                        <table class="display"id="example" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th >No.</th>
                                                    <th >Nama Mahasiswa</th>
                                                    <th >NIM</th>
                                                    <th >Jurusan</th>
                                                    <th >Ubah</th>
                                                    <th >Hapus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no=0;
                                                foreach($mahasiswa as $row):
                                                    $no++;
                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td ><?= $no?></td>
                                                        <td ><?= $row['nama'] ?></td>
                                                        <td ><?= $row['nim']?></td>
                                                        <td ><?= $row['jurusan'] ?></td>
                                                        <!-- pada ssat diklik, id akan dikirimkan  ke form melalui jquery-->
                                                        <td ><a href="#" onclick="ubah('<?= $row['id'] ?>')" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a></td>
                                                        <td ><a href="<?= BASEURL ?>Mahasiswa/delete/<?= $row['id']?>" onclick="return confirm('Yakin?')"><i class="fa fa-trash" style="color:red;"></i></a></td>
                                                    </tr>
                                                <?php
                                                    endforeach
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <div class="well">
                                        <h4>DataTables Usage Information</h4>
                                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <script>
                        $('#inputData').on('click', function(){
                            // mengubah judul
                            // nah sampe sini sebenarnya sudah bisa mengubah data yg ada di dalam modalnya
                            // tp tidak mungkin mengubah 'input data' dengan kode formulir
                            $('.modal-title').html('Input Data');
                            // url untuk menampung form input
                            let url='<?=BASEURL?>Mahasiswa/tambahModal';
                            // mealkukan permintaan ke server dengan method post menggunakan url tertentu
                            $.post(url,{
                                // tidak mengirimkan apa apa ke server
                            },
                            function(data){
                                // menampung apa yg dikembalikan oleh server yang ditampung oleh data
                                // ambil semua yg ada di class modal-body, lalu ganti semua yg ada di dalamnya dengan data
                                $('.modal-body').html(data);
                            });
                        });

                        function ubah(a){
                            // cek apakah id sudah diambil
                            // alert(a);

                            // buat ajax
                            let url = '<?= BASEURL ?>/Mahasiswa/ubahModal';
                            // mengirimkan variabel a menggunakan methodpost
                            $.post(url,{
                                // id adalah varibale baru di ajax dengan isinya adalah a berupa array ke form ubah data
                                id:a
                                // lalu 'data' akan menangkap id tersebut
                            }, function(data){
                                $('.modal-title').html('Ubah Data');
                                $('.modal-body').html(data);
                            })
                        }
                    </script>
                    <script>
                        new DataTable('#example');
                    </script>
                    