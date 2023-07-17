function deleteRegistroPaginacao(rotaUrl, idRegistro) {
  if (confirm("Deseja confirmar a exclusão ?")) {
    $.ajax({
      url: rotaUrl,
      method: "DELETE",
      headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
      data: {
        id: idRegistro,
      },
      beforeSend() {
        $.blockUI({
          message: "Carregando...",
          timeout: 2000,
        });
      },
    })
      .done((data) => {
        $.unblockUI();
        if (data.success == true) {
          window.location.reload();
        } else {
          alert("Não foi possível excluir");
        }
      })
      .fail((data) => {
        $.unblockUI();
        alert("Não foi possível buscar os dados");
      });
  }
}

$("#mascara_valor").mask("#.##0,00", { reverse: true });
