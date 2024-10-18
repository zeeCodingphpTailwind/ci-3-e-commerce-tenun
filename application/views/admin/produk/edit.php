<div class="container">
    <?php
    if (!empty($this->session->flashdata('Pesan'))) :
    ?>
        <div class="alert alert-danger mt-5 " role=alert>
            <?= $this->session->flashdata('Pesan'); ?>
        </div>
    <?php
    endif;
    ?>
    <form class="mt-2" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="gambarlama" value="<?= $produk['gambar']; ?>">
        <div class="form-group col-lg-4">
            <label for="namaproduk">Nama Produk</label>
            <input value="<?= $produk['namaproduk']; ?>" name="namaproduk" type="text" class="form-control" id="namaproduk">
            <?= form_error('namaproduk', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="exampleFormControlSelect1">Kategori</label>
            <select name="idkategori" class="form-control" id="exampleFormControlSelect1">
                <?php
                foreach ($kategori as $k) :
                ?>
                    <?php if ($k['idkategori'] == $produk['idkategori']) : ?>

                        <option value="<?= $k['idkategori']; ?>" selected><?= $k['namakategori']; ?></option>
                    <?php
                    endif;
                    ?>
                    <option value="<?= $k['idkategori']; ?>"><?= $k['namakategori']; ?></option>
                <?php
                endforeach;
                ?>
            </select>
        </div>

        <div class="form-group col-lg-4">
            <label for="deskripsi">Deskripsi</label>
            <br>
            <textarea name="deskripsi" id="deskripsi" cols="50" rows="10"><?= $produk['deskripsi']; ?></textarea>
            <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="rate">Stok</label>
            <input value="<?= $produk['rate']; ?>" name="rate" type="number" class="form-control" id="rate">
            <?= form_error('rate', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="hargasebelumdiskon">Harga Sebelum Diskon</label>
            <input value="<?= $produk['hargabefore']; ?>" name="hargasebelumdiskon" type="number" class="form-control" id="hargasebelumdiskon">
            <?= form_error('hargasebelumdiskon', '<small class="text-danger">', '</small>') ?>
        </div>
        <div class="form-group col-lg-4">
            <label for="hargasesudahdiskon">Harga Sesudah Diskon</label>
            <input value="<?= $produk['hargaafter']; ?>" name="hargasesudahdiskon" type="number" class="form-control" id="hargasesudahdiskon">
        </div>
        <img src="<?= base_url(); ?>assets/produk/<?= $produk['gambar']; ?>" alt="" width="100">
        <div class="input-group mb-3 col-lg-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Gambar</span>
            </div>
            <div class="custom-file">
                <input name="gambar" type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Ganti Dengan</label>
            </div>
        </div>

        <a href="<?= base_url(); ?>Produk" class="btn btn-warning">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
</div>