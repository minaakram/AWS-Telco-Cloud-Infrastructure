<?php
include('config.php');
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
echo "<html><head><title>Telco Cloud Portal</title><style>
    body { font-family: Arial; text-align: center; background-color: #f4f7f6; }
    .container { background: white; padding: 20px; display: inline-block; margin-top: 50px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    th { background-color: #0073bb; color: white; padding: 10px; }
    td { padding: 10px; border: 1px solid #ddd; }
</style></head><body>
<div class='container'>
    <h1>Telecom Service Management Portal</h1>";
if ($conn->connect_error) {
    echo "<h3 style='color:red;'>STATUS: DISCONNECTED</h3>";
} else {
    echo "<h3 style='color:green;'>STATUS: CONNECTED TO SUBSCRIBER DB</h3>
    <table><tr><th>Name</th><th>Phone</th><th>Plan</th></tr>
    <tr><td>Mina Akram</td><td>+20123456789</td><td>5G Platinum</td></tr></table>";
}
echo "</div></body></html>";
?>
