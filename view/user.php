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
        <!-- Modal -->
        <div class="modal" id="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close" id="close">&times;</span>
                    <h2>Update Users</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="distributor-form">
                        <label for="">Nama</label>
                        <input type="text" placeholder="Nama" name="nama" id="nama"><br><br>
                        <label for="">Alamat</label>
                        <input type="text" placeholder="Alamat" name="alamat" id="alamat"><br><br>
                        <label for="">No Telephone</label>
                        <input type="text" placeholder="Telephone" name="telephone" id="telephone" onkeypress='return event.charCode >= 48 && event.charCode <= 57'><br><br>
                        <input type="hidden" name="action" id="action">
                        <input type="hidden" name="distributor_id" id="distributor_id" value="">
                        <button class="btn" id="btn_submit_distributor">Simpan</button>
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