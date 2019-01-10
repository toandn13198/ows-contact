<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact_edit</title>
	<script
      	src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
        <!-- bootstrap 3 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container well well-lg">
     <form method="post" action="/ows-contact/contact/save/<?= $contact_item->id?>">
         <div class="form-group">
             <label for="">Tên</label>
             <input type="text" name="name" value="<?= $contact_item->name ?>" class="form-control">
         </div>
         <div class="form-group">
             <label for="">Số điện thoại 1</label>
             <input type="text" name="phone1" value="<?= $contact_item->phone1 ?>" class="form-control">
         </div>
         <div class="form-group">
             <label for="">Số điện thoại 2</label>
             <input type="text" name="phone2" value="<?= $contact_item->phone2 ?>" class="form-control">
         </div>
         <div class="form-group">
             <label for="">Email</label>
             <input type="text" name="email" value="<?= $contact_item->email ?>" class="form-control">
         </div>
         <div class="form-group">
             <label for="">Facebook</label>
             <input type="text" name="fb" value="<?= $contact_item->fb ?>" class="form-control">
         </div>
         <div class="form-group">
             <label for="">Company</label>
             <input type="text" name="company" value="<?= $contact_item->company ?>" class="form-control">
         </div>
         <input type="submit" value="Cập nhật" class="btn btn-success" />
         <input type="button" value="Xóa" onclick="remove(<?= $contact_item->id?>)" class="btn btn-danger" />
         <button onclick="javascript: history.back()" class="btn btn-default">Quay lại</button>
     </form>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</div>
<script>
	function remove(id) 
    {
        var isConfirm = confirm("Bạn có chắc muốn xóa không?");
        if(isConfirm) {
            $.ajax({
                    url: 'http://localhost/ows-contact/contact/del/'+id,
                    type: 'GET',
                    success: function (data) {
                            alert(data)
                            window.location = "http://localhost/ows-contact";
                    },
                    error: function (e) {
                        alert('Có lỗi !')
                    }
                });
        }
    }
</script>
</body>
</html>