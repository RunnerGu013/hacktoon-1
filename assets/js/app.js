document.addEventListener('DOMContentLoaded', () => {
    const donateButtons = document.querySelectorAll('.donate-button[data-category]');
    const cart = {
        roupas: 0,
        alimentos: 0,
        higiene: 0
    };

    // Fetch total donations from the backend (if applicable)
    fetch('/get_total_donations.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('total-roupas').textContent = `Total de Doações: ${data.roupas}`;
            document.getElementById('total-alimentos').textContent = `Total de Doações: ${data.alimentos}`;
            document.getElementById('total-higiene').textContent = `Total de Doações: ${data.higiene}`;
        })
        .catch(error => console.error('Error fetching total donations:', error));

    // Event listener for donate buttons
    donateButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.dataset.category;
            const item = button.dataset.item;
            
            // Add item to cart
            cart[category]++;
            
            // Alert and update total donations display
            alert(`${item} foi adicionado ao carrinho.`);
            updateTotalDonations(category);
        });
    });

    // Function to update total donations display
    function updateTotalDonations(category) {
        const totalElement = document.getElementById(`total-${category}`);
        totalElement.textContent = `Total de Doações: ${cart[category]}`;
    }

    // Donation form submission
    document.getElementById('donate-all-button').addEventListener('click', () => {
        if (Object.values(cart).reduce((a, b) => a + b, 0) === 0) {
            alert('Nenhum item no carrinho.');
            return;
        }

        const itemsInput = document.getElementById('items-input');
        itemsInput.value = JSON.stringify(cart);

        const donationForm = document.getElementById('donation-form');
        donationForm.submit();
    });

    // Fetch ranking from the backend (if applicable)
    fetch('/get_ranking.php')
        .then(response => response.json())
        .then(data => {
            const rankingList = document.getElementById('ranking-list');
            rankingList.innerHTML = '';
            data.forEach((donor, index) => {
                const donorDiv = document.createElement('div');
                donorDiv.classList.add('donor');
                donorDiv.innerHTML = `${index + 1}. ${donor.name} - ${donor.total_donations} doações`;
                rankingList.appendChild(donorDiv);
            });
        })
        .catch(error => console.error('Error fetching ranking:', error));
});
function finalizarPedido() {
    let pedidos = carrinhoTemporario;

    // Verifica se há pedidos para finalizar
    if (pedidos.length > 0) {
        // Cria um objeto FormData para enviar os dados
        let formData = new FormData();
        formData.append('finalizar_pedido', true);
        formData.append('pedidos', JSON.stringify(pedidos));

        // Cria uma instância do objeto XMLHttpRequest
        let xhr = new XMLHttpRequest();

        // Define a função de retorno de chamada quando a requisição estiver concluída
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Limpa a variável de carrinho temporário apenas após o sucesso do pedido
                carrinhoTemporario = [];
                // Exibe uma mensagem de sucesso
                alert('Doações registradas com sucesso!');
                // Redireciona para a página 'formulario.php'
                window.location.href = 'formulario.php';
            } else {
                // Exibe uma mensagem de erro
                alert('Erro ao finalizar o pedido. Por favor, tente novamente.');
            }
        };

        // Define o método HTTP e o URL do arquivo PHP
        xhr.open('POST', 'conexao.html', true);

        // Envia a requisição com os dados do formulário
        xhr.send(formData);
    } // Remova a chave extra que estava incorreta
}
