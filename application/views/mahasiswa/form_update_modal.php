<?php foreach($ubah as $row): ?>
<div class="row">
    <div class="col-lg-12">
        <form role="form" method="post" action="<?= BASEURL ?>Mahasiswa/update">
            <input type="hidden" value="<?= $row->id?>" name="id">
            <fieldset >
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input class="form-control" name="nama" type="text"  value="<?= $row->nama?>" >
                </div>
                <div class="form-group">
                    <label for="">NIM</label>
                    <input class="form-control" name="nim" type="text" value="<?= $row->nim?>">
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select id="" class="form-control" name="jurusan">
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
        </form>
    </div>
</div>
<?php endforeach; ?>