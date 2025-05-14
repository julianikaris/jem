<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian 10x10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #87CEFA, #D8BFD8);
            padding: 30px;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: auto;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            background: white;
        }

        th, td {
            border: 2px solid #5A5AFA;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            transition: 0.3s;
        }

        th {
            background: linear-gradient(to right, #5A5AFA, #A070FF);
            color: white;
        }

        td {
            background: #E0E0FF;
        }

        tr:nth-child(even) td {
            background: #C8C8FF;
        }

        td:hover {
            background: #A8A8FF;
            transform: scale(1.1);
            font-weight: bold;
            color: #2600ff;
        }

        h1 {
            color: #2600ff;
            font-size: 32px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <h1>✨ Tabel Perkalian 10x10 ✨</h1>

    <table>
        <tr>
            <th>&times;</th>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Kolom pertama menunjukkan angka pertama
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
