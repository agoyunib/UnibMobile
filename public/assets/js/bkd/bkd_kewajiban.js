$("#koderubrik").select2({
    placeholder: "- Pilih Rubrik -",
});

$("#cekDataRemun").click(function () {
    let kodeRubrik = $("#koderubrik").val();
    if (kodeRubrik) {
        $("#loader").addClass("loader");
        $("#modalDetail").modal("show");
        $("#table_rubrik").empty();
        $.ajax({
            type: "get",
            url: "bkd/kewajibankhususprosessor/getRubrik",
            data: {
                kodeRubrik: kodeRubrik,
            },
            success: function (response) {
                setTimeout(function () {
                    if (response["idRubrik"] == "r_d7") {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Judul Penelitian</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 3);
                    } else if (
                        response["idRubrik"] == "r_e2" ||
                        response["idRubrik"] == "r_e3" ||
                        response["idRubrik"] == "r_e1" ||
                        response["idRubrik"] == "r_d8" ||
                        response["idRubrik"] == "r_d9"
                    ) {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Judul</td>" +
                            "<td>Terbitan</td>" +
                            "<td>Status Anggota</td>" +
                            "<td>Jumlah Anggota</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 6);
                    } else {
                        console.log("err");
                    }
                    $("#loader").removeClass("loader");
                }, 2000);

                $("#modalDetail .modal-title").text(
                    "DATA RUBRIK " + response["idRubrik"].toUpperCase() + ""
                );
                $("#kode_table").val(response["idRubrik"]);
            },
            error: function (response) {
                console.log(response);
            },
        });
    } else {
        swal.fire(
            "Peringatan!",
            "Silahkan pilih rubrik terlebih dahulu!",
            "error"
        );
    }
});

$("#table").on("click", "#editData", function () {
    let idBkdKewajiban = $(this).data("idbkdkewajiban");
    $("#modalEdit").modal("show");
    $.ajax({
        url: "bkd/kewajibankhususprosessor/editKewajiban",
        type: "get",
        data: {
            id: idBkdKewajiban,
        },
        success: function (response) {
            $("#id").val(response.id);
            $("#nama_kegiatan").val(response.nama_kegiatan);
            $("#bukti_penugasan").val(response.bukti_penugasan);
            $("#sks").val(response.sks);
            $("#bukti_dokumen").val(response.bukti_dokumen);
            $("#sks_capaian").val(response.sks_capaian);
        },
    });
});

$("#table").on("click", "#deleteData", function () {
    let idBkdKewajiban = $(this).data("idbkdkewajiban");
    swal.fire({
        title: "Yakin menghapus data ?",
        text: "Data yang dihapus tidak bisa dikembalikan lagi !",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Hapus",
        cancelButtonText: "Kembali",
    }).then(function (confirm) {
        if (confirm.value) {
            $.ajax({
                url:
                    "bkd/kewajibankhususprosessor/deleteKewajiban/" +
                    idBkdKewajiban,
                type: "get",
                success: function (result) {
                    if (result > 0) {
                        swal.fire(
                            "Terhapus !",
                            "Data Bkd Pendidikan berhasil dihapus !",
                            "success"
                        );
                    }
                    location.reload();
                },
            });
        }
    });
});
