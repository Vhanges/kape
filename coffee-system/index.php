<?php
// Connection parameters
$host = 'aws-0-ap-southeast-1.pooler.supabase.com';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres.kgbgydykgnlrixaewpku';
$password = 'Angakingpassword123456';

// Connection string (DSN)
$dsn = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

// Establishing the connection
$dbconn = pg_connect($dsn);

if ($dbconn) {
    echo "Connected successfully";
} else {
    echo "Connection failed";
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg">
    <link rel="icon" type="image/png" href="/favicon/favicon.png">

    <link rel="stylesheet" href="index.css">
    <title>28th Avenue Cafe</title>
</head>
<body>
    
    <!-- NAVIGATION  -->
    <nav class="main-nav" id="nav">
        <div class="container-nav">
            <a href="#home" class="navbar-brand space">
                <img src="images/logo-28th.svg" alt="" id="logo-nav">
            </a>
            <ul class="options op-1">
                <li class="nav-item space">
                    <a href="">Menu</a>
                </li>
                <li class="nav-item space">
                    <a href="">Menu</a>
                </li>
                <li class="nav-item space">
                    <a href="">Menu</a>
                </li>
            </ul>
                <li class="nav-item space">
                    <a href="">Menu</a>
                </li>
            <!-- <button class="order-now">Order Now!</button> -->
                <a href="#form-order" class="orderNow">Order Now</a>
        </div>
    </nav>

    <!-- MAIN CONTAINER -->

    <div class="main">
        <div class="main-container">
            <div class="main-banner row">
                <img src="images/banner.svg" alt="" class="banner">
            </div>

            <div class="products">
                <div class="product-section">

                    <div class="container-1">
                        <div class="card">
                            <img src="images/menu/1.svg" alt="" id="milktea">
                            <div class="card-content">
                                <h3 class="content-title">
                                    Milktea
                                </h3>
                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur voluptatem iure, neque fuga aliquid quasi quisquam officia. Voluptas adipisci laudantium sint qui debitis quae. Nihil dignissimos repellat eos perspiciatis.</p>
    
                                <!-- <a href=""></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="container-2">
                        <div class="card">
                            <img src="images/menu/4.svg" alt="" id="iced">
                            <div class="card-content">
                                <h3 class="content-title">
                                    Iced Coffee
                                </h3>
                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur voluptatem iure, neque fuga aliquid quasi quisquam officia. Voluptas adipisci laudantium sint qui debitis quae. Nihil dignissimos repellat eos perspiciatis.</p>
    
                                <!-- <a href=""></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="container-3">
                        <div class="card">
                            <img src="images/menu/3.svg" alt="" id="milktea">
                            <div class="card-content">
                                <h3 class="content-title">
                                    Frappe
                                </h3>
                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur voluptatem iure, neque fuga aliquid quasi quisquam officia. Voluptas adipisci laudantium sint qui debitis quae. Nihil dignissimos repellat eos perspiciatis.</p>
    
                                <!-- <a href=""></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="container-4">
                        <div class="card">
                            <img src="images/menu/2.svg" alt="" id="fruittea">
                            <div class="card-content">
                                <h3 class="content-title">
                                    Fruit Tea
                                </h3>
                                <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur voluptatem iure, neque fuga aliquid quasi quisquam officia. Voluptas adipisci laudantium sint qui debitis quae. Nihil dignissimos repellat eos perspiciatis.</p>
    
                                <!-- <a href=""></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="container-5">
                        <div class="card-fifth">
                                <div class="card-content-wsize">
                                    <h3 class="content-title">
                                        Hot Signatures
                                    </h3>
                                    <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur voluptatem iure, neque fuga aliquid quasi quisquam officia. Voluptas adipisci laudantium sint qui debitis quae. Nihil dignissimos repellat eos perspiciatis.</p>
        
                                    <!-- <a href=""></a> -->
                                </div>
                                <div class="img-wrapper">
                                    <img src="images/menu/5.svg" alt="" id="hot">
                                </div>
                                
                            
                            
                            
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row-divider"></div>

            <div class="form-section" id="form-order">
                <div class="form-container">
                    <div class="form-con" >
                        <form action="send-email.php" method="SUBMIT">
                            <div class="row">
                                <h1 class="title-h3">Order Form</h1>
                            </div>
        
                            <div class="row">

                                    <p class="field">
                                        <label for="name" id="lbl-name">Name:<span class="req">&nbsp; &nbsp;*</span></label>
                                        <input type="text" id="name" placeholder="Enter your Name" autocapitalize="name" required>
                                    </p>

                                    <p class="field">
                                        <label for="name" id="lbl-address">Address:<span class="req">&nbsp; &nbsp;*</span></label>
                                        <input type="text" id="address" placeholder="Enter your Address" required>
                                    </p>

                                    <p class="field">
                                        <label for="email" id="lbl-email">Email:<span class="req">&nbsp; &nbsp;*</span></label>
                                        <input type="text" id="email" placeholder="Enter your Email" autocomplete="email" required>
                                    </p>

                                    <div class="column">
                                        <p class="field">
                                            <!-- <label for="message" id="labelmsg">Enter your message (max 100 characters):</label>
                                            <textarea id="message" name="message" rows="4" cols="50" maxlength="100" placeholder="Enter your message here"></textarea> -->
                                            <label for="category">Category:<span class="req">&nbsp;*</span></label>
                                            <select name="category" id="category" required>
                                                <option value="milkteaSec">Milktea</option>
                                                <option value="icedSec">Iced Coffee</option>
                                                <option value="fruitteaSec">Fruit Tea</option>
                                                <option value="frappeSec">Frappe Series</option>
                                                <option value="hotSignatures">Hot Signatures</option>
    
                                            </select>
                                        </p>
    
                                        <p class="field">
                                            <!-- <label for="message" id="labelmsg">Enter your message (max 100 characters):</label>
                                            <textarea id="message" name="message" rows="4" cols="50" maxlength="100" placeholder="Enter your message here"></textarea> -->
                                            <label for="flavors">Item:<span class="req">&nbsp;*</span></label>
                                            <select name="flavors" id="flavors" class="dropdown" required>
                                                <optgroup label="milkteaSec">
                                                    <option value="taro">Taro</option>
                                                    <option value="matcha">Matcha</option>
                                                    <option value="okinawa">Okinawa</option>
                                                    <option value="hokkaido">Hokkaido</option>
                                                    <option value="chocolate">Chocolate</option>
                                                    <option value="red-velvet">Red Velvet</option>
                                                    <option value="cheesecake">Cheesecake</option>
                                                    <option value="dark-choco">Dark Choco</option>
                                                    <option value="strawberry">Strawberry</option>
                                                    <option value="choco-kisses">Choco Kisses</option>
                                                    <option value="brown-sugar">Brown Sugar</option>
                                                    <option value="wintermelon">Wintermelon</option>
                                                    <option value="salted-caramel">Salted Caramel</option>
                                                    <option value="choco-hazelnut">Choco Hazelnut</option>
                                                    <option value="cookies-and-cream">Cookies and Cream</option>
                                                </optgroup>
    
                                                <optgroup label="icedSsec">
                                                    <option value="mocha">Mocha</option>
                                                    <option value="matcha-iced">Matcha</option>
                                                    <option value="hazelnut">Hazelnut</option>
                                                    <option value="macchiato">Macchiato</option>
                                                    <option value="americano">Americano</option>
                                                    <option value="white-choco">White Choco</option>
                                                    <option value="choco-fudge">Choco Fudge</option>
                                                    <option value="butterscotch">Buttersotch</option>
                                                    <option value="salted-caramel">Salted Caramel</option>
                                                </optgroup>
    
                                                <optgroup label="fruitteaSec">
                                                    <option value="mocha">Mocha</option>
                                                    <option value="matcha-iced">Matcha</option>
                                                    <option value="hazelnut">Hazelnut</option>
                                                    <option value="macchiato">Macchiato</option>
                                                    <option value="americano">Americano</option>
                                                    <option value="white-choco">White Choco</option>
                                                    <option value="choco-fudge">Choco Fudge</option>
                                                    <option value="butterscotch">Buttersotch</option>
                                                    <option value="salted-caramel">Salted Caramel</option>
                                                </optgroup>
    
                                                <optgroup label="frappeSec">
                                                    <option value="mochaF">Taro</option>
                                                    <option value="melon">Melon</option>
                                                    <option value="vanilla">Vanilla</option>
                                                    <option value="frapuccinoF">Frapuccino</option>
                                                    <option value="macchiatoF">Macchiato</option>
                                                    <option value="choco-fudgeF">Choco fudge</option>
                                                    <option value="choco-kissesF">Choco Kisses</option>
                                                    <option value="double-dutchF">Double Dutch</option>
                                                    <option value="creamy-avocadoF">Creamy Avocado</option>
                                                    <option value="cookies-and-cream">Cookies and Cream</option>
                                                    <option value="strawberries-and-cream">Strawberries and Cream</option>
                                                </optgroup>
    
                                                <optgroup label="hotSignatures">
                                                    <option value="matchaHot">Matcha</option>
                                                    <option value="hot-choco">Hot Choco</option>
                                                    <option value="capuccino">Cappucino</option>
                                                    <option value="white-mocha">White Mocha</option>
                                                    <option value="blended-americano">Blended Americano</option>
                                                    <option value="caramel-macchiato">Caramel Macchiato</option>
                                                </optgroup>
                                                    
                                                
                                            </select>
                                        </p>

                                        <p class="field">
                                            <!-- <label for="message" id="labelmsg">Enter your message (max 100 characters):</label>
                                            <textarea id="message" name="message" rows="4" cols="50" maxlength="100" placeholder="Enter your message here"></textarea> -->
                                            <label for="add-ons">Add-ons:<span class="req">&nbsp;*</span></label>
                                            <select name="add-opt" id="add-ons" required>
                                                <option value="none">None</option>
                                                <option value="pearl">Pearl</option>
                                                <option value="crystals">Crystals</option>
                                                <option value="creamypuff">Creamypuff</option>
                                                <option value="coffee-jelly">Coffee Jelly</option>
                                                <option value="creamcheese">Creamcheese</option>
                                                <option value="crushed-oreo">Crushed Oreo</option>
                                                <option value="extra-coffee">Extra shot of Coffee</option>
    
                                            </select>
                                        </p>

                                    </div>

                                    <div class="column">
                                        <p class="field">
                                            <label for="quantity" id="lbl-quantity">Quantity: <span class="req"> &nbsp;*</span></label>
                                            <input type="text" id="quantity" placeholder="Enter your total order" required>
                                        </p>
    
                                        <p class="field">
                                            <label for="name">Mode of Payment: <span class="req">&nbsp;*</span></label>
                                            <select name="mode" id="mop">
                                                <option value="cod">Cash on Delivery</option>
                                            </select>
                                            <br><br>
                                        </p>

                                        <br><br>
                                    
                                    <input type="submit" value="Submit" class="btn-submit">
                                    </div>

                                    

                                    
                                
                                    
                                
                                
                            </div>
                        </form>

                            

                    </div>


                </div>

                

                <!-- <div class="contain-2">
                    <div class="row">
                        <div class="column">
                            <div class="con">
                                <h3>CHECKOUT</h3>

                            </div>
                        </div>
                    </div>
                </div> -->


                
                

            </div>


            <div class="row-divider"></div>

            <div class="footer">
                <div class="footer-box">

                            <div class="social-media">
                                <ul class="soc">
                                    <li>
                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            
                        
                            <div class="brand">
                                    <p class="brand-n">28th Avenue Cafe <span id="branch">&nbsp;&nbsp;Antipolo Branch</span></p>
                                    <p class="ctto">Copyright &copy; 2024</p>
                            </div>
        
                            <!-- <div class="copyright">
                                    <label class="ctto">Copyright &copy; 2024</label>
                            </div> -->
        
                </div>                         
            </div>


        </div>
    </div>

    <script src="index.js"></script>

</body>
</html>