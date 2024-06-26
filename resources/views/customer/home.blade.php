<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- bootsrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- iconscout cdn link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Alertify CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

    <!-- Alertify CSS Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

    <!-- custom css file link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<!-- header section start  -->

<header class="header fixed-top">

    <div class="container">

        <div class="row align-items-center">

            <a href="#" class="logo mr-auto"><i class="fas fa-wallet" style="
                position: relative;top: -3px;"></i> Leather World </a>

            <nav class="nav">
                <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Item</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#gallery">Login</a></li>
                <!-- <li><a href="{% url 'book-table' %}">Book Table</a></li> -->
                {{--{% if current_user %}
                <li><a href="#" id="signin">{{current_user}}</a>

                    <ul>
                        <li><a href="{% url 'user_profile' %}">Your Profile</a></li>
                        <li><a href="{% url 'directly_change_password' %}">Change Password</a></li>
                        <li><a href="{% url 'my-orders' %}">Your Orders</a></li>
                        <li><a href="{% url 'userTabReservation' %}">Your Table Reservation</a></li>
                        <li><a href="{% url 'offer' %}">Offer</a></li>
                        <li><a href="{% url 'user-notifications' %}">Notifications</a></li>
                        <li><a href="{% url 'logout' %}">Logout</a></li>
                    </ul>

                </li>
                <li><a href="{% url 'cart' %}">Cart</a></li>
                 {% elif current_admin %}
                <li><a href="#" id="signin">{{current_admin}}</a>

                    <ul>
                        <li><a href="{% url 'adminPanel' %}">Dashboard</a></li>
                        <li><a href="{% url 'Adminlogout' %}">Logout</a></li>
                    </ul>

                </li>
                {% else %}
                <li><a href="{% url 'login' %}" id="signin">Login</a></li>
                {% endif %} --}}
                <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                {{-- {% comment %} <div id="cart-btn" class="fas fa-shopping-cart"></div> {% endcomment %} --}}
            </div>

        </div>

    </div>

</header>

<!-- header section end -->

<!-- login section start -->

<div class="login-form">

    <form action="" method="post">
        {% csrf_token %}
        <div id="close-login-form" class="fas fa-times"></div>
        <a href="#" class="logo mr-auto"><i class="fas fa-mug-hot"></i> Login</a>
        <h3>Let's start a new great day.!</h3>
        <input type="text" placeholder="Enter Username" name="login_user_name" id="uName1" class="box">
        <input type="password" placeholder="Enter Password" name="login_user_password" id="uPassword1" class="box loginPassword">
        <i class="uil uil-eye-slash showHidePw" style="position: absolute;right: 55px;bottom: 227px;font-size: 1.9rem;"></i>

        <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">Remember me</label>
            <a href="#" class="fpass">Forgot password?</a>
        </div>
        <input type="submit" value="Login now" class="link-btn" onclick="loginFormValidation()">
        <p class="account">Don't have an account? <a href="user_signup" id="signup">create one!</a> </p>
    </form>

</div>

<!-- login section end -->

<!-- Registration section start -->

<div class="signup-form">

    <form action="" method="post">
        {% csrf_token %}
        <div id="close-signup-form" class="fas fa-times"></div>
        <div class="title"><i class="fas fa-mug-hot"></i> Registration</div>
        <h3>Let's start a new great day.!</h3>
        <div class="user-details">
            <div class="input-box">
                <input type="text" placeholder="Username" name="signup_user_name" id="user_name">
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="signup_user_password" id="user_password" class="signupPassword">
                <i class="uil uil-eye-slash showHidePw1"  style="position: absolute;right: 50px;top: 121px;font-size: 1.8rem;"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="signup_user_confirm_password" id="user_confirm_password" class="signupPassword">
                <i class="uil uil-eye-slash showHidePw1" style="position: absolute;right: 405px;top: 180px;font-size: 1.8rem;"></i>
            </div>
            <div class="input-box">
                <input type="email" placeholder="E-mail" name="signup_user_email" id="user_email">
            </div>
            <div class="input-box">
                <input type="tel" placeholder="Mobile no" name="signup_user_mobile_no" id="user_mobile_no">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Security question" name="signup_user_security_question" id="">
            </div>
            <div class="input-box">
                <input type="text" placeholder="Security answer" name="signup_user_security_answer" id="">
            </div>
        </div>
        <div class="flex">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">Remember me</label>
        </div>
        <input type="submit" value="Signup now" class="slink-btn" onclick="signUpFormValidation()">
        <p class="account">Already have an account? <a href="#" id="signin1">login now!</a> </p>
    </form>

</div>

<!-- registration section end -->

<!-- home section start -->

<section id="home" class="home">

    <div class="container">

        <div class="row align-items-center text-center text-md-left min-vh-100">
            <div class="col-md-6">
                <h3>Start your shopping and enjoy😊</h3>

            </div>
        </div>

    </div>

</section>

<!-- home section end -->

<!-- about section end -->

