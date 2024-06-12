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
                const request = await fetch(`http://localhost:8000/api/ativos/manutencao/sala/${selectedRoom}`);
                const response = await request.json();

                // Limpa o conteúdo anterior da tabela
                conteudoSala.innerHTML = '';

                // Verifica se há dados a serem exibidos
                if (response.ativo && response.ativo.length > 0) {
                    // Itera sobre os ativos e os adiciona à tabela
                    response.ativo.forEach(ativo => {
                        // Cria uma nova linha na tabela
                        const newRow = document.createElement('tr');

                        // Adiciona as células da tabela com os dados do ativo
                        newRow.innerHTML = `
                            <td>${ativo.nome}</td>
                            <td>${ativo.patrimonio}</td>
                            <td>${ativo.categoria_patrimonio}</td>
                            <td>${ativo.manutencao ? 'Em manutenção' : 'Operacional'}</td>
                            <td>Operações</td>
                        `;

                        // Adiciona a nova linha à tabela
                        conteudoSala.appendChild(newRow);
                    });
                } else {
                    // Caso não haja dados, exibe uma mensagem na tabela
                    conteudoSala.innerHTML = '<tr><td colspan="5">Nenhum ativo em manutenção.</td></tr>';
                }
            } catch (error) {
                console.error('Erro:', error);
                conteudoSala.innerHTML = '<tr><td colspan="5">Houve um erro ao carregar os ativos.</td></tr>';
            }
        });
    });
});
