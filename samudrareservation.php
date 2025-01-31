<html>

<head>
    <title>Hotel Sunset Plains</title>
    <link rel="stylesheet" href="css/samudrareservation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
    function calculateTotal() {
      var weddingPlanPrices = {
        "Platinum-Romantic": 4500000.00,
		"Platinum-Ancient": 3700000.00,
		"Platinum-Vintage": 4000000.00,
		"Platinum-Industrial": 3500000.00,
        "Gold-Retro": 2800000.00,
		"Gold-Art Deco": 3000000.00,
		"Gold-Natural": 2500000.00,
		"Gold-Country": 2600000.00,
        "Silver-Electric": 2000000.00,
		"Silver-Nautical": 1600000.00,
		"Silver-Glamourous": 1800000.00,
		"Silver-Preppy": 1500000.00,
        "Bronze-Diy": 1200000.00,
		"Bronze-Alternative": 1100000.00,
		"Bronze-Preppy": 1000000.00,
		"Bronze-Rustic": 1400000.00
      };

      var foodComboPrices = {
        "Menu 1": 2000.00,
        "Menu 2": 2500.00,
        "Menu 3": 3500.00,
        "Menu 4": 4000.00,
        "Menu 5": 4500.00,
        "Menu 6": 5000.00
      };

      var cocktailMenuPrices = {
        "Menu 1": 3500.00,
        "Menu 2": 4250.00,
        "Menu 3": 5000.00
      };

      var weddingPlan = document.getElementById("weddingPlan").value;
      var foodComboMenu = document.getElementById("foodCombo").value;
      var cocktailMenu = document.getElementById("cocktailMenu").value;
      var guestCount = document.getElementById("guestCount").value;

      var weddingPlanPrice = weddingPlanPrices[weddingPlan];
      var foodComboPrice = foodComboPrices[foodComboMenu];
      var cocktailPrice = cocktailMenuPrices[cocktailMenu];

      var totalAmount = (weddingPlanPrice + (foodComboPrice * guestCount) + (cocktailPrice * guestCount));
      document.getElementById("totalAmount").innerHTML = "Rs." + totalAmount;
    }

</script>
</head>

<body>
    <header class="heading" id="home">
        <div id="bar">
        <a href="./index.php">HOME</a>
  <a href="./samudrawedding.php">MY WEDDING</a>
  <a href="./samudraFood&Beverage_Menu.php">FOOD COMBO</a>
  <a href="./samudrapromotion.php">PROMOTION & EVENTS</a>
  <a href="./samudrareservation.php">RESERVATION</a>
  <a href="./samudraAboutus.php">ABOUT US</a>

  <input type="text" placeholder="Search..">
  <img id="search" src="./images/search.png">
        </div>
    </header>

    <div class="div1">

        <form method="post" action="php/samudrareservation.php">
            <h1 class="reg"><b><u><i>Register</i></u></b></h1>

            <p><b><i>"Thank you for selecting Cinnamon Colombo as the venue for your special event. We are delighted to have the opportunity to make your celebration extraordinary and filled with unforgettable moments.</i></b></p>
            <p><b><i>Our team is here to ensure every detail is just right, from the ambiance to the dining experience. If you have any specific requests, please don’t hesitate to reach out.
            </i></b></p>
            <p><b><i>We can’t wait to welcome you and your guests to Cinnamon Colombo for an event to remember. Thank you for choosing us!"</i></b></p>
       <br><br> 



            <input type="text" name="Name" placeholder="name"><br><br>
            <input type="text" name="Contact_Number" placeholder="contact number"><br><br>
            <input type="text" name="mail" placeholder="email"><br><br>
            <input type="date" name="Date" placeholder="date"><br><br> 
			Select the wedding plan:
<select id="weddingPlan" onchange="calculateTotal()" name="hall">

										 <option>Platinum-Romantic</option>
										 <option>Platinum-Ancient</option>
										 <option>Platinum-Vintage</option>
										 <option>Platinum-Industrial</option>
										 <option>Gold-Rero</option>
										 <option>Gold-Art Deco</option>
										 <option>Gold-Natural</option>
										 <option>Gold-Country</option>
										 <option>Silver-Eclectic</option>
										 <option>Silver-Nautical</option>
										 <option>Silver-Glamourous</option>
										 <option>Silver-Preppy</option>
										 <option>Bronze-DIY</option>
										 <option>Bronze-Alternative</option>
										 <option>Bronze-Preppy</option>
										 <option>Bronze-Rustic</option>
