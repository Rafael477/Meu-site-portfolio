const form = document.getElementById("form-contato");

form.addEventListener("submit", function (e) {
    e.preventDefault();

    const nome = form.nome.value;
    const email = form.email.value;
    const data = form.data.value;
    const mensagem = form.mensagem.value;

    alert('Obrigado, ${nome}! Sua proposta para ${data} foi recebida.');

    form.reset();
});

ScrollReveal().reveal('.hero', { delay: 200, origin: 'bottom', distance: '50px' });
ScrollReveal().reveal('#sobre', { delay: 300, origin: 'left', distance: '50px' });
ScrollReveal().reveal('#portfolio', { delay: 400, origin: 'right', distance: '50px' });
ScrollReveal().reveal('#servicos', { delay: 500, origin: 'top', distance: '50px' });
ScrollReveal().reveal('#contato', { delay: 600, origin: 'bottom', distance: '50px' });

const toggleTheme = document.getElementById("toggle-theme");
toggleTheme.addEventListener("click", () => {
  document.body.classList.toggle("dark");
  toggleTheme.textContent = document.body.classList.contains("dark") ? "☀️" : "🌙";
});
