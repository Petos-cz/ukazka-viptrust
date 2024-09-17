<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIP Trust s.r.o. - Ukázka mé práce</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fff;
            color: #333;
        }

        nav {
            background-color: #333;
            width: 100%;
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10;
            display: flex;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            color: #fff;
            font-size: 1.2em;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        nav a:hover {
            background-color: #ffcc00;
            color: #333;
        }

        header {
            background-color: #000;
            height: 60vh;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            margin-top: 60px;
        }

        header h1 {
            font-size: 3.5em;
            font-weight: 900;
            color: #ffcc00;
            margin-bottom: 20px;
        }

        .container {
            padding: 50px 20px;
            max-width: 1200px;
            margin: -100px auto 0;
            background-color: #fff;
            border: 2px solid #ffcc00;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .container h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000;
        }

        .container p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #666;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #ffcc00;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }


        .cta-button {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 30px;
            background-color: #ffcc00;
            color: #000;
            border-radius: 30px;
            font-size: 1.2em;
            text-transform: uppercase;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #e6b800;
        }

        footer {
            background-color: #000;
            color: #ffcc00;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
            font-size: 1em;
        }

        form {
            margin: 50px auto;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border: 2px solid #ffcc00;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-size: 1.2em;
            margin-bottom: 10px;
            display: block;
            color: #000;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }

        form button {
            background-color: #ffcc00;
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            text-transform: uppercase;
        }

        form button:hover {
            background-color: #e6b800;
        }
        
        body {
            font-family: Arial, sans-serif;
        }
        .chat-container {
            width: 80%;
            margin: 0 auto;
            max-width: 600px;
        }
        .messages {
            border: 1px solid #ddd;
            padding: 10px;
            height: 300px;
            overflow-y: scroll;
            margin-bottom: 10px;
        }
        .message {
            border-bottom: 1px solid #eee;
            padding: 5px 0;
        }
        .message:last-child {
            border-bottom: none;
        }
        .message-user {
            font-weight: bold;
        }

        body {
            font-family: Arial, sans-serif;
        }
        .e-container {
            width: 80%;
            margin: 0 auto;
            max-width: 800px;
        }
        .product, .cart-item {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }
        .product-title, .cart-item-title {
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav>
    <a href="#">Domů</a>
    <a href="#">Služby</a>
    <a href="#">Produkty</a>
    <a href="#">Kontakt</a>
</nav>

<header>
    <h1>VIP Trust s.r.o. - Ukázka mé práce</h1>
</header>

<div class="container">
    <h2>Vítejte na stránce</h2>
    <p>
    Rád bych Vám představil malou ukázku toho, co umím v PHP. Vytvořil jsem několik jednoduchých aplikací, 
    jako jsou e-shop nebo chat, které ukazují mé základní dovednosti v tvorbě dynamických webových funkcí. V této ukázce jsem se 
    záměrně vyhnul použití databází, i když s nimi také umím pracovat, abych se mohl zaměřit na jiné aspekty PHP.
    Těším se až vám ukážu, co všechno umím, a jak bych mohl přispět k vašim projektům.
    </p>
    <a href="#" class="cta-button">Zjistit více</a>
</div>

<form action="" method="POST">
    <h2 align="center">Kontaktujte nás</h2>
    <label for="name">Jméno:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Zpráva:</label>
    <textarea id="message" name="message" rows="5" required></textarea>

    <button type="submit">Odeslat</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "posiwer159@gmail.com";
    $subject = "Nová zpráva od $name";
    $body = "Jméno: $name\nEmail: $email\n\nZpráva:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='text-align: center; color: green;'>Zpráva byla úspěšně odeslána.</p>";
    } else {
        echo "<p style='text-align: center; color: red;'>Došlo k chybě při odesílání zprávy.</p>";
    }
}
?>


<div class="form-container">
    <h1>Rezervační Formulář</h1>
    <form action="" method="POST">
        <label for="name">Jméno:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="date">Datum rezervace:</label>
        <input type="date" id="date" name="date" required>

        <button type="submit">Rezervovat</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);

    $to = "posiwer159@gmail.com";
    $subject = "Nová rezervace od $name";
    $body = "Jméno: $name\nEmail: $email\nDatum rezervace: $date";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color: green; text-align: center;'>Rezervace byla úspěšně odeslána.</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Chyba při odesílání rezervace.</p>";
    }
}
?>


