<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $GLOBALS['path'] ?>/css/style.css">
    <title>User</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <h1>Daftar User</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['users'] as $user) : ?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->password ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>