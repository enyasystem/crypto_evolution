<!DOCTYPE html>
<html>
  <head>
    <title>Bitcoin Payment Form</title>
    <link rel="stylesheet" href="buy.css">
  </head>
  <body>
    <div class="container">
      <h1>Bitcoin Payment Form</h1>
      <form method="POST" action="process-payment.php">
        <label for="amount">Amount (in BTC):</label>
        <input type="number" name="amount" step="0.00000001" min="0" required>
        <br>
        <label for="address">Recipient Address:</label>
        <input type="text" name="address" required>
        <br>
        <label for="description">Description:</label>
        <input type="text" name="description">
        <br>
        <input type="submit" value="Send Payment">
      </form>
    </div>
    <script src="main.js"></script>
  </body>
</html>
