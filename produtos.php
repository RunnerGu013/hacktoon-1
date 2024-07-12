<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Doação</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <!-- INICIO NAVEGAÇÃO -->
    <div class="navbar">
        <div class="logo">
       <!-- target"_blank" usado para abrir outra aba com site da despertar quando clicar na imagem -->
                <a href="https://www.despertar.org.br" target="_blank"><img src="assets/img/despertar-logo.png" alt=""></a>
        </div>
       
        <!-- INICIO MENU NAVEGAÇÃO -->
        <nav>
                    <ul id="MenuItens">
                        <img src="assets/img/casaIcon.png" alt="" width="16px">             
                        <li><a type="a" class="btn" href="index.php">Início</a></li>
                        <img src="assets/img/icone-coracao.png" alt="" width="20px">
                        <li><a type="a" class="btn" href="produtos.php">Doe</a></li>
                        <img src="assets/img/medalha-icon.png" alt="" width="20px">
                        <li><a type="a" class="btn" href="Rancking.php">Ranking </a></li> 
                          
                    </ul>
                </nav>
        <!-- FIM MENU NAVEGAÇÃO -->
        <a href="carrinho.php">
            <img src="assets/img/sacola-icon.png" alt="" height="25px">
        </a>
    </div>

    <hr class="linha-branca">
    <h1 class="site-doacao">Site de Doação</h1>
    <br>

    <main>
        <section class="category">
            <h2>Roupas</h2>
            <br>
            <div class="total-donations" id="total-roupas">Total de Doações: 0</div>
            <div class="carousel">
                <button class="prev">&#9664;"></button>
                <div class="carousel-items">
                    <div class="item">
                        Calça Feminina
                        <button class="donate-button" data-category="roupas" data-item="Calça Feminina">Doar</button>
                    </div>
                    <div class="item">
                        Shorts Feminino
                        <button class="donate-button" data-category="roupas" data-item="Shorts Feminino">Doar</button>
                    </div>
                    <div class="item">
                        Camisa
                        <button class="donate-button" data-category="roupas" data-item="Camisa">Doar</button>
                    </div>
                    <div class="item">
                        Bermudas Masculina
                        <button class="donate-button" data-category="roupas" data-item="Bermudas Masculina">Doar</button>
                    </div>
                    <div class="item">
                        Calça Feminina
                        <button class="donate-button" data-category="roupas" data-item="Calça Feminina">Doar</button>
                    </div>
                    <div class="item">
                        Item 6
                        <button class="donate-button" data-category="roupas" data-item="Item 6">Doar</button>
                    </div>
                    <div class="item">
                        Item 7
                        <button class="donate-button" data-category="roupas" data-item="Item 7">Doar</button>
                    </div>
                    <div class="item">
                        Item 8
                        <button class="donate-button" data-category="roupas" data-item="Item 8">Doar</button>
                    </div>
                    <div class="item">
                        Item 9
                        <button class="donate-button" data-category="roupas" data-item="Item 9">Doar</button>
                    </div>
                    <div class="item">
                        Item 10
                        <button class="donate-button" data-category="roupas" data-item="Item 10">Doar</button>
                    </div>
                </div>
                <button class="next">&#9654;"></button>
            </div>
        </section>
        <section class="category">
            <h2>Alimentos</h2>
            <br>
            <div class="total-donations" id="total-alimentos">Total de Doações: 0</div>
            <div class="carousel">
                <button class="prev">&#9664;"></button>
                <div class="carousel-items">
                    <div class="item">
                        Arroz
                        <button class="donate-button" data-category="alimentos" data-item="Arroz">Doar</button>
                    </div>
                    <div class="item">
                        Feijão
                        <button class="donate-button" data-category="alimentos" data-item="Feijão">Doar</button>
                    </div>
                    <div class="item">
                        Macarrão
                        <button class="donate-button" data-category="alimentos" data-item="Macarrão">Doar</button>
                    </div>
                    <div class="item">
                        Sal
                        <button class="donate-button" data-category="alimentos" data-item="Sal">Doar</button>
                    </div>
                    <div class="item">
                        Óleo
                        <button class="donate-button" data-category="alimentos" data-item="Óleo">Doar</button>
                    </div>
                    <div class="item">
                        Leite em Pó
                        <button class="donate-button" data-category="alimentos" data-item="Leite em Pó">Doar</button>
                    </div>
                    <div class="item">
                        Açúcar
                        <button class="donate-button" data-category="alimentos" data-item="Açúcar">Doar</button>
                    </div>
                    <div class="item">
                        Biscoito/Bolacha
                        <button class="donate-button" data-category="alimentos" data-item="Biscoito/Bolacha">Doar</button>
                    </div>
                    <div class="item">
                        Café
                        <button class="donate-button" data-category="alimentos" data-item="Café">Doar</button>
                    </div>
                    <div class="item">
                        Item 10
                        <button class="donate-button" data-category="alimentos" data-item="Item 10">Doar</button>
                    </div>
                </div>
                <button class="next">&#9654;"></button>
            </div>
        </section>
        <section class="category">
            <h2>Produtos de Higiene</h2>
            <br>
            <div class="total-donations" id="total-higiene">Total de Doações: 0</div>
            <div class="carousel">
                <button class="prev">&#9664;"></button>
                <div class="carousel-items">
                    <div class="item">
                        Sabão em pó
                        <button class="donate-button" data-category="higiene" data-item="Sabão em pó">Doar</button>
                    </div>
                    <div class="item">
                        Amaciante
                        <button class="donate-button" data-category="higiene" data-item="Amaciante">Doar</button>
                    </div>
                    <div class="item">
                        Sabão em barra
                        <button class="donate-button" data-category="higiene" data-item="Sabão em barra">Doar</button>
                    </div>
                    <div class="item">
                        Detergente
                        <button class="donate-button" data-category="higiene" data-item="Detergente">Doar</button>
                    </div>
                    <div class="item">
                        Item 5
                        <button class="donate-button" data-category="higiene" data-item="Item 5">Doar</button>
                    </div>
                    <div class="item">
                        Item 6
                        <button class="donate-button" data-category="higiene" data-item="Item 6">Doar</button>
                    </div>
                    <div class="item">
                        Item 7
                        <button class="donate-button" data-category="higiene" data-item="Item 7">Doar</button>
                    </div>
                    <div class="item">
                        Item 8
                        <button class="donate-button" data-category="higiene" data-item="Item 8">Doar</button>
                    </div>
                    <div class="item">
                        Item 9
                        <button class="donate-button" data-category="higiene" data-item="Item 9">Doar</button>
                    </div>
                    <div class="item">
                        Item 10
                        <button class="donate-button" data-category="higiene" data-item="Item 10">Doar</button>
                    </div>
                </div>
                <button class="next">&#9654;"></button>
            </div>
        </section>
        <section class="donation-section">
            <button class="donate-button" id="donate-all-button">
                Continuar Doação!
            </button>
        </section>
        <section class="ranking-section">
            <h2>Ranking de Doadores</h2>
            <div id="ranking-list">Carregando ranking...</div>
        </section>
        <form id="donation-form" action="carrinho.php" method="POST" style="display: none;">
            <input type="hidden" name="items" id="items-input">
        </form>
    </main>
