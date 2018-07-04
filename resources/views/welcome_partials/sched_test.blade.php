			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">Main Hall - HOGWARTS</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <?php
			                        	//SATURDAY SCHEDULE CODE
			                        	if(date('dm') == '1003'){
			                        		if (date('dmHi') >= '10031115' and date('dmHi') < '10031230')
				                            {
				                                echo('SPEAKER/Author - Jan Needle - interviewed by Joe Wheeler');
				                            }elseif(date('dmHi') >= '10031230' and date('dmHi') < '10031400'){
				                            	echo('POETRY - Spike the Poet');
				                            }elseif(date('dmHi') >= '10031400' and date('dmHi') < '10031420'){
				                            	echo('POETRY - Allan Graham');	                            	
				                            }elseif(date('dmHi') >= '10031420' and date('dmHi') < '10031440'){
				                            	echo('POETRY - Cathy Crabb');	                            	
				                            }elseif(date('dmHi') >= '10031600' and date('dmHi') < '10031730'){
				                            	echo('BRADSHAWS - Buzz Hawkins');	                            	
				                            }elseif(date('dmHi') >= '10031730' and date('dmHi') < '11031030'){
				                            	echo('We are done for the day, come back tomorrow where we will start at 10:30am!');
				                            }else{
				                            	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
				                            }
			                        	}
			                            
			                        ?>
									<?php
										//SUNDAY SCHEDULE CODE
										if(date('dm') == '1103'){
											if (date('dmHi') >= '11031200' and date('dmHi') < '11031245')
				                            {
				                                echo('DRAMA - Funky Fitness & Dance Syndrome');
				                            }elseif(date('dmHi') >= '11031245' and date('dmHi') < '11031315'){
				                            	echo('Prize Giving - Primary Schools Poetry Competition');
				                            }elseif(date('dmHi') >= '11031315' and date('dmHi') < '11031400'){
				                            	echo('POETRY - Waterhead Academy Pupils');
				                            }elseif(date('dmHi') >= '11031400' and date('dmHi') < '11031420'){
				                            	echo('POETRY - Allan Graham');
				                            }elseif(date('dmHi') >= '11031420' and date('dmHi') < '11031440'){
				                            	echo('POETRY - Spike the Poet');
				                            }elseif(date('dmHi') >= '11031440' and date('dmHi') < '11031500'){
				                            	echo('POETRY - E M G Somerwill');
				                            }elseif(date('dmHi') >= '11031500' and date('dmHi') < '11031645'){
				                            	echo('POETRY - Saddleworth School Pupils');
				                            }elseif(date('dmHi') >= '11031500' and date('dmHi') < '11031645'){
				                            	echo('SPEAKER - Mike Sweeney - interviewed by Joe Wheeler');
				                            }elseif(date('dmHi') >= '11031730' and date('dmHi') < '11120000'){
				                            	echo('We are done! Thank you for your support!');
				                            }else{
				                            	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
				                            }
										}


									?>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M1 - THE FAIRY SANCTUARY</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <?php
			                        	//SATURDAY SCHEDULE CODE
			                        	if(date('dm') == '1003'){
			                        		if (date('dmHi') >= '10031030' and date('dmHi') < '10031730')
				                            {
				                                echo('<a style="font-family:fairy_wings; text-decoration: none; font-weight:bold; color: #FF69B4; font-size:16px ">Jenny Dayton & The Fairy Sanctuary</a>');
				                            }elseif(date('dmHi') >= '10031730' and date('dmHi') < '11031030'){
				                            	echo('We are done for the day, come back tomorrow where we will start at 10:30am!');
				                            }else{
				                            	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
				                            }
			                        	}
			                            
			                        ?>
			                        <?php
									    //SUNDAY SCHEDULE CODE
									    if(date('dm') == '1103'){
										    if (date('dmHi') >= '10031030' and date('dmHi') < '10031730')
				                            {
				                                echo('Jenny Dayton & The Fairy Sanctuary');
				                            }elseif(date('dmHi') >= '11031730' and date('dmHi') < '11120000'){
										    	echo('We are done! Thank you for your support!');
										    }else{
										    	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
										    }	
									    }
									   

									?>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M2 - BRONTE</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <?php
			                        	//SATURDAY SCHEDULE CODE
			                        	if(date('dm') == '1003'){
				                            if (date('dmHi') >= '10031130' and date('dmHi') < '10031230')
				                            {
				                                echo('PEAKER/Poet - Lisa Wroe');
				                            }elseif(date('dmHi') >= '10031230' and date('dmHi') < '10031400'){
				                            	echo('SPEAKER/Author - Angela Blythe');
				                            }elseif(date('dmHi') >= '10031400' and date('dmHi') < '10031730'){
				                            	echo('SPEAKER/Literary Agent - Christine Green');
				                            }elseif(date('dmHi') >= '10031730' and date('dmHi') < '11031030'){
				                            	echo('We are done for the day, come back tomorrow where we will start at 10:30am!');
				                            }else{
				                            	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
				                            }
			                        	}

			                        ?>
									<?php
									    //SUNDAY SCHEDULE CODE
									    if(date('dm') == '1103'){
									    	if (date('dmHi') >= '11031030' and date('dmHi') < '11031230')
										    {
										        echo('SPEAKER/Author - Barbara Hegab & Policeman Pete');
										    }elseif(date('dmHi') >= '11031230' and date('dmHi') < '11031400'){
										    	echo('SPEAKER/Author - Geoff Higginbottom');
										    }elseif(date('dmHi') >= '11031400' and date('dmHi') < '11031500'){
										    	echo('SPEAKER/Author - Phaedra Patrick');
										    }elseif(date('dmHi') >= '11031500' and date('dmHi') < '11031730'){
										    	echo('SPEAKER/Literary Agent - Christine Green');
										    }elseif(date('dmHi') >= '11031730' and date('dmHi') < '11120000'){
										    	echo('We are done! Thank you for your support!');
										    }else{
										    	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
										    }
									    }
									    

									?>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M3 - DICKENS</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <?php
			                        	//SATURDAY SCHEDULE CODE
			                        	if(date('dm') == '1003'){
				                            if (date('dmHi') >= '10031130' and date('dmHi') < '10031330')
				                            {
				                                echo('Submissions Literary Critic/Author - Bill Broady');
				                            }elseif(date('dmHi') >= '10031400' and date('dmHi') < '10031600'){
				                            	echo('WORKSHOP/Author-Counsellor - Joanne Lees');
				                            }elseif(date('dmHi') >= '10031730' and date('dmHi') < '11031030'){
				                            	echo('We are done for the day, come back tomorrow where we will start at 10:30am!');
				                            }else{
				                            	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
				                            }
			                        	}

			                        ?>
			                        <?php
									    //SUNDAY SCHEDULE CODE
									    if(date('dm') == '1103'){
										    if (date('dmHi') >= '11031130' and date('dmHi') < '11031400')
										    {
										        echo('SPEAKER/Author - Angela Blythe');
										    }elseif(date('dmHi') >= '11031400' and date('dmHi') < '11031730'){
										    	echo('WORKSHOP/Art-Writer - Pat Baker (2 sessions)');
										    }elseif(date('dmHi') >= '11031730' and date('dmHi') < '11120000'){
										    	echo('We are done! Thank you for your support!');
										    }else{
										    	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
										    }	
									    }
									    

									?>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>
			                <div class="row " style="text-align: center">
			                    <div class="col-3">
			                        <p style="font-weight: bold; font-family: sans-serif;">M4 - SHAKESPEARE</p><hr>
			                    </div>

			                    <div class="col-9">
			                        <?php
			                        	//SATURDAY SCHEDULE CODE
			                        	if(date('dm') == '1003'){
				                            if (date('dmHi') >= '10031030' and date('dmHi') < '10031130')
				                            {
				                                echo('WORKSHOP/Short Story Writing- Carmen Walton');
				                            }elseif(date('dmHi') >= '10031130' and date('dmHi') < '10031230'){
				                            	echo('SPEAKER/Oldham Libraries - Samuel Thornley');
				                            }elseif(date('dmHi') >= '10031230' and date('dmHi') < '10031500'){
				                            	echo('SPEAKER/Marketing in Publishing - Rubbi Bhogal-Wood');
				                            }elseif(date('dmHi') >= '10031500' and date('dmHi') < '10031730'){
				                            	echo('SPEAKER/Writer - Andrew Oldham');
				                            }elseif(date('dmHi') >= '10031730' and date('dmHi') < '11031030'){
				                            	echo('We are done for the day, come back tomorrow where we will start at 10:30am!');
				                            }else{
				                            	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
				                            }
			                        	}

			                        ?>
									<?php
									    //SUNDAY SCHEDULE CODE
									    if(date('dm') == '1103'){
										    if (date('dmHi') >= '11031030' and date('dmHi') < '11031730')
										    {
										        echo('WORKSHOP/Author-Counsellor - Joanne Lees');
										    }elseif(date('dmHi') >= '11031730' and date('dmHi') < '11120000'){
										    	echo('We are done! Thank you for your support!');
										    }else{
										    	echo('<i style="color:red;">No guests are currently performing in this room!</i>');
										    }
	
									    }
									    
									?>
			                        <hr>
			                    </div>
			                    <hr>
			                
			                </div>