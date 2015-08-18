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

    <!-- Page Content -->
    <div class="container">
        <a href="index.php" class="btn btn-primary">Make Your Own List</a>
        <div class="row page_inner_con">
            <div class="col-xs-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">View Draft List</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Enter your Draft List ID to see the list.">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                  </div>
                </div>
                <div class="my_player_list" id="my_player_list">
                    <?php include('process/view_list.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
