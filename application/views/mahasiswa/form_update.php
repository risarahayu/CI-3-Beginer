<div class="row">
    <div class="col-lg-6">
        <form role="form" method="post" action="<?= BASEURL ?>Mahasiswa/update/">
            <?php 
                foreach($ubah as $row):
            ?>
            <input type="hidden" value="<?= $row->id?>" name="id">
            <fieldset >
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input class="form-control" name="nama" type="text"  value="<?= $row->nama?>">
                </div>
                <div class="form-group">
                    <label for="">NIM</label>
                    <input class="form-control" name="nim" type="text" value="<?= $row->nim?>">
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select id="" class="form-control" name="jurusan" >
                        <option value="<?= $row->jurusan ?>"><?= $row->jurusan ?></option>
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
            <?php 
                endforeach;
            ?>
        </form>
    </div>
</div>