<!-- carrinho.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Doações</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="assets/img/logo.jpeg" alt="DESPERTARTEC" width="150px">
        </div>
        <nav>
            <ul id="MenuItens">
                <img src="assets/img/casaIcon.png" alt="" width="16px">            
                <li><a type="a" class="btn" href="index.php">Início</a></li>
                <img src="assets/img/icone-coracao.png" alt="" width="20px">
                <li><a type="a" class="btn" href="produtos.php">Doe</a></li>
            </ul>
        </nav>
        <a href="carrinho.php">
            <img src="assets/img/sacola-icon.png" alt="" height="25px">
        </a>
    </div>

    <hr class="linha-branca">
    <h1 class="site-doacao">Carrinho de Doações</h1>
    <br>

    <div id="cart-items">
        <!-- Itens do carrinho serão adicionados dinamicamente aqui -->
    </div>

    <br>
    <button id="finalize-donation-button" class="donate-button">
        Finalizar Doação
    </button>

    <form id="finalize-donation-form" action="formulario.php" method="POST" style="display: none;">
        <input type="hidden" name="cart" id="cart-input">
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const cartItems = JSON.parse(localStorage.getItem('cart'));
        const cartItemsDiv = document.getElementById('cart-items');

        if (cartItems) {
            Object.keys(cartItems).forEach(category => {
                const categoryDiv = document.createElement('div');
                categoryDiv.innerHTML = `<h2>${category}</h2>`;
                Object.keys(cartItems[category]).forEach(item => {
                    const itemDiv = document.createElement('div');
                    itemDiv.textContent = `${item}: ${cartItems[category][item]}`;
                    categoryDiv.appendChild(itemDiv);
                });
                cartItemsDiv.appendChild(categoryDiv);
            });
        } else {
            cartItemsDiv.innerHTML = '<p>Nenhum item no carrinho.</p>';
        }

        document.getElementById('finalize-donation-button').addEventListener('click', () => {
            const cartInput = document.getElementById('cart-input');
            cartInput.value = JSON.stringify(cartItems);

            const finalizeForm = document.getElementById('finalize-donation-form');
            finalizeForm.submit();






            
        });
    });
</script>

</body>
</html>
