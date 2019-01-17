<!DOCTYPE html>
<html lang="en">
<head>
  <title>Words Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Words Table</h2>
     
<p>words table examole</p>

  <table class="table table-striped">
     <thead>
      <tr>
        <th>term_ID</th>
        <th>term_name</th>
        <th>start_word</th>
        <th>difficulty</th>
      </tr>
    </thead>
    <tbody>
    
        <?php foreach ($words as $word) { ?>
          <tr>
        <th><?php echo $word["term_ID"]; ?></th>
        <th><?php echo $word["term_name"]; ?></th>
        <th><?php echo $word["start_word"]; ?></th>
        <th><?php echo $word["difficulty"]; ?></th>
      </tr>
        <?php
      }
        ?>
              
    </tbody>
  </table>
</div>

</body>
</html>
