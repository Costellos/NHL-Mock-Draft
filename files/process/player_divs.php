<div class="well" id="player_id_<?php echo $id; ?>">
    <div class="row">
        <div class="col-xs-12 col-sm-3">
            <div class="player_img">
                <img src="<?php echo $pic; ?>">
                <p style="padding-top:10px;"><a class="player_remove" href="#<?php echo $id; ?>"><i class="fa fa-times"></i> Remove From My List</a></p>
                <p style="padding-top:10px;"><a class="player_move_up" href="#<?php echo $id; ?>"><i class="fa fa-arrow-up"></i> Move Player Up</a></p>
                <p style="padding-top:10px;"><a class="player_move_down" href="#<?php echo $id; ?>"><i class="fa fa-arrow-down"></i> Move Player Down</a></p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="player_header">
                <div class="player_name"><h2><?php echo $name; ?></h2></div>
                <div class="player_team"><h4><?php echo $team; ?> - <?php echo $league; ?></h4></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div><strong>Final Rank: </strong><?php echo $finalrank; ?></div>
                        <div><strong>Position: </strong><?php echo $pos; ?></div>
                        <div><strong>Height: </strong><?php echo $height; ?></div>
                        <div><strong>Born: </strong><?php echo $born; ?></div>
                        <div><strong>Born In: </strong><?php echo $bornin; ?></div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div><strong>Middel Rank: </strong><?php echo $middelrank; ?></div>
                        <div><strong>Shoots: </strong><?php echo $shoots; ?></div>
                        <div><strong>Weight: </strong><?php echo $weight; ?></div>
                        <div><strong>Hometown: </strong><?php echo $hometown; ?></div>
                    </div>
                </div>
                <div class="player_stats hidden-xs">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Games Played</th>
                            <th>Goals</th>
                            <th>Assists</th>
                            <th>Points</th>
                            <th>Penalty Minutes</th>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>44</td>
                            <td>76</td>
                            <td>120</td>
                            <td>48</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>