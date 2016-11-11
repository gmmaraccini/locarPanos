var items = [];
items.push("1,2,3.00");
items.push("1,2,3.00");
console.log(items);

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
    $("#adicionar").click(function () {
        
        
        $.ajax({
            url: 'adicionarItem', //URL solicitada
            success: function (data) { //O HTML é retornado em 'data'
                $(".database-campos").append(data); //Se sucesso um alert com o conteúdo retornado pela URL solicitada será exibido.
                
            }
        });
    });
});