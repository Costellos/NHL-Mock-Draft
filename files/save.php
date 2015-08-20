<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup-effects.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    html{overflow-y:scroll;}
    .player_sidebar{
    }
    .page_con{
        margin-top: -20px;
    }
    .page_inner_con{
        padding: 20px 0px;
    }
    .tab_content{
        padding: 20px;
        border-left: 1px solid #ddd;
        border-right:1px solid #ddd;
        border-bottom:1px solid #ddd;
        -webkit-border-bottom-right-radius: 5px;
        -webkit-border-bottom-left-radius: 5px;
        -moz-border-radius-bottomright: 5px;
        -moz-border-radius-bottomleft: 5px;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .ps_name{

    }
    .ps_rm{
        padding-left: 35px;
    }
    .pn_rm{
        font-size: 15px!important;
    }
    .table-center td, .table-center th{
        text-align: center;   
    }
    .icon_sep{
        font-weight: bold;
    }
    .player_stats{
        padding-top: 20px;
    }
    .placeholder {
        border: 1px solid green;
        background-color: white;
        -webkit-box-shadow: 0px 0px 10px #888;
        -moz-box-shadow: 0px 0px 10px #888;
        box-shadow: 0px 0px 10px #888;
    }
    </style>
</head>

<body>

    <?php include('parts/header.php');?>
    <?php include('process/save_list.php'); ?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.view_list_from_id_btn').click(function(){
                var form_id = $('#view_list_from_id').val();
                $.ajax({    //create an ajax request to load_page.php
                type: "POST",
                url: "process/view_list_form.php",
                data: { listid: form_id }, 
                dataType: "html",   //expect html to be returned                
                success: function(response){
                    $("#my_player_list").empty();
                    $("#my_player_list").html(response); 
                }
            });
            });
        } );
    </script>

</body>

</html>
