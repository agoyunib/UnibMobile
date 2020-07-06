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
            url: "skp/pengabdianmasyarakat/getRubrik",
            data: {
                kodeRubrik: kodeRubrik,
            },
            success: function (response) {
                setTimeout(function () {
                    if (response["idRubrik"] == "r_34") {
                        let jenis_tabel =
                            "<thead>" +
                            "<tr>" +
                            "<td>#</td>" +
                            "<td>No</td>" +
                            "<td>Nama Pengabian</td>" +
                            "<td>Lokasi</td>" +
                            "<td>Pendanaan</td>" +
                            "</tr>" +
                            "</thead>/" +
                            '<tbody id="result_datas">' +
                            +"</tbody>";
                        $("#table_rubrik").html(jenis_tabel);
                        $("#result_datas").html(response["data"]);
                        $("#colspan").attr("colspan", 5);
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
        .attr("action", "skp/pengabdianmasyarakat/insertPengabdian")
        .trigger("reset");
});

$("#table").on("click", "#editData", function () {
    let idSkpPengabdian = $(this).data("idskppengabdian");
    $("#modalTitle").text("Edit Data");
    $("#formEdit").attr("action", "skp/pengabdianmasyarakat/updatePengabdian");
    $("#modalEdit").modal("show");
    $.ajax({
        url: "skp/pengabdianmasyarakat/editPengabdian",
        type: "get",
        data: {
            id: idSkpPengabdian,
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
    let idSkpPengabdian = $(this).data("idskppengabdian");
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
                    "skp/pengabdianmasyarakat/deletePengabdian/" +
                    idSkpPengabdian,
                type: "get",
                success: function (result) {
                    if (result > 0) {
                        swal.fire(
                            "Terhapus !",
                            "Data Skp Pengabdian Kepada Masyarakat berhasil dihapus !",
                            "success"
                        );
                    }
                    location.reload();
                },
            });
        }
    });
});