</select><br><br> 
Select the food combo:
<select id="foodCombo" onchange="calculateTotal()" name="food">
				<option>Menu 1</option>
				<option>Menu 2</option>
				<option>Menu 3</option>
				<option>Menu 4</option>
				<option>Menu 5</option>
				<option>Menu 6</option>
</select>
<br><br> 
Select the cocktail menu:
<select id="cocktailMenu" onchange="calculateTotal()" name="cook">-
				<option>Menu 1</option>
				<option>Menu 2</option>
				<option>Menu 3</option>
</select>
<br><br>

<label for="guestCount">Number of Guests:</label>
<input type="number" id="guestCount" name="count">
<br><br>
  
<!-- <h3>Total Amount: <span id="totalAmount">Rs.0.00</span></h3>
 
            <B><I>Pay the 50% advance now and pay your balance after the event</I></B><br><br> Pay Now:
            <select>
<option>Visa</option>
<option>Master Card</option>
<option>American Express</option>
</select><br><br> Card Number:<input type="text" name="input" placeholder="card number"> Exp Date:<input type="date" name="input" placeholder="mm/dd/yyyy"> <br><br> Name on Card:<input type="text" name="input" placeholder="name on card"> CVV
            Number:
            <input type="text" name="input" placeholder="CVV number"><br><br>
            <input type="checkbox" name="check">Accept terms & Conditions<br>
            <input type="checkbox" name="check">I'm not a robot<br><br>
			<a href="./confirmation.html">
			 -->
            <input type="submit" value="Submit" id="but" />
			<!-- </a> -->
        </form>

    </div>

    <footer>

        <div class="row primary">
            <div class="column about">
                <p class="loc">
                    <i class="fa fa-map-marker" aria-hidden="true"></i> 316, Ruwan Perera Road, Sri Lanka<br>
                    <h3>WHY US</h3>

                    The Ultimate Setting For Some Of Life's Greatest Moments,<br> We Create Incredible Memories For Guests On Their 'Once In a Lifetime' Journey.<br>
                    <br>
                    <h3>FIND US</h3>
                </p>
                <div class="social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook-square"></a>
                    <a href="https://twitter.com/" class="fa fa-twitter-square"></a>
                    <a href="https://lk.linkedin.com/" class="fa fa-linkedin-square"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                </div>
            </div>

            <div class="column link">
                <br><br> GENERAL INQUIRIES<br> TEL : +94 75 123 1299<br> Email : we@sunsetplains.lk<br><br> RESTAURANT RESERVATIONS<br> TEL : +94 77 210 1187<br> Email:sunsetreserve@sunsetplains.lk
                <br><br> BANQUET SALES<br> TEL : +94 70 345 2876<br> Email: newrathada@sunsetplains.lk<br><br> PHOTOGRAPHIC

                <br> TEL : +94 72 666 8765<br> Email: marlin@sunsetplains.lk<br><br>

            </div>
            <div class="column subscribe">
                <div>
                    <p>
                        <img class="qr" src="./images/qr.png">
                        <u>OPERATING HOURS</u><br><br> MON - SAT -<br> &nbsp &nbsp 8AM TO 10PM<br> SUN -<br> &nbsp &nbsp 8AM TO 12PM
                    </p>
                </div>
                <div>
                    <p class="news">Sign up for the Hotel sunset plains newsletter
                        <p>
                            <input type="email" placeholder="Your email id here" />
                            <button>Subscribe</button>
                </div>
            </div>
        </div>

        <div class="row copyright">
            <div class="footer-menu">
         
            <a href="./index.php">HOME</a>
  <a href="./samudrawedding.php">MY WEDDING</a>
  <a href="./samudraFood&Beverage_Menu.php">FOOD COMBO</a>
  <a href="./samudrapromotion.php">PROMOTION & EVENTS</a>
  <a href="./samudrareservation.php">RESERVATION</a>
  <a href="./samudraAboutus.php">ABOUT US</a>
            </div>
            <p>Copyright &copy; 2025</p>
        </div>

    </footer>
</body>

</html>


</html>