$("#tambahData").click(function () {
    $("#modalEdit").modal("show");
    $("#modalTitle").text("Tambah Data");
    $("#formEdit")
        .attr("action", "skp/tugastambahandankreativitas/insertTugas")
        .trigger("reset");
});

$("#table").on("click", "#editData", function () {
    let idSkpTugas = $(this).data("idskptugas");
    $("#modalTitle").text("Edit Data");
    $("#formEdit").attr(
        "action",
        "skp/tugastambahandankreativitas/updateTugas"
    );
    $("#modalEdit").modal("show");
    $.ajax({
        url: "skp/tugastambahandankreativitas/editTugas",
        type: "get",
        data: {
            id: idSkpTugas,
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
            $("#kategori").val(response.kategori);
            $("#perhitungan").val(response.perhitungan);
            $("#nilai_capaian_skp").val(response.nilai_capaian_skp);
        },
    });
});

$("#table").on("click", "#deleteData", function () {
    let idSkpTugas = $(this).data("idskptugas");
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
                    "skp/tugastambahandankreativitas/deleteTugas/" + idSkpTugas,
                type: "get",
                success: function (result) {
                    if (result > 0) {
                        swal.fire(
                            "Terhapus !",
                            "Data Skp Tugas Tambahan Dan Kreativitas/Unsur Penunjang berhasil dihapus !",
                            "success"
                        );
                    }
                    location.reload();
                },
            });
        }
    });
});
