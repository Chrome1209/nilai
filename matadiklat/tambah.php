<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>modul mata_diklat</h1>
        </div>
        <div class="col-4">
            <a href="?m=matadiklat&s=tampil" class="btn btn-large btn-info float-end" style="float: end;"> kembali </a>
        </div>
        <div class="col">
        <form action="?m=matadiklat&s=simpan" method="post">
            <div class="mb-2">
                <label for="">mata diklat</label>
                <input type="text" name="matadiklat" class="form-control" required autofocus>
            </div>
            <div class="mb-2">
                <label for="">sks</label>
                <input type="number" name="sks" class="form-control" required>
            </div>
            <div class="mb-2">
                <input type="reset"class="btn btn-warning">
                <input type="submit" name="simpan" class="btn btn-primary">
            </div>          
        </form>
        </div>
    </div>
</section>