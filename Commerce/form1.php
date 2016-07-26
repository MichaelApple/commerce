<?php 
/**
*Template Name: Findsponsor
**/
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php bloginfo( 'name' ); wp_title( );?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  

<?php wp_head(); ?>

</head>
<body >

  <div class="background" id="home">
   
  <div class="container1">
	<div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
<!-- ПОЧАТОК ФОРМИ -->
            <form role="form" id="sponsor" method="POST" action="proposal_preview/" enctype="multipart/form-data" name="sponsor">
                <div class="tab-content">
                <!-- ПЕРША ЧАСТИНА ІНПУТА -->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="container1" > 
						<fieldset style="text-align: center;">
							General info
						</fieldset>
						
							<div class="uploader" onclick="document.getElementById('filePhoto').click()">
							    <p style="margin: 27% 37%;">Add logo</p>
							    <img >
							    <input type="file" name="userprofile_picture"  id="filePhoto" />
							</div>
		
<!-- 
							<input type="file" class="form-control"  multiple accept="image/*" name="image" onchange="previewFile()" >
							<img src="" name="logo" height="200" alt="Image preview..."></br>
							 -->

						</fieldset>
						<fieldset>
							<p>Name proposal*</p> <input id="title" class="form-control" type="text" name="title" />
						</fieldset>	
						<div class="row">
							<div class="col-sm-6">
								<p>Type proposal*<select class="form-control" name="type_proposal[]">
									<option>one</option>
									<option>two</option>
									<option>three</option>
									<option>four</option>
								</select></p>
							</div> 
							<div class="col-sm-6">
								<p>Sport* 
								<select class="form-control" name="sport[]">
									<option>football</option>
									<option>basketball</option>
									<option>hockey</option>
									<option>tenis</option>
								</select></p>
							</div> 
						</div>
						<div class="row">
							<div class="col-sm-6">
								<p>Date of proposal*</p>
								<input type="date" class="form-control" name="date_of_proposal">
							</div>
							<div class="col-sm-6">
								<p>Valid until*</p>
								<input type="date" class="form-control" name="valid_until">
							</div>
						</div>
						
						<br>
						
						<p style="text-align: center;">LOCATION</p>
						<div class="row">
							<div class="col-sm-6">
								<p>Adress</p>
								<input class="form-control" type="text" name="adress">
							</div>
							<div class="col-sm-6">
								<p>City*</p>
								<input class="form-control" type="text" name="city">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<p>State*</p>
								<input class="form-control" type="text" name="state">
							</div>
							<div class="col-sm-4">
								<p>Zip</p>
								<input class="form-control" type="text" name="zip">
							</div>
							<div class="col-sm-4">
								<p>Country*</p>
								<input class="form-control" type="text" name="country">
							</div>
						</div>

						
						<div class="row">
							<div class="col-sm-12">
								<p>Description</p>
								<textarea name="notes" class="form-control" cols="80" rows="5"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<p>Other sponsors</p>
								<textarea name="other_sponsors" cols="40" rows="10" class="form-control" ></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<p>Media partners</p>
								<textarea name="media_partners" cols="40" rows="5" class="form-control"></textarea>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-4">
								<p>Website URL</p>
								<input class="form-control" type="text" name="website">
							</div>
							<div class="col-sm-4">
								<p>Facebook</p>
								<input class="form-control" type="text" name="facebook">
							</div>
							<div class="col-sm-4">
								<p>Twitter</p>
								<input class="form-control" type="text" name="twitter"><br>
							</div>
						</div>
						<div class="row">
						<p>Add photos</p>
							<div class="col-sm-4">
								<div class="uploader_photo1" onclick="document.getElementById('filePhoto1').click()">
								    <div class="plus_image"></div>
								    <img />
								    <input type="file" name="userprofile_photo1"  id="filePhoto1" />
								</div>
							</div>
							<div class="col-sm-4">
								<div class="uploader_photo2" onclick="document.getElementById('filePhoto2').click()">
								    <div class="plus_image"></div>
								    <img />
								    <input type="file" name="userprofile_photo2"  id="filePhoto2" />
								</div>
							</div>
							<div class="col-sm-4">
								<div class="uploader_photo3" onclick="document.getElementById('filePhoto3').click()">
								    <div class="plus_image"></div>
								    <img />
								    <input type="file" name="userprofile_photo3"  id="filePhoto3" />
								</div>
							</div>
						</div><br><br>
						<div class="row">
							<p>Add video (Premium)</p>
							<div class="col-sm-6">
								<div class="uploader_video1" onclick="document.getElementById('fileVideo1').click()">
								    <video>
								    	<source >
								    </video>
								    <input type="file" name="userprofile_video1"  id="fileVideo1" />
								    
								</div>
								
							</div>
							<div class="col-sm-6">
								<div class="uploader_video2" onclick="document.getElementById('fileVideo2').click()">
								    <video>
								    	<source >
								    </video>
								    <input type="file" name="userprofile_video2"  id="fileVideo2" />
								    
								</div>
							</div>
						</div>
						

				<br>
						
						<input id="title2" type="hidden" name="title2" value="">
						<!-- <input class="btn btn-lg btn-primary next-step" type="submit" name="ok" value="Step 2"> -->
						<button type="button" class="main_buttons next-step">Next</button>
				</div>
	
                        <ul class="list-inline pull-right">
                            <li></li>
                        </ul>
                    </div>
                    <!-- ДРУГА ЧАСТИНА ІНПУТА -->
                    <div class="tab-pane" role="tabpanel" id="step2">
                         <div class="container2" > 
						    
						      <fieldset>
						      <!-- <p><input id="title3" type="text" name="title3" value="<?php echo $title2; ?>" readonly></p> -->
						        <p>Target audience*</p> 
						        <p>Number&nbsp;&nbsp;<input type="number" name="number" /></p>
						      </fieldset>
						      <div id="gender-div">
						      <h3>Gender</h3>
						      <p>Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="progr" class="form-control " type="number" value="0" max="100" min="0" name="male" >
						      <progress max="100" value="0" id="progress_male"></progress></p>

						      <p>Female&nbsp;&nbsp;<input id="progr2" class="form-control " type="number" value="0" max="100" min="0" name="female" >
						      <progress max="100" value="0" id="progress_female"></progress></p>
						      </div>
						          
						        <div id="age-edu" class="row">
		  				            <div class="col-md-12 col-sm-12">
						              <p>Age</p>
						              <div class="row">
						                <div id="ageText" class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.41;">
						                  <p>0-17</p>
						                     <p>18-24</p>
						                     <p>25-34</p>
						                     <p>35-44</p>
						                     <p>45-54</p>
						                     <p>55-64</p>
						                    <p>65+</p>
						                  
						                </div>
						                <div id="age-div" class="col-sm-8 col-xs-11" style="text-align: left;">
						                                
						                  <p><input id="age1" class="form-control " type="number" value="0" name="age1" data-max="25" size="5">&nbsp;&nbsp;<progress id="pr1" max="100" value="0"></progress></p>
						                   <p><input id="age2" class="form-control " type="number" value="0" name="age2" size="3" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr2" max="100" value="0"></progress></p>
						                   <p><input id="age3" class="form-control " type="number" value="0" name="age3" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr3" max="100" value="0"></progress></p>
						                   <p><input id="age4" class="form-control " type="number" value="0" name="age4" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr4" max="100" value="0"></progress></p>
						                   <p><input id="age5" class="form-control " type="number" value="0" name="age5" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr5" max="100" value="0"></progress></p>
						                   <p><input id="age6" class="form-control " type="number" value="0" name="age6" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr6" max="100" value="0"></progress></p>
						                   <p><input id="age7" class="form-control " type="number" value="0" name="age7" size="5" max="100" min="0" maxlength="3">&nbsp;&nbsp;<progress id="pr7" max="100" value="0"></progress></p>
						                  
						                </div>
						              </div>  
						            </div>
								</div>    
						        	<div id="age-edu" class="row">
						            <div class="col-md-12 col-sm-12">
						                <p >Education</p>
						              <div class="row">
						                <div id="eduText" class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.41;">
						                  <p>Less than HS diploma</p>
						                  <p>High school</p>  
						                  <p>Some college</p>
						                  <p>Bachelor's degree</p>
						                  <p>Graduate degree;</p>                
						                </div>
						                <div id="edu-div" class="col-sm-8 col-xs-11" style="text-align: left;">
						                  <p><input id="edu1" class="form-control " type="number" value="0" name="edu1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						                  <p><input id="edu2" class="form-control " type="number" value="0" name="edu2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						                  <p><input id="edu3" class="form-control " type="number" value="0" name="edu3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						                  <p><input id="edu4" class="form-control " type="number" value="0" name="edu4" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						                  <p><input id="edu5" class="form-control " type="number" value="0" name="edu5" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						                </div>
						              </div>
						            </div>
						          </div>
						           <br>
						    <div id="mar-inc" class="row">
						      <div class="col-md-12 col-sm-12">  
						      <p>Marital status</p>
						        <div class="row">
						          <div class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.51;">    
						            <p>Single</p>
						            <p>Married/couple</p>
						            <p>Couple with children</p>
						          </div>
						          <div id="mar-div" class="col-sm-8 col-xs-11" style="text-align: left;">
						            <p><input id="marital1" class="form-control " value="0" type="number" name="marital1" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						            <p><input id="marital2" class="form-control " value="0" type="number" name="marital2" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						            <p><input id="marital3" class="form-control " value="0" type="number" name="marital3" maxlength="3">&nbsp;&nbsp;<progress max="100" value="0"></progress></p>
						          </div>
						        </div>   
						      </div>
						    </div>
						    <div id="mar-inc" class="row">
						      <div id="houseText" class="col-md-12 col-sm-12"> 
						          <p>Household income</p>
						            <div class="row">
						              <div class="col-sm-4 col-xs-1" style="text-align: right; line-height: 1.71;">
						                <p>$0-$24,999</p>
						                <p>$25,000-$49,999</p>
						                <p>$50,000-$74,999</p>
						                <p>$75,000-$99,999</p>
						                <p>$100,000-$149,000</p>
						                <p>$150,000 or more</p>
						            </div>
						            <div id="inc-div" class="col-sm-8 col-xs-11" style="text-align: left;">
						              <p><input id="income1" class="form-control " value="0" type="number" name="income1" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
						              <p><input id="income2" class="form-control " value="0" type="number" name="income2" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
						              <p><input id="income3" class="form-control " value="0" type="number" name="income3" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
						              <p><input id="income4" class="form-control " value="0" type="number" name="income4" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
						              <p><input id="income5" class="form-control " value="0" type="number" name="income5" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
						              <p><input id="income6" class="form-control " value="0" type="number" name="income6" maxlength="3">&nbsp;<progress max="100" value="0"></progress></p>
						            </div>
						          </div>
						      </div>
						    </div>
						  </br>
						<input id="maxGender" type="hidden" name="maxGender" value="">
						<input id="maxAge" type="hidden" name="maxAge" value="">
						<input id="maxEdu" type="hidden" name="maxEdu" value="">
						<input id="maxMar" type="hidden" name="maxMar" value="">
						<input id="maxInc" type="hidden" name="maxInc" value="">
						<!-- <input class="btn btn-lg btn-info" type="submit" name="ok2" value="Step 3" />
 -->
 							
 							<button type="button" class="main_buttons next-step">Next</button>
 							<button type="button" style="float: left;" class="main_buttons prev-step">Back</button>
						  </div>
                        <ul class="list-inline pull-right">
                            <li></li>
                        </ul>
                    </div>
                    <div class="tab-pane " role="tabpanel" id="step3">
				        <div class="container2" > 

						   <!--  <form name="forma" id="sponsor" method="POST" action="final/" enctype="multipart/form-data"> -->
						      <fieldset>
						      
						      <div class="container1">
						        <p><b>Opportunities</b></p>
						        <div class="row">
						        	<div class="col-sm-10 col-xs-8">
						              <p style="background-color: #e6e6e6; text-align: left;">Levels:</p>
						            </div>
						            <div class="col-sm-2 col-xs-4">
						              <select class="form-control" name="levels[]" style="background-color: #e6e6e6;">
										<option>Bronze</option>
										<option>Silver</option>
										<option>Gold</option>
										<option>Platinum</option>
									</select>
						            </div>
						        </div>
						        
						          <p><b>Naming Rights</b></p>
						          <div class="row">
						            <div class="col-sm-12 " style="text-align: left; font-size: 16px;">
						              <p >Sponsor business will hold the naming rights  to the competition e.g. The "Brand"
						              Championship Competitions. 
						              This means every competition will have your business
						              name in front of it in website, printed marketing and media, and other.</p>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Name Event/team</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check1" value="Name Event/team"  />
						              </span>
						            </div>
						          </div>
						           
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check2" value="no" unchecked />
						              </span>
						            </div>    
						          </div>
						          <p><b>Advertising</b></p>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Company banner at all events</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check3" value="yes"/>
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo on training clothes</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check4" />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo on playing clothes</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check5" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo on sport inventory and equipment</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check6" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo on printed material</b></p>
						              <p style="text-align: left; font-size: 16px; margin-top: -3%;">newsletter, letterhead, brochures, flyers, tickets</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check7" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo on souvenirs</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check8" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check9" unchecked />
						              </span>
						            </div>    
						          </div>
						          <p><b>Media</b></p>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo and link on our website</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check11" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Permanent advertisement spot on the website</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check12" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo of the sponsor at the video</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check13" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Logo of the sponsor at the photos</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check14" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Announce name of sponsor during our events</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden"name="check15" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check16" unchecked />
						              </span>
						            </div>    
						          </div>
						          <p><b>Hospitality</b></p>
						          <p style="font-size: 16px; margin-top: -2%;">Tickets to the sports and official events</p>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Sports events</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check17" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check18" unchecked />
						              </span>
						            </div>    
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Official events</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check19" checked />
						              </span>
						            </div>
						          </div>
						          <p><b>General</b></p>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Use of our logo in marketing</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check20" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Use of databases of participants/players and spectators</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check21" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Promote events (presentation of products)</b></p>
						              <p style="text-align: left; font-size: 16px; margin-top: -2%;">with participants/players and spectators during our events</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check22" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Offer discount or sample product to all members</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check23" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Name a perpetual award</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check24" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Present award</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check25" checked />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						              <p style="text-align: left;"><b>Certificate of appreciation</b></p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check26" />
						              </span>
						            </div>
						          </div>
						          <div class="row">
						            <div class="col-sm-8 col-xs-8">
						            <p style="background-color: #e6e6e6; text-align: left;">Or other</p>
						            </div>
						            <div class="col-sm-4 col-xs-4">
						              <span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name="check27" checked />
						              </span>
						            </div>    
						          </div>
						          <p><label for="price">Price:</label><input style="width: 20%;" class="form-control" id="price" type="text"></p>
								<p><b>CONTACTS</b></p>
								<div class="row">
									<div class="col-sm-12">
										<p>Contact name*</p>
										<input type="text" class="form-control" name="myname" >
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 ">
										<p>Phone number*</p>
										<input type="text" class="form-control" name="phone" >
									</div>
									<div class="col-sm-6">
										<p>Email adress*</p>
										<input type="text" class="form-control" name="website" >
									</div>
								</div>
								  </br>
								<!-- <input class="btn btn-info btn-lg" type="submit" name="ok3" value="Submit"  /> -->
								  <button type="button" style="float:left;" class="main_buttons prev-step">Back</button>
                           
                            <button type="button" class="main_buttons next-step">Next</button>
                            

								</div>
								</fieldset>
						    
						  </div>
                        <ul class="list-inline pull-right">

                            
                            <!-- <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li> -->
                        </ul>
                    </div>
	                   <div class="tab-pane" role="tabpanel" id="complete">
	                        <h6>month</h6>
	                        <div class="row">
	                        	<div class="col-sm-5 col-xs-4"></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">3</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        	<div class="col-sm-3 col-xs-2"></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">$25.00</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        </div>
	                        <div class="row">
	                        	<div class="col-sm-5 col-xs-4"><p style="background-color: #e6e6e6; text-align: left;">Period</p></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">6</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        	<div class="col-sm-3 col-xs-2"><p style="background-color: #e6e6e6;">.</p></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">$45.00</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        </div>
	                        <div class="row">
	                        	<div class="col-sm-5 col-xs-4"></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">12</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        	<div class="col-sm-3 col-xs-2"></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">$85.00</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        </div>
	                        <br>
	                         <div class="row">
	                        	<div class="col-sm-5 col-xs-4"><p style="background-color: #e6e6e6; text-align: left;">Premium</p></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary"></button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        	<div class="col-sm-3 col-xs-2"><p style="background-color: #e6e6e6;">.</p></div>
	                        	<div class="col-sm-2 col-xs-3">
	                        		<p style="background-color: #e6e6e6;">
	                        			<span class="button-checkbox">
						                <button type="button" class="btn btn-md" data-color="primary">$45.00</button>
						                <input type="checkbox" class="hidden" name=""  />
						              </span>
	                        		</p>
	                        	</div>
	                        </div>
	                        <p style="text-align: left;">first position in search</p>
	                        <p style="text-align: left;">more levels in opportunities</p>
	                        <p style="text-align: left;">24h support service</p>
	                        <p style="text-align: left;">personal assistant</p>
	                        <p style="text-align: left;">add more photo</p>
	                        <p style="text-align: left;">add video</p>
	                        <br><br>
	                        <p style="background-color: #e6e6e6; text-align: left;">Total</p>
	



	                       <button type="button" style="float:left;" class="main_buttons prev-step">Back</button>
	                       
	                       <input class="main_buttons next-step" type="submit" name="ok3" value="View"  />
	                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
</div>
	
</div>


		
 <nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid menu">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php bloginfo('wpurl'); ?>/index.php">SponsorshipProposal.net</a>
      </div> 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li class=""><a href="#home">Home</a></li>
        <li><a href="#work">How it works</a></li>
        <li><a href="#plans">Plans</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#">Proposals</a></li>
        <li><a href="#">Sponsors</a></li>
        <li><a href="#">Agencies</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register/"> Login/Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php get_footer( ); ?>