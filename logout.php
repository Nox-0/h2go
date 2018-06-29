<?php
//This starts the session
session_start();
//This destroys the session, meaning that all of the data associated with this session is scrapped, thus logging you out
session_destroy();
//redirects the user to index.php
header('Location: index.php');
?>
