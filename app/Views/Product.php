<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DView Product</title>
    <style>
      
        body {
            font-family: Arial, sans-serif;
            background-color: #ffc0cb;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        button {
            background-color: #ff69b4; 
            color: white;
            border: none;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #ffccdd; 
        }

        th {
            background-color: #ff69b4; 
            color: white;
        }
    </style>
</head>
<body>
    <h1>Product List Diah Munica Skincare Shop</h1>
    <button><a href="/insertproduct" style="color: white;">Tambah Product</a></button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product->id; ?></td>
                    <td><?php echo $product->nama_product; ?></td>
                    <td><?php echo $product->description; ?></td>
                    <td>
                        <a href="<?= base_url("/edit-product/") . $product->id?>" style="color: #ff69b4;">Edit</a>
                        <a href="<?= base_url("/delete-product/") . $product->id?>" style="color: #ff69b4;">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
