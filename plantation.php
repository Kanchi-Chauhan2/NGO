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
        <h5 class="heading--5 banner__heading">
            Help Us In Shaping a Hygienic Future
        </h5>
    </div>
    <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!    CHARITY      !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="charities">
        <div class="charities__left">
            <div class="charity">
                <p class="paragraph--3 charity__heading">
                    Better living environment
                </p>
                <div class="charity__box">
                    <img src="images/plant1.jpg" alt="" class="charity__image">
                    <p class="paragraph--4 charity__progressValue">61.94%</p>
                    <div class="charity__progress">
                        <div class="charity__progressBar"></div>
                    </div>
                </div>
                <p class="paragraph--4 charity__donation">
                    Donation: ₹78,354.00 / <span>₹1,26,500.00</span>
                </p>
                <p class="paragraph--5 charity__paragraph">
                   Number of saplings planted: 12000 in 24 months.
                </p>
                <a href="#" class="button2 charity__button">Contribute Now</a>
            </div>
            <p class="paragraph--1 charity__description">
                If we plant one billion trees across the world, we can actually reverse the global warming, we believe in the theory and planting as many trees as possible.
            </p>
            <p class="paragraph--5 charity__secondaryDescription">
                Following is a brief of our activities from date of incorporating:
            </p>
            <p class="paragraph--5 charity__tertiaryDescription">
                One of the key objectives that we set out was to not only increase the green and forest cover for India but positively impact marginal farmers by increasing output from their homesteads.
            </p>
            <p class="paragraph--5 charity__tertiaryDescription">
               December 2018 We conducted education and awareness workshops for the following schools in Mussorie and Dehradun 
            </p>
            <ul class="charity__list">
                <li class="paragraph--5 charity__listItem">Nanhi Duniya school- Vikas Nagar Dehradun</li>
                <li class="paragraph--5 charity__listItem">RN Bhargava Inter College- Mussoorie</li>
                <li class="paragraph--5 charity__listItem">Sanatan Dharma Inter College- Landour Mussoorie</li>
            </ul>
            <p class="paragraph--5 charity__tertiaryDescription">
                In the same month we decided to plant 500 fruit saplings with farmers in Chamasari Gram Sabha and dedicated a full time Ex-Eco task force person to monitor the ensure health of these saplings. 
            </p>
            <p class="paragraph--5 charity__tertiaryDescription">
                2019 was full of activities talking to school kids and young people both in terms of awareness about the environment and the importance of trees. We conducted plantation activities with Moravian Institute (100 trees), Delhi Public School and Kasiga school. 
            </p>
            <p class="paragraph--5 charity__tertiaryDescription">
                We continued to monitor these trees for the whole year and finally started preparing farmers in in the villages of Manjgaon, Kalavan, Uniyalgaon, Haveli, Jaadgaon, Navagaon, Semvalgaon, Maroda, Lamkandai, and Hatwalgaon. These are relatively remote villages in Tehri Garhwal and came up with a plan to plant 11000 trees in these villages. Saplings include apricot, walnut, plum, pear, papaya, and lemon.  The project has performed well and we celebrated an important milestone in the month of February 2020. We were graced with the presence of young environmentalist Ms Licypriya Kangujam and  His Excellency Mr Klaus Molin, Sweden’s ambassador to India.
            </p>
            <div class="charity__box">
                    <img src="images/plant2.jpg" alt="" class="charity__image">
                </div>
           
            <div class="charity__steps">
                <h5 class="heading--5 container__heading">
                    Find out about our 
                    <strong>Financials</strong>
                </h5>
    
                <div class="charity__steps--grid">
                    <div class="charity__step">
                        <h6 class="heading--2 charity__step--index">2018-19</h6>
                        <p class="paragraph--5 charity__step--title">Purchase of sampling, compost cost etc</p>
                        <p class="paragraph--5 charity__step--paragraph">88000</p>
                    </div>
                    <div class="charity__step">
                        <h6 class="heading--2 charity__step--index">2018-19</h6>
                        <p class="paragraph--5 charity__step--title">Salary of dedicated resource to monitor and protect saplings</p>
                        <p class="paragraph--5 charity__step--paragraph">70840</p>
                    </div>
                    <div class="charity__step">
                        <h6 class="heading--2 charity__step--index">2018-19</h6>
                        <p class="paragraph--5 charity__step--title">Education and Awareness</p>
                        <p class="paragraph--5 charity__step--paragraph">Pending</p>
                    </div>                    
                </div>  
            </div>
            
             <div class="charity__steps">   
                <div class="charity__steps--grid">
                    <div class="charity__step">
                        <h6 class="heading--2 charity__step--index">2019-20</h6>
                        <p class="paragraph--5 charity__step--title">Purchase of sampling, compost cost etc</p>
                        <p class="paragraph--5 charity__step--paragraph">169500</p>
                    </div>
                    <div class="charity__step">
                        <h6 class="heading--2 charity__step--index">2019-20</h6>
                        <p class="paragraph--5 charity__step--title">Salary of dedicated resource to monitor and protect saplings</p>
                        <p class="paragraph--5 charity__step--paragraph">127920</p>
                    </div>
                    <div class="charity__step">
                        <h6 class="heading--2 charity__step--index">2019-20</h6>
                        <p class="paragraph--5 charity__step--title">Education and Awareness</p>
                        <p class="paragraph--5 charity__step--paragraph">15687</p>
                    </div>                    
                </div>  
            </div>
             <a href="#" class="button charity__button2">Contribute Now</a>
            
             <p class="paragraph--5 charity__secondaryDescription">
                Future Plans
            </p>
             <ul class="charity__list">
                <li class="paragraph--5 charity__listItem">Number of students and young citizens addressed through education and awareness sessions are subjected to 2500 and counting</li>
                <li class="paragraph--5 charity__listItem">We want to target planting another 15000 saplings across the country with a survival rate of more than 80%</li>
                 <li class="paragraph--5 charity__listItem2">We plan to continue focusing on working with marginal farmers to enhance income and production from small land holdings</li>
            </ul>
            
                <div class="charity__causes">
                <div class="charity">
                    <p class="paragraph--3 charity__heading">
                        Better living environment
                    </p>
                    <div class="charity__box" style="height: 20rem;">
                        <img src="images/cause1.jpg" alt="" class="charity__image">
                        <p class="paragraph--4 charity__progressValue">61.94%</p>
                        <div class="charity__progress">
                            <div class="charity__progressBar"></div>
                        </div>
                    </div>
                    <p class="paragraph--4 charity__donation">
                        Donation: ₹78,354.00 / <span>₹1,26,500.00</span>
                    </p>
                    <p class="paragraph--5 charity__paragraph">
                        To strive for the quality of our living environment through active awareness of sustainable growth to the people of India, is the agenda from our organization.
                    </p>
                    <a href="#" class="button2 charity__button">Contribute Now</a>
                </div>
                <div class="charity">
                    <p class="paragraph--3 charity__heading">
                        Waste management
                    </p>
                    <div class="charity__box" style="height: 20rem;">
                        <img src="images/cause2.jpg" alt="" class="charity__image">
                        <p class="paragraph--4 charity__progressValue">61.94%</p>
                        <div class="charity__progress">
                            <div class="charity__progressBar"></div>
                        </div>
                    </div>
                    <p class="paragraph--4 charity__donation">
                        Donation: ₹78,354.00 / <span>₹1,26,500.00</span>
                    </p>
                    <p class="paragraph--5 charity__paragraph">
                        To strive for the quality of our living environment through active awareness of sustainable growth to the people of India, is the agenda from our organization.
                    </p>
                    <a href="#" class="button2 charity__button">Contribute Now</a>
                </div>
                <div class="charity">
                    <p class="paragraph--3 charity__heading">
                         Plantation of as many trees
                    </p>
                    <div class="charity__box" style="height: 20rem;">
                        <img src="images/cause3.jpg" alt="" class="charity__image">
                        <p class="paragraph--4 charity__progressValue">61.94%</p>
                        <div class="charity__progress">
                            <div class="charity__progressBar"></div>
                        </div>
                    </div>
                    <p class="paragraph--4 charity__donation">
                        Donation: ₹78,354.00 / <span>₹1,26,500.00</span>
                    </p>
                    <p class="paragraph--5 charity__paragraph">
                        To strive for the quality of our living environment through active awareness of sustainable growth to the people of India, is the agenda from our organization.
                    </p>
                    <a href="#" class="button2 charity__button">Contribute Now</a>
                </div>
            </div>
        </div>
        
        <div class="charities__right">
            <div class="charities__right--contentBox">
                <p class="paragraph--1 charities__right--title">Recent Activities</p>
                <div class="charities__box">
                    <img src="images/activity1.jpg" alt="" class="charities__image">
                    <div class="charities__box--details">
                        <a href="#" class="charities__link paragraph--4">plantation activities with Moravian Insititue</a>
                        <p class="paragraph--5 charities__date">10, July'19</p>
                    </div>
                </div>
                <div class="charities__box">
                    <img src="images/activity2.jpg" alt="" class="charities__image">
                    <div class="charities__box--details">
                        <a href="#" class="charities__link paragraph--4">workshops with students from Nanhi Duniya in Selaqui</a>
                        <p class="paragraph--5 charities__date">10, August'19</p>
                    </div>
                </div>
                <div class="charities__box">
                    <img src="images/activity3.jpg" alt="" class="charities__image">
                    <div class="charities__box--details">
                        <a href="#" class="charities__link paragraph--4">500 fruit saplings with farmers in Chamasari Gram Sabha</a>
                        <p class="paragraph--5 charities__date">10, November'19</p>
                        
                    </div>
                </div>
                <div class="charities__right--box">
                    <a href="#" class="charities__link paragraph--4 charities__right--link">Coming Soon</a>
                    <p class="paragraph--5 charities__date charities__right--date">August'20</p>
                </div>
                <div class="charities__right--box">
                    <a href="#" class="charities__link paragraph--4 charities__right--link">Coming Soon</a>
                    <p class="paragraph--5 charities__date charities__right--date">November'20</p>
                </div>
                <div class="charities__right--box" style="margin-bottom: 0;">
                    <a href="#" class="charities__link paragraph--4 charities__right--link">Coming Soon</a>
                    <p class="paragraph--5 charities__date charities__right--date" style="margin-bottom: 0;">December'20</p>
                </div>
            </div>

            <div class="charities__right--contentBox">
                <p class="paragraph--1 charities__right--title">Financials</p>
                <p class="charities__right--details paragraph--5">December 2019 <span>(127920)</span></p>
            </div>

            <div class="charities__right--contentBox">
                <p class="paragraph--1 charities__right--title">Categories</p>
                <p class="charities__right--details paragraph--5">News <span>(4)</span></p>
            </div>

            <div class="charities__right--contentBox">
                <p class="paragraph--1 charities__right--title">Causes</p>

                <p class="charities__right--details paragraph--5">Sustainable Growth <span>(Recycle)</span></p>
                <p class="charities__right--details paragraph--5">Waste management <span>(Plastic waste)</span></p>
                <p class="charities__right--details paragraph--5">Tree Plantation <span>(12000 in 24 months)</span></p>
            </div>           
        </div>
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