
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dashboard</title>
        <?php include('top_header.php');

        require_once($_SESSION['user']['type']."/home.php");

        require_once($_SESSION['user']['type']."/footer.php");
        ?>