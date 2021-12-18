<?php session_start(); 
$id_session = session_id();
?>
<!Doctype html>
<html lang="en">
<head>
    <link rel ="stylesheet" type="text/css" href="design.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script-->
    <link rel="shortcut icon" href="#"/>
    <title>AXG to Salesforce</title>
</head>
<body>

    <section class="top" id="toppage">
    <form class="formlogin" method="post" action="home.php">
    <?php     
    if(isset($_POST['name']) && isset($_POST['password'])) {
               foreach ($users as $user) {
                    if($user['name'] === $_POST['name'] && $user['password'] === $_POST['password']) {
                        $loggedUser = ['name' => $user['name']]; 
                   } elseif (empty($_POST['name']) || empty($_POST['password'])) {
                    $errorMessage = sprintf('Veuillez remplir les deux champs pour vous connecter.');
                    }}} ?>
            <?php if(!isset($loggedUser)): ?>
                <?php if(isset($errorMessage)): ?>
                    <div class="alertError" role="alert"> <?php echo $errorMessage; ?></div>
            <?php endif; ?>
            <?php endif; ?>
        <h1 class="pageTitle">AXG To Salesforce UI</h1>
            <button class="logine" id='blog' type='submit'>Login</button>
            <input type="text" class="loginId" id="loginId" maxlength="20" placeholder='Enter name' name='name' required>
            <input type="password" class="loginMdp" id="loginMdp" maxlength="20" placeholder='Enter password' name='password' required>
        </form>
    </section>

<script> 
const formlogin  = document.querySelector('.formlogin');
const loginId    = document.querySelector('#loginId');
const loginMdp   = document.querySelector('#loginMdp');
const btnlog     = document.querySelector('.logine');

loginId.style.display = 'block';
loginMdp.style.display = 'block';
btnlog.style.display = 'block';
</script>

</body>
</html>