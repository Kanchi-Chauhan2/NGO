<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>SGI-Foundation</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
    .navigation{
    width: 100%;
    height: 5rem;
    background-color: #d6b014;
    position: relative;
    }
    @media only screen and (max-width: 48em){
        .navigation{
            display: none;
        }
    }

    .navigation__menu{
        display: flex;
        height: 100%;
        align-items: center;
        justify-content: center;
    }
    .navigation__menu--link{
            color: #45403c;
            text-transform: uppercase;
            font-weight: 500;
            transition: .2s;
            margin-right: 7rem;
    }
    @media only screen and (max-width: 64em){
        .navigation__menu--link{
                    margin-right: 5rem;
        }
    }

    .navigation__menu--link.selected{
                color: #27211d;
                font-weight: 600;
            }

            .navigation__menu--link:hover{
                color: #27211d;
            }


    .navigation__dropdown1{
        height: 100%;
        display: flex;
        align-items: center;
    }

    .dropdown1__link{
        display: block;
        padding: 1.25rem 3rem;
        color: #000;
        position: relative;
        transition: .5s;
    }
    .dropdown1{
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0;
    background-color: #d6b014;
    z-index: 1500;

    display: none;
    flex-direction: column;
    transition: .5s;
    }
    
    .dropdown1__link:hover{
        background-color: #fff;
    }

    
    </style>
