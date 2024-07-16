<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="<?= BASEURL ?>Mahasiswa/store">
            <fieldset >
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input class="form-control" name="nama" type="text" >
                </div>
                <div class="form-group">
                    <label for="">NIM</label>
                    <input class="form-control" name="nim" type="text" >
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select id="" class="form-control" name="jurusan">
                        <option>Pilih jurusan</option>
                        <option value="informatika">Informatika</option>
                        <option value="elektro">Elektro</option>
                    </select>
                </div>
                <div class="checkbox">
                    <label>
                        
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </fieldset>
        </form>
    </div>
</div>