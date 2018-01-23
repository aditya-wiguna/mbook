<?php
    session_start();
    include '../config/include.php';
    $page = 'user';
    include 'header.php';
    
    if(is_null($_SESSION['username'])){
        header('location: login.php');
    } elseif ($_SESSION['status'] == '1'){
        header('location: index.php');
    }
?>

<main>
    <div class="container">
        <h1 class="text-blue">Users</h1><br>
        <button id="openmodal" class="btn">Tambahkan User</button>
        <!-- Modal -->
        <div class="modal" id="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close">&times;</span>
                    <h2>Masukan/Update Buku</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="user-form">
                        <label for="">Username</label>
                        <input type="text" placeholder="Username" name="username" id="username"><br><br>
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password" id="password"><br><br>
                        <label for="akses">Akses</label><br>
                        <select name="akses" id="akses">
                            <option value="1">Kasir</option>
                            <option value="2">Distributor</option>
                        </select><br><br>
                        <label for="">Nama</label>
                        <input type="text" placeholder="Nama" name="nama" id="nama"><br><br>
                        <label for="">Alamat</label>
                        <input type="text" placeholder="Alamat" name="alamat" id="alamat"><br><br>
                        <label for="">Telepon</label>
                        <input type="text" placeholder="Telepon" name="telepon" id="telepon"><br><br>

                        <input type="hidden" name="action" id="action" value="">
                        <input type="hidden" name="kasir_username" id="kasir_username" value="">
                        <button class="btn" id="btn_submit_user">Simpan</button>
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