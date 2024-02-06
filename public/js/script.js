$(function() {
    $('.tambahData').on('click', function(){
        $('#labelModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data'); // Perbaikan di sini
        //
        $('#nimmhs').val('');
        $('#namamhs').val('');
        $('#tlahir').val('');
        $('#prodi').val('');
    });

    $('.tampilModalEdit').on('click', function(){
        $('#labelModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update Data'); // Perbaikan di sini
        //
        $('.modal-body form').attr('action', 'http://localhost/thoriq_prakt/public/mahasiswa/ubah');
        
        const nim = $(this).data('nim');
        $.ajax({
            url: 'http://localhost/thoriq_prakt/public/mahasiswa/EditMhs',
            data: { nim: nim }, // Perbaikan di sini
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nimmhs').val(data.nim);
                $('#namamhs').val(data.nama);
                $('#tlahir').val(data.tempatlahir);
                $('#prodi').val(data.prodi);
                $('#nim').val(data.nim);
            }
        });
    });
});
