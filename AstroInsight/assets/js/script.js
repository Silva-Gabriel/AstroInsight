// Lógica para manter somente números
document.addEventListener('DOMContentLoaded', function() {
    const inputData = document.getElementById('data_nascimento');

    inputData.addEventListener('input', function() {

        let valor = inputData.value;
        valor = valor.replace(/\D/g, '');
        
        // Regex para adicionar as barras
        if (valor.length >= 5) {
            valor = valor.replace(/(\d{2})(\d{2})(\d{0,4})/, '$1/$2/$3');
        } else if (valor.length >= 3) {
            valor = valor.replace(/(\d{2})(\d{0,2})/, '$1/$2');
        }

        inputData.value = valor;
    });
});