<?php 

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url2 = "http://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]";

if (strpos($url,'pids') !== false) {
    $parts = parse_url($url);
    parse_str($parts['query'], $url_query);
    $url_pids = $url_query['pids'];



$listid = '';

$url_pids_post = str_replace('player_id_', '', $url_pids);


$servername = "localhost";
/**/
$username = "root";
$password = "20vision10";

/*
$username = "nightma7";
$password = "Jiggyfly1~";
*/
$dbname = "nightma7_nhl_mock_draft";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mysql_pid = $conn->real_escape_string($url_pids_post);

$sql = "INSERT INTO list_urls (player_ids)
VALUES ('$mysql_pid');";

if ($conn->query($sql) === TRUE) {
    $listid = $conn->insert_id;
} else {}

$conn->close();

$listid_url = str_replace("save.php", "view_list.php?listid=".$listid."", $url2);

}else{
  header( 'Location: index.php' ) ;
}

?>

<!-- Page Content -->
    <div class="container">
        <a href="index.php" class="btn btn-primary">Make Your Own List</a>
        <div class="row page_inner_con">
            <div class="col-xs-12">
                <div class="panel panel-success">
                  <div class="panel-heading">
                    <h3 class="panel-title">Your Draft List</h3>
                  </div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-12">
                      Copy and remebmer 
                      </div>
                    </div>
                    <div style="padding:7px 0px;"></div>
                    <div class="row">
                      <div class="col-xs-12">
                        <div class="input-group">
                          <input id="view_list_from_id" type="text" class="form-control" value="<?php echo $listid; ?>" disabled>
                          <span class="input-group-btn">
                            <button class="copy_list_id btn btn-default" type="button">Copy</button>
                          </span>
                        </div><!-- /input-group -->
                        <div style="padding:7px 0px;"></div>
                        <div class="input-group">
                          <input id="view_list_from_id" type="text" class="form-control" value="<?php echo $listid_url; ?>" disabled>
                          <span class="input-group-btn">
                            <button class="copy_list_id btn btn-default" type="button">Copy</button>
                          </span>
                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                  </div>
                </div>
                <div class="my_player_list" id="my_player_list">
                </div>
            </div>
        </div>
    </div>