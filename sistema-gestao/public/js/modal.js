const switchModal = () => {
    const modal = document.querySelector('.modal');
    const visibilidade = modal.style.display;
    if(visibilidade == 'block'){
        modal.style.display = 'none'
    }else{
        modal.style.display = 'block'
    }
}
const btn = document.querySelector('.modalBtn')
btn.addEventListener('click', switchModal)

window.onclick = function(event) {
    const modal = document.querySelector('.modal')
    if (event.target == modal) {
        switchModal()
    }
}


document.addEventListener("DOMContentLoaded", () => {
    let inputElement = document.getElementById('search-ativo');
    let tableRows = document.querySelectorAll("#room-content tr.class-ativo");

    inputElement.addEventListener("input", (e) => {
        let inputed = e.target.value.toLowerCase();

        tableRows.forEach((tr) => {
            let text = tr.textContent.toLowerCase();
            if(text.includes(inputed)){
                tr.style.display = '';
            } else {
                tr.style.display = 'none';
            }
        });
    });
});
