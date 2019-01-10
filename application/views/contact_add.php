<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact_add</title>
    <!-- bootstrap 3 css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container well well-lg">  
        <form method="post" action="save" id="form">
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập tên.">
            </div>
            <div class="form-group">
                <label for="">Số điện thoại 1</label>
                <input type="text" name="phone1" class="form-control" placeholder="Nhập số điện thoại 1."> 
            </div>
            <div class="form-group">
                <label for="">Số điện thoại 2</label>
                <input type="text" name="phone2" class="form-control" placeholder="Nhập số điện thoại 2.">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Nhập email.">
            </div>
            <div class="form-group">
                <label for="">Facebook</label>
                <input type="text" name="fb" class="form-control" placeholder="Nhập facebook.">
            </div>
            <div class="form-group">
                <label for="">Company</label>
                <input type="text" name="company" class="form-control" placeholder="Nhập tên công ty.">
            </div>
            <button class="btn btn-primary" type="submit">Thêm mới</button>
        </form>
    </div>
	
<!-- jQuery library- bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- boostrapValidator -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script >
    // validator lb
    $(document).ready(function() {
        $('form').bootstrapValidator({
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields:{
            name:{
                 validators:{
                    notEmpty:{
                        message:"<i class='fa fa-exclamation-circle'></i> Vui lòng nhập dữ liệu tại đây."
                    },
                 }
            },
            phone1:{
                validators:{
                    notEmpty:{
                        message:"<i class='fa fa-exclamation-circle'></i> Vui lòng nhập dữ liệu tại đây."
                    },
                    regexp:{
                        regexp:/^[0-9]+$/,
                        message:"<i class='fa fa-exclamation-circle'></i>Số điện thoại không hợp lệ"
                    }
                 }
             },
             phone2:{
                validators:{
                    notEmpty:{
                        message:"<i class='fa fa-exclamation-circle'></i> Vui lòng nhập dữ liệu tại đây."
                    },
                    regexp:{
                        regexp:/^[0-9]+$/,
                        message:"<i class='fa fa-exclamation-circle'></i>Số điện thoại không hợp lệ"
                    }
                 }
            },
            email:{
                validators:{
                    notEmpty:{
                        message:"<i class='fa fa-exclamation-circle'></i> Vui lòng nhập dữ liệu tại đây."
                    },
                    regexp:{
                        regexp:/^[a-zA-Z]+[a-zA-Z0-9\.\_]*[A-Za-z0-9]+@{1}[a-zA-Z]+[a-zA-Z0-9]*(\.[a-z]{2,})+$/,
                        message:"<i class='fa fa-exclamation-circle'></i>Địa chỉ email không hợp lệ"
                    }
                 }
             },
            fb:{
                validators:{
                    notEmpty:{
                        message:"<i class='fa fa-exclamation-circle'></i> Vui lòng nhập dữ liệu tại đây."
                    },
                 }
             },
             company:{
                validators:{
                    notEmpty:{
                        message:"<i class='fa fa-exclamation-circle'></i> Vui lòng nhập dữ liệu tại đây."
                    },
                 }
             },

        },
        })
    });
</script>
</body>
</html>