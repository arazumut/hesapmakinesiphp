<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-image: url(backiee-287922.jpg);
        }
        input, button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
        }
        .h2{
            color: red;
            font-style: italic;
        }
        .p{
            color: blue;
        }
        .p2{
            color: yellow;
            font-style: italic;
        }
    </style>
</head>
<p class="p2">by Kamil Umut Araz
    instagram  : k.umutarazz
</p>

<body>

    <h2 class="h2">Hesap Makinesi</h2>

    <?php
        // Form'dan gelen verileri kontrol et
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            // İşlemi gerçekleştir
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    // Sıfıra bölme hatasını kontrol et
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Sıfıra bölme hatası!";
                    }
                    break;
                default:
                    $result = "Geçersiz operatör!";
                    break;
            }
        }
    ?>

    <form method="post" action="">
        <input type="number" name="num1" placeholder="Sayı 1" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Sayı 2" required>
        <button type="submit" name="submit">Hesapla</button>
    </form>

    <?php
        // Sonucu ekrana yazdır
        if(isset($result)){
            echo "<p>Sonuç: $result</p>";
        }
    ?>
<p class="p">Hesap Makinasına Hoşgeldinizzz!!</p>
</body>
</html>
