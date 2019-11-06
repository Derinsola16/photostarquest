<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
    <!-- Css Ends -->

    <title>VOTE FOR YOUR FAVOURITE HOUSEMATE</title>
    <link rel="icon" type="image/gif/png" href="images/logo.jpg">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <!-- Js -->
    <script src="js/jquery.min.js"></script>
    <script src='js/jquery-2.2.3.min.js'></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            //To switch directions up/down and left/right just place a "-" in front of the top/left attribute
            //Caption Sliding (Partially Hidden to Visible)
            $('.boxgrid.caption').hover(function() {
                $(".cover", this).stop().animate({
                    top: '170px'
                }, {
                    queue: false,
                    duration: 160
                });
            }, function() {
                $(".cover", this).stop().animate({
                    top: '220px'
                }, {
                    queue: false,
                    duration: 160
                });
            });
        });
    </script>

</head>

<body>
    <!-- Start-wrap -->

    <!-- Start-Header-->
    <div class="header">
        <div class="wrap">
            <!-- Start-logo-->
            <div class="logo">
                <a href="index.html"><img src="images/logo.jpg" width="120px;" height="70px;" title="logo" /></a>
            </div>
            <!-- End-Logo-->
            <!-- Start-Header-nav-->
            <div class="header-nav">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <!-- <li><a href="blog.html">Blog</a></li>
						<li><a href="artists.html">artists</a></li>
						<li><a href="#">clients</a></li>
						<li><a href="contact.html">Contact</a></li> -->
                </ul>
            </div>
            <div class="clear"> </div>
            <!-- End-Header-nav-->
        </div>
        <!-- End-Header-->
        <div class="clear"> </div>
        <!-- content-gallery-->
    </div>




    <!-- DC Pagination:A3 End -->

    <div class="clear"> </div>

    <!-- DC Pagination:C9 End -->


    <div class="clear"> </div>
    <!-- End-content-gallery-->
    <!-- DC Pagination:C9 Start -->
    <div class="wrap">

        <div class="outer-w3-agile mt-3">
            <h3 class="tittle-w3-agileits mb-4" style="font-style: italic; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', cursive;">HOUSEMATE VOTING</h3>
            <form action="" id="paymentForm" method="post">
                <script src="https://js.paystack.co/v1/inline.js"></script>
                <div class="form-group col-md-6">
                    <label for="full-name">FullName</label>
                    <input type="text" id="full-name" name="fullname" class="form-control" id="inputEmail4" placeholder="First&Last Name" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" id="email-address" name="email" value="" class="form-control" id="inputEmail4" placeholder="Email" required="">
                </div>

                <div class="form-group col-md-6">
                    <label for="amount">Amount(NGN)</label>
                    <select id="amount" class="form-control" name="amount">
                        <option selected="">Choose...</option>
                        <option value="50">NGN50 - 1VOTE</option>
                        <option value="500">NGN500 - 10VOTES</option>
                        <option value="1000">NGN1000 - 25VOTES</option>
                        <option value="5000">NGN5000 - 130VOTES</option>
                        <option value="10000">NGN10,000 - 280VOTES</option>
                        <option value="30000">NGN30,000 - 850VOTES</option>
                        <option value="50000">NGN50,000 - 1450VOTES</option>
                        <option value="100000">NGN100,000 - 2850VOTES</option>
                        <hr />
                        <option value="359">1$ - 1VOTE</option>
                        <option value="3590">10$ - 10VOTES</option>
                        <option value="17180">20$ - 25VOTES</option>
                        <option value="17950">50$ - 130VOTES</option>
                        <option value="135900">100$ - 280VOTES</option>
                        <option value="107700">300$ - 850VOTES</option>
                        <option value="179500">500$ - 1450VOTES</option>
                        <option value="359000">1000$ - 2850VOTES</option>
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="housemate">Housemate Name</label>
                    <input name="housemate" id="first-name" type="text" class="form-control" id="inputCity" required="">
                </div>
                <div class="form-group col-md-6">
                    <label for="number">Phone Number</label>
                    <input name="phonenumber" id="number" type="text" class="form-control" id="inputCity" required="">

                    <br><br>
                    <button type="submit" name="vote" class="btn btn-primary btn-block">
                        <h4>VOTE</h4>
                    </button>
                </div>


            </form><br><br>
        </div>

        <script>
            var paymentForm = document.getElementById('paymentForm');
            // paymentForm.addEventListener("submit", payWithPaystack, false);

            function payWithPaystack(e) {
                e.preventDefault();
                var handler = PaystackPop.setup({
                    key: 'pk_live_48a128f54ece0c342713eb44f35044b80e83faa6', // Replace with your public key

                    email: document.getElementById("email-address").value,
                    amount: document.getElementById("amount").value * 100,
                    firstname: document.getElementById("first-name").value,
                    Phonenumber: document.getElementById("number").value,
                    ref: '' + Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate
                    // label: "Optional string that replaces customer email"
                    onClose: function() {
                        alert('Window closed.');
                    },
                    callback: function(response) {
                        var message = 'Payment complete! Reference: ' + response.reference;
                        alert(message);
                    }
                });

                handler.openIframe();
            }


            $(function() {
                // Get the form.
                var form = $('#paymentForm');

                // Set up an event listener for the contact form.
                $(form).submit(function(event) {
                    // Stop the browser from submitting the form.
                    event.preventDefault();
                    // Serialize the form data.
                    var formData = $(form).serialize();

                    // Submit the form using AJAX.
                    $.ajax({
                        type: 'POST',
                        url: "insert.php",
                        data: formData,
                        success: (data) => {
                            document.write("Welcome dutch" + "\n" + data);
                        },
                        error: (err) => {
                            document.write("You got an Error bro: " + "\n" + err);
                        }
                    })
                });
                // TODO: The rest of the code will go here...
            });
        </script>

        <!-- <script>



var paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack() {
  var handler = PaystackPop.setup({
    key: 'pk_live_48a128f54ece0c342713eb44f35044b80e83faa6', // Replace with your public key
    email: document.getElementById("email-address").value,
    amount: document.getElementById("amount").value * 100,
    fullname: document.getElementById("full-name").value,
		housemate: document.getElementById("housemate").value,
		number: document.getElementById("number").value,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window closed.');
    },
    callback: function(response){
      var message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });
  
  handler.openIframe();
}





</script> -->
    </div>


    <div class="clear"> </div>
    <section class="carousels-section">
        <div class="footer container-fluid">
            <div class="outer-w3-agile col-lg mt-3 mr-lg-3">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="boxgrid ">
                                <img class="d-block w-100" src="images/37.png" alt="First slide">
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="boxgrid ">
                                <img class="d-block w-100" src="images/38.jpg" alt="Second slide">
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="boxgrid caption">
                                <img class="d-block w-100" src="images/39.png" alt="Third slide">
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="boxgrid caption">
                                <img class="d-block w-100" src="images/40.jpg" alt="Fourth slide">
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="boxgrid caption">
                                <img class="d-block w-100" src="images/41.jpg" alt="Fifth slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer1">
        <p class="link"><span>© 2019 DelaquineService . All rights Reserved | Designed by&nbsp; <a href="http://aderinsolaodus.cf/"> WEB_BLOG</a></span></p>
    </div>
    <!-- End-wrap -->

</body>

</html> 