var modal = document.getElementById('modal');
var btn_book = document.getElementById('openmodal');
var close = document.getElementById('close');

function openModal(){
    modal.style.display = 'block';
}

function closeModal(){
    modal.style.display = 'none';
}

window.onclick = function(){
    if(event.target == modal){
        modal.style.display = 'none';
    }
}

// btn_book.onclick = function(){
//     openModal();
//     $('#book-form')[0].reset();
//     $('#action').val('insert buku');
//     $('#buku_id').val('');
// }

close.onclick = function(){
    closeModal();
}

/*----------------------Validasi------------------------*/