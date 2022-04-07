<!DOCTYPE html>
    <html>
        <head>
            <title>CARLOPH</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/carlo/carlo.css">
</head>
<body class="rounded-bottom rounded-top border-dark">
<!--navbar-->
<section id="navbar">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-none py-0 mx-auto">
        <div class="container ">
            <div class="collapse navbar-collapse justify-content-center" id="navbar13">
                <ul class="navbar-nav py-1">
                    <li class="nav-item mt-1 pr-1"><a class="nav-link">Connect With Us</a></li>
                    <li class="nav-item"> <a class="nav-link" href="https://www.twitter.com/" target="_blank">
                        <i class="fa fa-twitter fa-fw fa-2x text-light"></i></a>
                    </li>
                    <li class="nav-item text-light"><a class="nav-link" href="https://www.facebook.com/" target="_blank">
            	        <i class="fa fa-facebook-square fa-fw fa-2x text-light"></i></a>
                    </li>
                    <li class="nav-item text-light"><a class="nav-link" href="https://www.youtube.com/" target="_blank">
             	        <i class="fa fa-youtube fa-2x text-light"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com" target="_blank">
            	    <i class="fa fa-instagram fa-fw fa-2x text-light mx-auto"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!-- Navbar Menu -->
<section id="NavbarMenu">
    <nav class="navbar navbar-expand-md border-bottom border-top navbar-light border-info mt-0" style="">
        <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar7">
            <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbar7"> <a class="navbar-brand text-primary d-none d-md-block" href="#">        
                    <img src="/carlo/assets/CARLO logo TOP BAR.png" width="120" class="d-inline-block align-top" alt="" height="50"></a>
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item mx-1"><b><a class="nav-link" href="#AboutUs">About Us</a></b></li>
                            <li class="nav-item mx-1"><b> <a class="nav-link" href="#Awards">Awards</a></b></li>
                            <li class="nav-item text-warning mx-1"><b> <a class="nav-link" href="#Affiliates">Our Affiliates</a></b></li>
                            <li class="nav-item mx-1"> <b><a class="nav-link" href="#FAQ">FAQ's</a></b></li>
                            <li class="nav-item mx-1 ml-1"><b> <a class="nav-link" href="#ContactUs">Contact Us</a></b></li>
                            <li class="nav-item mx-1"><b> <a class="nav-link" href="#Footer"><i class="fa fa-search fa-fw fa-lg pt-1"></i></a></b></li>
                        </ul>
                        <a class="btn btn-default navbar-btn border mx-1 text-normal btn-info text-success shadow border-info rounded" a="" href="#myModal-forms" data-toggle="modal">&nbsp; Forms&nbsp;&nbsp;</a>
          	        <a class="btn btn-default navbar-btn border mx-1 text-normal btn-primary text-light shadow border-primary rounded" a="" href="#myModal" data-toggle="modal">Sign In&nbsp;</a>
          	    <a class="btn btn-default navbar-btn border mx-1 text-normal btn-secondary text-light shadow border-primary rounded" a="" href="#Register" data-toggle="modal">Register</a>
            </div>
        </div>
    </nav>
