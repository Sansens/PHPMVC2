$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#jns_kel').val('');
        $('#tinggi').val('');
        $('#asal_sekolah').val('');
        $('#komli').val('');
        $('#nilai_un').val('');
        $('#nis').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/datasiswa/ubah');

        const nis = $(this).data('nis');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/datasiswa/getubah',
            data: {nis : nis},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#jns_kel').val(data.jns_kel);
                $('#tinggi').val(data.tinggi);
                $('#asal_sekolah').val(data.asal_sekolah);
                $('#komli').val(data.komli);
                $('#nilai_un').val(data.nilai_un);
                $('#nis').val(data.nis);
            }
        });
        
    });

});