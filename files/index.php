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
        <a href="#test-popup" class="popup-btn btn btn-primary">Add Players</a>
        <a href="#save-popup" class="popup-btn btn btn-success">Save</a>
        <a href="#clear-popup" class="popup-btn btn btn-danger">Reset</a>
        <a href="#" id="display" class="btn btn-primary">test</a>
        <div class="row page_inner_con">
            <div class="col-xs-12">
                <div class="my_player_list" id="my_player_list">
                    
                </div>
            </div>
        </div>
    </div>


    <div id="test-popup" class="white-popup-full mfp-hide">
      <div class="row">
            <div class="col-xs-12">
                <h2>Add Players</h2>
                <p>Click the <i class="fa fa-plus"></i> next to a players name to add them to your list. Click the <i class="fa fa-info"></i> or their name to open an new winodw with info about the player.</p>
                <div class="player_sidebar">
                <div role="tabpanel">
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#nas" aria-controls="nas" role="tab" data-toggle="tab">North American Skaters</a></li>
                        <li role="presentation"><a href="#es" aria-controls="es" role="tab" data-toggle="tab">European Skaters</a></li>
                        <li role="presentation"><a href="#nag" aria-controls="nag" role="tab" data-toggle="tab">North American Goalies</a></li>
                        <li role="presentation"><a href="#eg" aria-controls="eg" role="tab" data-toggle="tab">European Goalies</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="nas">
                            <div class="tab_content">
                                <table id="player-table" class="table table-striped table-hover table-center">
                                    <thead>
                                        <tr>
                                            <th>Projected Pick</th>
                                            <th>Player Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>Projected Pick</th>
                                            <th>Player Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="es">
                            <div class="tab_content">
                                Coming Soon
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="nag">
                            <div class="tab_content">
                                Coming Soon
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="eg">
                            <div class="tab_content">
                                Coming Soon
                            </div>
                        </div>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="save-popup" class="white-popup mfp-hide">
        <h2>Saved</h2>
        <p class="bg-success">Your mock draft has been saved.</p>
        <button type="button" class="close-reset-pop btn btn-primary">Continue Working</button>
        <button type="button" class="continue_to_list close-reset-pop btn btn-primary">Continue To List</button>
    </div>
    <div id="clear-popup" class="white-popup mfp-hide">
        <h2>List Reset</h2>
        <p class="bg-danger">Are you sure you want to clear this list?</p>
        <button type="button" class="close-reset-pop close-reset-pop-yes btn btn-default ">Yes</button>
        <button type="button" class="close-reset-pop btn btn-default">No</button>
    </div>

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
            $('#myTab a:first').tab('show') // Select first tab
            $('#myTab a').click(function (e) {
              e.preventDefault()
              $(this).tab('show')
            })
            $(".my_player_list").sortable({
                tolerance: 'pointer',
                revert: 'invalid',
                placeholder: 'well placeholder',
                forceHelperSize: true
            });
            // Initialize popup as usual
            $('.popup-btn').magnificPopup({ 
              // Delay in milliseconds before popup is removed
              removalDelay: 300,
              overflowY: 'scroll',

              // Class that is added to popup wrapper and background
              // make it unique to apply your CSS animations just to this exact popup
              mainClass: 'mfp-fade',
              callbacks: {open: function() {$('.navbar-fixed-top').css('overflow-y', 'scroll');},close: function() {$('.navbar-fixed-top').css('overflow-y', 'hidden');}}
            });
            $('.close-reset-pop').click(function() {
                $.magnificPopup.close(function() {
                    $('html').css('overflow-y', 'scroll');
                }); // Close popup that is currently opened (shorthand)
            });
            $('.close-reset-pop-yes').click(function(){
                $("#my_player_list").empty();
            });

            $('.continue_to_list').click(function(){
                var IDs = [];
                $("#my_player_list").find('[id^="player_id_"]').each(function(){ IDs.push(this.id); });
                if(IDs.length <1){
                    alert('You dont have any players in your list');
                }else{
                    window.location = 'save.php?pids=' + IDs;
                }
                
            });
        } );

        $(document).ready(function() {
            var table = $('#player-table').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "process/player_tables.php",
                "columnDefs": [ {
                    "targets": -1,
                    "data": null,
                    "defaultContent": "<button>+</button>"
                } ]
            });
         
            $('#player-table tbody').on( 'click', 'button', function () {
                var data = table.row( $(this).parents('tr') ).data();
                $.ajax({    //create an ajax request to load_page.php
                type: "GET",
                url: "process/display_player.php",
                data: { id: data[2] },             
                dataType: "html",   //expect html to be returned                
                success: function(response){
                    var player_id = $('#player_id_'+data[2]);
                    if($(player_id).length == 0) {
                      $("#my_player_list").append(response);
                        alert( data[1] +" Has Been Added." );
                    }else{
                        alert( data[1] +" Is already in your list." );
                    }          
                    }   
                });
            } );
            
        } );

        $(document).on("click", ".player_remove", function() {
            var player_id = $(this).closest('.well').attr('id');
            $('#'+player_id).remove();
            alert('Player Removed');
        });

        $(document).on("click", ".player_move_up", function() {
            var player_id_pre = $(this).closest('.well').attr('id');
            var player_above_id_pre = $(this).closest('.well').prev('.well').attr('id');
            var player_id = $('#'+player_id_pre);
            var player_above_id = $('#'+player_above_id_pre);
            if(player_above_id_pre !== undefined){
                player_id.detach();
                player_above_id.before(player_id);
            }else{
                alert('We cant move this player up. He is already at the top of the list');
            }
        });
        $(document).on("click", ".player_move_down", function() {
            var player_id_pre = $(this).closest('.well').attr('id');
            var player_before_id_pre = $(this).closest('.well').next('.well').attr('id');
            var player_id = $('#'+player_id_pre);
            var player_before_id = $('#'+player_before_id_pre);
            if(player_before_id_pre !== undefined){
                player_id.detach();
                player_before_id.after(player_id);
            }else{
                alert('We cant move this player down. He is already at the bottom of the list');
            }
        });

        $(document).ready(function() {
            $("#display").click(function() {            

            $.ajax({    //create an ajax request to load_page.php
                type: "GET",
                url: "process/display.php",             
                dataType: "html",   //expect html to be returned                
                success: function(response){                    
                    $("#my_player_list").html(response); 
                    }   
                });
            });
        });
    </script>
</body>

</html>
