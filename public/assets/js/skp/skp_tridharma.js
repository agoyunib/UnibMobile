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
            url: "skp/penunjangtridharmaperguruantinggi/getRubrik",
            data: {
                kodeRubrik: kodeRubrik,
            },
            success: function (response) {
                setTimeout(function () {
                    if (response["idRubrik"] == "r_35") {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Nama Kegiatan</td>" +
                            "<td>Jumlah Bulan</td>" +
                            "<td>No Sk</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 5);
                    } else if (
                        response["idRubrik"] == "r_43" ||
                        response["idRubrik"] == "r_37"
                    ) {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Jumlah Bulan</td>" +
                            "<td>No Sk</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 4);
                    } else if (response["idRubrik"] == "r_44") {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Jumlah Jam</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 3);
                    } else if (
                        response["idRubrik"] == "r_36" ||
                        response["idRubrik"] == "r_98"
                    ) {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Nama Kegiatan</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 3);
                    } else if (
                        response["idRubrik"] == "r_38" ||
                        response["idRubrik"] == "r_41" ||
                        response["idRubrik"] == "r_b1"
                    ) {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>No SK</td>" +
                            "<td>Jumlah Bulan</td>" +
                            "<td>Status</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 5);
                    } else if (
                        response["idRubrik"] == "r_39" ||
                        response["idRubrik"] == "r_40" ||
                        response["idRubrik"] == "r_99" ||
                        response["idRubrik"] == "r_c7" ||
                        response["idRubrik"] == "r_c8" ||
                        response["idRubrik"] == "r_c9" ||
                        response["idRubrik"] == "r_a1" ||
                        response["idRubrik"] == "r_a2" ||
                        response["idRubrik"] == "r_d1" ||
                        response["idRubrik"] == "r_d2" ||
                        response["idRubrik"] == "r_83" ||
                        response["idRubrik"] == "r_84" ||
                        response["idRubrik"] == "r_85" ||
                        response["idRubrik"] == "r_86" ||
                        response["idRubrik"] == "r_87" ||
                        response["idRubrik"] == "r_b8" ||
                        response["idRubrik"] == "r_b9" ||
                        response["idRubrik"] == "r_c1" ||
                        response["idRubrik"] == "r_c2" ||
                        response["idRubrik"] == "r_c3" ||
                        response["idRubrik"] == "r_c4" ||
                        response["idRubrik"] == "r_c5" ||
                        response["idRubrik"] == "r_91" ||
                        response["idRubrik"] == "r_c6" ||
                        response["idRubrik"] == "r_a5" ||
                        response["idRubrik"] == "r_a6" ||
                        response["idRubrik"] == "r_a8" ||
                        response["idRubrik"] == "r_a9"
                    ) {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>No SK</td>" +
                            "<td>Jumlah Bulan</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 4);
                    } else if (
                        response["idRubrik"] == "r_48" ||
                        response["idRubrik"] == "r_49" ||
                        response["idRubrik"] == "r_88" ||
                        response["idRubrik"] == "r_54"
                    ) {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Nip Dinilai</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 3);
                    } else if (response["idRubrik"] == "r_a7") {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Judul Dinilai</td>" +
                            "<td>No Sk</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 4);
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
        .attr("action", "skp/penunjangtridharmaperguruantinggi/insertTridharma")
        .trigger("reset");
});

$("#table").on("click", "#editData", function () {
    let idSkpTridharma = $(this).data("idskptridharma");
    $("#modalTitle").text("Edit Data");
    $("#formEdit").attr(
        "action",
        "skp/penunjangtridharmaperguruantinggi/updateTridharma"
    );
    $("#modalEdit").modal("show");
    $.ajax({
        url: "skp/penunjangtridharmaperguruantinggi/editTridharma",
        type: "get",
        data: {
            id: idSkpTridharma,
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
    let idSkpTridharma = $(this).data("idskptridharma");
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
                    "skp/penunjangtridharmaperguruantinggi/deleteTridharma/" +
                    idSkpTridharma,
                type: "get",
                success: function (result) {
                    if (result > 0) {
                        swal.fire(
                            "Terhapus !",
                            "Data Skp Tridharma Perguruan Tinggi berhasil dihapus !",
                            "success"
                        );
                    }
                    location.reload();
                },
            });
        }
    });
});