</div>	
</section>
<!-- Modal Registration -->
<div class="modal fade" id="Register" style="">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
        <h3 class="modal-title">Registration</h3><button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
    </div>
    <div class="carlo-reg"></div>
        <div class="modal-body" style="">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12" style="">
                            <div class="form-group"><label>Pangalan <i>(Full name)</i></label><input type="text" class="form-control c-full-name" placeholder="" style=""><input type="hidden" class="form-control c-citizen" value="Citizen"><span id="c-full-name-text"><span></div>
                        <div class="form-group"><label>Email address<br></label><input id="hic-email" type="text" class="form-control c-email" placeholder="Enter email" style=""><span id="c-email-text"></span><span id="hic-email-valid-text"></span><span id="c-email-valid-text"></span><span id="email-exist"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12" style="">
                        <div class="form-group"><label>Kasarian <i>(Gender)</i></label><select style="margin-top: 5px;" class="form-control c-gender" name="gender"><option></option><option value="Male">Male</option><option>Female</option></select><span id="c-gender-text"><span></div>
                        <div class="form-group"><label>Mobile number<br></label><input style="margin-top: 5px;" type="number" class="form-control c-mobile-number" placeholder="" style=""><span id="c-mobile-number-text"><span></div>
                   </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group"><label>Araw ng Kapanganakan <i>(DOB)</i></label><input type="date" class="form-control c-date-of-birth" style="" placeholder=""><span id="c-date-of-birth-text"><span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"><label>Land line number<br></label><input type="text" class="form-control c-land-line" placeholder="" style=""><span id="c-land-line-text"><span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group"><label>Syudad o Probibsya <i>(City &amp; Prov)</i><br></label><input type="text" class="form-control c-city-province" style="" placeholder=""><span id="c-city-province-text"><span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><label>Barangay / Zone&nbsp;&nbsp;<i>(Brgy)</i></label><input type="text" class="form-control c-village" placeholder="" style=""><span id="c-village-text"><span></div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">          
                                    <div class="form-group"><label contenteditable="true">Kumpletong Address <i>(Complete Address; No, Block, Buildng, St.)</i><br></label><input type="text" class="form-control c-full-address" style="" placeholder=""><span id="c-full-address-text"><span></div>
                                </div>
                                <div class="col-md-4">
                      	            <div class="form-group"><label>Estadong Pangkabuhayan<i></i></label><input type="text" class="form-control c-civil-status" name="user_civil_status" /><span id="c-civil-status-text"><span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label>Password <i></i><br></label><input id="hic-password" type="password" class="form-control c-password" style="" placeholder=""><span id="c-password-text"><span></div>
                                            </div>
                                                <div class="col-md-6">
                                            <div class="form-group"><label>Re-Type Password<i></i></label><input id="hic-password-con" type="password" class="form-control c-password-confirm" placeholder="" style=""><span id="c-password-confirm-text"><span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h></h>&nbsp;
                <p class="text-center padding 5"> <b>Lahat ng impormasyong ibinigay ay tinitiyak na ito ay pangangalagaan. Gagamitin lamang sa patuntunin ng CARLO at pang verify ng lehitimong pangangailangan.</b></p>
                    <p class="text-center text-info"><i>All information given shall be taken with full confidentiality. The informations shall only be used for verification purposes nad for whatever purpose CARLO may require.</p></i>
                </div>
            <div class="modal-footer"> <button id="reg-btn" type="button" class="btn btn-primary" onclick="submitCarloRegister(event)">ISubmit</button> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
        </div>
    </div>
</div>

<!-- Modal Sign In -->
<section id="myModal-forms" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h4 class="modal-title"><b>Select what form you need</b></h4>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row" style="justify-content: center;">
                      	<div class="col-md-4">
                		    <img src="/carlo/assets/Petition letter.png" >
                		    <div class="row" style="justify-content:center;font-weight: bold;">
                		    <p class="link" style="justify-content:center;"><a href="{{ url('/question-mail') }}" target="_blank">QUESTION</a></p></div>
                	    </div>
                	    <div class="col-md-4">
                		    <img src="/carlo/assets/Survey form.png" >
                		    <div class="row" style="justify-content:center; font-weight: bold;">
                		    <p class="link" style="justify-content:center;"><a href="{{ url('/opinion-mail') }}" target="_blank">OPINION</a></p></div>
                	    </div>
          				<div class="col-md-4">
          				    <img src="/carlo/assets/Petition letter.png">
          				        <div class="row" style="justify-content:center;font-weight: bold;">
                            <p class="link" style="justify-content:center;"><a href="{{ url('/requisition-mail') }}" target="_blank">REQUISITION</a></p></div>
                        </div>
          		  	</div>
          		</div>
          	</div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row" style="justify-content: center;">
                      	<div class="col-md-4">
                		    <img src="/carlo/assets/Survey form.png" >
                		        <div class="row" style="justify-content:center; font-weight: bold;">
                		    <p class="link" style="justify-content:center;"><a href="{{ url('/petition-mail') }}" target="_blank">PETITION</a></p></div>
                	    </div>
                	    <div class="col-md-4">
                		    <img src="carlo/assets/Petition letter.png" >
                		        <div class="row" style="justify-content:center; font-weight: bold;" >
                            <p class="Link" style="justify-content:center;"><a href="{{ url('/application-mail') }}" target="_blank">APPLICATION</a></p></div>
                	    </div>
          				<div class="col-md-4">
          				    <img src="/carlo/assets/Survey form.png">
          				        <div class="row" style="justify-content:center; font-weight: bold;">
          				  	<p class="link" style="justify-content:center;"><a href="{{ url('/survey-mail') }}" target="_blank">SURVEY</a></p></div>
          				</div>
          		  	</div>
          		</div>
          	</div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row mx-3">
        <h6 style="font-weight:bold;">Important Reminder:</h6>
        	</div>
		<p class="mx-3">These letter forms are solely intended for CARLO's functionality. Only official documents shall be accepted bt the participating bodies on CARLO.</p>
	</div>		
