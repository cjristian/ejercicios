<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_p.css">
    <title>Productos</title>

</head>

<body>
    <nav>
        <h1>Ferreteria</h1>
    </nav>
    <div class="container">
        <?php
        include("QR/php-qrcode-master/lib/full/qrlib.php");  //Librería para generar el código QR
        $servername = "localhost";
        $username = "estyle";
        $password = "2119";
        $database = "ferreteria";

        $conn = new mysqli($servername, $username, $password, $database);
        if ($conn->connect_error) {
            die("Error al conectarse: " . $conn->connect_error);
        }

        $sql = "SELECT id,name,description,price FROM product";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="product">
                    <div class="product-img">
                        <img src="
                        <?php
                        QRcode::png("$row[id]$row[name]");
                        ?>" class="card-img-top" alt="Producto Image">
                    </div>
                    <div class="product-info">
                        <h5><?php echo $row['id']; ?></h5>
                        <p><?php echo $row['name']; ?></p>
                        <p>Descripcion<?php echo $row['description']; ?></p>
                        <p>Precio <?php echo $row['price']; ?>$</p>
                    </div>
                </div>
            <?php
            }
            ?>

    </div>
    <script>
        var carritoDropdown = document.getElementById('carritoDropdown');
        var dropdownList = [];
        var carritoCountSpan = document.getElementById('carritoCount');

        document.addEventListener("DOMContentLoaded", function() {
            var addToCartButtons = document.querySelectorAll('.addToCartBtn');
            var carritoDropdown = document.getElementById('carritoDropdown');

            var carrito = [];

            addToCartButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var productId = this.getAttribute('data-product-id');
                    var productName = this.closest('.card').querySelector('.card-title').innerText;
                    var productPrice = this.closest('.card').querySelector('.card-text:nth-child(3)').innerText.split('$')[1].trim();
                    var productDescription = this.closest('.card').querySelector('.card-text:nth-child(2)').innerText;

                    var existingProduct = carrito.find(item => item.productId === productId);

                    if (existingProduct) {
                        existingProduct.quantity++;
                    } else {
                        carrito.push({
                            productId: productId,
                            name: productName,
                            price: parseFloat(productPrice),
                            description: productDescription,
                            quantity: 1
                        });
                    }
                    actualizarCarritoDropdown();
                    actualizarCarritoCount();

                });
            });

            function actualizarCarritoDropdown() {
                carritoDropdown.innerHTML = '';
                if (carrito.length > 0) {
                    carrito.forEach(function(item) {
                        var listItem = document.createElement('li');
                        listItem.textContent = `${item.name} - Cantidad: ${item.quantity} - Precio: $${item.price * item.quantity}`;
                        carritoDropdown.appendChild(listItem);
                    });
                    var comprarButton = document.createElement('button');
                    comprarButton.textContent = 'Comprar';
                    comprarButton.addEventListener('click', function() {
                        alert('Compra realizada. Implementa la lógica de compra aquí.');
                    });
                    carritoDropdown.appendChild(comprarButton);
                } else {
                    var emptyMessage = document.createElement('li');
                    emptyMessage.textContent = 'El carrito está vacío.';
                    carritoDropdown.appendChild(emptyMessage);
                }
                dropdownList.forEach(function(dropdown) {
                    dropdown.update();
                });
            }

            function actualizarCarritoCount() {
                carritoCountSpan.textContent = carrito.reduce((total, item) => total + item.quantity, 0);
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            var carritoLink = document.getElementById('carrito');
            carritoLink.addEventListener('click', function(e) {
                e.preventDefault();
                carritoDropdown.style.display = (carritoDropdown.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>
</body>

</html>
<?php
        } else {
            echo "No hay productos en la base de datos.";
        }
        // Cierra la conexión
        $conn->close();
?>