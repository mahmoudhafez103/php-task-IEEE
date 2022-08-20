<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>NAme</th>
            <th>email</th>
            <?php if($userRole==1):?>
            <th>update</th>
            <th>delete</th>
            <?php endif; ?>
        </tr>

        <?php  foreach($data as $user):?>

        <tr>
            <td>
                <?=$user['id'] ?>
            </td>
            <td>
                <?=$user['name'] ?>
            </td>
            <td>
                <?=$user['email'] ?>
            </td>
            <?php if($userRole==1):?>
            <td><a href="updateuser.php?id=<?=$user['id'];?>">upadte</a></td>
            <td><a href="deleteuser.php?id=<?=$user['id'];?>">delete</a></td>
            <?php endif; ?>
        </tr>
        <?php endforeach;?>


    </table>
</body>

</html>