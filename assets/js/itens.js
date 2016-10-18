$(document).ready(function () {
    $("#clientes").change(function () {
        $.ajax({
            url: 'itensCliente', //URL solicitada
            success: function (data) { //O HTML é retornado em 'data'
                alert(data); //Se sucesso um alert com o conteúdo retornado pela URL solicitada será exibido.
            }
        });

        alert('Selected value: ' + $(this).val());
    });

});