</head>
<body>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!    POPUPS      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

    <div class="popup" id="popup1">
        <div class="popup__header">
            <h5 class="heading--5 container__heading">
                What do we want?
                <strong>POPUP 1</strong>
            </h5>
            <a href="#causes" class="popup__close">X</a>
        </div>
        <form action="#" class="popup__form">
            <input type="hidden" name="cause" value="1">
            <p class="paragraph--4 popup__paragraph">Payment type:</p>
            <div class="popup__box">
                <input required type="radio" name="payment" class="popup__radio" value="OTP"><span class="paragraph--4 popup__pargraph">One Time Payment</span>
                <input required type="radio" name="payment" class="popup__radio" value="REC"><span class="paragraph--4 popup__pargraph">Recurring</span>
            </div>
            <p class="paragraph--4 popup__paragraph">Amount(you need to pay)*</p>
            <div class="popup__box">
                <input required type="text" name="amount" class="popup__text text">
                <p class="paragraph--4 popup__paragraph">U.S.D</p>
                <p class="paragraph--4 popup__paragraph">* Payment Gateway Fee Extra</p>
            </div>
            <p class="paragraph--4 popup__paragraph">Email</p>
            <div class="popup__box">
                <input required type="email" name="email" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Name</p>
            <div class="popup__box">
                <input required type="text" name="name" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Phone</p>
            <div class="popup__box">
                <input required type="number" name="phone" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Message</p>
            <div class="popup__box">
                <textarea name="message" class="textarea popup__textarea"></textarea>
            </div>
            <button type="submit" class="button popup__button">Submit</button>
        </form>
    </div>
    <div class="popup" id="popup4">
        <div class="popup__header">
            <h5 class="heading--5 container__heading">
            
                <strong>DONATE NOW</strong>
            </h5>
            <a href="#causes" class="popup__close">X</a>
        </div>
        
        <form action="#" class="contact__form" style="background-color:white; padding:2rem;">
            <!--<h4 class="heading--4 contact__heading">Send us Message</h4>-->
            <p class="paragraph--4 contact__paragraph contact__name">Full name*</p>
            <p class="paragraph--4 contact__paragraph contact__emailText">Email*</p>
            <input type="text" id="name" class="text paragraph--4 contact__name">
            <input type="text" id="email" class="text paragraph--4 contact__email">
            <p class="paragraph--4 contact__paragraph contact__PAN">Pan No.*</p>
            <p class="paragraph--4 contact__paragraph contact__mailadd">Mailing Address*</p>
            <input type="text" id="PAN" class="text paragraph--4 contact__PAN">
            <input type="text" id="mailadd" class="text paragraph--4 contact__mailadd">
            <label for="cars" class="paragraph--4 contact__paragraph contact__donatetype">Purpose of Donation</label>
            <p class="paragraph--4 contact__paragraph contact__donateamt">Amount of donation*</p>
            <select name="donation" class="text paragraph--4 contact__donationtype">
                <option value="volvo">Tree Plantation</option>
                <option value="saab">Recycling</option>
                <option value="opel">General</option>
                <option value="audi">Corpus</option>
            </select>
            <input type="text" id="donateamt" class="text paragraph--4 contact__donateamt">
            <button type="submit" class="button contact__button" style="transform:translateX(53.6rem);">
                Submit
            </button>
        </form>
    </div>
    <div class="popup" id="popup5">
        <div class="popup__header">
            <h5 class="heading--5 container__heading">
                Let's
                <strong>Proceed</strong>
            </h5>
            <a href="#causes" class="popup__close">X</a>
        </div>
        <div class="popup__container">
            <h5 class="heading--6 popup__heading" style="text-align:center; margin-bottom:2rem">
                Amount to be paid : <span>20000</span>
            </h5>
            <button type="submit" class="button contact__button" style="transform:translateX(53.6rem);">
                Proceed
            </button>
        </div>
    </div>

    <div class="popup" id="popup2">
        <div class="popup__header">
            <h5 class="heading--5 container__heading">
                What do we want?
                <strong>POPUP 2</strong>
            </h5>
            <a href="#causes" class="popup__close">X</a>
        </div>
        <form action="#" class="popup__form">
            <input type="hidden" name="cause" value="2">
            <p class="paragraph--4 popup__paragraph">Payment type:</p>
            <div class="popup__box">
                <input required type="radio" name="payment" class="popup__radio" value="OTP"><span class="paragraph--4 popup__pargraph">One Time Payment</span>
                <input required type="radio" name="payment" class="popup__radio" value="REC"><span class="paragraph--4 popup__pargraph">Recurring</span>
            </div>
            <p class="paragraph--4 popup__paragraph">Amount(you need to pay)*</p>
            <div class="popup__box">
                <input required type="text" name="amount" class="popup__text text">
                <p class="paragraph--4 popup__paragraph">U.S.D</p>
                <p class="paragraph--4 popup__paragraph">* Payment Gateway Fee Extra</p>
            </div>
            <p class="paragraph--4 popup__paragraph">Email</p>
            <div class="popup__box">
                <input required type="email" name="email" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Name</p>
            <div class="popup__box">
                <input required type="text" name="name" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Phone</p>
            <div class="popup__box">
                <input required type="number" name="phone" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Message</p>
            <div class="popup__box">
                <textarea name="message" class="textarea popup__textarea"></textarea>
            </div>
            <button type="submit" class="button popup__button">Submit</button>
        </form>
    </div>
    <div class="popup" id="popup3">
        <div class="popup__header">
            <h5 class="heading--5 container__heading">
                What do we want?
                <strong>POPUP 3</strong>
            </h5>
            <a href="#causes" class="popup__close">X</a>
        </div>
        <form action="#" class="popup__form">
            <input type="hidden" name="cause" value="3">
            <p class="paragraph--4 popup__paragraph">Payment type:</p>
            <div class="popup__box">
                <input required type="radio" name="payment" class="popup__radio" value="OTP"><span class="paragraph--4 popup__pargraph">One Time Payment</span>
                <input required type="radio" name="payment" class="popup__radio" value="REC"><span class="paragraph--4 popup__pargraph">Recurring</span>
            </div>
            <p class="paragraph--4 popup__paragraph">Amount(you need to pay)*</p>
            <div class="popup__box">
                <input required type="text" name="amount" class="popup__text text">
                <p class="paragraph--4 popup__paragraph">U.S.D</p>
                <p class="paragraph--4 popup__paragraph">* Payment Gateway Fee Extra</p>
            </div>
            <p class="paragraph--4 popup__paragraph">Email</p>
            <div class="popup__box">
                <input required type="email" name="email" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Name</p>
            <div class="popup__box">
                <input required type="text" name="name" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Phone</p>
            <div class="popup__box">
                <input required type="number" name="phone" class="popup__text text">
            </div>
            <p class="paragraph--4 popup__paragraph">Message</p>
            <div class="popup__box">
                <textarea name="message" class="textarea popup__textarea"></textarea>
            </div>
            <button type="submit" class="button popup__button">Submit</button>
        </form>
    </div>


    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!    HEADER      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <header class="header">
        <a href="index.php" class="header__logo--link" style="transform:translateX(116px);"><img src="images/logo.png" alt="" class="header__logo"></a>
        <div class="header__social">
            <a href="#" class="header__social--link">
                <svg class="header__social--icon">
                    <use href='images/socialSprite.svg#icon-facebook' ></use>
                </svg>
            </a>
            <a href="#" class="header__social--link">
                <svg class="header__social--icon">
                    <use href='images/socialSprite.svg#icon-linkedin'></use>
                </svg>
            </a>
        </div>
        <a href="#popup4" class="button header__subscribe paragraph--6" style="width:181px;">
            Donate Now
        </a>
        <a href="contact.php" class="button header__subscribe paragraph--6">
            Volunteer with us
        </a>
    </header>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!    NAVIGATION      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <nav class="navigation">
        <div class="navigation__menu">
            <a href="index.php" class="navigation__menu--link selected paragraph--5">home</a>
            <a href="about.php" class="navigation__menu--link paragraph--5">Our Story</a>
            <div class="navigation__menu--link paragraph--5 navigation__dropdown" style="cursor: pointer;">Our Cause</div>
            <!-- <a href="sustainable.php" class="navigation__menu--link paragraph--5">Our Cause</a>
            <a href="recycle.php" class="navigation__menu--link paragraph--5">Our Cause</a>
            <a href="plantation.php" class="navigation__menu--link paragraph--5">Our Cause</a> -->
            <a href="contribute.php" class="navigation__menu--link paragraph--5">Employment</a>
            <div class="navigation__menu--link paragraph--5 navigation__dropdown1" style="cursor: pointer;">Resources</div>
            <a href="contact.php" class="navigation__menu--link paragraph--5">contact us</a>
        </div>
    </nav>

    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!      DROPDOWN    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

    <div class="dropdown">
        <a href="sustainable.php" class="dropdown__link paragraph--5">Greening the Planet</a>
        <a href="recycle.php" class="dropdown__link paragraph--5">Waste Management</a>
    </div>
    <div class="dropdown1">
    <a href="news.php" class="dropdown1__link paragraph--5">news</a>
    <a href="annual_report.php" class="dropdown1__link paragraph--5">annual report</a>
    </div>
    <script>
        var navigationDropdown1 = document.querySelector('.navigation__dropdown1');
