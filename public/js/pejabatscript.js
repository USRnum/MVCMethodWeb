$(function() {
    $('.tambahDataP').on('click', function(){
        $('#labelModal').html('Tambah Data Pejabat');
        $('.modal-footer button[type=submit]').html('Tambah Data'); // Perbaikan di sini
        //
        $('#idpjb').val('');
        $('#namapjb').val('');
        $('#username').val('');
        $('#password').val('');
        $('#level').val('');
        $('#email').val('');
    });

    $('.tampilModalEditP').on('click', function(){
        $('#labelModal').html('Ubah Data Pejabat');
        $('.modal-footer button[type=submit]').html('Update Data'); // Perbaikan di sini
        //
        $('.modal-body form').attr('action', 'http://localhost/thoriq_prakt/public/pejabat/ubah');
        
        const idpejabat = $(this).data('idpejabat');
        $.ajax({
            url: 'http://localhost/thoriq_prakt/public/pejabat/EditPjb',
            data: { idpejabat: idpejabat }, // Perbaikan di sini
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#idpjb').val(data.idpejabat);
                $('#namapjb').val(data.namapejabat);
                $('#username').val(data.username);
                $('#level').val(data.level);
                $('#email').val(data.email);
                $('#idpejabat').val(data.idpejabat);
            }
        });
    });
});
