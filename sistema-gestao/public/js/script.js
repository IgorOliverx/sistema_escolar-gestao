//Script principal da pagina de ativos por sala
const linksSala = document.querySelectorAll('.room-link');
const conteudoSala = document.getElementById('room-content');
const tituloSala = document.getElementById('room-title');

linksSala.forEach(link => {
    link.addEventListener('click', async (event) => {
        event.preventDefault();

        const selectedRoom = link.dataset.room;
        tituloSala.textContent = ` ${selectedRoom}`;
        link.classList.add('active');

        try {
            const request = await fetch(`http://localhost:8000/api/ativos/blocos/${selectedRoom}`);
            const response = await request.json();
            conteudoSala.innerHTML = JSON.stringify(response); //A resposta é devolvida corretamente.
        } catch (error) {
            console.error('Erro:', error);
            conteudoSala.innerHTML = `<tr><td colspan="5">Houve um erro ao realizar a consulta. Entre em contato com os administradores para obter mais respostas</td></tr>`;
        } finally {
            linksSala.forEach(prevLink => prevLink.classList.remove('active'));
        }
    });
});
