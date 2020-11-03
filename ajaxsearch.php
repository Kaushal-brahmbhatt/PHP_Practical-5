<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#searchbox").on('keyup',function () {
                var key = $(this).val();
    
                $.ajax({
                    url:'fetch.php',
                    type:'GET',
                    data:'keyword='+key,
                    beforeSend:function () {
                        $("#results").slideUp('fast');
                    },
                    success:function (data) {
                        $("#results").html(data);
                        $("#results").slideDown('fast');
                    }
                });
            });
        });
    </script>
    <style>
        #main {
    position: absolute;
    width: 70%;
    left:15%;
    top:0;
    height:100%;
    background: #e3dfd7;
    overflow-y: hidden;
}
#header { padding: 20px;}
#header h1 {
    color:#222222;
}
#content {
    height: inherit;
    background: #ebebeb;
    width: 100%;
    padding:20px;
    box-sizing: border-box;
}
#content input {
    width: 100%;
    font-size:20px;
    color: #424242;
    padding:10px;
}
#results{
    width:100%;
    display: none;
    bordder-bottom:1px solid black;
    bordder-left:1px solid black;
    bordder-right:1px solid black;
}
#results #item {
    box-sizing: border-box;
    padding:10px;
    font-size:18px;
    width: 100%;
    background: white;
    border-bottom:1px solid #bdbdbd;
}
</style>
</head>
<body>
    <div id="main">
        <div id="header"><h1>Search usernames </h1></div>
        <div id="content">
            <input type="search" name="keyword" placeholder="Search Names" id="searchbox">
            <div id="results"></div>
        </div>
    </div>
</body>
</html>