</div>

<script>
 <script>
document.addEventListener('DOMContentLoaded', () => {
    const donateButtons = document.querySelectorAll('.donate-button[data-category]');
    let cart = JSON.parse(localStorage.getItem('cart')) || {
        roupas: {},
        alimentos: {},
        higiene: {}
    };

    // Função para atualizar o carrinho no localStorage e UI
    function updateCart(category, item) {
        if (!cart[category][item]) {
            cart[category][item] = 0;
        }
        cart[category][item]++;
        localStorage.setItem('cart', JSON.stringify(cart));
        alert(`${item} foi adicionado ao carrinho.`);
        updateTotalDonations(category);
    }

    // Função para buscar total de doações (simulado para demonstração)
    function fetchTotalDonations() {
        const data = {
            roupas: Object.values(cart.roupas).reduce((acc, val) => acc + val, 0),
            alimentos: Object.values(cart.alimentos).reduce((acc, val) => acc + val, 0),
            higiene: Object.values(cart.higiene).reduce((acc, val) => acc + val, 0)
        };

        document.getElementById('total-roupas').textContent = `Total de Doações: ${data.roupas}`;
        document.getElementById('total-alimentos').textContent = `Total de Doações: ${data.alimentos}`;
        document.getElementById('total-higiene').textContent = `Total de Doações: ${data.higiene}`;
    }

    // Função para buscar ranking de doadores (simulado para demonstração)
    function fetchRanking() {
        const data = [
            { name: 'Usuário 1', total_donations: 15 },
            { name: 'Usuário 2', total_donations: 12 },
            { name: 'Usuário 3', total_donations: 10 }
        ];

        const rankingList = document.getElementById('ranking-list');
        rankingList.innerHTML = '';
        data.forEach((donor, index) => {
            const donorDiv = document.createElement('div');
            donorDiv.classList.add('donor');
            donorDiv.innerHTML = `${index + 1}. ${donor.name} - ${donor.total_donations} doações`;
            rankingList.appendChild(donorDiv);
        });
    }

    // Event listeners para botões de doação
    donateButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.dataset.category;
            const item = button.dataset.item;
            updateCart(category, item);
        });
    });

    // Event listener para botão "Continuar Doação!"
    document.getElementById('donate-all-button').addEventListener('click', () => {
        if (Object.keys(cart.roupas).length === 0 && Object.keys(cart.alimentos).length === 0 && Object.keys(cart.higiene).length === 0) {
            alert('Nenhum item no carrinho.');
            return;
        }

        const itemsInput = document.getElementById('items-input');
        itemsInput.value = JSON.stringify(cart);

        const donationForm = document.getElementById('donation-form');
        donationForm.submit();
    });

    // Função para atualizar total de doações na UI
    function updateTotalDonations(category) {
        const totalElement = document.getElementById(`total-${category}`);
        const total = Object.values(cart[category]).reduce((acc, val) => acc + val, 0);
        totalElement.textContent = `Total de Doações: ${total}`;
    }

    // Chamada inicial para buscar total de doações e ranking (simulado para demonstração)
    fetchTotalDonations();
    fetchRanking();
});
</script>

</script>

</body>
</html>
