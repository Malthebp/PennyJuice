<?php 
	include 'includes/header.php';
?>
<section id="home">
	<div>
		<p>Rainbows of exciting flavors</p>
	</div>
</section>

<section id="about" class="container">
	
</section>
<section id="buy" class="container">
	<h2>Buy</h2>
		<form action="#" method="post">
		<p>Please fill out your personal information and what items you want to buy.</p>
		<p>We will process your order as fast as possible, but it will be shipped in minimum 3 days.</p>
		<p>The prices:</p>
		<ul>
			<li>Case: $79.00</li>
			<li>Per gallon: $3.29</li>
			<li>Per ounce: 2.5 cents</li>
		</ul>
		<h3>Personal information</h3>
		<div>
			<label for="name">Your Name *</label>
			<input type="text" name="name" id="name" placeholder="ex. John Doe" value="">
		</div>
		<div>
			<label for="email">Your E-mail *</label>
			<input type="email" name="email" id="email" placeholder="ex. John@Doe.com" value="">
		</div>
		<div>
			<label for="phone">Your Phone number *</label>
			<input type="number" name="phone" id="phone" placeholder="ex. 22 22 22 22" value="">
		</div>
		<div>
			<label for="address">Your Address *</label>
			<input type="text" name="address" id="address" placeholder="ex. johndoe street 123" value="">
		</div>
		<div>
			<label for="postal">Your Postal code*</label>
			<input type="number" name="postal" id="postal" placeholder="ex. 9999" value="">
		</div>

		 <h3>Choose items</h3>
		<section class="form-horizontal">
			<div>
				<label for="apple">Apple</label>
				<input type="number" name="apple" id="apple">
			</div>	
			<div>
				<label for="Wgrape">White Grape</label>
				<input type="number" name="Wgrape" id="Wgrape">
			</div>	
			<div>
				<label for="SBanana">Strawberry Banana</label>
				<input type="number" name="SBanana" id="SBanana">
			</div>	
			<div>
				<label for="Cherry">Cherry (Color free)</label>
				<input type="number" name="Cherry" id="Cherry">
			</div>	
		</section>
		<input type="submit" class="btn-submit" value="Order">
	</form>
</section>
<section id="contact" class="container">
</section>



<?php 
	include 'includes/footer.php';
?>