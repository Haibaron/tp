<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理</title>
    <include file="./Application/Admin/View/Index/css.php" />
</head>
<body>
    <div id="wrapper">
       <include file="./Application/Admin/View/Index/left.php" />
        <!--right-->
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
           <include file="./Application/Admin/View/Index/header.php" />
            </div>
             <!--中间内容 -->
         
             {__CONTENT__}
            <include file="./Application/Admin/View/Index/footer.php" />
        </div>

    </div>
  <include file="./Application/Admin/View/Index/js.php" />

</body>
</html>