<br><br>
<?php
session_start();


if (!isset($_SESSION['books'])) {
    $_SESSION['books'] = [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    $_SESSION['books'][] = [
        'title' => $title,
        'author' => $author,
        'year' => $year
    ];
}


$books = $_SESSION['books'];
?>
<h1>Knihovna</h1>
    <form method="post" action="">
        <input type="text" name="title" placeholder="Název" required>
        <input type="text" name="author" placeholder="Autor" required>
        <input type="number" name="year" placeholder="Rok vydání" required>
        <button type="submit" name="add">Přidat knihu</button>
    </form>

    <ul>
    <div class="form-container">
        <h2 align="center">Knihy</h2>
        <br>
        <?php foreach ($books as $book): ?>
            <li><?php echo htmlspecialchars($book['title']) . ' od: ' . htmlspecialchars($book['author']) . ' (' . htmlspecialchars($book['year']) . ')'; ?></li>
        <?php endforeach; ?>
    </div>
</ul>
<br><br>
<?php
session_start();

if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    $user = $_POST['user'];
    $message = $_POST['message'];

    if (!empty($user) && !empty($message)) {
        $_SESSION['messages'][] = [
            'user' => htmlspecialchars($user),
            'message' => htmlspecialchars($message),
            'date' => date('Y-m-d H:i:s')
        ];
    }
}

$messages = $_SESSION['messages'];
?>
<div class="chat-container">
        <h1>Chat</h1>
        <div class="messages">
            <?php foreach ($messages as $msg): ?>
                <div class="message">
                    <div class="message-user"><?php echo $msg['user']; ?> <em>(<?php echo $msg['date']; ?>)</em>:</div>
                    <div class="message-text"><?php echo $msg['message']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <form method="post" action="">
            <input type="text" name="user" placeholder="Jméno a Příjmení" required>
            <textarea name="message" placeholder="Tvoje zpráva..." rows="3" required></textarea>
            <button type="submit" name="send">Odeslat</button>
        </form>
    </div>
<br><br>


<?php
include 'config.php';

// Přidání produktu do košíku
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productId = intval($_POST['product_id']);
    
    // Zjistit produkt z konfigurace
    foreach ($products as $product) {
        if ($product['id'] === $productId) {
            $productName = $product['name'];
            $productPrice = $product['price'];
            break;
        }
    }

    // Přidat produkt do košíku
    if (isset($productName)) {
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = ['name' => $productName, 'price' => $productPrice, 'quantity' => 1];
        } else {
            $_SESSION['cart'][$productId]['quantity']++;
        }
    }
}

// Získání produktů a košíku
$cart = $_SESSION['cart'];
?>
<div class="e-container">
        <h1>Jednoduchý E-Shop</h1>
        
        <h2>Produkty</h2>
        <?php foreach ($products as $product): ?>
            <div class="product">
                <div class="product-title"><?php echo htmlspecialchars($product['name']); ?></div>
                <div>Cena: $<?php echo htmlspecialchars($product['price']); ?></div>
                <form method="post" action="">
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                    <button type="submit" name="add_to_cart">Přidat do košíku</button>
                </form>
            </div>
        <?php endforeach; ?>

        <h2>Košík</h2>
        <?php if (!empty($cart)): ?>
            <ul>
                <?php foreach ($cart as $item): ?>
                    <li class="cart-item">
                        <div class="cart-item-title"><?php echo htmlspecialchars($item['name']); ?></div>
                        <div>Cena: $<?php echo htmlspecialchars($item['price']); ?></div>
                        <div>Počet: <?php echo htmlspecialchars($item['quantity']); ?></div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div><strong>Celkem: $<?php echo array_sum(array_column($cart, 'price')) ?></strong></div>
        <?php else: ?>
            <p>Košík je prázdný...</p>
        <?php endif; ?>
    </div>

<footer>
    <p>&copy; 2024 VIP Trust s.r.o. - Ukázka mé práce</p>
</footer>

</body>
</html>