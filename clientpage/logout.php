<?php
setcookie("$mycookie1","",time()-3600);
setcookie("$mycookie2","",time()-3600);
session_start();


session_destroy();



header("Location: ..\index.html");