<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
					<img src="images/form-wizard.jpg" alt="">
					<h3>Your reservation</h3>
				</div>
            	<div id="wizard">
            		
					<!-- SECTION 1 -->
	                <h4>Preview</h4>
	                <section class="section-style">
                		<div class="board-wrapper">
                			<div class="board-inner">
                				<div class="board-item">
                					Room 1 :
                					<span>Small Room</span>
                				</div>
                				<div class="board-item">
                					Room 2 :
                					<span>Luxury Room</span>
                				</div>
                				<div class="board-line">
                					<div class="board-item">
                						Adult :
                						<span>2</span>
                					</div>
                					<div class="board-item">
                						Childern :
                						<span>0</span>
                					</div>
                				</div>
                			</div>
                		</div>
                		<div class="form-wrapper">
                			<div class="form-row">
                				<div class="form-holder w-100">
									<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp1">
									<span class="lnr lnr-calendar-full"></span>
								</div>
                			</div>
                			<div class="form-row">
                				<div class="form-holder w-100">
									<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="dd M yyyy" id="dp2">
									<span class="lnr lnr-calendar-full"></span>
								</div>
                			</div>
                			<div class="form-group">
                				<label for="">Room 1 :</label>
	                			<div class="form-row">
									<div class="select mr-20">
										<div class="form-holder">
											<div class="select-control">1 Adult</div>
											<span class="lnr lnr-chevron-down"></span>
										</div>
										<ul class="dropdown">
											<li rel="1 Adult">1 Adult</li>
											<li rel="2 Adults">2 Adults</li>
											<li rel="3 Adults">3 Adults</li>
										</ul>
									</div>

									<div class="select">
										<div class="form-holder">
											<div class="select-control">No Child</div>
											<span class="lnr lnr-chevron-down"></span>
										</div>
										<ul class="dropdown">
											<li rel="1 Room">No Child</li>
											<li rel="1 Child">1 Child</li>
											<li rel="2 Children">2 Children</li>
											<li rel="3 Children">3 Children</li>
										</ul>
									</div>
	                			</div>
                			</div>
                			
	                		<button class="forward">Next
								<i class="zmdi zmdi-long-arrow-right"></i>
							</button>
                		</div>
	                </section>

                   <!-- SECTION 2 -->
	                <h4>Confirmation</h4>
	                <section class="section-style">
						<div class="board-wrapper">
                			<div class="board-inner">
                				<div class="board-item">
                					Check In :
                					<span>2-5-2018</span>
                				</div>
                				<div class="board-item">
                					Check Out :
                					<span>8-5-2018</span>
                				</div>
                			</div>
                		</div>
                		<div class="pay-wrapper">
                			<div class="bill">
	                			<div class="bill-cell">
	                				<div class="bill-item">
		            					<div class="bill-unit">
		            						Room 1 :  <span>Small Room</span>
		            					</div>
		            					<span class="price">$34</span>
		            				</div>
		            				<div class="bill-item people">
		            					<div class="bill-unit">
		            						Adult : <span>2</span>
		            					</div>
		            					<div class="bill-unit">
		            						Children : <span>0</span>
		            					</div>
		            				</div>
	                			</div>
	            				<div class="bill-cell" style="margin-bottom: 13px">
	                				<div class="bill-item">
		            					<div class="bill-unit">
		            						Room 2 :  <span>Luxury Room</span>
		            					</div>
		            					<span class="price">$23</span>
		            				</div>
		            				<div class="bill-item people">
		            					<div class="bill-unit">
		            						Adult : <span>4</span>
		            					</div>
		            					<div class="bill-unit">
		            						Children : <span>1</span>
		            					</div>
		            				</div>
		            				<div class="bill-item service">
		            					<div class="bill-unit">
		            						Rooms & Services :
		            					</div>
		            					<span class="price">$80</span>
		            				</div>
	                			</div>
	                			<div class="bill-cell">
	                				<div class="bill-item vat">
		            					<div class="bill-unit">
		            						Vat 8% :
		            					</div>
		            					<span class="price">$08</span>
		            				</div>
		            				<div class="bill-item total-price">
		            					<div class="bill-unit">
		            						Total Price :
		            					</div>
		            					<span class="price">$88</span>
		            				</div>
		            				<div class="checkbox-circle">
										<label>
											<input type="radio" name="payment" value="full payment" checked> Full Payment<br>
											<span class="checkmark"></span>
										</label>
										<label>
											<input type="radio" name="payment" value="10% Deposit"> 10% Deposit
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="bill-item total">
		            					<div class="bill-unit">
		            						<span>20% Deposit</span>
		            						Pay the rest on arrival
		            					</div>
		            					<span class="price">$78</span>
		            				</div>
	                			</div>
	            			</div>
	            			<button class="forward" style="width: 195px; margin-top: 45px;">Confirmation
								<i class="zmdi zmdi-long-arrow-right"></i>
							</button>
                		</div>
	                </section>
	                <!-- SECTION 3 -->
	                <h4>Make a Reservation</h4>
	                <section>
                    	<div class="form-row">
							<div class="form-holder">
						
								<select type="text" class="form-control" placeholder="Email" name="username_login">
                                            <option>First Name</option>
                                            <option>John</option>
                                            <option>King</option>
                                            <option>Michelle</option>
                                            <option>Jordan</option>
                                            <option>Elizabeth</option>
                                            <option>Adeola</option>
                                        </select>
							</div>
							<div class="form-holder">
							
								<select type="text" class="form-control">
                                            <option>Last Name </option>
                                            <option>Ben</option>
                                            <option>Oliver</option>
                                            <option>Jordan</option>
                                            <option>Bliss</option>
                                            <option>Silver</option>
                                            <option>Ogunfola</option>
                                        </select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder w-100">
							
								<select type="text" class="form-control" >
									        <option>Card Number</option>
                                            <option>1111 2222 3333 4444</option>
                                            <option>5555 6666 7777 8888</option>
                                            <option>9999 5555 1111 6666</option>
                                            <option>3333 2222 6666 7777</option>
                                        </select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="text" class="form-control datepicker-here" data-language='en' data-date-format="M yyyy" id="dp3" placeholder="">Expiration:
									<span class="lnr lnr-calendar-full"></span>
							</div>
							<div class="form-holder">
								<select type="" class="form-control" >

                                            <option>CVV</option>
                                            <option>333</option>
                                            <option>444</option>
                                            <option>555</option>
                                            <option>666</option>
                                            <option>777</option>
                                            <option>888</option>
                                            <option>999</option>
                                        </select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder w-100">
							
								<select type="text" class="form-control" >
									       <option>Address</option>
                                            <option> 88 Station Road London  </option>
                                            <option>28 Park Road London</option>
                                            <option>20 Park Avenue London</option>
                                            <option>87 Victoria Street London</option>
                                            
                                        </select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								
								<select type="text" class="form-control" >
									        <option>City</option>
                                            <option>London</option>
                                            <option>Manchester</option>
                                            <option>Broxbourne</option>
                                            <option>Queens</option>
                                            <option>Chicago</option>
                                            <option>New York</option>
                                            
                                        </select>
							</div>
							<div class="form-holder">
								<select type="text" class="form-control" >
									        <option>PostCode</option>
                                            <option>Nw9 1sc</option>
                                            <option>Nw9 2sn</option>
                                            <option>Nw9 3sc</option>
                                            <option>Nw9 4sv</option>
                                            <option>Nw9 5sc</option>
                                            <option>Nw9 6sc</option>
                                            <option>Nw9 7su</option>
                                        </select>
							</div>
						</div>
	                    <div class="checkbox">
							<label>
								<input type="checkbox" required="true"> I have read and accept the <a href="#">terms and conditions.</a>
								<span class="checkmark"></span>
							</label>
						</div>
	                    <button class="forward" style="width: 195px; margin-top: 44px; ;">Book Now
							<i class="zmdi zmdi-long-arrow-right"></i>
						</button>
	                </section>

            	</div>
			</div>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
