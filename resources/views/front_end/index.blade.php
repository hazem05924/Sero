<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sero</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('cms/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('cms/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('cms/css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('cms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cms/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{ route("home") }}"><img src="{{asset('cms/assets/img/551).svg')}}" alt="" style="width: 65px; height: 65px;"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-content-center align-items-center">
                    <li class="nav-item"><a class="nav-link" href="{{ route("local") }}">Tourism inside Saudi Arabia</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route("b2c") }}">Visit Saudi</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index.arabic')}}"><img src="{{asset('cms/assets/img/ar-AE.png')}}" alt="" style="width: 25px; height: 25px; border-radius: 50%;"> Ar - العربية</a>
                    </li>

                    @if (Auth::guard('web')->id())
                     <div class="dropdown">
                        <button type="button" class="form-select " value="#EN" data-bs-toggle="dropdown">

                            <a class="dropdown-item" href="#"><img src="{{ asset('storage/images/register/'.auth('web')->user()->image) }}" alt="Logo" style="width: 25px; height: 25px;">{{ auth('web')->user()->full_name }}</a>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="nav-item ">
                                <a href="{{ route('logout') }}" class="nav-link text-black">
                                    <i class="fas fa-sign-out-alt ml-2"></i>
                                         تسجيل الخروج
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('profile_edit_user') }}" class="nav-link text-black">
                                    <i class="fas fa-user ml-2"></i>
                                         الملف الشخصي 
                                </a>
                            </li>

                        </ul>
                    </div>
                    @endif
            </div>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Welcome To Sero</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Get Your Umrah Visa In Three Steps</h2>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">

    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/WhatsApp Image 2022-06-19 at 4.08.40 PM.svg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>About Us</h4>
                        <p>"Sero" is a step that started its journey from the era of the founder, may God rest his soul, whose first goal is to facilitate the matters of tourism and travel for travelers by providing multiple services at flexible prices.</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
        </div>
    </section>
    <!-- <div id="popup">
        <div class="popup-row">
            <wego-sprite class="adult" height="48" width="48" tag="makalu-search-form" style="background-image: url(&quot;//assets.wego.com/image/sprite/c_pad,f_auto,fl_lossy/q_auto:low,w_48,h_48/v1595260035/makalu-search-form&quot;);">
            </wego-sprite>
            <div class="passenger-type-label">
                <span class="main">Adults</span>
                <span class="sub">&gt;12 years</span>
            </div>
            <div id="a1" class="stepper dec" blocked="1">-</div>
            <div class="count">1</div>
            <div id="a2" class="stepper inc" blocked="0">+</div>
        </div>
    </div> -->
    <!-- Project One Row-->
    <section class="services" id="services" style="margin-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-1">
                        <h5>Flights</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-2">
                        <h5>HOTELS</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-3">
                        <h5>TRANSPORT</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 d-flex justify-content-center align-content-center align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">info@sero.com.sa</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">طريق الملك عبدالله الفرعي،المدينة المنورة </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+966920007075</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap mt-3">
                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4 text-decoration-none" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">Our services</h4>
                    <ul dir="ltr" style="height: 150px; overflow: hidden;">
                        <li> Get a visa from anywhere in the world within 24 hours</li>
                        <li> Connecting travelers and hotels</li>
                        <li> Providing ground services of all kinds (providing buses, metro tickets, transportation services)</li>
                        <li> Book flights at the lowest prices with a group of airlines</li>
                        <li> Designing flexible and special packages to suit Umrah performers and pilgrims of all levels.</li>
                        <li> Providing reservations for all hotels around the world</li>
                    </ul>
                </div>

                <div dir="ltr" class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">Quick links</h4>

                    <div class="widget-contact-list">
                        <ul dir="ltr">
                            <li>
                                <a href="index.html"> Home</a>
                            </li>
                            <li>
                                <a href="#about1"> About</a>
                            </li>
                            <li>
                                <!-- link trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#Modal">privacy policy</a>

                                <!-- Modal -->
                                <div class="modal modal-fullscreen-lg-down fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-black">
                                                <div class=" p-5">
                                                    <h1 class="text-center p-3">Privacy Policy</h1>
                                                    <h3 class="text-danger">Sero com platform rules and policies</h3>
                                                    <p>Our company and all our systems are subject to the general system and policies of the country of origin, which is the Kingdom of Saudi Arabia. Currently, we accept online payments by using credit cards,
                                                        which include “Visa and MasterCard” cards, and they can be debited through the available currency In the services via the platform, which can be in Saudi riyals or US dollars, and in the event that
                                                        you wish to use the online electronic payment method, there must be a complete agreement and authorization and a match in the details in the customer ID and ID The ID of the card holder, which must
                                                        be exactly the same to make purchases</p>

                                                    <p>In cases of refund, only refundable amounts of transactions made on this electronic platform will be refunded to the original payment method through which the payment for the transactions was completed.</p>

                                                    <p>Some basic data related to delivery information, such as customer name, location, postal address and contact numbers, will be stored for the purposes of ensuring delivery. Other personally identifiable
                                                        information will not be stored.
                                                    </p>

                                                    <h3 class="text-danger">Cancellation fees</h3>
                                                    <ul>
                                                        <li>If cancellation is made between 0 days – 24 days prior to the departure date, 100% of the reservations value will be deducted and will not be refunded in any way.</li>
                                                        <li>If the cancellation is made within a period of time between 25 to 60 days before the scheduled departure date, 50% of the reservation value will be deducted.</li>
                                                        <li>If the cancellation is made within a period of time equal to or greater than 61 days from the scheduled departure date, only 10% of the total value of the reservations will be charged.</li>
                                                        <li>In the event that the name of the data provided in the reservations does not match the data details in the passport, a fine of only 150 Saudi riyals will be required to change the name of the traveler
                                                            if the change is possible</li>
                                                        <li>For hotels, the siro.com platform does not charge any special additional fees to provide cancellation services as an additional fee in addition to the cancellation fees charged by the hotel in its
                                                            cancellation policy</li>
                                                    </ul>

                                                    <h3 class="text-danger">General Provisions</h3>

                                                    <p>Through our platform, you can book and travel to any specific destinations you wish, and these destinations may involve greater risks than others, whatever kind of risk, and you will have to bear all
                                                        responsibility in terms of costs, consequences and full personal responsibility</p>

                                                    <p>Sero.com requests its travelers and all guests to consult the local authorities in their country or country of travel, and to evaluate travel ban decisions, warnings, advertisements or all instructions
                                                        issued by local authorities before booking travel to international destinations or local in general, and certain regions and destinations in particular without any responsibility on the platform</p>

                                                    <p>By providing and selling travel and reservation services to certain countries or destinations, the siro com platform is not in any way responsible or liable for the warning or risks in those destinations,
                                                        and the siro platform is not considered a guarantor or recommender of travel to these destinations, and the siro platform does not bear any responsibility For damages, losses or delays that may result
                                                        from failure to provide correct documents relating to travel, entry, exit or length of stay at those destinations.</p>

                                                    <p>SIRO and its affiliates, agencies, or suppliers are in no way liable for errors, acts, omissions, representations, warranties, breaches or negligence made by any airline, hotel or other service provider;
                                                        The platform is not responsible for any personal injury, death, property damage, or any other damages, fees or expenses resulting from that, and neither the Sero platform nor any of the companies
                                                        and agents dealing with it or any of the service providers of the platform bear any responsibility They will not issue a refund in the event of any delay, cancellation, tax increase, force majeure,
                                                        strikes and riots, or any other act beyond their direct control, The platform shall not be liable for any additional expenses, litigation, delay, redirection or pleading to any parties or authorities.</p>

                                                    <p>Sero Platform reserves its exclusive and complete rights and in its sole discretion to delete, change, limit or discontinue the Site or any material posted on it, and is under no obligation to take into
                                                        account the needs of any user in connection therewith.
                                                    </p>

                                                    <p>Sero Platform reserves all its exclusive rights to prevent or deny access to any user of this website or any part of it without prior notice.</p>

                                                    <p>By agreeing to the terms and conditions relating to any of the operations on this platform, you expressly and are bound to agree to be bound by the terms and conditions of purchase and services imposed
                                                        by any service provider or supplier you choose to deal with, including but not limited to, Pay all amounts when due in accordance with the restrictions and rules imposed by the provider or supplier
                                                        of services in relation to the availability of the services and the timely use of prices, products or services, and you acknowledge that there may be additional requirements from some suppliers and/or
                                                        third party parties may include that you sign a waiver of liability prior to providing or participating in the service and/or activity they provide, and that you are fully aware that any violation
                                                        of the terms, conditions, rules and restrictions imposed by the supplier or suppliers may result in Canceling your reservation or reservations, denying you access to the applicable product or travel
                                                        and accommodation services, forfeiting any monies paid for your reservation or reservations, or debiting your account for any costs incurred by the Site as a result of such violations</p>

                                                    <p>No waiver of the Sero platform will be deemed or enforceable in any of the terms and conditions and in any form whatsoever binding, what is stated in writing on the site, or approved and signed by its
                                                        authorized representative in accordance with the regulations and laws</p>

                                                    <p>All these terms and conditions shall be governed by and construed in accordance with the laws and regulations of the Kingdom of Saudi Arabia, and any dispute shall be subject to the exclusive jurisdiction
                                                        of the appropriate and competent courts and judicial organs located in the Kingdom of Saudi Arabia.</p>

                                                    <h3 class="text-danger">Payment terms and conditions</h3>

                                                    <p>Neither Sero nor its developer will, and will not, request, store or share any data related to customers' credit cards, login data for their bank accounts, or prepaid cards over the phone or e-mail under
                                                        any circumstances.</p>

                                                    <p>In the event that there is a note on payments through our electronic payment gateway, our security team will contact you via e-mail from the following address ccc@zowar.com.sa, and a photocopy of the
                                                        credit card will be requested from the front and from Back on the CVV code for verification by securely calling the email address: ccc@zowar.com.sa</p>

                                                    <p>In the event that you receive any communication or email from another email address purporting to be sent to you by the Siro platform and requesting any personal or security data, please never reply
                                                        to that email, and please forward such message to our mail The specialized e-mail is ccc@zowar.com.sa. You will also have to delete, directly and immediately, for this unknown message.</p>

                                                    <h3 class="text-danger">Payment for the services provided by the Sero platform can be paid through the following channels:
                                                    </h3>

                                                    <ul>
                                                        <li>The electronic payment gateway page on our website </li>
                                                        <li>Electronic payment via the secure link on the domain of the Siro platform </li>
                                                        <li>Deposit cash into the Siro platform account at the Saudi British Bank according to the following IBAN data (SABB IBAN SA604500000026374033001) </li>
                                                    </ul>

                                                    <p>The user will be warned, and confirmed to agree that he will create electronic payments and that he will issue or create electronic payment instructions and that he will provide his card or credit card
                                                        data or his or her bank data</p>

                                                    <p>The user is considered the legal user and authorized to use his credit card or bank account, and he is considered legally authorized to carry out payments, withdrawals and bank debits from his accounts
                                                        in favor of these operations</p>

                                                    <p>The user fully bears all responsibility related to the need to ensure that he has provided the card or bank account details accurately and correctly</p>

                                                    <p>The user will authorize the debiting of the credit card or/and the bank account specified by him for payment in favor of the Sero platform</p>

                                                    <p>The user / customer bears all responsibility for providing sufficient cash balance in the credit card / or bank account that he will use during the payment process for the financial dues and invoices
                                                        resulting from the services and reservations chosen by him, Please note that all payments are inclusive of all related fees</p>

                                                    <p>The user/client agrees in full capacity, that the Sero platform and/or the electronic payment service providers have the right, within the framework of the applicable laws and regulations and within
                                                        the scope of the law, to use, collect, or disclose the personal information of the customer, to the responsible and judicial authorities Legal, law enforcement, and in full cooperation with the authorities,
                                                        or in response to any legal requirements
                                                    </p>

                                                    <h3 class="text-danger">Terms and Conditions Related to Umrah Visa</h3>

                                                    <p>Nationals of the Arabian Gulf [Gulf Cooperation Council Countries] do not need to obtain an Umrah visa, and these terms and conditions relate to pilgrims of all other nationalities outside the GCC countries.</p>

                                                    <ul>
                                                        <li>Umrah visa is not valid for work or residence </li>
                                                        <li>The standard legal period for an Umrah visa is 15 days (unless the visa states otherwise in the sticker or printed visa document). </li>
                                                        <li>The pilgrim/pilgrims must not “backward” or exceed the legal period of the visa, and a violation of this is considered a violation of the laws of the Kingdom of Saudi Arabia, and the violator will
                                                            be subject to legal procedures and legal penalties, which may include but are not limited to financial fines Or even reach a ban on entering Saudi Arabia in the future</li>
                                                        <li>Every pilgrim with a valid Umrah visa must comply fully with the terms, conditions and procedures for flights </li>
                                                        <li>Umrah visa holders must enter and leave Saudi Arabia “by air” through: King Khalid International Airport in the capital Riyadh, King Abdulaziz International Airport in Jeddah, Prince Muhammad bin
                                                            Abdulaziz Airport in Madinah, and Prince Abdul Mohsen Airport Bin Abdulaziz in Yanbu, without passing through any of the other airports in the Kingdom of Saudi Arabia </li>
                                                        <li>Umrah visa holders who entered the Kingdom of Saudi Arabia through the two airports: King Abdulaziz International in Jeddah, and Prince Muhammad bin Abdulaziz International in Madinah, must leave
                                                            only through the two airports: King Abdulaziz International in Jeddah, or Prince Muhammad Bin Abdulaziz International Airport in Madinah, without passing through any of the other Saudi airports
                                                        </li>
                                                        <li>Umrah visa holders who entered through King Khalid International Airport in the capital, Riyadh, or King Fahd International Airport in Dammam, you can only depart from King Khalid International Airport
                                                            in the capital, Riyadh, or King Fahd International Airport in Dammam, or King Abdulaziz International in Jeddah or Prince Muhammad bin Abdulaziz International Airport in Madinah without crossing
                                                            or passing through any other Saudi airports</li>
                                                        <li>Umrah visa holders who entered through King Khalid International Airport in the capital, Riyadh, must have confirmed travel tickets for the entire itinerary (including international flights and domestic
                                                            flights) through Jeddah or Medina, and the limit must be The minimum waiting time on domestic flights does not exceed four hours. In addition, pilgrims must come to the airport no less than four
                                                            hours before the departure time of their international flights, which are related to their domestic flights. </li>
                                                        <li>Umrah pilgrims must understand, confirm and abide by the following requirements in order to obtain the Umrah visa</li>
                                                        <li>The passport must be valid and valid for a period of no less than six months, and it must be able to enter the Kingdom of Saudi Arabia and then the next destination, and it must have at least two
                                                            blank pages in the passport corresponding to one another. </li>
                                                        <li>The pilgrim must cooperate fully with the work team of the Sero platform to fill in and verify the data as follows</li>
                                                        <li>The pilgrim is responsible and accountable for the correctness and safety of all data he submits to the platform, as well as the safety and validity of all documents that he will submit to the Siro
                                                            platform team, including all documents and data that the pilgrim himself uploads on the website for siro . platform</li>
                                                        <li>All women and females traveling for the purpose of Umrah must have a Mahram, and documents proving the relationship must be uploaded through the Sero platform or submitted to the platform’s team
                                                            during the process of applying for the Umrah visa, and women over the age of forty-five can The year of travel without a mahram but with organized groups, however, they will have to submit a
                                                            no-objection letter from one of their first-degree relatives such as a husband, son or brother, authorizing them to travel for the purpose of Umrah, mentioning the name of the group with which
                                                            they will travel, and this letter must be notarized </li>
                                                        <li>According to the statutory procedures, male pilgrims who hold one of the following nationalities: (India, Pakistan, Sudan, Bangladesh, Yemen, Nigeria, and Chad), and those under the age of 40, must
                                                            have a female companion of the same degree with them. First, they must present a notarized relative </li>

                                                        <li>The pilgrim will have to have a confirmed, non-refundable return ticket as part of his Umrah program reservations package, and also includes the main services within the Umrah program that the pilgrim
                                                            has purchased</li>

                                                        <li>After completing the visa application submission, confirmation and acceptance processes, the pilgrim will have to contact the nearest local foreign travel agent approved in his country of residence,
                                                            who will complete the travel visa procedures from the Saudi Consulate in that country, and here the pilgrim acknowledges the cooperation Completely with the local foreign travel agent approved
                                                            in his country, by submitting all required legal and necessary documents, which include letters,Medical vaccinations (if needed), passport and other documents required for travel, for your information
                                                            Failure in these procedures will in turn lead to the failure of the visa issuance procedures, and any delay caused by the pilgrim will result in postponing the Umrah trip, or even canceling it
                                                            completely without any responsibility on the platform, and the Siro platform does not bear the slightest responsibility, and the pilgrim must In this case, you will bear all expenses and fees
                                                            related to changing the dates of the reservations, or any penalties related to their cancellation</li>

                                                        <li>Umrah visa fees are not refundable or refundable in any way, if the pilgrim decides to cancel the Umrah trip after the issuance of the visa reference number (MOVA), [issued after the success of the
                                                            Umrah visa application], before the visa is issued, there is a possibility to cancel the Umrah package The Umrah program, taking into account the cancellation conditions related to each provider
                                                            (hotels, transportation services, flights....etc), and the pilgrim will bear all the fines resulting from that </li>

                                                        <li>Sero platform or its team does not bear any legal responsibility or any complaints related to the customer’s violation of the terms, conditions and codes referred to above, and the policies and procedures
                                                            related to them, and does not accept any kind of liability of any kind in this regard. </li>

                                                        <li>Visitors to the territory of the Kingdom of Saudi Arabia, with the teachings of the true Islamic religion, must observe Islamic and Arab customs and traditions and the traditions and customs of the
                                                            Saudi Society, for information, the Kingdom of Saudi Arabia applies strict laws regarding drug smuggling. and prohibitions, and violators and service smugglers will be subjected to severe penalties
                                                            that may amount to the death penalty, and the laws of the Kingdom of Saudi Arabia prevent the establishment of any sectarian or racist gatherings or religious groups and sects in all cases. </li>

                                                        <li>Visitors to the Kingdom of Saudi Arabia must obey the Islamic laws and regulations of the Kingdom and the controls, customs and traditions related to its civilization and society, and visitors must
                                                            wear modest clothes and appropriate to the status of the Two Holy Mosques. and the Holy Land, which are compatible with Islamic values ​​and culture, and visitors for the purpose of Umrah must
                                                            focus on performing their religious rites, and they can participate in tourism activities, and they must refrain from all kinds of other activities that are in violation or outside the scope
                                                            of The purpose of visiting the Kingdom in order to perform the rituals of Umrah, or any activities that violate the laws and regulations or disturb security in the Kingdom of Saudi Arabia</li>
                                                    </ul>

                                                    <p>Or for any additional inquiries, you can contact the Ministry of Hajj and Umrah in the Kingdom of Saudi Arabia, whose contact information can be accessed through the Ministry's website.</p>

                                                    <p>All travelers to Saudi Arabia for Umrah are required to hold a passport. Travel documents issued by any government and not considered a passport will not be accepted by the embassies and consulates of
                                                        the Kingdom of Saudi Arabia</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-start" style="border-bottom: 2px solid white;">Social Media</h4>
                    <div class="social d-flex justify-content-center" style="margin-left: auto; margin-right: auto;">
                        <a class="mx-2 " href="https://twitter.com/serovision1?s=21&t=ObGKxjr4RhzOnCC9EgP2mg"><i class="fab fa-twitter "></i></a>
                        <a class="mx-2 " href="https://www.facebook.com/profile.php?id=100082581573020"><i class="fab fa-facebook-f "></i></a>
                        <a class="mx-2 " href="https://www.instagram.com/serovision.1/"><i class="fab fa-instagram "></i></a>
                        <a class="mx-2 " href="https://wa.me/message/PTITBIUHHPWWJ1"><i class="fab fa-whatsapp "></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">All rights reserved Privacy Policy &copy; Sero 2022 - 2023</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('cms/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
