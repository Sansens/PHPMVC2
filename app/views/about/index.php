<style>
    body {
        color: #6F8BA4;
        margin-top: 20px;
    }

    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg {
        background-color: #f5f5f5;
    }

    img {
        width: 300px;
        margin-left: 73px;
        max-width: 100%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    /* About Me 
---------------------*/
    .about-text h3 {
        font-size: 45px;
        font-weight: 700;
        margin: 0 0 6px;
    }

    @media (max-width: 767px) {
        .about-text h3 {
            font-size: 35px;
        }
    }

    .about-text h6 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .about-text h6 {
            font-size: 18px;
        }
    }

    .about-text p {
        font-size: 18px;
        max-width: 450px;
    }

    .about-list {
        padding-top: 10px;
    }

    .about-list .media {
        padding: 5px 0;
    }

    .about-list label {
        color: #20247b;
        font-weight: 600;
        width: 88px;
        margin: 0;
        position: relative;
    }

    .about-list label:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 11px;
        width: 1px;
        height: 12px;
        background: #20247b;
        -moz-transform: rotate(15deg);
        -o-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        margin: auto;
        opacity: 0.5;
    }

    .about-list p {
        margin: 0;
        font-size: 15px;
    }

    @media (max-width: 991px) {
        .about-avatar {
            margin-top: 30px;
        }
    }
</style>
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">About Me</h3>
                    <h6 class="theme-color lead"><?= $data['nama']; ?></h6>
                    <h6 class="theme-color lead"><?= $data['pekerjaan']; ?></h6>
                    <p>Saya seorang pelajar jurusan Rekayasa Perangkat Lunak SMK Negeri 2 Trenggalek, saya sekarang kelas XII.</p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Birthday</label>
                                <p>25 Juli 2005</p>
                            </div>
                            <div class="media">
                                <label>Age</label>
                                <p><?= $data['umur']; ?></p>
                            </div>
                            <div class="media">
                                <label>Address</label>
                                <p>Dongko, Trenggalek</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>uk4856607@gmail.com</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>0813-3287-8907</p>
                            </div>
                            <div class="media">
                                <label>Instagram</label>
                                <p>@uswaw_</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="<?= BASEURL; ?>/img/ai.png" title="" alt="">
                </div>
            </div>
        </div>

    </div>
</section>