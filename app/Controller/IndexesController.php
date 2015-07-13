<?php
class IndexesController extends AppController {

	
	
    function indexing($user_id=null){
		
		$db = mysqli_connect("farookpg.cbj29qizqyan.ap-southeast-1.rds.amazonaws.com", "mentor", "m3nt0r#DB", "fkpg_db") or die("No db connection");
		//$db = mysqli_connect("localhost", "root", "", "farookmail") or die("No db connection");
		//echo 'hii'; exit;
		$this->autoRender = false;
        $cg1 = '$this->overall_cgpa($mark)';
        $cg2 = '$this->core_cgpa($mark)';
        $c1 = '$this->overall_credits($mark, $total_credits, $credit_tracking)';
        $c2 = '$this->core_credits($mark, $total_credits, $credit_tracking)';
        $cg3 = '$this->comp1_cgpa($mark)';
        $c3 = '$this->comp1_credit($mark)';
		$cg4 = '$this->comp2_cgpa($mark)';
        $c4 = '$this->comp2_credit($mark)';

        $indexing_rules = array();
        $indexing_rules['M.A English'] = array(
            'M' => '',
            'G' => "\$index = ((($cg1 * $c1) + (2 * $cg2 * $c2) + ($cg3 * $c3) + ($cg4 * $c4))/($c1 + (2 * $c2) + $c3 + $c4))*250;",
			'E' => array('English','Functional English','English Language and Literature'),
			'sub_wt'=>array('English','English Language and Literature')
        );
		$indexing_rules['M.A Arabic'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1 * $c1) + ($cg2 * $c2) + ($cg3 * $c3) + ($cg4 * $c4);",
						'D'=>"\$DRindex =($c1 + $c2 + $c3 + $c4);"
						),
			'E' => array('Arabic','Afsal Ul-Ulama'),
			'sub_wt'=>array('Arabic','Afsal Ul-Ulama')
        );
		$indexing_rules['M.A Economics'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =$cg1 * $c1;",
						'D'=>"\$DRindex =$c1;"
						),
			'E' => array('Economics','Developmental Economics','Foreign Trade','Mathematics','Statistics'),
			'sub_wt'=>array('Economics','Developmental Economics')
        );
		$indexing_rules['M.A History'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =$cg1 * $c1;",
						'D'=>"\$DRindex =$c1;"
						)
        );
		$indexing_rules['M.Sc Mathematics'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =2*($cg2 * $c2)+(1.5*$cg3*$c3)+(1.5*$cg4*$c4);",
						'D'=>"\$DRindex =(2*$c2)+(1.5*$c3)+(1.5*$c4);"
						),
			'E' => array('Mathematics'),
			'sub_wt'=>array('Mathematics')
        );
		$indexing_rules['M.Sc Statistics'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1 * $c1) + ($cg2 * $c2) + ($cg3 * $c3) + ($cg4 * $c4);",
						'D'=>"\$DRindex =($c1 + $c2 + $c3 + $c4);"
						),
			'E' => array('Mathematics','Statistics'),
			'sub_wt'=>array('Statistics')
        );
		$indexing_rules['M.Sc Physics'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =(2* $cg2 * $c2)+($cg3 * $c3)+($cg4 * $c4);",
						'D'=>"\$DRindex =(2*$c2)+($c3)+($c4);"
						),
			'E' => array('Physics','Applied Physics')
        );
		$indexing_rules['M.Sc Chemistry'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1 * $c1)+(2 * $cg2 * $c2)+($cg3*$c3)+($cg4*$c4);",
						'D'=>"\$DRindex =$c1+(2*$c2)+($c3)+($c4);"
						),
			'E' => array('Chemistry','Polymer Chemistry')
        );
		$indexing_rules['M.Sc Zoology'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1 * $c1)+(2 * $cg2 * $c2)+($cg3*$c3)+($cg4*$c4);",
						'D'=>"\$DRindex =$c1+(2*$c2)+($c3)+($c4);"
						),
			'E' => array('Zoology')
        );
		$indexing_rules['M.Com'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1 * $c1)+($cg2 * $c2)+($cg3*$c3)+($cg4*$c4);",
						'D'=>"\$DRindex =$c1+($c2)+($c3)+($c4);"
						)
        );
		$indexing_rules['MLISc'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1*1000);",
						'D'=>"\$DRindex =4;"
						)
        );
		$indexing_rules['BLISc'] = array(
            'M' => '',
            'G' => array(
						'N'=>"\$NRindex =($cg1*1000);",
						'D'=>"\$DRindex =4;"
						)
        );

        $credit_tracking = array();

        $query="select frkCourseID, frkCourseName from courses";
        $courses = mysqli_query($db,$query);
        while($row = mysqli_fetch_array($courses)) {
          $course_id = $row['frkCourseID'];

          $course_name=$row['frkCourseName'];

          if(isset($indexing_rules[$course_name]))
          {
          	if($user_id) {
          		$query = "select user_id from choices where FIND_IN_SET(".$course_id.", choices) and user_id=".$user_id;
          	} else {
          		$query = "select user_id from choices where FIND_IN_SET(".$course_id.", choices)";
          	}
              
			  
              $choices = mysqli_query($db,$query);
			  
              while($row2 = mysqli_fetch_array($choices)) {
				//echo $row2['user_id']; exit;
             $query2="select * from marks where user_id=".$row2['user_id'];
			  
              $mark = mysqli_fetch_assoc(mysqli_query($db,$query2));
			  if($mark) {
			  $mark=array_map('trim',$mark);
			  //print_r($mark); 
			  }
			  
			  
			  
				  
				  $reservation_sql="select * from reservations where frkUserID=".$row2['user_id'];
				  
				 $reservations = mysqli_query($db,$reservation_sql);
				 while($row3=mysqli_fetch_array($reservations)) {
					 $ncc=$row3['frkNcc/Nss'];
					 $nccA=$row3['NCC_Certificate_A'];
					 $nccB=$row3['NCC_Certificate_B'];
					 $nccC=$row3['NCC_Certificate_C'];
					 
					 $weightage=($ncc*5) + min(10,(($nccA*3)+($nccB*5)+($nccC*10)));
					 
				 
				  if($mark['mark_grade']=='G') {
					  
					  $total_credits = 0;
					 if($course_name=='M.A English') {
						 if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E'])) {
						eval($indexing_rules[$course_name]['G']);
								$tempEnglish=0;
								if($mark['main1_sub']=='English' || $mark['main1_sub']=='English Language and Literature'){
									$tempEnglish=$tempEnglish+$mark['main1_cgpa'];
								}
								if($mark['main2_sub']=='English' || $mark['main2_sub']=='English Language and Literature'){
									$tempEnglish=$tempEnglish+$mark['main2_cgpa'];
								}
								if($mark['main3_sub']=='English' || $mark['main3_sub']=='English Language and Literature'){
									$tempEnglish=$tempEnglish+$mark['main3_cgpa'];
								}
								$sub_weightage=$tempEnglish*(50/4);
								
								$index=$index+$weightage+$sub_weightage;
								$university_id = $mark['university_id'];
								  if($university_id==1) {
									  $index=$index+($index*0.05);
								  }
								  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
				  					$get_result=mysqli_query($db,$get_sql);
				  					if(mysqli_num_rows($get_result)>0) {
				  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
				  						mysqli_query($db,$update_sql);
				  					} else {
				  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				 						mysqli_query($db,$inerst_sql);
				  					}
								  	
						 }
							
					 } else if($course_name=='M.A Arabic') {
						 if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['com_other_sub'],$indexing_rules[$course_name]['E'])) {
							 
							$NRindex=($mark['main1_credit']*$mark['main1_cgpa'])+($mark['main2_credit']*$mark['main2_cgpa'])+($mark['main3_credit']*$mark['main3_cgpa'])+($mark['comp1_credit']*$mark['comp1_cgpa'])+($mark['comp2_credit']*$mark['comp2_cgpa'])+($mark['overall_credit']*$mark['overall_cgpa']);
						 
								 //eval($indexing_rules[$course_name]['G']['N']);
								 eval($indexing_rules[$course_name]['G']['D']);
								 // feeder
								 if($mark['main1_sub'] == "Arabic" || $mark['main1_sub'] == "Afsal Ul-Ulama") {
									 $NRindex=$NRindex+($mark['main1_credit']*$mark['main1_cgpa']);
									 $DRindex=$DRindex+$mark['main1_credit'];
									 
								 }
								 if($mark['main2_sub']=='Arabic' || $mark['main2_sub']=='Afsal Ul-Ulama') {
									 $NRindex=$NRindex+($mark['main2_credit']*$mark['main2_cgpa']);
									 $DRindex=$DRindex+$mark['main2_credit'];
								 }
								 if($mark['main3_sub']=='Arabic' || $mark['main3_sub']=='Afsal Ul-Ulama') {
									 $NRindex=$NRindex+($mark['main3_credit']*$mark['main3_cgpa']);
									 $DRindex=$DRindex+$mark['main3_credit'];
								 }
								 if($mark['comp1_sub']=='Arabic' || $mark['comp1_sub']=='Afsal Ul-Ulama') {
									 $NRindex=$NRindex+($mark['comp1_credit']*$mark['comp1_cgpa']);
									 $DRindex=$DRindex+$mark['comp1_credit'];
								 }
								 if($mark['comp2_sub']=='Arabic' || $mark['comp2_sub']=='Afsal Ul-Ulama') {
									 $NRindex=$NRindex+($mark['comp2_credit']*$mark['comp2_cgpa']);
									 $DRindex=$DRindex+$mark['comp2_credit'];
								 }
								 if($mark['com_other_sub']=='Arabic') {
									 $NRindex=$NRindex+($mark['com_other_credit']*$mark['com_other_cgpa']);
									 $DRindex=$DRindex+$mark['com_other_credit'];
								 }
								 
								 
								 
								 // subject weightage
								 
									$tempArabic=0;
									if($mark['main1_sub']=='Arabic' || $mark['main1_sub']=='Afsal Ul-Ulama'){
										$tempArabic=$tempArabic+$mark['main1_cgpa'];
									}
									if($mark['main2_sub']=='Arabic' || $mark['main2_sub']=='Afsal Ul-Ulama'){
										$tempArabic=$tempArabic+$mark['main2_cgpa'];
									}
									if($mark['main3_sub']=='Arabic' || $mark['main3_sub']=='Afsal Ul-Ulama'){
										$tempArabic=$tempArabic+$mark['main3_cgpa'];
									}
									$sub_weightage=$tempArabic*(50/4);
						
							$index=($NRindex/$DRindex)*250;
							
							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
			  					$get_result=mysqli_query($db,$get_sql);
			  					if(mysqli_num_rows($get_result)>0) {
			  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
			  						mysqli_query($db,$update_sql);
			  					} else {
			  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
			 						mysqli_query($db,$inerst_sql);
			  					}
						 }
							
					 } else if($course_name=='M.A Economics') {
						 if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E'])) {
							eval($indexing_rules[$course_name]['G']['N']);
							eval($indexing_rules[$course_name]['G']['D']);
							//echo $NRindex."<br>";
							//echo $DRindex."<br>";
							// feeder & subject weightage
							$tempEconomics=0;
							if($mark['main1_sub'] == "Economics" || $mark['main1_sub'] == "Developmental Economics") {
								 $NRindex=$NRindex+($mark['main1_credit']*$mark['main1_cgpa']);
								 $DRindex=$DRindex+$mark['main1_credit'];
								 
								 $tempEconomics=$tempEconomics+$mark['main1_cgpa'];
							 }
							 if($mark['main2_sub'] == "Economics" || $mark['main2_sub'] == "Developmental Economics") {
								 $NRindex=$NRindex+($mark['main2_credit']*$mark['main2_cgpa']);
								 $DRindex=$DRindex+$mark['main2_credit'];
								 
								 $tempEconomics=$tempEconomics+$mark['main2_cgpa'];
							 }
							 if($mark['main3_sub'] == "Economics" || $mark['main3_sub'] == "Developmental Economics") {
								 $NRindex=$NRindex+($mark['main3_credit']*$mark['main3_cgpa']);
								 $DRindex=$DRindex+$mark['main3_credit'];
								 
								 $tempEconomics=$tempEconomics+$mark['main3_cgpa'];
							 }
							 
							$sub_weightage=$tempEconomics*(50/4);
						
							$index=($NRindex/$DRindex)*250;
							
							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
			  					$get_result=mysqli_query($db,$get_sql);
			  					if(mysqli_num_rows($get_result)>0) {
			  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
			  						mysqli_query($db,$update_sql);
			  					} else {
			  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
			 						mysqli_query($db,$inerst_sql);
			  					}
						 }
							
					 } else if($course_name=='M.A History') {
						eval($indexing_rules[$course_name]['G']['N']);
						eval($indexing_rules[$course_name]['G']['D']);
						
						// feeder
						if($mark['main1_sub'] == "History") {
							 $NRindex=$NRindex+($mark['main1_credit']*$mark['main1_cgpa']);
							 $DRindex=$DRindex+$mark['main1_credit'];
							 
						 }
						 else if($mark['main2_sub'] == "History") {
							 $NRindex=$NRindex+($mark['main2_credit']*$mark['main2_cgpa']);
							 $DRindex=$DRindex+$mark['main2_credit'];
							 
						 }
						 else if($mark['main3_sub'] == "History") {
							 $NRindex=$NRindex+($mark['main3_credit']*$mark['main3_cgpa']);
							 $DRindex=$DRindex+$mark['main3_credit'];
							 
						 } else {
							 $NRindex=$NRindex;
							 $DRindex=$DRindex+62;
						 }
						 
						 // no sub weightage for history
						 $sub_weightage=0;
						 $index=($NRindex/$DRindex)*250;
						 
						$index=$index+$weightage+$sub_weightage;
						$university_id = $mark['university_id'];
						  if($university_id==1) {
							  $index=$index+($index*0.05);
						  }
						  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
		  					$get_result=mysqli_query($db,$get_sql);
		  					if(mysqli_num_rows($get_result)>0) {
		  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
		  						mysqli_query($db,$update_sql);
		  					} else {
		  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
		 						mysqli_query($db,$inerst_sql);
		  					}
						 
					 } else if($course_name=='M.Sc Mathematics') {
						if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E'])) {
							eval($indexing_rules[$course_name]['G']['N']);
							eval($indexing_rules[$course_name]['G']['D']);
							
							$sub_weightage=0;
							$index=($NRindex/$DRindex)*250;
							
							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
				  					$get_result=mysqli_query($db,$get_sql);
				  					if(mysqli_num_rows($get_result)>0) {
				  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
				  						mysqli_query($db,$update_sql);
				  					} else {
				  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				 						mysqli_query($db,$inerst_sql);
				  					}
						}
					 } else if($course_name=='M.Sc Statistics') {
						 if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E'])) {
							eval($indexing_rules[$course_name]['G']['N']);
							eval($indexing_rules[$course_name]['G']['D']);
														
							// feeder 
							
							if($mark['main1_sub'] == "Statistics") {
								 $NRindex=$NRindex+($mark['main1_credit']*$mark['main1_cgpa']);
								 $DRindex=$DRindex+$mark['main1_credit'];
							 }
							 if($mark['main2_sub'] == "Statistics") {
								 $NRindex=$NRindex+($mark['main2_credit']*$mark['main2_cgpa']);
								 $DRindex=$DRindex+$mark['main2_credit'];
							 }
							 if($mark['main3_sub'] == "Statistics") {
								 $NRindex=$NRindex+($mark['main3_credit']*$mark['main3_cgpa']);
								 $DRindex=$DRindex+$mark['main3_credit'];
							 }
							 if($mark['comp1_sub'] == "Statistics") {
								 $NRindex=$NRindex+($mark['comp1_credit']*$mark['comp1_cgpa']);
								 $DRindex=$DRindex+$mark['comp1_credit'];
							 }
							 if($mark['comp2_sub'] == "Statistics") {
								 $NRindex=$NRindex+($mark['comp2_credit']*$mark['comp2_cgpa']);
								 $DRindex=$DRindex+$mark['comp2_credit'];
							 }
							 
							 $sub_weightage=0;
							 $index=($NRindex/$DRindex)*250;
							 
							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
				  					$get_result=mysqli_query($db,$get_sql);
				  					if(mysqli_num_rows($get_result)>0) {
				  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
				  						mysqli_query($db,$update_sql);
				  					} else {
				  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				 						mysqli_query($db,$inerst_sql);
				  					}
							
						 }
					 } else if($course_name=='M.Sc Physics') {
						 if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E'])) {
							eval($indexing_rules[$course_name]['G']['N']);
							eval($indexing_rules[$course_name]['G']['D']);
							
							// feeder
							if($mark['comp1_sub'] == "Mathematics") {
								 $NRindex=$NRindex+($mark['comp1_credit']*$mark['comp1_cgpa']);
								 $DRindex=$DRindex+$mark['comp1_credit'];
							 }
							 if($mark['comp2_sub'] == "Mathematics") {
								 $NRindex=$NRindex+($mark['comp2_credit']*$mark['comp2_cgpa']);
								 $DRindex=$DRindex+$mark['comp2_credit'];
							 }
							 $sub_weightage=0;
							 $index=($NRindex/$DRindex)*250;
							 
							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
				  					$get_result=mysqli_query($db,$get_sql);
				  					if(mysqli_num_rows($get_result)>0) {
				  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
				  						mysqli_query($db,$update_sql);
				  					} else {
				  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				 						mysqli_query($db,$inerst_sql);
				  					}
						 }
					 } else if($course_name=='M.Sc Chemistry' || $course_name=='M.Sc Zoology') {
						 if(in_array($mark['main1_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main2_sub'],$indexing_rules[$course_name]['E']) || in_array($mark['main3_sub'],$indexing_rules[$course_name]['E'])) {
							eval($indexing_rules[$course_name]['G']['N']);
							eval($indexing_rules[$course_name]['G']['D']);
							
							// no feeder and sub weightage
							$sub_weightage=0;
							$index=($NRindex/$DRindex)*250;
							
							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							  $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
				  					$get_result=mysqli_query($db,$get_sql);
				  					if(mysqli_num_rows($get_result)>0) {
				  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
				  						mysqli_query($db,$update_sql);
				  					} else {
				  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				 						mysqli_query($db,$inerst_sql);
				  					}
						 }
					 } else if($course_name=='M.Com') {
						 if($mark['degree_id']==2 || $mark['degree_id']==4) {
							eval($indexing_rules[$course_name]['G']['N']);
							eval($indexing_rules[$course_name]['G']['D']);

							// no feeder and sub weightage
							$sub_weightage=0;
							$index=($NRindex/$DRindex)*250;	

							$index=$index+$weightage+$sub_weightage;
							$university_id = $mark['university_id'];
							  if($university_id==1) {
								  $index=$index+($index*0.05);
							  }
							 $get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
				  					$get_result=mysqli_query($db,$get_sql);
				  					if(mysqli_num_rows($get_result)>0) {
				  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
				  						mysqli_query($db,$update_sql);
				  					} else {
				  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				 						mysqli_query($db,$inerst_sql);
				  					}
						 }
					 } else if($course_name=='MLISc' || $course_name=='BLISc') {
						eval($indexing_rules[$course_name]['G']['N']);
						eval($indexing_rules[$course_name]['G']['D']);

						// no feeder and sub weightage
						$sub_weightage=0;
						$index=($NRindex/$DRindex);

						$index=$index+$weightage+$sub_weightage;
						$university_id = $mark['university_id'];
						  if($university_id==1) {
							  $index=$index+($index*0.05);
						  }
						$get_sql="select * from indexes where user_id=".$row2['user_id']." and course_id=".$course_id;
		  					$get_result=mysqli_query($db,$get_sql);
		  					if(mysqli_num_rows($get_result)>0) {
		  						$update_sql="update indexes set index='".$index."' where user_id=".$row2['user_id']." and course_id=".$course_id;
		  						mysqli_query($db,$update_sql);
		  					} else {
		  						$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
		 						mysqli_query($db,$inerst_sql);
		  					}
					 }
					 
						/*$index=$index+$weightage+$sub_weightage;
						$university_id = $mark['university_id'];
						  if($university_id==1) {
							  $index=$index+($index*0.05);
						  }*/
					  //echo $row2['user_id']." - Index - " . $index." - ".$course_name;
					  
					  //echo "<br><br>";
					  
					 
					  
				  } else if($mark['mark_grade']=='M') {
					  
				  }
				  
				  }
				  
				  //$inerst_sql="insert into indexes values ('','".$row2['user_id']."','".$course_id."','".$index."')";
				  //mysqli_query($db,$inerst_sql);
				  
			
              
            }
          }
        }
    }

    public function overall_cgpa($mark) //cg1
    {
        return $mark['overall_cgpa'];
    }

    function overall_credits($mark, &$total_credits, &$credit_tracking) //c1
    {
        if(!in_array('c1', $credit_tracking))
        {
          $total_credits+=$mark['overall_credit'];  
          $credit_tracking[] = 'c1';
        }

        return $mark['overall_credit'];
    }
    
    function core_cgpa($mark) //cg2
    {
        $total_cgpa=0;

        $total_cgpa+=$mark['main1_cgpa'];

        if($mark['main']==2)
          $total_cgpa+=$mark['main2_cgpa'];

        if($mark['main']==3)
          $total_cgpa+=$mark['main3_cgpa'];

        return $total_cgpa;
    }

    function core_credits($mark, &$total_credits, &$credit_tracking) //c2
    {
        $credits=$mark['main1_credit'];

        if($mark['main']==2)
          $credits+=$mark['main2_credit'];

        if($mark['main']==3)
          $credits+=$mark['main3_credit'];

        if(!in_array('c2', $credit_tracking))
        {
          $total_credits+=$credits;  
          $credit_tracking[] = 'c2';
        }

        return $credits;
    }
	
	function comp1_cgpa($mark) {
		
			return $mark['comp1_cgpa'];
		
		
	}
	
	function comp1_credit($mark) {
		
			return $mark['comp1_credit'];
		
	}
	
	function comp2_cgpa($mark) {
		
			return $mark['comp2_cgpa'];
		
	}
	
	function comp2_credit($mark) {
		
			return $mark['comp2_credit'];
		
	}
	

    

    //indexing();

}

?>