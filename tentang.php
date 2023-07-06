<?php
include 'header_footer/header.php' ;
?>

<script src="JavaScript/main.js"></script>
<section id=avatar>
    <div class="container mt-5 mb-5">
        <h3 class="text-center font-weight-bold mb-5">Anggota kelompok 4</h3>
        <div class="text-center">
            <div class="row">
                <div class="col">
                    <img src="images/kelompok/aing.jpg" class="img-circle" style="width: 150px;height: 150px;" alt="" onclick="hello1()">
                </div>

                <div class="col">
                    <img src="images/kelompok/dika.jpg" class="img-circle" style="width: 150px;height: 150px;" alt="" onclick="hello2()">
                </div>

                <div class="col">
                    <img src="images/kelompok/cici.jpg" class="img-circle" style="width: 150px;height: 150px;" alt="" onclick="hello3()">
                </div>

                <div class="col">
                    <img src="images/kelompok/fadian.jpg" class="img-circle" style="width: 150px;height: 150px;" alt="" onclick="hello4()">
                </div>

                <div class="col">
                    <img src="images/kelompok/bagus.jpg" class="img-circle" style="width: 150px;height: 150px;" alt="" onclick="hello5()">
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="text-center mt-3 mb-5 ">
            <p style="color: black;font-size:20px;" class="mb-3">
                Website Kota Tangerang dibuat oleh Kelompok 4 sebagai tugas UAS mata kuliah Web Programming. Dalam pengembangannya, kelompok ini memilih menggunakan framework Bootstrap.
                Penggunaan Bootstrap dalam pembuatan website ini memberikan kepraktisan, efisiensi, dan tampilan yang responsif. Framework ini menyediakan komponen-komponen siap pakai
                seperti navbar, grid system, carousel, forms, dan cards. Dengan menggunakan komponen-komponen ini, website Kota Tangerang dapat memiliki tampilan yang menarik dan konsisten di berbagai perangkat.
            </p>
            <p style="color: black;font-size:20px;">
                Dengan demikian, website Kota Tangerang yang dibuat oleh Kelompok 4 dengan menggunakan Bootstrap tidak hanya memenuhi tugas UAS mata kuliah Web Programming,
                tetapi juga memperkenalkan Kota Tangerang secara informatif dan menarik kepada pengunjung website.
            </p>
        </div>
    </div>
</section>

<section id="kritik-form">
    <div class="text-center">
        <form action="database.php" methode="GET">
            <h1 class="mb-5">FORM KRITIK DAN SARAN</h1>
            <div class="form-group text-center">
                <div id="input-name" class="input-group">
                    <label for="name">Nama</label>
                    <input type="text" placeholder="Nama" name="nama">
                </div>

                <div id="input-subject" class="input-group">
                    <label for="name">subjek</label>
                    <input type="text" placeholder="Subjek"name="subjek">
                </div>

                <div id="input-email" class="input-group">
                    <label for="name">Email</label>
                    <input type="email" placeholder="Email"name="email">
                </div>

                <div id="input-phone" class="input-group">
                    <label for="name">Nomor telepon</label>
                    <input type="tel" placeholder="Nomor telepon"name="phone">
                </div>

                <div id="input-massage" class="input-group">
                    <label for="name">Kritik/saran</label>
                    <input type="text" placeholder="Kritik/saran"name="kritik">
                </div>
            </div>

            <button type="button" class="btn btn-succes" data-toggle="modal" data-target="#exampleModalCenter">
            send massage
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Simpan kritik dan saran </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah data sudah benar ?
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-succes" data-dismiss="modal">salah</button>
                    <button type="submit" class="btn btn-succes">benar</button>
                </div>
                </div>
            </div>
            </div>
        </form>
    </div>
    <div class="text-center mt-3">
        <a href="tampildata.php">
            <button class="btn btn text-center " style="background-color :rgb(86,180,71);color:white; ">Kolom kritik dan saran</button>
        </a>
    </div>

</section>


<?php
include 'header_footer/footer.php' ;
?>
