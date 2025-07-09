<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Smart Methods Task</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Smart Methods Form</h2>
    <form action="insert.php" method="post">
        Name: <input type="text" name="name" required>
        Age: <input type="number" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td id='status_{$row['id']}'>{$row['status']}</td>
                <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
            </tr>";
        }
        ?>
    </table>

    <script>
        function toggleStatus(id) {
            fetch(`toggle.php?id=${id}`, { method: 'POST' })
            .then(response => response.text())
            .then(newStatus => {
                document.getElementById('status_' + id).innerText = newStatus;
            });
        }
    </script>
</body>
</html>
