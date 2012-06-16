<?php
/**
 * Template Name: Contact Us
 *
 *
 */

get_header(); ?>

	<div id="set-flowers" class="min-contain">
		<div class="contain">
			<div id="content" class="contact">
				<div id="contact-box">
					<h1><img src="<?php bloginfo('template_url'); ?>/images/contact-us.png" alt="Contact Us" /></h1>
					<div id="top-contact">
						<div class="tci-set">
							<h4>Phone:</h4>
							<span>555.555.5555</span>
						</div>
						<div class="tci-set">
							<h4>Email:</h4>
							<span>info@thesandwichspot.com</span>
						</div>
						<div class="tci-set last">
							<h4>Address:</h4>
							<span>p.o box 1234,</span>
							<span>san francisco, ca</span>
							<span>92120</span>
						</div>
					</div>
					<div id="dual-contact">
						<div id="lc-info">
							<div class="lci-set">
								<label><span class="req"></span>Name</label>
								<input type="text" name="e-name" id="e-name" />
							</div>
							<div class="lci-set">
								<label><span class="req"></span>Email</label>
								<input type="text" name="e-email" id="e-email" />
							</div>
							<div class="lci-set">
								<label>Daytime Contact</label>
								<input type="text" name="e-daycon" id="e-daycon" />
							</div>
							<div class="lci-set">
								<label>Cell Contact</label>
								<input type="text" name="e-cell" id="e-cell" />
							</div>
						</div>
						<div id="mc-info">
							<div class="lci-set">
								<label>Address</label>
								<input type="text" name="e-address" id="e-address" />
							</div>
							<div class="lci-set">
								<label>City</label>
								<input type="text" name="e-city" id="e-city" />
							</div>
							<div class="dci-set">
								<label>State</label><br/>
								<select name="e-state" id="e-state">
									<option value="none">&mdash; select &mdash;</option>
									<option value="AL">AL</option>
									<option value="AK">AK</option>
									<option value="AZ">AZ</option>
									<option value="AR">AR</option>
									<option value="CA">CA</option>
									<option value="CO">CO</option>
									<option value="CT">CT</option>
									<option value="DE">DE</option>
									<option value="DC">DC</option>
									<option value="FL">FL</option>
									<option value="GA">GA</option>
									<option value="HI">HI</option>
									<option value="ID">ID</option>
									<option value="IL">IL</option>
									<option value="IN">IN</option>
									<option value="IA">IA</option>
									<option value="KS">KS</option>
									<option value="KY">KY</option>
									<option value="LA">LA</option>
									<option value="ME">ME</option>
									<option value="MD">MD</option>
									<option value="MA">MA</option>
									<option value="MI">MI</option>
									<option value="MN">MN</option>
									<option value="MS">MS</option>
									<option value="MO">MO</option>
									<option value="MT">MT</option>
									<option value="NE">NE</option>
									<option value="NV">NV</option>
									<option value="NH">NH</option>
									<option value="NJ">NJ</option>
									<option value="NM">NM</option>
									<option value="NY">NY</option>
									<option value="NC">NC</option>
									<option value="ND">ND</option>
									<option value="OH">OH</option>
									<option value="OK">OK</option>
									<option value="OR">OR</option>
									<option value="PA">PA</option>
									<option value="RI">RI</option>
									<option value="SC">SC</option>
									<option value="SD">SD</option>
									<option value="TN">TN</option>
									<option value="TX">TX</option>
									<option value="UT">UT</option>
									<option value="VT">VT</option>
									<option value="VA">VA</option>
									<option value="WA">WA</option>
									<option value="WV">WV</option>
									<option value="WI">WI</option>
									<option value="WY">WY</option>
								</select>
							</div>
							<div class="dci-set" style="float:right">
								<label>Zip Code</label><br/>
								<input type="text" name="e-zip" id="e-zip" />
							</div>
							
							<div class="lci-set">
								<label>How Did You Find Us?</label>
								<select name="e-how">
									<option value="none">&mdash; select &mdash;</option>
									<option value="web">Web</option>
									<option value="friend">From a friend</option>
									<option value="ad">Advertisement</option>
									<option value="spot">Visited a Sandwich Spot</option>
								</select>
							</div>
						
						</div>
						<div id="rc-info">
							<div class="rci-set">
								<label><span class="req"></span>Message</label>
								<textarea id="e-message" name="e-message"><?php if(@$_GET['fr']) echo 'I want to get started right now. How can I go to next level?';?></textarea>
							</div>
							<input type="hidden" name="h-fr" id="h-fr" value="<?php if(@$_GET['fr']) echo 'true'; ?>" />
							<div id="submit-button" class="arrow" >submit</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>
	
<?php get_footer(); ?>
