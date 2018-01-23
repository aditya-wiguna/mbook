<?php
    session_start();
    include '../config/include.php';
    $page = 'book';
    include 'header.php';
    
    if(is_null($_SESSION['username'])){
        header('location: login.php');
    } elseif ($_SESSION['status'] == '1'){
        header('location: index.php');
    }
?>

<main>
    <div class="container">
        <h1 class="text-blue">Buku</h1><br>
        <button id="openmodal" class="btn">Tambahkan Buku</button>
        <!-- Modal -->
        <div class="modal" id="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close">&times;</span>
                    <h2>Masukan/Update Buku</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="book-form">
                        <label for="">Judul</label>
                        <input type="text" placeholder="Judul" name="judul" id="judul"><br><br>
                        <label for="">ISBN</label>
                        <input type="text" placeholder="ISBN" name="isbn" id="isbn"><br><br>
                        <label for="">Penulis</label>
                        <input type="text" placeholder="Penulis" name="penulis" id="penulis"><br><br>
                        <label for="">Penerbit</label>
                        <input type="text" placeholder="Penerbit" name="penerbit" id="penerbit"><br><br>
                        <label for="">Tahun</label>
                        <input type="text" placeholder="Tahun" name="tahun" id="tahun"><br><br>
                        <label for="">Stok</label>
                        <input type="text" placeholder="Stok" name="stok" id="stok"><br><br>
                        <label for="">Harga Pokok</label>
                        <input type="text" placeholder="Harga Pokok" name="harga_pokok" id="harga_pokok"><br><br>
                        <label for="">Harga Jual</label>
                        <input type="text" placeholder="Harga Jual" name="harga_jual" id="harga_jual"><br><br>
                        <label for="">PPN</label>
                        <input type="text" placeholder="PPN" name="ppn" id="ppn"><br><br>
                        <label for="">Diskon</label>
                        <input type="text" placeholder="Diskon" name="diskon" id="diskon"><br><br>
                        <input type="hidden" name="action" id="action" value="">
                        <input type="hidden" name="buku_id" id="buku_id" value="">
                        <button class="btn" id="btn_submit_book">Simpan</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <h3></h3>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <!-- Table -->
        <table id="table-responsive">
            
        </table>
    </div>
</main>

<?php
    include 'footer.php';
?>