<?php

include '../configs/DbConn.php';

$sql = "SELECT * FROM authorstb ORDER BY AuthorFullName ASC";
$stmt = $DbConn->prepare($sql);
$stmt->execute();
$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Authors</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Registered Authors</h2>

    <?php if (count($authors) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Author ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Biography</th>
                    <th>Date of Birth</th>
                    <th>Suspended</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author): ?>
                    <tr>
                        <td><?php echo $author['AuthorId']; ?></td>
                        <td><?php echo $author['AuthorFullName']; ?></td>
                        <td><?php echo $author['AuthorEmail']; ?></td>
                        <td><?php echo $author['AuthorAddress']; ?></td>
                        <td><?php echo $author['AuthorBiography']; ?></td>
                        <td><?php echo $author['AuthorDateOfBirth']; ?></td>
                        <td><?php echo ($author['AuthorSuspended'] ? 'Yes' : 'No'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No authors found.</p>
    <?php endif; ?>

</body>
</html>
