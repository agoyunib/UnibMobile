$("#koderubrik").select2({
    placeholder: "- Pilih Rubrik -"
});

$("#cekDataRemun").click(function() {
    let kodeRubrik = $("#koderubrik").val();
    if (kodeRubrik) {
        $('#loader').addClass('loader');
        $('#modalDetail').modal('show');
        $("#table_rubrik").empty();
        $.ajax({
            type : 'get',
            url : "bkd/pengabdianmasyarakat/getRubrik",
            data : {
                'kodeRubrik' : kodeRubrik,
            },
            success:function(response) {
                setTimeout(function() { 
                    if (response['idRubrik'] == 'r_34') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Pengabian</td>'
                                +'<td>Lokasi</td>'
                                +'<td>Pendanaan</td>'
                            +'</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else {
                        console.log('err');
                    }
                    $('#loader').removeClass('loader');
                }, 2000);
                
                $('#modalDetail .modal-title').text('DATA RUBRIK '+response['idRubrik'].toUpperCase()+'');
                $("#kode_table").val(response['idRubrik']);
            },  
            error:function(response) {
                console.log(response);
            },
        })
    } else {
        swal.fire("Peringatan!", "Silahkan pilih rubrik terlebih dahulu!", "error");
    }
});

$("#tambahData").click(function(){
    $('#modalEdit').modal('show');
    $('#formEdit').attr('action', 'bkd/pengabdianmasyarakat/insertPengabdian');
});

$('#table').on('click','#editData',function() { 
    let idBkdPengabdian = $(this).data('idbkdpengabdian');
    $.ajax({
        url : "bkd/pengabdianmasyarakat/editPengabdian",
        type : "get",
        data : {
            'id' :  idBkdPengabdian
        },
        success:function(response){
            $('#modalEdit').modal('show');
            $('#formEdit').attr('action', 'bkd/pengabdianmasyarakat/updatePengabdian');
            $('#id').val(response.id);
            $('#nama_kegiatan').val(response.nama_kegiatan);
            $('#bukti_penugasan').val(response.bukti_penugasan);
            $('#sks').val(response.sks);
            $('#bukti_dokumen').val(response.bukti_dokumen);
            $('#sks_capaian').val(response.sks_capaian);
        }
    })
});

$('#table').on('click','#deleteData',function() { 
    let idBkdPengabdian = $(this).data('idbkdpengabdian');
    swal.fire({
        title: 'Yakin menghapus data ?',
        text: "Data yang dihapus tidak bisa dikembalikan lagi !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Kembali'
    }).then(function(confirm) {
        if (confirm.value) {
            $.ajax({
                url : "bkd/pengabdianmasyarakat/deletePengabdian/"+idBkdPengabdian,
                type : "get",
                success:function(result){
                    if (result > 0) {
                        swal.fire(
                            'Terhapus !',
                            'Data Bkd Pendidikan berhasil dihapus !',
                            'success'
                        );    
                    }
                    location.reload();
                }
            })
        }
    });
});