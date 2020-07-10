<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!--Archivo font -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('owlCarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owlCarousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

<div id="home">

    <!--header -->
    <header class="px-16 py-4  md:flex md:justify-between md:items-center md:py-0">
        <div class="flex items-center justify-between px-16 py-2">
            {{-- left--}}
            <div class="flex items-center">
                <img src="{{asset('images/logo.png')}}" alt="superbroom">
                <span class="logo-colour font-bold pl-4">SuperBroom</span>
            </div>

            {{--right --}}
            <div class="md:hidden">
                <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-black focus:outline-none">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <!--the x button -->
                        <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>

                        <!-- the hamburger button-->
                        <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div :class="isOpen ? 'block' : 'hidden'" class="px-12 md:flex">
            <a href="" class="px-4 block font-semibold rounded sm:ml-2 ">About</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Services</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Blog</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Contact</a>
        </div>
    </header>

    <section style="background: #F6F8F9">
        <div class="section-header">
            <img src="{{asset('images/yellow-modern.png')}}" class="yellow-modern" alt="superbroom">
            <div class="yellow-modern-text">
                <p>We offer quality and standard services</p>
                <button class="know-more-btn">KNOW MORE</button>
            </div>
        </div>
        <!-- value -->
        <div>
            <h2 class="text-3xl text-center mt-8 value-text">We offer value for your money</h2>

            <div class="container mx-auto flex items-center justify-center py-4 mt-5">
                <div class="px-12 pt-4">
                    <img src="{{asset('images/thumbs-up.svg')}}" alt="professionalism">
                    <p class="mt-4">Professionalism</p>
                </div>

                <div class="px-12">
                    <img src="{{asset('images/sale-badge.svg')}}" alt="affordability">
                    <p class="mt-4">Affordability</p>
                </div>

                <div class="px-12 pt-2">
                    <img src="{{asset('images/task.svg')}}" alt="commitment">
                    <p class="mt-4">Commitment</p>
                </div>

                <div class="px-12 pt-3">
                    <img src="{{asset('images/heart.svg')}}" alt="integrity">
                    <p class="mt-4">Integrity</p>
                </div>
            </div>


            <div class="container mx-auto md:flex items-center justify-center mt-16 px-8">
                <div class="md:flex-shrink-0 px-8 mr-8">
                    <img src="{{asset('images/woman-cleaning-sofa.png')}}" alt="woman-cleaning-sofa">
                </div>

                <div class="px-8 ml-6">
                    <h2 class="text-left text-3xl affordable-text">
                        Affordable and <br>
                        professional are our <br>
                        guiding principles
                    </h2>

                    <p class="text-left text-2xl text-black mt-5">
                        To provide quality service, our staff are trained and
                        vetted by the best in the cleaning business. <br>
                        We also use modern day technologies and methods to enable us offer
                        quality services
                    </p>

                    <button class="services-btn mt-5">Our Services</button>
                </div>
            </div>

            <div class="container mx-auto md:flex items-center justify-center mt-16 px-8">

                <div class="px-8 ml-6">
                    <h2 class="text-left text-3xl affordable-text">
                        20 years experience <br>
                        offering professional <br>
                        cleaning services
                    </h2>

                    <p class="text-left text-2xl text-black mt-5">
                        At SuperBroom Services Limited, we cost effectively
                        create lasting impressions by providing clean environments
                        that motivate and inspire occupants
                    </p>

                    <button class="services-btn mt-5 mb-5">About Us</button>
                </div>

                <div class="md:flex-shrink-0 px-8 mr-8 mb-16">
                    <img src="{{asset('images/young-maid.png')}}" alt="woman-cleaning-sofa">
                </div>
            </div>
        </div>
        <!--value ends -->
    </section>
    <!--header ends -->


    <!-- testimonials-->
    <section style="background: #FDFEFF">
        <div class="testimonials" style="background: #FDFEFF">
            <h2 class="testimonial-title text-3xl text-center mt-16">
                What the Clients say
            </h2>
            <div class="owl-carousel">
                <div class="item mt-5 mb-3">
                    <div class="client-testimony">
                        <div class="client-testimony-text">
                            SuperBroom Services has been our supplier since 2017
                            and has satisfactorily performed to say the least. We
                            would not hesitate to remommend them to any organization
                            intending to deal with them in the field of cleaning and
                            ground maintenance services
                        </div>
                        <div class="client-name mt-5">
                            MRS. J A Kanjejo
                        </div>
                        <div class="client-pos-location">
                            Procurement Manager, University of Nairobi
                        </div>

                    </div>
                </div>
                <div class="item mt-5 mb-3">
                    <div class="client-testimony">
                        <div class="client-testimony-text">
                            SuperBroom Services has been our supplier since 2017
                            and has satisfactorily performed to say the least. We
                            would not hesitate to remommend them to any organization
                            intending to deal with them in the field of cleaning and
                            ground maintenance services
                        </div>
                        <div class="client-name mt-5">
                            MRS. J A Kanjejo
                        </div>
                        <div class="client-pos-location">
                            Procurement Manager, University of Nairobi
                        </div>

                    </div>
                </div>
                <div class="item mt-5 mb-3">
                    <div class="client-testimony">
                        <div class="client-testimony-text">
                            SuperBroom Services has been our supplier since 2017
                            and has satisfactorily performed to say the least. We
                            would not hesitate to remommend them to any organization
                            intending to deal with them in the field of cleaning and
                            ground maintenance services
                        </div>
                        <div class="client-name mt-5">
                            MRS. J A Kanjejo
                        </div>
                        <div class="client-pos-location">
                            Procurement Manager, University of Nairobi
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr class="home-divide mx-auto mb-12">

        <div class="container mx-auto flex items-center justify-center py-4 mt-5">
            <div class="px-4">
                <img src="{{asset('images/Kengen-logo.png')}}" alt="kengen">
            </div>
            <div class="px-4">
                <img src="{{asset('images/KCB-Logo.png')}}" alt="kcb">
            </div>
            <div class="px-4">
                <img src="{{asset('images/index.png')}}" alt="UON">
            </div>
            <div class="px-4">
                <img src="{{asset('images/kenya-power.png')}}" alt="kenya-power">
            </div>
            <div class="px-4">
                <img src="{{asset('images/port.png')}}" alt="kenya airport authority">
            </div>
        </div>
    </section>
    <!--testimonials end -->


    <!--Blog-->
    <section class="mt-12 pb-16" style="background: #F6F8F9" >
        <h2 class="text-3xl text-black font-black text-center pt-10 pb-10">From our Blog</h2>
        <div class="blog-container">
            <div class="blog-shell">
                <div class="blog-image">
                    <img src="{{asset('images/maid-cleans.png')}}" alt="">
                </div>
                <div class="blog-title">
                    Cleaning the Bathroom tub all you need to know
                </div>
            </div>
            <div class="blog-shell">
                <div class="blog-image">
                    <img src="{{asset('images/maid-cleans.png')}}" alt="">
                </div>
                <div class="blog-title">
                    Cleaning the Bathroom tub all you need to know
                </div>
            </div>
            <div class="blog-shell">
                <div class="blog-image">
                    <img src="{{asset('images/maid-cleans.png')}}" alt="">
                </div>
                <div class="blog-title">
                    Cleaning the Bathroom tub all you need to know
                </div>
            </div>
        </div>
    </section>
    <!--Blog ends -->



    <!-- footer-->
    <div class="footer-container mr-10 ml-10">
        <div class="footer-shell">
            <div class="footer-message">
                Leave us a message and we will be in touch shortly
            </div>
        </div>
        <div class="footer-shell">
            <div class="send-message-box">
                <div class="box-text">Send message</div>
                <span class="box-arrow">&#8594;</span>
            </div>
            <div class="social-media-icons mt-5">
                <div class="ml-64">
                    <i class="fa fa-twitter px-6" style="color: #224F86" aria-hidden="true"></i>
                    <i class="fa fa-facebook px-6" style="color: #224F86" aria-hidden="true"></i>
                    <i class="fa fa-instagram px-6" style="color:#224F86 " aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <hr class="home-divide-two mx-auto mb-12">
    <div class="flex items-center justify-between px-16 py-3">
        <div class="flex items-center">
            <img src="{{asset('images/logo.png')}}" alt="superbroom">
            <span class="logo-colour font-bold pl-2">SuperBroom</span>
        </div>

        <div class="flex">
            <a href="" class="px-4 block font-semibold rounded  nav-colour">About</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded nav-colour  md:mt-0 sm:ml-2">Services</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded nav-colour  md:mt-0 sm:ml-2">Blog</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded nav-colour  md:mt-0 sm:ml-2">Contact</a>
        </div>
    </div>

    <div class="flex items-end justify-end nav-colour mr-20">
        2020@SUPERBROOMSERVICES LTD
    </div>
    <!--footer ends -->



</div>
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('owlCarousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('owlCarousel/docs/assets/vendors/highlight.js')}}"></script>
<script src="{{asset('owlCarousel/docs/assets/js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
    const home = new Vue({
        el:'#home',
        data:function () {
            return{
                isOpen:false,
            }
        },
    });
</script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            center:true,
            items : 1,
            loop  : true,
            margin:10,
            nav    : true,
            dots:false,
            smartSpeed :900,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        });
    })
</script>

</body>
</html>
