<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Product</title>
    <style>
      
        body {
            font-family: Arial, sans-serif;
            background-color: #ffc0cb; 
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 70px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

 
        label {
            font-weight: bold;
            color: #ff69b4; /* Warna pink untuk label */
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
            color: #fff;
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
    <h1>Insert Product</h1>
    <form action="<?= base_url('insertproduct') ?>" method="POST">
    <?php echo csrf_field(); ?>
        <label for="nama_product">Nama Product</label>
        <input name="nama_product" type="text" id="nama_product" required>
        <br>
        <br>
        <label for="description">Deskripsi Product</label>
        <input name="description" type="text" id="description" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
