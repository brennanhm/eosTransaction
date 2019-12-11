<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Send EOS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

<h1>Submit EOS Transaction</h1>
<p>0.001 EOS will be sent from Wallet #1 to Wallet #2</p>
<form action="/submit_transaction.php">
  <div class="form-group">
    <label for="memo">Memo:</label>
    <input type="text" class="form-control" id="memo">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html>
