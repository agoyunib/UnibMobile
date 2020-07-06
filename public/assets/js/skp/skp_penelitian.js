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
            url: "skp/penelitianpengembanganilmu/getRubrik",
            data: {
                kodeRubrik: kodeRubrik,
            },
            success: function (response) {
                setTimeout(function () {
                    if (response["idRubrik"] == "r_33") {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Judul Penelitian</td>" +
                            "<td>Pendanaan</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 2);
                    } else if (
                        response["idRubrik"] == "r_d6" ||
                        response["idRubrik"] == "r_d7"
                    ) {
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
                            "<td>Npm</td>" +
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

$("#tambahData").click(function () {
    $("#modalEdit").modal("show");
    $("#modalTitle").text("Tambah Data");
    $("#formEdit")
        .attr("action", "skp/penelitianpengembanganilmu/insertPenelitian")
        .trigger("reset");
});

$("#table").on("click", "#editData", function () {
    let idSkpPenelitian = $(this).data("idskppenelitian");
    $("#modalTitle").text("Edit Data");
    $("#formEdit").attr(
        "action",
        "skp/penelitianpengembanganilmu/updatePenelitian"
    );
    $("#modalEdit").modal("show");
    $.ajax({
        url: "skp/penelitianpengembanganilmu/editPenelitian",
        type: "get",
        data: {
            id: idSkpPenelitian,
        },
        success: function (response) {
            $("#id").val(response.id);
            $("#nama_kegiatan").val(response.nama_kegiatan);
            $("#kode_kegiatan").val(response.kode_kegiatan);
            $("#sks_maksimal").val(response.sks_maksimal);
            $("#target_qty").val(response.target_qty);
            $("#target_output").val(response.target_output);
            $("#target_waktu").val(response.target_waktu);
            $("#target_biaya").val(response.target_biaya);
            $("#realisasi_qty").val(response.realisasi_qty);
            $("#realisasi_output").val(response.realisasi_output);
            $("#realisasi_waktu").val(response.realisasi_waktu);
            $("#realisasi_biaya").val(response.realisasi_biaya);
            $("#perhitungan").val(response.perhitungan);
            $("#nilai_capaian_skp").val(response.nilai_capaian_skp);
        },
    });
});

$("#table").on("click", "#deleteData", function () {
    let idSkpPenelitian = $(this).data("idskppenelitian");
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
                    "skp/penelitianpengembanganilmu/deletePenelitian/" +
                    idSkpPenelitian,
                type: "get",
                success: function (result) {
                    if (result > 0) {
                        swal.fire(
                            "Terhapus !",
                            "Data Skp Penelitian dan Pengembangan Ilmu berhasil dihapus !",
                            "success"
                        );
                    }
                    location.reload();
                },
            });
        }
    });
});
