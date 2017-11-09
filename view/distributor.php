<?php
    session_start();
    include '../config/include.php';
    $page = 'distributor';
    include 'header.php';
    
    if(is_null($_SESSION['username'])){
        header('location: login.php');
    } elseif ($_SESSION['status'] == '1'){
        header('location: index.php');
    }
?>

<main>
    <div class="container">
        <h1 class="text-blue">Distributor</h1><br>
        <button id="openmodal" class="btn">Tambahkan Distributor</button>
        <!-- Modal -->
        <div class="modal" id="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close">&times;</span>
                    <h2>Masukan/Update Distributor</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="book-form">
                        <label for="">Judul</label>
                        <input type="text" placeholder="Judul" name="judul" id="judul"><br><br>
                        <input type="hidden" name="buku_id" id="buku_id" value="">
                        <button class="btn" id="btn_submit_book">Simpan</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <h3>Footer</h3>
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