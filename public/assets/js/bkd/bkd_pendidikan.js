$('#koderubrik').select2({
    placeholder: "- Pilih Rubrik -"
});

$("#cekDataRemun").click(function() {
    let kodeRubrik = $("#koderubrik").val();
    if (kodeRubrik) {
        $('#loader').addClass('loader');
        $('#modalDetail').modal('show');
        $("#table_rubrik").empty();
        $.ajax({
            type : "get",
            // url : "{{ route('bkd.rubrikPendidikanGet') }}",
            url : "bkd/pendidikan/getRubrik",
            data : {
                "kodeRubrik" : kodeRubrik,
            },
            success:function(response) {
                setTimeout(function() { 
                    if (response['idRubrik'] == 'r_03' || response['idRubrik'] == 'r_04' || response['idRubrik'] == 'r_05' || response['idRubrik'] == 'r_06' || response['idRubrik'] == 'r_07' || response['idRubrik'] == 'r_08' || response['idRubrik'] == 'r_62' || response['idRubrik'] == 'r_d5') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Matkul</td>'
                                +'<td>Mahasiswa</td>'
                                +'<td>Pengajar</td>'
                                +'<td>Kehadiran</td>'
                                +'<td>No SK</td>'
                                +'<td>SKS</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_10' || response['idRubrik'] == 'r_13' || response['idRubrik'] == 'r_14' || response['idRubrik'] == 'r_15' || response['idRubrik'] == 'r_16' || response['idRubrik'] == 'r_17' || response['idRubrik'] == 'r_18' || response['idRubrik'] == 'r_19' || response['idRubrik'] == 'r_20' || response['idRubrik'] == 'r_21' ||  response['idRubrik'] == 'r_23' ||  response['idRubrik'] == 'r_24' || response['idRubrik'] == 'r_25' || response['idRubrik'] == 'r_26' || response['idRubrik'] == 'r_27' || response['idRubrik'] == 'r_28' || response['idRubrik'] == 'r_29' || response['idRubrik'] == 'r_64' || response['idRubrik'] == 'r_94') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Npm</td>'
                                +'<td>Nama Mahasiswa</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_93' || response['idRubrik'] == 'r_95' || response['idRubrik'] == 'r_96') { 
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>Npm</td>'
                                +'<td>Nama Mahasiswa</td>'
                                +'<td>Tanggal Ujian</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_22' || response['idRubrik'] == 'r_30' || response['idRubrik'] == 'r_31') { 
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Jumlah Mahasiswa</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_63') { 
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Jumlah Mahasiswa</td>'
                                +'<td>Jumlah Minggu</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_d3') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Jumlah Mahasiswa</td>'
                                +'<td>Nama Kompetensi</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_d4') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Ujian</td>'
                                +'<td>Jumlah Mahasiswa</td>'
                                +'<td>Tanggal Ujian</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_12'){
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Jumlah Jam</td>'
                                +'<td>Jumlah Mahasiswa</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_65' || response['idRubrik'] == 'r_66') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Kegiatan</td>'
                                +'<td>Jumlah Jam</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_67') { 
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Tutor</td>'
                                +'<td>Jumlah Jam</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_68') { 
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Praktikum</td>'
                                +'<td>Jumlah Jam</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_69' || response['idRubrik'] == 'r_70' || response['idRubrik'] == 'r_71' || response['idRubrik'] == 'r_77') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Ujian Modul</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_b6') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Naskah</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_73' || response['idRubrik'] == 'r_74'){ 
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Praktikum</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_75') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Naskah Ujian</td>'
                                +'<td>Jumlah Soal</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_76') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Ujian Modul</td>'
                                +'<td>Jumlah Mahasiswa</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_78') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Ujian Modul</td>'
                                +'<td>Tanggal Ujian</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_79' || response['idRubrik'] == 'r_80' || response['idRubrik'] == 'r_81') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Jumlah Jam</td>'
                                +'<td>Tanggal Ujian</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_72' || response['idRubrik'] == 'r_89' || response['idRubrik'] == 'r_90') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Modul</td>'
                                +'<td>Jumlah Minggu</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_82') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Modul</td>'
                                +'<td>Jumlah Halaman</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_97') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Matkul</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_b5') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Nama Modul</td>'
                                +'<td>Jumlah Jam</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    } else if (response['idRubrik'] == 'r_b7') {
                        let jenis_tabel = 
                        '<thead>'+
                            '<tr>'
                                +'<td>#</td>'
                                +'<td>No</td>'
                                +'<td>Jumlah Pasien</td>'
                                +'<td>No SK</td>'+
                            '</tr>'+
                        '</thead>/'+
                        '<tbody id="result_datas">'+
                        +'</tbody>';
                        $('#table_rubrik').html(jenis_tabel);
                        $('#result_datas').html(response['data']);
                    }  else {
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

$('#table').on('click','#editData',function() { 
    let idBkdPendidikan = $(this).data('idbkdpendidikan');
    $('#modalEdit').modal('show');
    $.ajax({
        url : "bkd/pendidikan/editPendidikan",
        type : "get",
        data : {
            'id' :  idBkdPendidikan
        },
        success:function(response){
            $('#id').val(response.id);
            $('#nama_kegiatan').val(response.nama_kegiatan);
            $('#bukti_penugasan').val(response.bukti_penugasan);
            $('#sks').val(response.sks);
            $('#bukti_dokumen').val(response.bukti_dokumen);
            $('#sks_capaian').val(response.sks_capaian);
            $('#jml_mhs').val(response.jml_mhs);
            $('#jml_pengajar').val(response.jml_pengajar);
            $('#jml_kehadiran').val(response.jml_kehadiran);
        }
    })
});


$('#table').on('click','#deleteData',function() { 
    let idBkdPendidikan = $(this).data('idbkdpendidikan');
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
                url : "bkd/pendidikan/deletePendidikan/"+idBkdPendidikan,
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