</section>
<!-- Modal Sign In -->
<section id="myModal" class="modal fade">
    <div class="modal-dialog modal-login" id="login-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Sign In</b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <form action="/carlo/examples/actions/confirmation.php" method="post">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input id="email" type="text" class="form-control login-email" placeholder="Email/Mobile No." name="email">
                <span id="email-text"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id="password" type="password" class="form-control login-password" placeholder="Password" name="password">
                <span id="password-text"></span>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg" onclick="submitRdLogin(event)">Sign In</button>
            <span id="cred-match-text"></span>
                </div>
                    <p class="hint-text"><a href="#">Forgot Password?</a></p>
                    </form>
                </div>
            <div class="modal-footer">Don't have an account? <a href="#Register">Create one</a></div>
        </div>
    </div>
</section>
<!-- Modal Ikeng -->
<section id="myModal-ikeng" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5><b>To continue, login with your CARLO account</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <form action="/examples/actions/confirmation.php" method="post">
                <div class="form-group">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" name="email and mobile" placeholder="Email/Mobile No." required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="text" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Enter</button>
                </div>
                    <p class="hint-text"><a href="#">Forgot Password?</a></p>
                    </form>
                </div>
            <div class="modal-footer">Don't have an account? <a href="#">Create one</a></div>
        </div>
    </div>
</section>
<!-- Home -->
<section id="Home">
    <div class="border-bottom rounded border-info pt-5 pb-4" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h5 class="">Connecting All Sectors Of The Society To Work Hand in Hand as ONE!</h5>
                <div class="row">
            <div class="col-md-12">
        <h3 class="display-4">CARLO WELCOMES THE&nbsp;</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3 class="display-4">DEPARTMENT OF AGRICULTURE</h3>
            <div class="row pt-1">
                <div class="col-md-4 pt-1 py-2" style=""><img class="d-block img-fluid float-left" src="/carlo/assets/CARLO CAHARACTER1.png"></div>
                    <div class="col-md-8 mt-3" style="">
                        <div class="row">
                            <div class="col-md-12 pt-3 flex-grow-1">
                        <h5 class="" contenteditable="true">Support government initiatives to elevate awareness</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12" style="background-image: url(/carlo/assets/sb.png);	background-position: top left; background-size: 100%;	background-repeat: repeat;">
                <div class="row pt-4" style="">
                    <div class="col-md-12">
                        <h5 class="text-body"><b><b>Alam Nyo Ba?</b> Ayon sa kagawaran ng agricultura, ang isang mamayan ay maaring kumolekta ng binhi na libre sa isang lokal na pamahalaan?</b></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3"><a target="_blank" href="https://www.dar.gov.ph"><img class="d-block img-fluid mx-auto pt-3" src="/carlo/assets/DA LOGO.png"></a>
    <div class="row">
        <div class="col-md-12">
        <h5 style="" class="text-center pt-3 pb-1">You can now send your concerns and get result via</h5>
    </div>
</div>
<div class="row">
    <!-- <div class="col-md-12 pb-1"><a class="btn btn-block text-center btn-lg active btn-dark btn-outline-dark" href="#myModal-ikeng" data-toggle="modal"><b><span style="font-size:large;">&nbsp; &nbsp; &nbsp; &nbsp;Carlo Ka Ikeng&nbsp; &nbsp; &nbsp; &nbsp;</span></b></a></div> -->
        <div class="col-md-12 pb-1"><a target="_blank" class="btn btn-block text-center btn-lg active btn-dark btn-outline-dark" href="https://www.kaikeng" data-toggle="modal"><b><span style="font-size:large;">&nbsp; &nbsp; &nbsp; &nbsp;Carlo Ka Ikeng&nbsp; &nbsp; &nbsp; &nbsp;</span></b></a></div>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Announcement -->
