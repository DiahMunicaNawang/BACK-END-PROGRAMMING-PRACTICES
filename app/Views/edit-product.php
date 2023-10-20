<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Edit Product</title>
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

        form {
            background-color: #fff;
            padding: 70px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #ff69b4; 
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #ff69b4; 
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-weight: bold;
        }

        button:hover {
            background-color: #ff1493; 
        }
    </style>
</head>
<body>
    <form action="<?= base_url('edit-product/'.$product->id)?>" method="POST">
        <label for="nama_product">Nama Product</label>
        <input name="nama_product" type="text" value="<?= $product->nama_product ?>" id="nama_product">
        <label for="description">Deskripsi Product</label>
        <input name="description" type="text" value="<?= $product->description ?>" id="description">
        <button type="submit">Update</button>
    </form>
</body>
</html>