var dropdown1 = document.querySelector('.dropdown1');

navigationDropdown1.addEventListener( 'mouseover' , function(){
    console.log('Navigation IN');
    dropdown1.style.left = navigationDropdown1.getBoundingClientRect().left+'px';
    dropdown1.style.top = (navigationDropdown1.getBoundingClientRect().top+50)+'px';
    dropdown1.style.opacity = 1;
    dropdown1.style.display = 'flex';
} );

dropdown1.addEventListener( 'mouseover' , function(){
    console.log('Dropdown IN');
    
    dropdown1.style.left = navigationDropdown1.getBoundingClientRect().left+'px';
    dropdown1.style.top = (navigationDropdown1.getBoundingClientRect().top+50)+'px';
    dropdown1.style.opacity = 1;
    dropdown1.style.display = 'flex';

} );

dropdown1.addEventListener( 'mouseout' , function(){
    console.log('Dropdown OUT');
    
    dropdown1.style.display = 'none';
    dropdown1.style.opacity = 0;

} );

navigationDropdown1.addEventListener( 'mouseout' , function(){
    
    dropdown1.style.opacity = 0;
    dropdown1.style.display = 'none';

} );
    </script>


    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!      MOBILE MENU    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <input type="checkbox" class="mobmenu__checkbox" >

    <div class="mobmenu__background"></div>

    <div class="mobmenu__buttonContainer">
        <div class="mobmenu__line mobmenu__line--1"></div>
        <div class="mobmenu__line mobmenu__line--2"></div>
        <div class="mobmenu__line mobmenu__line--3"></div>
    </div>

    <div class="mobmenu">
        <div class="mobmenu__box">
            <a href="index.php" class="mobmenu__link paragraph--3">HOME</a>
        </div>
        <div class="mobmenu__box">
            <a href="about.php" class="mobmenu__link paragraph--3">Our Story</a>
        </div>
        <div class="mobmenu__box">
            <a href="sustainable.php" class="mobmenu__link paragraph--3">Sustainable Cause</a>
        </div>
        <div class="mobmenu__box">
            <a href="recycle.php" class="mobmenu__link paragraph--3">Recycle cause</a>
        </div>
        <div class="mobmenu__box">
            <a href="plantation.php" class="mobmenu__link paragraph--3">Plantation Cause</a>
        </div>
        <div class="mobmenu__box">
            <a href="contribute.php" class="mobmenu__link paragraph--3">Contribute </a>
        </div>
        <div class="mobmenu__box">
            <a href="news.php" class="mobmenu__link paragraph--3">News</a>
        </div>
        <div class="mobmenu__box">
            <a href="contact.php" class="mobmenu__link paragraph--3">Contact Us</a>
        </div>
    </div>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!    BANNER      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="banner">
        <h5 class="heading--5 banner__heading">NEWS</h5>
    </div>
    <div class="blog">
        <!--###########################     CONTENT1    #######################################-->
        <div class="blog__content">
            <img src="images/news001.jpg" alt="" class="blog__image">
        </div>
        <!--###########################     CONTAINER    #######################################-->
        <div class="blog__container">
            <h4 class="heading--4 blog__heading">
                Hendrerit pellentesque pellentesque sed ultrices arcu
            </h4>
            <p class="paragraph--45 blog__paragraph">
                lacinia at aliquam vel justo Phasellus felis purus placerat vel augue vitae aliquam tincidunt dolor Sed hendrerit diam in mattis mollis Donec ut tincidunt magn Nullam hendrerit pellentesque pellentesque Sed ultrices arcu non dictum porttitor Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo  Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos Aliquam erat volutpat
            </p>
            <p class="paragraph--45 blog__paragraph">
                lacinia at aliquam vel justo Phasellus felis purus placerat vel augue vitae aliquam tincidunt dolor Sed hendrerit diam in mattis mollis Donec ut tincidunt magn Nullam hendrerit pellentesque pellentesque Sed ultrices arcu non dictum porttitor Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo  Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenaeos Aliquam erat volutpat
            </p>
            <!--###########################     COMMENT   #######################################-->
            <div class="blog__commentBox" style="border-left: 5px solid #d6b13d;">
                <h5 class="paragraph--2 blog__comment">
                    lacinia lectus quis nisl aliquam non accumsan dui molestie vivamus rutrum nisl vel consequat sollicitudi mau nulla luctus libero quis feugiat velit lectus nec felis aliquam suscipit quis odio a volutpat aenean sed
                </h5>
            </div>
            <!--###########################     NEWS   #######################################-->
            <h5 class="heading--5 blog__heading">
                Heading title here
            </h5>
            <p class="paragraph--45 blog__paragraph">
                Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenae Aliquam erat volutpat Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent
            </p>
            <div class="blog__news">
                <figure class="blog__figure blog__figure--left">
                    <img src="images/news010.jpg" alt="" class="blog__figure--image">
                </figure>
                <p class="paragraph--45 blog__paragraph">
                    Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenae Aliquam erat volutpat Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent
                </p>
                <p class="paragraph--45 blog__paragraph">
                    Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenae Aliquam erat volutpat Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, nemo. Exercitationem magnam dignissimos rem sunt recusandae fuga ipsum vitae, quis dolor in porro dolorum numquam. Temporibus dolores at dolore et.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde explicabo dolor aspernatur iste libero exercitationem, perspiciatis placeat culpa totam, molestias ex sapiente, quis quod ullam voluptates quisquam fugit deleniti ducimus?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas porro atque dignissimos placeat nobis ut impedit expedita, repellendus, aliquam ullam sint cupiditate, rem maxime quis amet totam? Omnis, ullam magni!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, amet vitae fugit minima quas cum ea expedita animi dolorum quaerat totam accusamus magni veniam qui nam quisquam commodi quam perspiciatis.
                </p>
                <p class="paragraph--45 blog__paragraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eos, doloribus libero vitae praesentium doloremque quo veniam facilis, eum, quibusdam sunt unde? Sit perspiciatis distinctio perferendis, cupiditate provident accusantium harum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus alias placeat quaerat voluptate animi sint beatae atque ea veritatis sequi, laudantium accusamus aliquid nisi, voluptates nostrum fuga reprehenderit blanditiis odio!
                </p>
                
                <figure class="blog__figure blog__figure--right">
                    <img src="images/news002.jpg" alt="" class="blog__figure--image">
                </figure>
                <ul class="blog__list">
                    <li class="paragraph--45 blog__listItem">Become genuinely interested in the other person Nam ac leo arcu Aliquam erat volutpat eget congu</li>
                    <li class="paragraph--45 blog__listItem">Become genuinely interested in the other person Nam ac leo arcu Aliquam erat volutpat eget congu</li>
                    <li class="paragraph--45 blog__listItem">Become genuinely interested in the other person Nam ac leo arcu Aliquam erat volutpat eget congu</li>
                    <li class="paragraph--45 blog__listItem">Become genuinely interested in the other person Nam ac leo arcu Aliquam erat volutpat eget congu</li>
                    <li class="paragraph--45 blog__listItem">Become genuinely interested in the other person Nam ac leo arcu Aliquam erat volutpat eget congu</li>
                </ul>
                <p class="paragraph--45 blog__paragraph">
                    Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent per conubia nostra per inceptos himenae Aliquam erat volutpat Nam ac leo arcu Aliquam erat volutpat Suspendisse eget congue justo Class aptent taciti sociosqu ad litora torquent
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, nemo. Exercitationem magnam dignissimos rem sunt recusandae fuga ipsum vitae, quis dolor in porro dolorum numquam. Temporibus dolores at dolore et.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde explicabo dolor aspernatur iste libero exercitationem, perspiciatis placeat culpa totam, molestias ex sapiente, quis quod ullam voluptates quisquam fugit deleniti ducimus?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas porro atque dignissimos placeat nobis ut impedit expedita, repellendus, aliquam ullam sint cupiditate, rem maxime quis amet totam? Omnis, ullam magni!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, amet vitae fugit minima quas cum ea expedita animi dolorum quaerat totam accusamus magni veniam qui nam quisquam commodi quam perspiciatis.
                </p>
            </div>
        </div>

        <div class="blog__line" style="margin-bottom: 0;"></div>
        
    </div>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!    FOOTER      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <footer class="footer">
        <div class="footer__grid">
            <div class="footer__left">
                <img src="images/logo.png" alt="" class="footer__logo">
                <p class="paragraph--4 footer__paragraph">
                    To strive for the quality of our living environment through active awareness of sustainable growth to the people of India, is the agenda of Sustainable Green Initiative (SGI).							
                </p>
                <div class="footer__details">
                    <div class="footer__details--grid">
                        <div class="footer__icon footer__icon--1"></div>
                        <p class="paragraph--5 footer__paragraph">
                            Green Mount Landour Cantt Mussoorie, Dehradun, India
                        </p>
                    </div>
                    <div class="footer__details--grid">
                        <div class="footer__icon footer__icon--2"></div>
                        <p class="paragraph--5 footer__paragraph">
                            +91 97303 30053
                        </p>
                    </div>
                    <div class="footer__details--grid">
                        <div class="footer__icon footer__icon--3"></div>
                        <p class="paragraph--5 footer__paragraph">
                            info@sgi.foundation
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer__center">
                <p class="paragraph--2 footer__heading">
                    Newsletter Signup
                </p>
                <p class="paragraph--4 footer__paragraph">
                    Get latest updates from our initiative
                </p>
                <form action="#" class="footer__signup">
                    <input type="email" id="signupEmail" class="footer__textBox paragraph--7" placeholder="Enter Email">
                    <button type="submit" class="button footer__button">submit</button>
                </form>
            </div>
            <div class="footer__right">
                <p class="paragraph--2 footer__heading">
                    Follow Us
                </p>
                <div class="footer__socials">
                    <a href="#" class="footer__socialLink">
                        <svg class="footer__socialIcon">
                            <use href='images/socialSprite.svg#icon-facebook'></use>
                        </svg>
                    </a>
                    <a href="#" class="footer__socialLink">
                        <svg class="footer__socialIcon">
                            <use href='images/socialSprite.svg#icon-linkedin'></use>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
        
         <p class="footer__copyrights" style="color: white";>
            © Copyright 2019, All Rights Reserved by Sustainable Green Initiative (SGI). Technology partner @<a href="http://adhyay.co.in/" target="_blank" style="color:beige;">ADHYAY</a>
        </p>

    </footer>
    <script src="js/dropdown.js"></script>
</body>
</html>