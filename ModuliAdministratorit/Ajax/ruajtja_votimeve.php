<?php
    session_start();
    require("kontrolluesi_databazes.php");
	$dbController = new DBController();
	
	$pergjigja_id  = $_POST['pergjigja'];
	$pyetja_id = $_POST['pyetja'];
	
	$query = "INSERT INTO umdas_votimi(pyetja_id,pergjigja_id,pjesemarresi_id) VALUES ('" . $pyetja_id ."','" . $pergjigja_id . "','" . $_SESSION["pjesemarresi_id"] . "')";
    $insert_id = $dbController->insertQuery($query);
    
    if(!empty($insert_id)) {
        $query = "SELECT * FROM umdas_pergjigjet WHERE pyetja_id = " . $pyetja_id;
        $pergjigja = $dbController->runQuery($query);
    }
    
    if(!empty($pergjigja)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $query = "SELECT count(pergjigja_id) as total_count FROM umdas_votimi WHERE pyetja_id = " . $pyetja_id;
        $total_rating = $dbController->runQuery($query);

        foreach($pergjigja as $k=>$v) {
            $query = "SELECT count(pergjigja_id) as pergjigja_count FROM umdas_votimi WHERE pyetja_id = " .$pyetja_id . " AND pergjigja_id = " . $pergjigja[$k]["id"];
            $pergjigja_rating = $dbController->runQuery($query);
            $pergjigjjet_count = 0;
            if(!empty($pergjigja_rating)) {
                $pergjigjjet_count = $pergjigja_rating[0]["pergjigja_count"];
            }
            $perqindja = 0;
            if(!empty($total_rating)) {
                $perqindja = ( $pergjigjjet_count / $total_rating[0]["total_count"] ) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $pergjigja[$k]["pergjigja"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick= "shfaqja_votimeve();">Vazhdo</button>
</div>