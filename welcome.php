<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Sambungkan ke database
$conn = new mysqli("localhost", "root", "", "web_login");
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Fungsi untuk menambah produk
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_product'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    $insert_query = "INSERT INTO products (product_name, product_price) VALUES ('$product_name', '$product_price')";
    if ($conn->query($insert_query) === TRUE) {
        header("Location: welcome.php"); // Redirect untuk menghindari pengiriman ulang formulir
    } else {
        echo "Gagal menambahkan produk: " . $conn->error;
    }
}

// Fungsi untuk menghapus produk
if (isset($_GET['delete_product'])) {
    $product_id = $_GET['delete_product'];
    $delete_query = "DELETE FROM products WHERE id = $product_id";
    if ($conn->query($delete_query) === TRUE) {
        header("Location: welcome.php");
    } else {
        echo "Gagal menghapus produk: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        h3 {
            text-align: center;
            margin-top: 10px;
        }

        h4 {
            margin-top: 20px;
        }

        form {
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 0 auto;
            width: 50%;
        }

        form label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #0074cc;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        a {
            text-decoration: none;
            color: #0074cc;
        }
    </style>
</head>

<body>
    <h2>Product Management</h2>
    <h3>Welcome,
        <?php echo $_SESSION['username']; ?>!
    </h3>

    <!-- Form untuk menambah produk -->
    <h4>Add Product</h4>
    <form method="post" action="welcome.php">
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" id="product_name" required><br>

        <label for="product_price">Product Price:</label>
        <input type="text" name="product_price" id="product_price" required><br>

        <input type="submit" name="add_product" value="Add Product">
    </form>

    <!-- Daftar Produk -->
    <h4>Product List</h4>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>
        <?php
        // Ambil data produk dari database
        $query = "SELECT * FROM products";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['product_name'] . "</td>";
                echo "<td>" . $row['product_price'] . "</td>";
                echo "<td><a href='welcome.php?delete_product=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        }
        ?>
    </table>

    <br>
    <a href="logout.php">Logout</a>
</body>

</html>