<section class="about" id="about">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <img src="{% static 'lather\lather product\IMG-20240316-WA0027.jpg' %}" class="w-100" alt="">

            </div>

            <div class="col-md-6">

                <span>Why choose us.?</span>
                <h3>Best Lather Product.!</h3>
                <p>Looking for top-notch leather goods? Start by researching online and checking reviews for reputable providers. Consider customization options, compare prices, and ensure authenticity and sustainability. Once you've found the right fit, elevate your style with timeless elegance and lasting quality.!</p>
                <h4 class="read-more-link-btn">Provides</h4>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-wallet"></i>
                        <h3>Best Lather product</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <h3>Fast Delivery</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <h3>Great Services</h3>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- about section end -->

<!-- menu section start -->

<section class="menu" id="menu">

    <h1 class="heading">Our Menu Items</h1>

    <div class="container box-container">
        {{-- {% for object in object_list %}
        <div class="box">
            <img src="{{object.item_category_image.url}}" alt="">
            <h3>{{object.item_category_name}}</h3>
            <p>{{object.item_category_description}}</p>
            <a href="{% url 'item' object.slug %}" class="link-btn">See Items</a>
            <a href="#" class="link-btn">Read More</a>
        </div>
        {% empty %}
        <h2>No item category found for "{{request.GET.q}}"! <br><br>
            Suggestions : <br><br>
            <ul style="line-height: 1.5;">
                <li>Make sure that your word are correct!</li>
                <li>Refine your search!</li>
                <li>Try other keywords!</li>
            </ul>
        </h2>
        {% endfor %} --}}
        {% comment %} <div class="box">

            <img src="{% static '/images/menu-1.jpg' %}" alt="">
            <h3>Blue Lagoon</h3>
            <p>Juicy blue lagoon mocktail!<br/>Price : 90</p> {% endcomment %}
            {% comment %} <a href="#" class="link-btn">Add to cart</a> {% endcomment %}

        {% comment %} </div>
        <div class="box">

            <img src="{% static '/images/menu-2.jpg' %}" alt="">
            <h3>Guava Mojito</h3>
            <p>Full-flavoured guava mojito! <br/>Price : 120</p> {% endcomment %}
            {% comment %} <a href="#" class="link-btn">Add to cart</a> {% endcomment %}

        {% comment %} </div>
        <div class="box">

            <img src="{% static '/images/menu-3.jpeg' %}" alt="">
            <h3>Kitkatoo Brownie</h3>
            <p>Delicious kitkatoo brownie! <br/>Price : 125 With Wallnut : 145</p> {% endcomment %}
            {% comment %} <a href="#" class="link-btn">Add to cart</a> {% endcomment %}

        {% comment %} </div>
        <div class="box">

            <img src="{% static '/images/menu-4.jpg' %}" alt="">
            <h3>Double Cheese Pizza</h3>
            <p>Spicy double cheese pizza order now! <br/>Price(small) : 160 Price(medium) : 199</p> {% endcomment %}
            {% comment %} <a href="#" class="link-btn">Add to cart</a> {% endcomment %}

        {% comment %} </div>
        <div class="box">

            <img src="{% static '/images/menu-5.jpg' %}" alt="">
            <h3>Cheese Burger</h3>
            <p>Yummy cheese burger!<br/>Price : 109</p> {% endcomment %}
            {% comment %} <a href="#" class="link-btn">Add to cart</a> {% endcomment %}

        {% comment %} </div>
        <div class="box">

            <img src="{% static '/images/menu-6.jpg' %}" alt="">
            <h3>Mexican Pasta</h3>
            <p>Delish mexican pasta! <br/>Price : 160</p> {% endcomment %}
             <a href="#" class="link-btn">Add to cart</a>

        </div>
        <a href="{% url 'item_category_list' %}" class="link-btn" style="text-align-last: center;">See All Category</a>
    </div>

</section>

<!-- menu section end -->

<!-- gallery section start -->

<section class="gallery" id="gallery">

    <h1 class="heading">Our Gallery</h1>

    <div class="box-container container">

        <div class="box">

            <img src="{% static 'lather\bage\IMG-20240316-WA0016.jpg' %}" alt="">
            <div class="content">
                <h3>Lather Bage</h3>
                <p>Shop our collection of premium leather bags for timeless style and exceptional quality.</p>
            </div>

        </div>
        <div class="box">

            <img src="{% static 'lather\lather product\IMG-20240316-WA0019.jpg' %}" alt="">
            <div class="content">
                <h3>Lather Wallet</h3>
                <p>Explore our sleek leather wallets for the perfect blend of style and functionality.</p>
            </div>

        </div>
        <div class="box">

            <img src="{% static 'lather\lather product\IMG-20240316-WA0028.jpg' %}" alt="">
            <div class="content">
                <h3>Lather shoes</h3>
                <p>Experience luxury with our leather shoes. Timeless style meets exceptional comfort for every step you take.</p>
            </div>

        </div>
        <div class="box">

            <img src="{% static 'lather\lather product\IMG-20240316-WA0044.jpg' %}" alt="">
            <div class="content">
                <h3>Lather saide bag</h3>
                <p>Discover sophistication with our leather satchel bags.</p>
            </div>

        </div>
        <div class="box">

            <img src="{% static 'lather\lather product\IMG-20240316-WA0052.jpg' %}" alt="">
            <div class="content">
                <h3>Lather jacket</h3>
                <p>Experience timeless style with our leather jackets. Crafted for durability and sophistication, they're the ultimate wardrobe essential.</p>
            </div>

        </div>
        <div class="box">

            <img src="{% static 'lather\lather product\IMG-20240316-WA0046.jpg' %}" alt="">
            <div class="content">
                <h3>Lather belt</h3>
                <p>Elevate your style with our leather belts. Timeless elegance meets durability for a perfect finishing touch to any outfit.</p>
            </div>

        </div>


    </div>

