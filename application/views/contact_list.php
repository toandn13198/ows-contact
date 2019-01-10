<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact_list</title>
    <!-- bootstrap 3 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
</head>
<body>
	<div class="container well well-lg" >
    <h1>Danh bạ</h1>

    <div id="body">
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Số điện thoại</th>
                <th></th>
            </tr>
         <?php foreach ($contacts as $idx => $item): ?>
		    <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
		        <td class="center"><?= $idx+1 ?></td>
		        <td><?= $item->name ?></td>
		        <td><?= $item->phone1 ?> - <?= $item->phone2 ?></td>
		        <td class="center"><a href="contact/edit/<?= $item->id ?>">Chi tiết</a></td>
		    </tr>
    	<?php endforeach; ?>
        </table>

        <a href="contact/add" class="btn"><button class="btn btn-primary" >Thêm mới</button></a>
    </div>

    <p class="footer">Website được thiết kế bởi OWS Việt Nam</p>
</div>
<!-- jQuery library- bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>