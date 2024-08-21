document.addEventListener('DOMContentLoaded', function() {
    const inputData = document.getElementById('data_nascimento');

    inputData.addEventListener('input', function() {
        let valor = inputData.value;
        
        // Remove tudo o que não é dígito
        valor = valor.replace(/\D/g, '');
        
        // Adiciona barras conforme necessário
        if (valor.length >= 5) {
            valor = valor.replace(/(\d{2})(\d{2})(\d{0,4})/, '$1/$2/$3');
        } else if (valor.length >= 3) {
            valor = valor.replace(/(\d{2})(\d{0,2})/, '$1/$2');
        }

        // Atualiza o campo com o valor formatado
        inputData.value = valor;
    });
});