<section id="Announcement">
    <div class="py-5 border-info rounded border-bottom border-left">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4"><img class="img-fluid d-block" src="/carlo/assets/medal SMALL.png"></div>
                    <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class=""><b>Who will bag 2022's CARLO awardee?</b></h3>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <h4 class="">A recommendation to be given to those who deserves. All generated automatically based on the response rate and&nbsp; feedbacks by the people.</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4 border-left border-info rounded">
    <div class="row">
        <div class="col-md-12">
        <h5 class="">Apps You May Also Find Useful</h5>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4"><img class="img-fluid d-block" src="/carlo/assets/f1.jpg"></div>
                <div class="col-md-8">
                <div class="row">
            <div class="col-md-12">
        <h6 class=""><b>PEDRO - Philippine Directory</b></h6>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h6 class=""><b>Developer:</b> </b>CCS Group Pte Ltd.</h6>
            <h6 class=""><b><b>App Size:</b>&nbsp;48.6 MB</b></h6>
                <h6 class=""><b><b>Released Date:</b>&nbsp;Apr. 30, 2021</b></h6>
                    <h6 class=""><b><b>Price:</b>&nbsp;Free</b></h6>
                        </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AboutUs Section -->
<section id="AboutUs">
    <div class="py-5 text-center text-md-right" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)), url('/carlo/assets/Assistance.jpg');	background-position: top left, right bottom;	background-size: 100%, cover;	background-repeat: repeat, repeat;	background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-2">
                    <h1 class="display-4 text-center text-white" style="" contenteditable="true"><b>About Us</b></h1>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="">
                    <h1 class="text-center py-3 text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Awards Section -->
<section id="Awards">
    <div class="py-5" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-4 text-center pb-4 text-white">The CARLO Award</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h1 class="text-white text-center">I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath of that universal love.</h1>
                </div>
                <div class="col-md-4"><img class="img-fluid d-block" src="/carlo/assets/medal BIG.png"></div>
            </div>
        </div>
    </div>
</section>
<!-- Our Affilliates Section -->
<section id="Affiliates">
    <div class="py-5 pb-5 pt-4 border-bottom border-info rounded" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                        <h1 class="display-4 pb-3 text-center">Our Affiliates</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pt-2 pb-4">
                        <h2 class="text-center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 pb-2">
                        <div class="row">
                            <div class="col-md-3 px-4"><img class="img-fluid d-block" src="/carlo/assets/PESO PASAY Logo.png"></div>
                                <div class="col-md-3 px-4"><img class="img-fluid d-block" src="/carlo/assets/DA LOGO.png"></div>
                                    <div class="col-md-3 px-4"><img class="img-fluid d-block" src="/carlo/assets/Philippine_Charity_Sweepstakes_Office_(PCSO).svg.png"></div>
                                <div class="col-md-3 px-4"><img class="img-fluid d-block" src="/carlo/assets/DFA logo.png"></div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ's Section -->
<section id="FAQ">
    <div class="py-5" style="	background-image: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8));	background-position: top left;	background-size: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-center pb-4">
                            <h1 class="text-white text-center display-4">FAQ's</h1>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary"><b>What is CARLO?</b></h2>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-info">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary pt-4"><b>Why was CARLO platform invented?</b></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-info">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary pt-4"><b>Why is there a need fro CARLO?</b></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-secondary pt-4"><b>How effective CARLO is?</b></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-info">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h3>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Contact Us Section -->
<section id="ContactUs"></section>
    <div class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                        <h1 class="display-4 text-center">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center py-5 border-bottom border-info rounded">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-2">
                <h1 class="mb-3"><b>We <i class="fa fa-fw fa-heart d-inline text-danger"></i> new friends</b><br></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 pb-3">
                        <h1 class=""><b>Send Us A Message</b>, we would love to assist you!</h1>
                           <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 text-right">
                                <div class="row text-right">
                                    <div class="col-md-12 text-center" style="">
                                        <h1 class="" contenteditable="true"><i class="fa fa-phone fa-fw"></i>&nbsp;Mobile No. +63917345678</h1>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h1 class=""><i class="fa fa-envelope-o fa-fw"></i>
                                        <font face="FontAwesome">&nbsp;</font>info@email.com.ph
                                            </h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12"> <a href="#" class="text-muted">
        <i class="fa fa-fw fa-facebook fa-2x mx-3"></i>
            </a> <a href="#" class="text-muted">
                <i class="fa fa-fw fa-twitter fa-2x mx-3"></i>
                    </a> <a href="#" class="text-muted">
                        <i class="fa fa-fw fa-2x fa-google-plus mx-3"></i>
                    </a> <a href="#" class="text-muted">
                <i class="fa fa-fw fa-instagram fa-2x mx-3"></i>
            </a> </div>
        </div>
    </div>
</div>
@extends('fil_views.layouts.c_footer')
