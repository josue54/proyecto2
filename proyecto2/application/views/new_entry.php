<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title align="center">New Entry</title>
              
</head>
<body background="back.jpg">

        <?php include('menu.php');?>
        <?=form_open(base_url().'blog/insert_entry/')?>
        <p align="center">Title: <?=form_input('title')?></p>
        <p align="center">Content: <?=form_textarea('content')?></p>
        <p align="center">Tags:<?=form_input('tags')?> (comma separated)</p>
        <center><?=form_submit('submit', 'Insert')?><center>
</body>
</html>
