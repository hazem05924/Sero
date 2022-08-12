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
    <link href="{{ asset('cms/css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('cms/css/style2.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html"><img src="assets/img/551).svg" alt="" style="width: 65px; height: 65px;"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-content-center align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-sign-in-alt"></i> تسجيل الدخول / سجّل الآن </a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="b2c.html"><img src="assets/img/en-US.png" alt="" style="width: 25px; height: 25px; border-radius: 50%;"> Ar - العربية</a>
                    </li>
                    <!-- <div class="dropdown">
                        <button type="button" class="form-select" value="#EN" data-bs-toggle="dropdown">
                            <a class="dropdown-item" href="#"><img src="assets/img/en-US.png" alt="" style="width: 25px; height: 25px;"> EN - English</a>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#"><img src="assets/img/en-US.png" alt="" style="width: 25px; height: 25px;"> EN - English</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"><img src="assets/img/ar-AE.png" alt="" style="width: 25px; height: 25px;"> AR - Arabic</a>
                            </li>
                        </ul>
                    </div> -->
            </div>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-between">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">مرحبا بك في سيرو</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">قم بالحصول على تأشيرتكم لأداء العمرة عبر ثلاثة خطوات سهلة وميسرة وسريعة</h2>
                </div>
            </div>
        </div>
        <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
            <input class="radio" id="two" name="group" type="radio">
            <input class="radio" id="three" name="group" type="radio">
            <div class="tabs col-8 d-flex justify-content-center ">
                <label class="tab" id="one-tab" for="one"><i class="fab fa-cc-visa"></i> حزمة العمرة + التأشيرة</label>
                <label class="tab" id="two-tab" for="two"><i class="fas fa-plane-departure"></i> الطيران</label>
                <a href="local.html" class="tab text-decoration-none" id="three-tab" for="three"><img src="assets/img/العمرة-removebg-preview.png" alt="" srcset="" style="height: 30px; width: 30px;"> العمرة المحلية</a>
            </div>
            <div class="panels col-10">

                <div class="panel" id="one-panel">
                    <div class="add1 d-flex flex-wrap justify-content-start align-content-center align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Location" class="form-label">الوجهة المقبلة <span>*</span></label>
                            <select id="Location" class="form-control col-3" name="Location">
                            <option value="Makkah">اختر الواجهة</option>
                            <option value="Makkah">مكة المكرمة</option>
                            <option value="Madinah">المدينة المنورة</option>
                          </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-in" class="form-label">الوصول <span>*</span></label>
                            <input type="date" name="date-in" id="date-in" class="form-control col-3">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-out" class="form-label">المغادرة <span>*</span></label>
                            <input type="date" name="date-out" id="date-out" class="form-control col-3">
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Route" class="form-label">المصدر/الوجهات <span>*</span></label>
                            <select class="form-control ng-pristine ng-invalid has-error ng-touched" formcontrolname="location" id="location" name="location">
                                <option value="">حدد الطريق</option>
                                <option value="58">جدة - مكة - مدينة - مطار المدينة</option>
                                <option value="59">الموقف - محطة الحرم</option>
                                <option value="60">جدة - مكة - مدينة - مطار المدينة مع الحجر المؤسسي  </option>
                                <option value="67">ينبع – المدينة – مكة - ينبع</option>
                                <option value="69">جدة – مكة – جدة</option>
                              </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-1">
                            <label for="input-group" class="form-label p-1">التفاصيل</label>
                            <div class="input-group" id="input-group">
                                <input type="text" class="form-control border-0" placeholder="2 عدد الأشخاص">
                                <input type="text" class="form-control border-0" placeholder="0 عدد الاطفال">
                                <input type="text" class="form-control border-0" placeholder="1 عدد الغرف">
                            </div>
                        </div>


                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="Nationality" class="form-label">الجنسية</label>
                            <select class="form-control select-picker ng-pristine ng-valid ng-touched" formcontrolname="nationality">
                                <option value="">قم باختيار الجنسية</option>
                                <option value="BH">البحرين</option>
                                <option value="KW">الكويت</option>
                                <option value="OM">عمان</option>
                                <option value="QA">قطر</option>
                                <option value="SA">المملكة العربية السعودية</option>
                                <option value="AE">الإمارات العربية المتحدة</option>
                                <option value="">----جنسيات أخرى----</option>
                                <option value="AF">أفغانستان</option>
                                <option value="AL">ألبانيا</option>
                                <option value="DZ">الجزائر</option>
                                <option value="AS">ساموا-الأمريكي</option>
                                <option value="AD">أندورا</option>
                                <option value="AO">أنغولا</option>
                                <option value="AI">أنغويلا</option>
                                <option value="AQ">أنتاركتيكا</option>
                                <option value="AG">أنتيغوا وبربودا</option>
                                <option value="AG">أنتيغوا وبربودا</option>
                                <option value="AR">الأرجنتين</option>
                                <option value="AM">أرمينيا</option>
                                <option value="AW">أروبه</option>
                                <option value="AU">أستراليا</option>
                                <option value="AT">النمسا</option>
                                <option value="AZ">أذربيجان</option>
                                <option value="BS">الباهاماس</option>
                                <option value="BD">بنغلاديش</option>
                                <option value="BB">بربادوس</option>
                                <option value="BY">روسيا البيضاء</option>
                                <option value="BE">بلجيكا</option>
                                <option value="BZ">بيليز</option>
                                <option value="BJ">بنين</option>
                                <option value="BM">جزر برمودا</option>
                                <option value="BT">بوتان</option>
                                <option value="BO">بوليفيا</option>
                                <option value="BA">البوسنة و الهرسك</option>
                                <option value="BW">بوتسوانا</option>
                                <option value="BR">البرازيل</option>
                                <option value="IO">إقليم المحيط الهندي البريطاني</option>
                                <option value="BN">بروني</option>
                                <option value="BG">بلغاريا</option>
                                <option value="BF">بوركينا فاسو</option>
                                <option value="BI">بوروندي</option>
                                <option value="KH">كمبوديا</option>
                                <option value="CM">كاميرون</option>
                                <option value="CA">كندا</option>
                                <option value="CV">الرأس الأخضر</option>
                                <option value="KY">جزر كايمان</option>
                                <option value="CF">جمهورية أفريقيا الوسطى</option>
                                <option value="TD">تشاد</option>
                                <option value="CL">شيلي</option>
                                <option value="CN">الصين</option>
                                <option value="CX">جزيرة عيد الميلاد</option>
                                <option value="CC">جزر كوكوس</option>
                                <option value="CO">كولومبيا</option>
                                <option value="KM">جزر القمر</option>
                                <option value="CG">الكونغو</option>
                                <option value="CK">جزر كوك</option>
                                <option value="CR">كوستاريكا</option>
                                <option value="HR">كرواتيا</option>
                                <option value="CU">كوبا</option>
                                <option value="CW">كوراساو</option>
                                <option value="CY">قبرص</option>
                                <option value="CZ">الجمهورية التشيكية</option>
                                <option value="DK">الدانمارك</option>
                                <option value="DJ">جيبوتي</option>
                                <option value="DM">دومينيكا</option>
                                <option value="DO">الجمهورية الدومينيكية</option>
                                <option value="EC">إكوادور</option>
                                <option value="EG">مصر</option>
                                <option value="SV">إلسلفادور</option>
                                <option value="GQ">غينيا الاستوائي</option>
                                <option value="ER">إريتريا</option>
                                <option value="EE">استونيا</option>
                                <option value="ET">أثيوبيا</option>
                                <option value="FK">جزر فوكلاند</option>
                                <option value="FO">جزر فارو</option>
                                <option value="FJ">فيجي</option>
                                <option value="FI">فنلندا</option>
                                <option value="FR">فرنسا</option>
                                <option value="GF">غويانا الفرنسية</option>
                                <option value="PF">بولينيزيا الفرنسية</option>
                                <option value="GA">الغابون</option>
                                <option value="GM">غامبيا</option>
                                <option value="GE">جيورجيا</option>
                                <option value="DE">ألمانيا</option>
                                <option value="GH">غانا</option>
                                <option value="GI">جبل طارق</option>
                                <option value="GR">اليونان</option>
                                <option value="GL">جرينلاند</option>
                                <option value="GD">غرينادا</option>
                                <option value="GP">جزر جوادلوب</option>
                                <option value="GU">جوام</option>
                                <option value="GT">غواتيمال</option>
                                <option value="GN">غينيا</option>
                                <option value="GW">غينيا-بيساو</option>
                                <option value="GY">غيانا</option>
                                <option value="HT">هايتي</option>
                                <option value="HN">هندوراس</option>
                                <option value="HK">هونغ كونغ</option>
                                <option value="HU">المجر</option>
                                <option value="IS">آيسلندا</option>
                                <option value="IN">الهند</option>
                                <option value="ID">أندونيسيا</option>
                                <option value="IR">إيران</option>
                                <option value="IQ">العراق</option>
                                <option value="IE">إيرلندا</option>
                                <option value="IT">إيطاليا</option>
                                <option value="CI">ساحل العاج</option>
                                <option value="JM">جمايكا</option>
                                <option value="JP">اليابان</option>
                                <option value="JO">الأردن</option>
                                <option value="KZ">كازاخستان</option>
                                <option value="KE">كينيا</option>
                                <option value="KI">كيريباتي</option>
                                <option value="KP">كوريا الشمالية</option>
                                <option value="KR">كوريا الجنوبية</option>
                                <option value="XK">كوسوفو</option>
                                <option value="KG">قيرغيزستان</option>
                                <option value="LA">لاوس</option>
                                <option value="LV">لاتفيا</option>
                                <option value="LB">لبنان</option>
                                <option value="LS">ليسوتو</option>
                                <option value="LR">ليبيريا</option>
                                <option value="LY">ليبيا</option>
                                <option value="LI">ليختنشتين</option>
                                <option value="LT">لتوانيا</option>
                                <option value="LU">لوكسمبورغ</option>
                                <option value="MO">ماكاو</option>
                                <option value="MK">مقدونيا</option>
                                <option value="MG">مدغشقر</option>
                                <option value="MW">مالاوي</option>
                                <option value="MY">ماليزيا</option>
                                <option value="MV">المالديف</option>
                                <option value="ML">مالي</option>
                                <option value="MT">مالطا</option>
                                <option value="MH">جزر مارشال</option>
                                <option value="MQ">مارتينيك</option>
                                <option value="MR">موريتانيا</option>
                                <option value="MU">موريشيوس</option>
                                <option value="YT">مايوت</option>
                                <option value="MX">المكسيك</option>
                                <option value="FM">مايكرونيزيا</option>
                                <option value="MD">مولدافيا</option>
                                <option value="MC">موناكو</option>
                                <option value="MN">منغوليا</option>
                                <option value="MS">مونتسيرات</option>
                                <option value="MA">المغرب</option>
                                <option value="MZ">موزمبيق</option>
                                <option value="MM">ميانمار</option>
                                <option value="NA">ناميبيا</option>
                                <option value="NR">نورو</option>
                                <option value="NP">نيبال</option>
                                <option value="NL">هولندا</option>
                                <option value="AN">جزر الأنتيل الهولندي</option>
                                <option value="NC">كاليدونيا الجديدة</option>
                                <option value="NZ">نيوزيلندا</option>
                                <option value="NI">نيكاراجوا</option>
                                <option value="NE">النيجر</option>
                                <option value="NG">نيجيريا</option>
                                <option value="NU">ني</option>
                                <option value="NF">جزيرة نورفولك</option>
                                <option value="MP">جزر ماريانا الشمالية</option>
                                <option value="NO">النرويج</option>
                                <option value="PK">باكستان</option>
                                <option value="PW">بالاو</option>
                                <option value="PS">فلسطين</option>
                                <option value="PS">فلسطين</option>
                                <option value="PA">بنما</option>
                                <option value="PG">بابوا غينيا الجديدة</option>
                                <option value="PY">باراغواي</option>
                                <option value="PE">بيرو</option>
                                <option value="PH">الفليبين</option>
                                <option value="PL">بولونيا</option>
                                <option value="PT">البرتغال</option>
                                <option value="PR">بورتو ريكو</option>
                                <option value="RE">ريونيون</option>
                                <option value="RO">رومانيا</option>
                                <option value="RU">روسيا</option>
                                <option value="RW">رواندا</option>
                                <option value="SH">سانت هيلانة</option>
                                <option value="SH">سانت هيلانة</option>
                                <option value="KN">سانت كيتس ونيفس,</option>
                                <option value="KN">سانت كيتس ونيفس,</option>
                                <option value="LC">سان بيير وميكلون</option>
                                <option value="VC">سانت فنسنت وجزر غرينادين</option>
                                <option value="WS">ساموا</option>
                                <option value="SM">سان مارينو</option>
                                <option value="ST">ساو تومي وبرينسيبي</option>
                                <option value="SN">السنغال</option>
                                <option value="SC">سيشيل</option>
                                <option value="SL">سيراليون</option>
                                <option value="SG">سنغافورة</option>
                                <option value="SK">سلوفاكيا</option>
                                <option value="SI">سلوفينيا</option>
                                <option value="SB">جزر سليمان</option>
                                <option value="SO">الصومال</option>
                                <option value="ZA">جنوب أفريقيا</option>
                                <option value="SS">السودان الجنوبي</option>
                                <option value="ES">إسبانيا</option>
                                <option value="LK">سريلانكا</option>
                                <option value="SD">السودان</option>
                                <option value="SR">سورينام</option>
                                <option value="SZ">سوازيلند</option>
                                <option value="SE">السويد</option>
                                <option value="CH">سويسرا</option>
                                <option value="SY">سوريا</option>
                                <option value="TW">تايوان</option>
                                <option value="TJ">طاجيكستان</option>
                                <option value="TZ">تنزانيا</option>
                                <option value="TH">تايلندا</option>
                                <option value="TG">توغو</option>
                                <option value="TK">توكيلاو</option>
                                <option value="TO">تونغا</option>
                                <option value="TT">ترينيداد وتوباغو</option>
                                <option value="TN">تونس</option>
                                <option value="TR">تركيا</option>
                                <option value="TM">تركمانستان</option>
                                <option value="TC">جزر توركس وكايكوس</option>
                                <option value="TV">توفالو</option>
                                <option value="UG">أوغندا</option>
                                <option value="UA">أوكرانيا</option>
                                <option value="GB">المملكة المتحدة</option>
                                <option value="US">الولايات المتحدة</option>
                                <option value="UY">أورغواي</option>
                                <option value="UM">قائمة الولايات والمناطق الأمريكية</option>
                                <option value="UZ">أوزباكستان</option>
                                <option value="VU">فانواتو</option>
                                <option value="VA">فنزويلا</option>
                                <option value="VE">فنزويلا</option>
                                <option value="VN">فيتنام</option>
                                <option value="VI">الجزر العذراء الأمريكي</option>
                                <option value="WF">والس وفوتونا</option>
                                <option value="YE">اليمن</option>
                                <option value="ZM">زامبيا</option>
                                <option value="ZW">زمبابوي</option>
                              </select>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                            <label for="residence_nationality" class="form-label">الجنسية <span>*</span></label>
                            <select id="residence_nationality" class="form-control col-3" name="residence_nationality">
                                <option value="">اختر الجنسية</option>
                                <option value="AF">أفغانستان</option>
                                <option value="AL">ألبانيا</option>
                                <option value="DZ">الجزائر</option>
                                <option value="AS">ساموا-الأمريكي</option>
                                <option value="AD">أندورا</option>
                                <option value="AO">أنغولا</option>
                                <option value="AI">أنغويلا</option>
                                <option value="AQ">أنتاركتيكا</option>
                                <option value="AG">أنتيغوا وبربودا</option>
                                <option value="AG">أنتيغوا وبربودا</option>
                                <option value="AR">الأرجنتين</option>
                                <option value="AM">أرمينيا</option>
                                <option value="AW">أروبه</option>
                                <option value="AU">أستراليا</option>
                                <option value="AT">النمسا</option>
                                <option value="AZ">أذربيجان</option>
                                <option value="BS">الباهاماس</option>
                                <option value="BD">بنغلاديش</option>
                                <option value="BB">بربادوس</option>
                                <option value="BY">روسيا البيضاء</option>
                                <option value="BE">بلجيكا</option>
                                <option value="BZ">بيليز</option>
                                <option value="BJ">بنين</option>
                                <option value="BM">جزر برمودا</option>
                                <option value="BT">بوتان</option>
                                <option value="BO">بوليفيا</option>
                                <option value="BA">البوسنة و الهرسك</option>
                                <option value="BW">بوتسوانا</option>
                                <option value="BR">البرازيل</option>
                                <option value="IO">إقليم المحيط الهندي البريطاني</option>
                                <option value="BN">بروني</option>
                                <option value="BG">بلغاريا</option>
                                <option value="BF">بوركينا فاسو</option>
                                <option value="BI">بوروندي</option>
                                <option value="KH">كمبوديا</option>
                                <option value="CM">كاميرون</option>
                                <option value="CA">كندا</option>
                                <option value="CV">الرأس الأخضر</option>
                                <option value="KY">جزر كايمان</option>
                                <option value="CF">جمهورية أفريقيا الوسطى</option>
                                <option value="TD">تشاد</option>
                                <option value="CL">شيلي</option>
                                <option value="CN">الصين</option>
                                <option value="CX">جزيرة عيد الميلاد</option>
                                <option value="CC">جزر كوكوس</option>
                                <option value="CO">كولومبيا</option>
                                <option value="KM">جزر القمر</option>
                                <option value="CG">الكونغو</option>
                                <option value="CK">جزر كوك</option>
                                <option value="CR">كوستاريكا</option>
                                <option value="HR">كرواتيا</option>
                                <option value="CU">كوبا</option>
                                <option value="CW">كوراساو</option>
                                <option value="CY">قبرص</option>
                                <option value="CZ">الجمهورية التشيكية</option>
                                <option value="DK">الدانمارك</option>
                                <option value="DJ">جيبوتي</option>
                                <option value="DM">دومينيكا</option>
                                <option value="DO">الجمهورية الدومينيكية</option>
                                <option value="EC">إكوادور</option>
                                <option value="EG">مصر</option>
                                <option value="SV">إلسلفادور</option>
                                <option value="GQ">غينيا الاستوائي</option>
                                <option value="ER">إريتريا</option>
                                <option value="EE">استونيا</option>
                                <option value="ET">أثيوبيا</option>
                                <option value="FK">جزر فوكلاند</option>
                                <option value="FO">جزر فارو</option>
                                <option value="FJ">فيجي</option>
                                <option value="FI">فنلندا</option>
                                <option value="FR">فرنسا</option>
                                <option value="GF">غويانا الفرنسية</option>
                                <option value="PF">بولينيزيا الفرنسية</option>
                                <option value="GA">الغابون</option>
                                <option value="GM">غامبيا</option>
                                <option value="GE">جيورجيا</option>
                                <option value="DE">ألمانيا</option>
                                <option value="GH">غانا</option>
                                <option value="GI">جبل طارق</option>
                                <option value="GR">اليونان</option>
                                <option value="GL">جرينلاند</option>
                                <option value="GD">غرينادا</option>
                                <option value="GP">جزر جوادلوب</option>
                                <option value="GU">جوام</option>
                                <option value="GT">غواتيمال</option>
                                <option value="GN">غينيا</option>
                                <option value="GW">غينيا-بيساو</option>
                                <option value="GY">غيانا</option>
                                <option value="HT">هايتي</option>
                                <option value="HN">هندوراس</option>
                                <option value="HK">هونغ كونغ</option>
                                <option value="HU">المجر</option>
                                <option value="IS">آيسلندا</option>
                                <option value="IN">الهند</option>
                                <option value="ID">أندونيسيا</option>
                                <option value="IR">إيران</option>
                                <option value="IQ">العراق</option>
                                <option value="IE">إيرلندا</option>
                                <option value="IT">إيطاليا</option>
                                <option value="CI">ساحل العاج</option>
                                <option value="JM">جمايكا</option>
                                <option value="JP">اليابان</option>
                                <option value="JO">الأردن</option>
                                <option value="KZ">كازاخستان</option>
                                <option value="KE">كينيا</option>
                                <option value="KI">كيريباتي</option>
                                <option value="KP">كوريا الشمالية</option>
                                <option value="KR">كوريا الجنوبية</option>
                                <option value="XK">كوسوفو</option>
                                <option value="KG">قيرغيزستان</option>
                                <option value="LA">لاوس</option>
                                <option value="LV">لاتفيا</option>
                                <option value="LB">لبنان</option>
                                <option value="LS">ليسوتو</option>
                                <option value="LR">ليبيريا</option>
                                <option value="LY">ليبيا</option>
                                <option value="LI">ليختنشتين</option>
                                <option value="LT">لتوانيا</option>
                                <option value="LU">لوكسمبورغ</option>
                                <option value="MO">ماكاو</option>
                                <option value="MK">مقدونيا</option>
                                <option value="MG">مدغشقر</option>
                                <option value="MW">مالاوي</option>
                                <option value="MY">ماليزيا</option>
                                <option value="MV">المالديف</option>
                                <option value="ML">مالي</option>
                                <option value="MT">مالطا</option>
                                <option value="MH">جزر مارشال</option>
                                <option value="MQ">مارتينيك</option>
                                <option value="MR">موريتانيا</option>
                                <option value="MU">موريشيوس</option>
                                <option value="YT">مايوت</option>
                                <option value="MX">المكسيك</option>
                                <option value="FM">مايكرونيزيا</option>
                                <option value="MD">مولدافيا</option>
                                <option value="MC">موناكو</option>
                                <option value="MN">منغوليا</option>
                                <option value="MS">مونتسيرات</option>
                                <option value="MA">المغرب</option>
                                <option value="MZ">موزمبيق</option>
                                <option value="MM">ميانمار</option>
                                <option value="NA">ناميبيا</option>
                                <option value="NR">نورو</option>
                                <option value="NP">نيبال</option>
                                <option value="NL">هولندا</option>
                                <option value="AN">جزر الأنتيل الهولندي</option>
                                <option value="NC">كاليدونيا الجديدة</option>
                                <option value="NZ">نيوزيلندا</option>
                                <option value="NI">نيكاراجوا</option>
                                <option value="NE">النيجر</option>
                                <option value="NG">نيجيريا</option>
                                <option value="NU">ني</option>
                                <option value="NF">جزيرة نورفولك</option>
                                <option value="MP">جزر ماريانا الشمالية</option>
                                <option value="NO">النرويج</option>
                                <option value="PK">باكستان</option>
                                <option value="PW">بالاو</option>
                                <option value="PS">فلسطين</option>
                                <option value="PS">فلسطين</option>
                                <option value="PA">بنما</option>
                                <option value="PG">بابوا غينيا الجديدة</option>
                                <option value="PY">باراغواي</option>
                                <option value="PE">بيرو</option>
                                <option value="PH">الفليبين</option>
                                <option value="PL">بولونيا</option>
                                <option value="PT">البرتغال</option>
                                <option value="PR">بورتو ريكو</option>
                                <option value="RE">ريونيون</option>
                                <option value="RO">رومانيا</option>
                                <option value="RU">روسيا</option>
                                <option value="RW">رواندا</option>
                                <option value="SH">سانت هيلانة</option>
                                <option value="SH">سانت هيلانة</option>
                                <option value="KN">سانت كيتس ونيفس,</option>
                                <option value="KN">سانت كيتس ونيفس,</option>
                                <option value="LC">سان بيير وميكلون</option>
                                <option value="VC">سانت فنسنت وجزر غرينادين</option>
                                <option value="WS">ساموا</option>
                                <option value="SM">سان مارينو</option>
                                <option value="ST">ساو تومي وبرينسيبي</option>
                                <option value="SN">السنغال</option>
                                <option value="SC">سيشيل</option>
                                <option value="SL">سيراليون</option>
                                <option value="SG">سنغافورة</option>
                                <option value="SK">سلوفاكيا</option>
                                <option value="SI">سلوفينيا</option>
                                <option value="SB">جزر سليمان</option>
                                <option value="SO">الصومال</option>
                                <option value="ZA">جنوب أفريقيا</option>
                                <option value="SS">السودان الجنوبي</option>
                                <option value="ES">إسبانيا</option>
                                <option value="LK">سريلانكا</option>
                                <option value="SD">السودان</option>
                                <option value="SR">سورينام</option>
                                <option value="SZ">سوازيلند</option>
                                <option value="SE">السويد</option>
                                <option value="CH">سويسرا</option>
                                <option value="SY">سوريا</option>
                                <option value="TW">تايوان</option>
                                <option value="TJ">طاجيكستان</option>
                                <option value="TZ">تنزانيا</option>
                                <option value="TH">تايلندا</option>
                                <option value="TG">توغو</option>
                                <option value="TK">توكيلاو</option>
                                <option value="TO">تونغا</option>
                                <option value="TT">ترينيداد وتوباغو</option>
                                <option value="TN">تونس</option>
                                <option value="TR">تركيا</option>
                                <option value="TM">تركمانستان</option>
                                <option value="TC">جزر توركس وكايكوس</option>
                                <option value="TV">توفالو</option>
                                <option value="UG">أوغندا</option>
                                <option value="UA">أوكرانيا</option>
                                <option value="GB">المملكة المتحدة</option>
                                <option value="US">الولايات المتحدة</option>
                                <option value="UY">أورغواي</option>
                                <option value="UM">قائمة الولايات والمناطق الأمريكية</option>
                                <option value="UZ">أوزباكستان</option>
                                <option value="VU">فانواتو</option>
                                <option value="VA">فنزويلا</option>
                                <option value="VE">فنزويلا</option>
                                <option value="VN">فيتنام</option>
                                <option value="VI">الجزر العذراء الأمريكي</option>
                                <option value="WF">والس وفوتونا</option>
                                <option value="YE">اليمن</option>
                                <option value="ZM">زامبيا</option>
                                <option value="ZW">زمبابوي</option>
                          </select>
                        </div>

                        <div class=" btn1 col-12 col-sm-12 col-md-6 col-lg-4">
                            <button type="button" class="btn p-2 w-100">بحث</button>
                        </div>

                    </div>
                </div>
                <div class="panel" id="two-panel">
                    <div class="add2 d-flex flex-wrap justify-content-start align-content-center align-items-center">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="ruote-in" class="form-label">من <span>*</span></label>
                            <input type="text" name="ruote-in" id="ruote-in" class="form-control col-3">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="ruote-out" class="form-label">الى <span>*</span></label>
                            <input type="text" name="ruote-out" id="ruote-out" class="form-control col-3">
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-in" class="form-label">الوصول <span>*</span></label>
                            <input type="date" name="date-in" id="date-in" class="form-control col-3">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3">
                            <label for="date-out" class="form-label">المغادرة <span>*</span></label>
                            <input type="date" name="date-out" id="date-out" class="form-control col-3">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center m-auto">
                            <button class="btn btn-primary" type="submit">search</button>
                        </div>
                    </div>
                </div>
                <div class="panel" id="three-panel">
                    <div class="panel" id="three-panel">
                        <div class="add2 d-flex flex-wrap justify-content-start align-content-center align-items-center">

                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">

    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/WhatsApp Image 2022-06-19 at 4.08.40 PM.svg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>نبذة عنا</h4>
                        <p>"سيرو" خطوة بدأت مسيرتها من عهد المؤسس طيب الله ثراه غايتها الأولى تيسير امور السياحة و السفر على المسافرين و ذلك بتقديم خدمات متعددة بأسعار مرنة.</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
        </div>
    </section>
    <!-- Project One Row-->
    <section class="services" id="services" style="margin-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-1">
                        <h5>رحلات الطيران</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-2">
                        <h5>الفنادق</h5>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card1 card-3">
                        <h5>وسائل النقل</h5>
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
                            <h4 class="text-uppercase m-0">الايميل</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">info@sero.com.sa</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">العنوان</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">طريق الملك عبدالله الفرعي،المدينة المنورة </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">الهاتف</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+966920007075</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-row-reverse flex-wrap mt-3">
                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4 text-decoration-none" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-center" style="border-bottom: 2px solid white; padding: 5px;">خدماتنا</h4>
                    <ul dir="rtl" style="height: 140px; overflow: hidden;">
                        <li>استخراج الفيزا من أي مكان بالعالم خلال 24 ساعة</li>
                        <li>الربط بين المسافرين و الفنادق</li>
                        <li>تقديـــم الخدمات الأرضية بـــكل أنواعها (توفير الباصات تذاكر المترو، خدمات النقل)</li>
                        <li>حجـــز رحلات الطيران بأقل الأســـعار مـــع مجموعة من شركات الطيران</li>
                        <li>تصميـــم بكجـــات خاصـــة و مرنـــة تناســـب المعتمرين والحجاج من كافة المستويات</li>
                        <li>توفير حجوزات لجميع الفنادق حول العال</li>
                    </ul>
                    </ul>
                </div>

                <div dir="rtl" class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-center" style="border-bottom: 2px solid white; padding: 5px;">روابط سريعة</h4>

                    <div class="widget-contact-list">
                        <ul dir="rtl">
                            <li>
                                <a href="index.html"> الرئيسية</a>
                            </li>
                            <li>
                                <a href="#about1"> نبذه عن الشركة</a>
                            </li>
                            <li>
                                <!-- link trigger modal -->
                                <a href="" data-bs-toggle="modal" data-bs-target="#Modal">سياسة الخصوصية </a>

                                <!-- Modal -->
                                <div class="modal modal-fullscreen-lg-down fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body text-black">
                                                <div class="p-5">
                                                    <h1 class="text-center p-3">سياسة الخصوصية </h1>
                                                    <h3 class="text-danger">لوائح وسياسات منصة سيرو كوم</h3>
                                                    <p>تخضع شركتنا وكافة أنظمتنا للنظام العام والسياسات التابعة لدولة المنشأ وهي المملكة العربية السعودية حالياً نقبل المدفوعات عبر الإنترنت بواسطة استخدام البطاقات الإئتمانية والتي تشمل بطاقات "فيزا وماستركارد"
                                                        ويمكن الخصم منها عبر العملة المتوفرة في الخدمات عبر المنصة والتي يمكن أن تكون بالريال السعودي أو الدولار الأمريكي، وفي حال رغبتكم باستخدام خاصة الدفع الالكتروني عبر الإنترنت فإنه يجب أن يكون هنالك
                                                        تطابق وتفويضل كامل وتطابق في التفاصيل الموجودة في مُعرّف هوية العميل ومعرّف هوية صاحب البطاقة، والتي يجب أن تكون متطابقة تماماً لإجراء عمليات الشراء</p>

                                                    <p>في حالات الاسترداد، سيتم فقط رد المبالغ القابلة للاسترداع للعمليات التي تمت على هذه المنصة الالكترونية إلى وسيلة الدفع الأصلية التي تم من خلالها إتمام السداد للعمليات</p>

                                                    <p>سيتم تخزين بعض البيانات الأساسية المتعلقة بمعلومات التسليم، مثل اسم العميل، والموقع، والعنوان البريدي، وأرقام الاتصال، وذلك لأغراض ضمان التسليم، علماً بأنه لن يتم تخزين معلومات التعريف الشخصية الأخرى
                                                    </p>

                                                    <h3 class="text-danger">رسوم الإلغاء</h3>
                                                    <ul>
                                                        <li>إذا تم الإلغاء في فترزمنية ما بين 0 يوماً – إلى 24 يوماً قبل تاريخ المغادرة، فإنه سيتم خصم 100% من قيمة الحجوزات ولن يتم استعادتها بأي حال من الأحوال</li>
                                                        <li>ذا تمت عملية الإلغاء في فترة زمنية ما بين 25 يوماً إلى 60 يوماً قبل تاريخ المغادرة المحدد فإنه سيتم خصم قيمة 50 % من قيمة الحجوزات</li>
                                                        <li>إذا تمت عملية الإلغاء في فترة زمنية تساوي أو تزيد عن 61 يوماً من تاريخ المغادرة المحدد، فإنه سيتم فقط خصم 10% من إجمالي قيمة الحجوزات</li>
                                                        <li>في حالة عدم تطابق اسم البيانات المزودة في الحجوزات مع تفاصيل البيانات في جواز السفر، فإنه ستتوجب دفع غرامة قدرها 150 ريالاً سعوديا فقط لتغيير اسم المسافر في حال ما إذا أمكن التغيير</li>
                                                        <li>بالنسبة للفنادق، لا تتقاضى منصة سيرو.كوم أي رسوم إضافية خاصة لتقديم خدمات الإلغاء كرسوم إضافية بالإضافة إلى رسوم الإلغاء التي يفرضها الفندق في سياسة الإلغاء الخاصة به</li>
                                                    </ul>

                                                    <h3 class="text-danger">أحكام عامة</h3>

                                                    <p>يمكنكم عبر منصتنا الحجز والسفر إلى أي وجهات معينة ترغبونها، وقد تنطوي هذه الوجهات على مخاطر أكبر من غيرها أي كان نوع هذه المخطار، وسيكون عليكم تحمل كامل المسئولية فيما يتعلق بالتكاليف والعواقب وكامل
                                                        المسئولية الشخصية</p>

                                                    <p>يطلب ويلتمس موقع منصة سيرو كوم من مسافريه وجميع الضيوف استشارة السلطات المحلية ببلدهم أو ببلد السفر، وتقييم قرارات حظر السفر أو التحذيرات منه أو الإعلانات المتعلقة به أو كافة الإرشادات الصادرة عن السلطات
                                                        المحلية قبل حجز السفر إلى وجهات دولية أو محلية بشكل عام، ومناطق ووجهات معينة بشكل خاص دون أدنى مسئولية على المنصة</p>

                                                    <p>عبر تقديم وبيع خدمات السفر والحجز لدول أو جهات معينة، فإن منصة سيرو كوم لا تعتبر بأي حال من الأحوال مسئولة أو متحملة للتحذير أو المخاطر في تلكم الوجهات، ولا تعتبر منصة سيرو ضامنة أو موصية بالسفر إلى
                                                        هذه الوجهات، ولا تتحمل منصة سيرو أي مسئولية عن الأضرار أو الخسائر أو التأخيرات التي قد تنجم عن عدم توفير المستندات الصحيحة والمتعلقة بالسفر والدخول والخروج أو مدة الإقامة في تكلك الوجهات</p>

                                                    <p>منصة سيرو والشركات والوكالات التابعة لها، أو موردوها غير مسئولين بأي حال من الأحوال عن الأخطاء أو الأفعال أو الإغفالات أو الإقرارات أو الضمانات او الإنتهاكات أو الإهمال الصادر من قبل أي من شركات الطيران،
                                                        أو الفنادق أو موردين الخدمات الأخرى، كما أن المنصة غير مسئولة عن أي إصاباة شخصية أو حالات الوفاة أو التلف في الممتلكات أو أي أضرار أو رسوم أو نفقات أخرى ناتجة عن ذلك، كما لا تتحمل منصة سيرو أو أي
                                                        من الشركات والوكلاءات المتعاملة معها أو أي من موردي الخدمات للمنصة أي مسئولية ولن يقوموا باسترداد الأموال في حالات حدوث أي تأخير أو إلغاء حجز أو زيادة في الضرائب، أو وجود قوة قاهرة، أو الإضرابات
                                                        وأعمال الشغب، أو أي أعمال أخرى خارجة عن السيطرة المباشرة، ولا تتحمل المنصة أي مسئولية عن أي نفقات إضافية أو أعمال التقاضي أو التأخير أو إعادة التوجيه أو أعمال الترافع إلى أي جهات أو سلطات</p>

                                                    <p>تحتفظ منصة سيرو بحقوقها الحصرية والكاملة ووفقاً لتقديرها الخاص في حذف أو تغيير أو تقييد أو إيقاف الموقع أو أي مادة منشورة بها، ولا تلتزم بأي شكل من الأشكال بالأخذ بالاعتبارات احتياجات أي مستخدم فيما
                                                        يتعلق بذلك
                                                    </p>

                                                    <p>تحتفظ منصة سيرو بكامل حقوقها الحصرية في منع أو رفض وصول أي متستخدام إلى هذا الموقع أو أي جزء منه ودون الحاجة إلى إشعار مسبق</p>

                                                    <p>بالموافقة على الشروط والأحكام المتعلقة بأي من العمليات في هذه المنصة، فإنكم تقروون وبشكل جازم وملزم بالموافقة على الالتزام بشروط وأحكام الشراء والخدمات التي يفرضها أي مزود أو مورد للخدمة تختارون التعامل
                                                        معه، بما في ذلك على سبيل المثال لا الحصر، دفع جميع المبالغ عند استحقاقها وفقاً للقيود والقواعد المفروضة من قبل مزود أو مورد الخدمات فيما يتعلق بتوافر الخدمات واستخدام الأسعار والمنتجات أو الخدمات
                                                        في حنيها، كما إنكم تقروون بأنه قد تكون هنالك متطلبات إضافية من بعض الموردين و/ أو أطراف الطرف الثالث قد تشمل منكم التوقيع على إعفاء من المسئولية قبل تقديم الخدمة أو المشاركة بها و/أو النشاط الذي
                                                        يقدمونة، وأنكم على إدراك تام بأن أي انتهاك للشروط والأحكام والقواعد والقيود المفروضة من قبل المورد أو الموردين قد يؤدي إلى إلغاء حجزكم أو حجوزاتكم، أو حرمانكم من الوصول إلى المنتج أو خدمات السفر
                                                        والإقامة المطبقة، أو مصدارة أي أموال مدفوعة لحجزكم أو حجوزات، أو قيام منصة سيرو للخصم من حسابكم لأي تكاليف تتكبدها المنصة نتيجة لتلك الانتهاكات</p>

                                                    <p>لن يكون أي تنازل من منصة سيرو معتبراً أو قابلاً للتنفيذ في أي من الأحكام والشروط وبأي صيغة كانت ملزما، ما عداد منصوص عليه كتابة في الموقع، أو معتمداً وموقعا من قبل ممثلها المفوض حسب الأنظمة والقوانين</p>

                                                    <p>تخضع جميع هذه الشروط والأحكام للقوانين والأنظمة المعمول بها في المملكة العربية السعودية وتُفسر وفقاً لها، ويَخضع أي نزاع حصرياً للاختصاص القضائي للمحاكم والأجهزة القضائية المناسبة والمختصة والموجودة
                                                        بالمملكة العربية السعودية</p>

                                                    <h3 class="text-danger">شروط وأحكام الدفع</h3>

                                                    <p>لا ولن يقوم موقع منصة سيرو أو الشركة المطورة لها بطلب أو تخزين أو مشاركة أي بيانات متعلقة بالبطاقات الإئتمانية للعملاء، أو بيانات تسجيل الدخول لحساباتهم البنكية، أو بطاقات الدفع المسبق عبر الهاتف أو
                                                        البريد الالكتروني وتحت أي ظرف</p>

                                                    <p>في حالة وجود ملاحظة على عمليات الدفع عبر بوابة الدفع الالكتروني الخاصة بنا، سيقوم فريق الحماية الخاصة بنا للتواصل معكم عبر البريد الالكتروني من العنوان التالي ccc@zowar.com.sa ، وسوف يتم طلب الحصول على
                                                        صورة للبطاقة الإئتمانية من الأمام ومن الخلف على رمز CVV للتحقق عبر الاتصال الآمن بالعنوان الالكتروني:ccc@zowar.com.sa</p>

                                                    <p>في حال تلقيكم لأي اتصال أو رسالة الكترونية من عنوان بريد الكتروني آخر يزعم أنه مرسل لكم من قبل منصة سيرو ويطلب الحصول على أي بيانات شخصية أو أمنية، فيرجى عدم الرد أبداً على ذلك البريد الالكتروني، ويرجى
                                                        تحويل الرسالة من هذا القبيل إلى بريدنا الالكتروني المتخصص وهو ccc@zowar.com.sa كما سيتوجب عليكم الحذف وبشكل مباشر وفوري لتلك الرسالة المجهولة</p>

                                                    <h3 class="text-danger">يمكن الدفع مقابل الخدمات التي تقدمها منصة سيرو عبر القنوات التالية:
                                                    </h3>

                                                    <ul>
                                                        <li>صفحة بوابة الدفع الالكتروني على موقعنا الالكتروني </li>
                                                        <li>الدفع الالكتروني عبر الرابط الآمن المتواجد على دومين موقع منصة سيرو </li>
                                                        <li>الإيداع النقدي في حساب منصة سيرو في البنك السعودي البريطاني حسب بيانات الآيبان التالية (SABB IBAN SA6045000000026374033001) </li>
                                                    </ul>

                                                    <p>سيتم تحذير المستخدم، والتأكيد عليه للموافقة بأنه سيقوم بإنشاء عمليات دفع الكترونية وبأنه سيقوم بإصدار أو إنشاء تعليمات دفع الكتروني وأنه سيقوم بتقديم بيانات بطاقته أو بطاقتها الإئتمانية أو بياناته أو
                                                        بياناتها البنكية</p>

                                                    <p>يُعتبر المستخدم هو المستخدام القانوني والمخول باستخدام بطاقته الإئتمانية أو حسابه المصرفي، ويُعتبر هو المخول قانوناً للقيام بعمليات الدفع والسحب والخصم المصرفي من حساباته لصالح هذه العمليات</p>

                                                    <p>يتحمل المستخدم وبشكل كامل كافة المسئولية المتعلقة بضرورة التأكيد من قيامه بتقديم تفاصيل البطاقة أو الحساب المصرفي بشكل دقيق وصحيح
                                                    </p>

                                                    <p>سيقوم المستخدم بالتصريح للخصم من البطاقة الإئتمانية أو/ و الحساب المصرفي المحدد من طرفه للدفع لصالح منصة سيرو</p>

                                                    <p>يتحمل المستخدم/ العميل كامل المسئولية المتعلقة بتوفير الرصيد النقدي الكافي في البطاقة الإئتمانية/ أو الحساب البنكي الذي سيقوم باستخدامه أثناء عملية السداد للمستحقات المالية والفواتير المترتبة على الخدمات
                                                        والحجوزات التي تم اختيارها من طرفه، علماً بأن جميع المدفوعات شاملة لجميع الرسوم المتعلقة</p>

                                                    <p>يوافق المستخدم/ العميل وبكامل الأهلية، بأنه يحق لمنصة سيرو و/أو مزودي خدمات الدفع الالكتروني وفي إطار الأنظمة والقوانين المعمول بها وفي نطاق ما يسمح به القانون، استخدام أو جمع، أو الإفصاح عن المعلومات
                                                        الشخصية للعميل، للجهات المسئولية والقضائية والقانونية، وجهات إنفاذ القانون، وفي إطار التعاون الكامل مع السلطات، أو الاستجابة لأي متطلبات قانونية
                                                    </p>

                                                    <h3 class="text-danger">الشروط والأحكام المتعلقة بتأشيرة العمرة</h3>

                                                    <p>لا يحتاج مواطنوا الخليج العربي [دول مجلس التعاون الخليجي] للحصول على تأشيرة العمرة، وتتعلق هذه الشروط والأحكام للمعتمرين من جميع الجنسيات الأخرى خارج دول مجلس التعاون الخليجي</p>

                                                    <ul>
                                                        <li>تأشيرة العمرة غير صالحة للعمل أو الإقامة </li>
                                                        <li>المدة النظامية المعيارية لتأشيرة العمرة هي 15 يوما ( ماعدا إذا ما نصت التأشيرة على خلاف ذلك في الاستكر أو وثيقة التأشيرة المطبوعة) </li>
                                                        <li>يتوجب على المعتمر/ المعتمرين عدم "التخلف" أو تجاوز المدة القانونية للتأشيرة، ومخالفة ذلك تعتبر مخالفة لقوانين المملكة العربية السعودية، وسيكون المخالف عرضة للإجراءات القانونية والعقوبات النظامية
                                                            والتي قد تشمل ولا تقتصر على الغرامات المالية أو حتى الوصول إلى المنع من دخول المملكة العربية السعودية في المستقبل</li>
                                                        <li>يتوجب على كل معتمر يحمل تأشيرة سارية المفعول للعمرة، الإلتزام التام بالشروط والأحكام والإجراءات الخاصة برحلات الطيران </li>
                                                        <li>يتوجب على حاملي تأشيرات العمرة دخول المملكة العربية السعودية ومغادرتها "جواً" عبر كل من: مطار الملك خالد الدولي بالعاصمة الرياض، مطار الملك عبدالعزيز الدولي بمدينة جدة، مطار الأمير محمد بن عبد العزيز
                                                            بالمدينة المنورة، ومطار الأمير عبدالمحسن بن عبدالعزيز بمدينة ينبع، دون العبور بأي من المطارات الأخرى بالمملكة العربية السعودية </li>
                                                        <li>يتوجب على حاملي تأشيرة العمرة الذين تم دخولهم إلى المملكة العربية السعودية عبر مطاري: الملك عبدالعزيز الدولي بجدة، والأمير محمد بن عبد العزيز الدولي بالمدينة المنورة، المغادرة فقط عبر مطاري: الملك
                                                            عبد العزيز الدولي بجدة، أو الأمير محمد بن عبدالعزيز الدولي بالمدينة المنورة، دون العبور بأي من المطارات السعودية الأخرى </li>
                                                        <li>حاملوا تأشيرات العمرة الذين تم دخول عبر مطار الملك خالد الدولي بالعاصمة الرياض، أو مطار الملك فهد الدولي بمدينة الدمام، يمكنكم المغادرة فقط من مطار الملك خالد الدولي بالعاصمة الرياض، أو مطار الملك
                                                            فهد الدولي بمدينة الدمام، أو مطار الملك عبدالعزيز الدولي بمدينة جدة أو مطار الأمير محمد بن عبدالعزيز الدولي بالمدينة المنورة دون العبور أو المرور بأي المطارات السعودية الأخرى</li>
                                                        <li>يتوجب على حاملي تأشيرة العمرة الذين تم دخولهم عبر مطار الملك خالد الدولي بالعاصمة الرياض، أن تكون لديهم تذاكر سفر مؤكدة لكامل برنامج الرحلة (بما يشمل الرحلات الدولية والرحلات الداخلية) عبر مدينة
                                                            جدة أو المدينة المنورة، ويتوجب أن يكون الحد الأدنى لزمن الانتظار في الرحلات الداخلية لا يزيد عن أربعة ساعات، بالإضافة إلى ذلك يتوجب على المعتمرين الحضور في المطار في مدة لا تقل عن أربعة ساعات
                                                            قبل وقت إقلاع رحلاتهم الدولية والمرتبطة برحلاتهم الداخلية </li>
                                                        <li>يتوجب على المعتمرين فهم وتأكيد والالتزام بالمتطلبات التالية حتى يمكنهم الحصول على تأشيرة العمرة</li>
                                                        <li>يتوجب توفر جواز سفر ساري المفعول والصلاحية ولمدة لا تقل عن ستة أشهر وأن يكون جواز قابلاً لدخول المملكة العربية والسعودية ثم الوجهة التي تليها ويتوجب أن يتوفر على الأقل صفحتان خاويتان في جواز السفر
                                                            متناظرتين لأحداهما الأخرى </li>
                                                        <li>يتوجب على المعتمر التعاون الكامل مع فريق عمل منصّة سيرو لتعبئة البيانات والتأكد منها على النحو الآتي </li>
                                                        <li>المعتمر مسئول ومحاسب عن صحّة وسلامة جميع البيانات التي يقدمها إلى المنصة، وكذلك سلامة وصحّة جميع الوثائق التي سيقدمها إلى فريق عمل منصّة سيرو، بما يشمل أيضاً جميع الوثائق والبيانات التي يقوم المعتمر
                                                            بنفسه بتحميلها في الموقع الالكتروني لمنصة سيرو</li>
                                                        <li>على جميع النساء والإناث المسافرات بغرض العمرة أن يتوفر لديهن مَحْرَم، ويتوجب رفع وثائق إثبات الصلة القرابة عبر منصة سيرو أو تقديمها لفريق عمل المنصة أثناء عملية التقدم لطلب تأشيرة العمرة، ويمكن للنساء
                                                            اللاتي تتجاوزن أعمار الخمسة وأربعين سنة السفر بدون مَحرم لكن مع مجموعات منظمة، ومع ذلك سيتوجب عليهم تقديم خطاب عدم ممانعة من أحد أقربائهن من الدرجة الأول مثل الزوج، الإبن أو الأخ، يخولها للسفر
                                                            لغرض العمرة مع ذكر اسم المجموعة التي ستسافر معها، ويتوجب أن يكون هذا الخطاب موثقاً </li>
                                                        <li>بحسب الإجراءات النظامية، فإنه يتوجب على المعتمرين الذكور والذين يحملون إحدى الجنسيات التالية: (الهند، باكستان، السودان، بنغلاديش، اليمن، نيجيريا، وتشاد)، والذين تقل أعمارهم عن 40 سنة أن يكون معهم
                                                            مرافق نسائي "أنثى" على صلة قرابة من الدرجة الأولى، ويتوجب عليهم تقديم مستقدم قرابة موثق </li>

                                                        <li>سيتوجب أن يتوفر لدى المعتمر تذكرة ذهاب وعودة مؤكدة وغير قابلة للاسترجاع ضمن حزمة حجوزات برنامج العمرة الخاصة به، وأيضاً تشتمل على الخدمات الرئيسية ضمن برنامج العمرة الذي قام المعتمر بشراءه</li>

                                                        <li>بعد الانتهاء من عمليات تقديم طلب التأشيرة وتأكيدها وقبولها، سيتوجب على المعتمر الاتصال بأقرب وكيل سفر خارجي محلي معتمد في بلد إقامته، والذي سيقوم باستكمال إجراءات تأشيرة السفر من القنصلية السعودية
                                                            في ذلك البلد، ويقر المعتمر هنا بالتعاون بشكل كامل مع وكيل السفر الخارجي المحلي المعتمد في بلده وذلك من خلال تقديم جميع الوثائق القانونية والضرورية المطلوبة والتي تشمل الخطابات، والتطعيمات الطبية
                                                            (في حال الحاجة) وجواز السفر وغيرها من الوثائق المطلوبة للسفر، للمعلومية فإن الفشل في هذه الإجراءات سيؤدي بدوره إلى فشل إجراءات إصدار التأشيرة، وأي تأخير يتسبب به المعتمر سيترتب عليه تأجيل رحلة
                                                            العمرة، أو حتى إلغاءها بالكلية بدون أدنى مسئولية على المنصة، ولا تتحمل منصة سيرو أدنى مسئولية، ويتوجب على المعتمر في هذه الحالة تحمل كافة النفقات والرسوم المتعلقة بتغيير تواريخ الحجوات، أو أي
                                                            غرامات متعلقة بإلغاءها </li>

                                                        <li>رسوم تأشيرة العمرة غير مسترجعة أو مستردة بأي حال من الأحوال، في حال إذا ما قرر المُعتمر إلغاء رحلة العمرة بعد صدور الرقم المرجعي للتأشيرة (موفا)، [يتم إصداره بعد نجاح طلب تأشيرة العمرة]، قبل صدور
                                                            التأشيرة، فإنه توجد إمكانية لإلغاء حزمة برنامج العمرة مع الأخذ بالاعتباشر شروط الإلغاء المتعلقة بكل مزود من (الفنادق، خدمات النقل، والطيران.... وغيرها) ويحتمل المعتمر كافة الغرامات المترتبة على
                                                            ذلك </li>

                                                        <li>لا تتحمل منصة سيرو أو فريقها أي مسئولية قانونية أو أي شكاوي تتعلق بمخالفة العميل للشروط والأحكام والبود المشار إليها بأعلاه، وبالسياسات والإجراءات المتعلقة بها ولا تقبل أي نوع من أنواع المسئولية
                                                            بشتى أنواعها بهذا الخصوص </li>

                                                        <li>يتوجب على الزائرين إلى أراضي المملكة العربية السعودية، بتعاليم الدين الإسلامي الحنيف، ومراعاة الأعراف والتقاليد الإسلامية والعربية وتقاليد وأعراف المجمع السعودي، للمعلومية تطبق المملكة العربية السعودية
                                                            قوانين صارمة فيما يتعلق بتهريب المخدرات والممنوعات، وسيتعرض المخالفون والمهربون للمخدمات لعقوبات قاسية قد تصل إلى حد الإعدام، كما تمنع قوانين المملكة العربية السعودية إقامة أي تجمعات طائفية أو
                                                            عنصرية أوفرق وطوائف دينية في جميل الأحوال. </li>

                                                        <li>يتوجب على الزائرين إلى أرضاي المملكة العربية السعودية الإنصياع إلى الأنظمة والقوانين الإسلامية للملكة والضوابط والأعراف والتقاليد المتعلقة بحضارتها ومجتمعها، ويتوجب على الزائرين ارتداء الملابس المُحتشمة
                                                            واللائقة بمكانة الحرمين الشريفين والأراضي المقدسة، والمتوافقة مع القيم والثقافة الإسلامية، ويتوجب على الزائرين لغرض العمرة التركيز على أداء مناسكهم الدينية، كما يمكنهم المشاركة بالأنشطة السياحية،
                                                            ويتوجب عليهم تجب جميع أنواع الأنشطة الأخرى المخالفة أو الخارجة عن مجال هدف زيارة المملكة لأجل أدا مناسك العمرة، أو أي أنشطة تخالف الأنظمة والقوانين أو تخل بالأمن في المملكة العربية السعودية</li>
                                                    </ul>

                                                    <p>أو لأي استفسارات إضافية يمكنكم الاتصال بمقام وزارة الحج والعمرة بالمملكة العربية السعودية والتي يمكن الوصول إلى معلومات الاتصال بها عبر موقع الوزارة على الإنترنت</p>

                                                    <p>يتوجب على جميع المسافرين إلى المملكة العربية السعودية لأجل العمرة حيازة جواز سفر. وثائق السفر الصادرة من أي حكومة ولا تعتبر جواز سفر لن تكون مقبولة لدى سفارات وقنصليات المملكة العربية السعودية</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="widget widget-links col-12 col-sm-12 col-md-6 col-lg-4" style="border: 1px solid transparent; border-radius: 5px;">
                    <h4 class="widget_title text-center" style="border-bottom: 2px solid white; padding: 5px;">مواقع التواصل</h4>
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
        <div class="container px-4 px-lg-5">جميع الحقوق محفوظة لدى شركة سيرو &copy; 2022 - 23</div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('cms/js/scripts.js') }}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>4
