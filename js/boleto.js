function gerarBoleto(){
    var nome = $('#nome').val();
    var cpfcnpj = $('#cpfcnpj').val();
    var valor = $('#valor').val();
    $.post('php/gerarBoleto.php', {nome: nome, cpfcnpj: cpfcnpj, valor: valor}, (data) => {
            $('#retorno').html(data);
        });  
}

function getCharges(){
    $.post('php/getBoletos.php', {}, (data) => {
        console.log(data);
    }); 
}