</section>

<!-- gallery section end -->

<!-- contact section start -->

<section class="contact" id="contact">

    <h1 class="heading">Contact Us</h1>

    <div class="container">

        <div class="contact-info-container">

            <div class="box">

                <i class="fas fa-phone"></i>
                <h3>Phone no</h3>
                <p>+91 89806 63663</p>
                <p>+91 9023964738</p>

            </div>
            <div class="box">

                <i class="fas fa-envelope"></i>
                <h3>E-mail</h3>
                <p>arkesh.raj@gmail.com</p>
                <p>latherworld@gmail.com</p>

            </div>
            <div class="box">

                <i class="fas fa-map"></i>
                <h3>Address</h3>
                <p>B/2, nilamber complex, HL commerce college road, st xaviers corner, navrangpura, Ahmedabad - 380009</p>

            </div>

        </div>

        <div class="row align-items-center">


            <form action="" class="col-md-6">
                {% csrf_token %}

                <h3>Get in touch.!</h3>
                <input type="text" name="" placeholder="Your name" id="" class="box">
                <input type="email" name="" placeholder="Your email" id="" class="box">
                <input type="tel" name="" placeholder="Your contact no" id="" class="box">
                <textarea name="" placeholder="Your message" class="box" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="Send message" class="link-btn">

            </form>

        </div>

    </div>

</section>

<!-- contact section end -->

<!-- footer section start -->

<section class="footer container">

    <a href="" class="logo"><i class="fas fa-wallet"></i> Lather World</a>

    <p class="credit"> <span>@Lather World</span> | all rights reserved! </p>

    <div class="share">

        <a href="https://m.facebook.com/100063770151211/" class="fab fa-facebook-f"></a>
        <a href="https://instagram.com/brewer_cafe?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
        <a href="https://wa.me/918980663663" class="fab fa-whatsapp"></a>

    </div>

</section>

<!-- footer section end -->

<!-- Alertify JS -->

<script src="{% static '/js/alertify.min.js' %}"></script>

<!-- custom js file link -->
<script type="text/javascript">
    let loginForm = document.querySelector('.login-form');
    let signupForm = document.querySelector('.signup-form');

    const pwField = document.querySelectorAll('.loginPassword'),
          pwShowHide = document.querySelectorAll('.showHidePw'),
          spwField = document.querySelectorAll('.signupPassword'),
          pwShowHide1 = document.querySelectorAll('.showHidePw1');


// document.querySelector('#signin').onclick = () => {
//     loginForm.classList.add('active');
// }

// document.querySelector('#close-login-form').onclick = () => {
//     loginForm.classList.remove('active');
// }

// document.querySelector('#signin1').onclick = () => {
//     loginForm.classList.add('active');
//     signupForm.classList.remove('active');
// }

// document.querySelector('#signup').onclick = () => {
//     signupForm.classList.add('active');
//     loginForm.classList.remove('active');
// }

// document.querySelector('#close-signup-form').onclick = () => {
//     signupForm.classList.remove('active');
// }

let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    loginForm.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
}

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", ()=>{
        pwField.forEach(pawField => {
            if(pawField.type === "password"){
                pawField.type = "text";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye-slash","uil-eye");
                })

            }else{
                pawField.type = "password";

                pwShowHide.forEach(icon => {
                    icon.classList.replace("uil-eye","uil-eye-slash");
                })
            }
        })
    })
})

pwShowHide1.forEach(eyeIcon1 => {
    eyeIcon1.addEventListener("click", ()=>{
        spwField.forEach(pawField1 => {
            if(pawField1.type === "password"){
                pawField1.type = "text";

                pwShowHide1.forEach(icon1 => {
                    icon1.classList.replace("uil-eye-slash","uil-eye");
                })
            }else{
                pawField1.type = "password";

                pwShowHide1.forEach(icon1 => {
                    icon1.classList.replace("uil-eye","uil-eye-slash");
                })
            }
        })
    })
})

alertify.set('notifier','position', 'top-right');

// {% for msg in messages %}
// {% if msg.tags == 'success' %}
//     alertify.success('');
// {% else %}
//     alertify.error('');
// {% endif %}
// {% endfor %}
</script>
</body>
</html>
