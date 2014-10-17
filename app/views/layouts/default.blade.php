<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ukraine</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body ng-app>

@yield('content')


    <!-- Include jquery in <head> for map hilight -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.maphilight.js"></script>
    <script type="text/javascript">
        $(function () {
            $("img[usemap]").maphilight({
                fill: true,
                fillColor: '00ff00', //00A2CE
                fillOpacity: 0.3,
                stroke: true,
                strokeColor: '330066',
                strokeOpacity: 0.8,
                strokeWidth: 1
            });

            //$("#ukraineMap area").tooltip();

            $("#map area").mouseover(function (e) {
                $('#mapTootTip').html($(this).attr("title"));
                $('#mapTootTip').show();
            });

            $("#map area").mouseout(function () {
                $('#mapTootTip').hide();
            });

            $(".region-list ul li a ").mouseover(function (e) {
                var areaElement = $("#map area[data-key=" + $(this).attr("data-key") + "]");
                areaElement.mouseover();

            }).mouseout(function () {
                var areaElement = $("#map area[data-key=" + $(this).attr("data-key") + "]");
                areaElement.mouseout();
            });
        });
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
