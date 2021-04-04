<?php

require_once "dbConnection.inc";


$code = $_GET['code'];
$sql = "UPDATE freelance_info SET freelance_email_validation = '1' WHERE freelance_email_code = '$code'";
$conn->query($sql);
echo "<script>alert('Email Verification Success'); window.location.href = 'login.php?account_status=success'</script>";
