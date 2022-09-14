<style>
    body {
        background-color: #eee;
    }

    .title {

        margin-bottom: 50px;
        text-transform: uppercase;
    }

    .card-block {
        font-size: 1em;
        position: relative;
        margin: 0;
        padding: 1em;
        border: none;
        border-top: 1px solid rgba(34, 36, 38, .1);
        box-shadow: none;

    }

    .card {
        font-size: 1em;
        overflow: hidden;
        padding: 5;
        border: none;
        border-radius: .28571429rem;
        box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
        margin-top: 20px;
    }

    .btn {
        margin-top: auto;
    }

    h3 {
        text-align: center;
    }
</style>
<div class="container">
    <div class="card col-12">
        <br>
        <div class="row">
            <div class="col-sm-5">
                <img class="d-block w-100" src="<?= $data['kompetensi']['pictures']; ?>" alt="">
            </div>
            <div class="col-sm-7">
                <div class="card-block">
                    <h4 class="card-title"><?= $data['kompetensi']['nama']; ?></h4>
                    <p><?= $data['kompetensi']['artikel']; ?></p>
                    <a href="<?= BASEURL; ?>/komli" class="btn btn-info">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>