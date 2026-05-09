// Pegar o formulário e o campo mensagem
const formulario = document.querySelector('form');
const campoMensagem = document.querySelector('textarea[name="mensagem"]');

// Criar elemento para mostrar o erro
const spanErro = document.createElement('span');
spanErro.style.color = 'red';
spanErro.style.fontSize = '14px';
campoMensagem.parentNode.appendChild(spanErro);

// Evento de envio do formulário
formulario.addEventListener('submit', function(e) {
    if (campoMensagem.value.length < 20) {
        e.preventDefault(); // Cancela o envio
        campoMensagem.style.border = '2px solid red';
        spanErro.textContent = 'A mensagem é muito curta.';
    }
});

// Bonus: Limpar erro quando digitar
campoMensagem.addEventListener('input', function() {
    campoMensagem.style.border = '';
    spanErro.textContent = '';
});