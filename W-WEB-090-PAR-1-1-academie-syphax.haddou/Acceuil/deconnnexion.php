<?php

echo "deconnecter";
session_unset();
session_destroy();
header('Location: connextion.php'); 