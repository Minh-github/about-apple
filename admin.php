<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header"><i class="fab fa-apple"></i></div>
        <div class="menu">
            <ul>
                <li class="logo"><a href="index.php"><i class="fas fa-home"></i></i></a></li>
                <button class="list active" onclick="window.location.href='#'"><i class="icon2 fal fa-table"></i>Bảng điều khiển</a></button>
                <button class="list" onclick="window.location.href='#'"><i class="icon2 fal fa-plus-circle"></i>Thêm sản phẩm</a></button>
                <button class="list" onclick="window.location.href='#'"><i class="icon2 fal fa-cog"></i>Chỉnh sửa</a></button>
                <button class="list" onclick="window.location.href='#'"><i class="icon2 fal fa-trash-alt"></i>Xóa sản phẩm</a></button>
                <button class="btn"><a href="#">submit</a></button>
            </ul>
        </div>
        <div class="content">
            <div class="iphone">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel impedit iste facere nobis ipsam molestias officia totam! 
            Fuga, tempora saepe accusantium blanditiis consequuntur iure autem vel, officiis ex, rem dignissimos?
            </div>
            <div class="iphone">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel impedit iste facere nobis ipsam molestias officia totam! 
            Fuga, tempora saepe accusantium blanditiis consequuntur iure autem vel, officiis ex, rem dignissimos?
            </div>
            <div class="iphone">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel impedit iste facere nobis ipsam molestias officia totam! 
            Fuga, tempora saepe accusantium blanditiis consequuntur iure autem vel, officiis ex, rem dignissimos?
            </div>
            <div class="iphone">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel impedit iste facere nobis ipsam molestias officia totam! 
            Fuga, tempora saepe accusantium blanditiis consequuntur iure autem vel, officiis ex, rem dignissimos?
            </div>
            <div class="iphone">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Vel impedit iste facere nobis ipsam molestias officia totam! 
            Fuga, tempora saepe accusantium blanditiis consequuntur iure autem vel, officiis ex, rem dignissimos?
            </div>
        </div>
    </div>
</body>
<script>
        const menuItems = document.querySelectorAll(".list");
        menuItems.forEach(item => item.addEventListener("click",function(event){
            menuItems.forEach(el =>el.classList.remove("active"));
            event.target.classList.add("active");
        })); 
</script>
</html>