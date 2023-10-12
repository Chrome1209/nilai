<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info float-end" style="float: end;"> kembali </a>
        </div>
        <div class="col">
        <form action="?m=siswa&s=simpan" method="post">
            <div class="mb-2">
                <label for="">no induk santri</label>
                <input type="number" name="santri" class="form-control" required autofocus>
            </div>
            <div class="mb-2">
                <label for="">nama santri</label>
                <input type="text" name="kapasitas" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">jenis kelamin</div></label>&nbsp;
                <input type="radio" name="jk" value="L" checked >laki-laki &nbsp;
                <input type="radio" name="jk" value="P">perempuan
            </div>
            <div class="mb-2">
                <input type="reset"class="btn btn-warning">
                <input type="submit" name="simpan" class="btn btn-primary">
            </div>          
        </form>
        </div>
    </div>
</section>