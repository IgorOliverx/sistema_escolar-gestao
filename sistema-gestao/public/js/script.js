document.addEventListener('DOMContentLoaded', () => {
    const linksSala = document.querySelectorAll('.room-link');
    const conteudoSala = document.querySelector('#room-content');
    const tituloSala = document.getElementById('room-title');

    linksSala.forEach(link => {
        link.addEventListener('click', async (event) => {
            event.preventDefault();

            const selectedRoom = link.dataset.room;
            tituloSala.textContent = `Sala ${selectedRoom}`;
            linksSala.forEach(prevLink => prevLink.classList.remove('active'));
            link.classList.add('active');

            try {
                const request = await fetch(`https://seashell-app-8qdtr.ondigitalocean.app/api/ativos/blocos/${selectedRoom}`);
                const response = await request.json();
                console.log(response); // Verifique se a resposta está correta

                // Limpa o conteúdo anterior da tabela
                conteudoSala.innerHTML = '';

                // Verifica se há dados a serem exibidos
                if (response.status && response.dados.length > 0) {
                    // Itera sobre os ativos e os adiciona à tabela
                    response.dados.forEach(ativo => {
                        // Cria uma nova linha na tabela
                        const newRow = document.createElement('tr');

                        // Adiciona as células da tabela com os dados do ativo
                        newRow.innerHTML = `
                            <td>${ativo.nome}</td>
                            <td>${ativo.patrimonio}</td>
                            <td>${ativo.categoria_patrimonio}</td>
                            <td>${ativo.status}</td>
                            <td>Operações</td>
                        `;

                        // Adiciona a nova linha à tabela
                        conteudoSala.appendChild(newRow);
                    });
                } else {
                    // Caso não haja dados, exibe uma mensagem na tabela
                    conteudoSala.innerHTML = '<tr><td colspan="5">Nenhum ativo encontrado.</td></tr>';
                }
            } catch (error) {
                console.error('Erro:', error);
                conteudoSala.innerHTML = '<tr><td colspan="5">Houve um erro ao carregar os ativos.</td></tr>';
            }
        });
    });
});
