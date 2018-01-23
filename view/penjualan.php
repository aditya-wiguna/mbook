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
        <h1 class="text-blue">Penjualan</h1><br>
        <form action="" method="" id="">
            <div class="col-4">
                <label>Buku</label><br>
                <select name="buku" id="buku">
                    <option value="">Pemrograman PHP</option>
                </select>
            </div>
            <div class="col-1">
                <label>Jumlah</label>
                <input type="text" name="" id="jumlah">
            </div>
            <div class="col-3">
                <label>Total Harga</label>
                <input type="text" name="total" id="total" disabled>
            </div>
            <div class="col-3">
                <button type="submit" class="btn" id="btn_tambah_keranjang">Tambahkan</button>
            </div>
        </form><br><br>

        <!-- Table -->
        <table id="table-responsive">
            
        </table>
    </div>
</main>

<?php
    include 'footer.php';
?>