<section id="contact" class="contact-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-scrollreveal="enter left over 1.5s">
                        <h2>Contact Us</h2>
                            <div id="contact-map">
				            	<div id="googleMap" style="width:100%;height:400px;"></div>
					            <script>
					            	var uluru = {lat: 44.660574, lng: 20.930972};
					            	function myMap() {
					            		var mapProp = {
					            		center: new google.maps.LatLng(44.660574, 20.930972),
					            		zoom: 15,
				            		};
					            	var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
					            	var marker = new google.maps.Marker({
					            		position: uluru,
					            		map: map
				            		});
                                    }
                                 </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPpWijYim26cE5rd7Oj03sqQHhc-k1N3I&callback=myMap"></script>
                            </div>
                
                    </div>
                    <div class="col-lg-5 col-lg-offset-1" data-scrollreveal="enter right over 1.5s">
                        <br>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-lg btn-primary btn-square btn-raised">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>