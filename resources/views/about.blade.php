<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <!--Archivo font -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>
<body>
<div id="about">

    <!-- header-->
    <header :class="isOpen ? 'px-0 py-0':'px-10 py-2'" class="md:flex md:justify-between md:items-center md:py-0">
        <div class="flex items-center justify-between py-2">
            {{-- left--}}
            <div v-on:click="OpenWelcome" class="flex items-center cursor-pointer mr-16">
                <img src="{{asset('images/logo.png')}}" class="h-16 w-16" alt="superbroom">
                <span class="logo-colour font-bold">SuperBroom</span>
            </div>

            {{--right --}}
            <div class="md:hidden ml-20">
                <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-black focus:outline-none ">
                    <svg class="fill-current h-6 w-6 logo-colour" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <!--the x button -->
                        <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>

                        <!-- the hamburger button-->
                        <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div :class="isOpen ? 'block bg-blue-800' : 'hidden'" class="px-12 md:flex">
            <a href="{{url('about')}}" :class="isOpen ? 'text-white pt-3': 'text-black'" class="px-4  block font-semibold rounded sm:ml-2 ">About</a>
            <a href="{{url('services')}}" :class="isOpen ? 'text-white pt-3': 'text-black'"  class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Services</a>
            <a href=""   :class="isOpen ? 'text-white pt-3': 'text-black'" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Blog</a>
            <a href="{{url('contacts')}}" :class="isOpen ? 'text-white pt-3 pb-5': 'text-black'" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Contact</a>
        </div>
    </header>
    <div class="section-header flex">
        <img src="{{asset('images/yellow-modern.png')}}" class="yellow-modern flex-grow" alt="superbroom">
        <div class="yellow-modern-text text-base font-bold md:text-5xl">
            <p>We offer Professional cleaning services</p>
        </div>
    </div>
    <!-- header ends-->

    <section class="upper pb-16 pt-2">
        <div class="container mx-auto text-center">
            <h2 class="text-xl md:text-3xl mt-8 about-title">
                About SuperBroom Services LTD
            </h2>
            <p class="text-sm md:text-xl mt-5">
                SuperBroom Services has been in operation for 20 years now. The company was <br>
                registered as a sole proprietorship in 1999. After four years of steady growth, it was felt <br>
                that it should be registered under private companies. The company has emerged as a <br>
                real competitor in the cleaning and environment management business in Kenya.
            </p>
        </div>


        <div class="container mx-auto md:flex items-center justify-center mt-16 px-8">
            <div class="md:flex-shrink-0 px-8 mr-8">
                <img src="{{asset('images/woman-cleaning-sofa.png')}}" alt="woman-cleaning-sofa">
            </div>

            <div class="px-8 ml-2">
                <h2 class="text-left text-xl md:text-3xl technical-staff">
                    Technical Staff
                </h2>

                <p class="text-left text-sm md:text-xl mt-5">
                    Some of our staff in the recent past attended training courses in Utalii College. We have
                    also deployed trained house keepers in our organization which we believe will go a long
                    way to improve the standards of cleanliness in the field. We have well trained managerial staff who
                    have experience and skill required to lead the organization to greater heights.
                </p>
            </div>
        </div>

        <div class="container mx-auto md:flex items-center justify-center mt-16 px-8">

            <div class="px-8 ml-2">
                <h2 class="text-left text-xl md:text-3xl technical-staff">
                    Staff Training
                </h2>

                <p class="text-left text-sm md:text-xl mt-5">
                    Some of our staff in the recent past attended training courses in Utalii College. We have
                    also deployed trained house keepers in our organization which we believe will go a long
                    way to improve the standards of cleanliness in the field. We have well trained managerial staff who
                    have experience and skill required to lead the organization to greater heights.
                </p>

            </div>

            <div class="md:flex-shrink-0 px-8 mr-8 mb-16">
                <img src="{{asset('images/woman-cleaning-sofa.png')}}" alt="woman-cleaning-sofa">
            </div>
        </div>

        <div class="container mx-auto md:flex items-center justify-center mt-16 px-8 mb-20">
            <div class="md:flex-shrink-0 px-8 mr-8">
                <img src="{{asset('images/woman-cleaning-sofa.png')}}" alt="woman-cleaning-sofa">
            </div>

            <div class="px-8 ml-2">
                <h2 class="text-left text-xl md:text-3xl technical-staff">
                    Detergents
                </h2>

                <p class="text-left text-sm md:text-xl mt-5">
                    Some of our staff in the recent past attended <br>
                    training courses in Utalii College. We have <br>
                    also deployed trained house keepers in our <br>
                    organization which we believe will go a long <br>
                    way to improve the standards of cleanliness <br>
                    in the field. <br>
                    We have well trained managerial staff who <br>
                    have experience and skill required to lead <br>
                    the organization to greater heights.
                </p>
            </div>
        </div>

        <hr class="home-divide mx-auto mb-12">
        <div class="container mx-auto md:flex md:items-center md:justify-center py-4 mt-5">
            <div class="flex items-center justify-center mt-5">
                <div class="px-8">
                    <img src="{{asset('images/Kengen-logo.png')}}" alt="kengen">
                </div>
                <div class="px-8">
                    <img src="{{asset('images/KCB-Logo.png')}}" alt="kcb">
                </div>
            </div>

            <div class="flex items-center justify-center mt-5">
                <div class="px-8">
                    <img src="{{asset('images/index.png')}}" alt="UON">
                </div>
                <div class="px-8">
                    <img src="{{asset('images/kenya-power.png')}}" alt="kenya-power">
                </div>
            </div>

            <div class="px-4 mt-5">
                <img src="{{asset('images/port.png')}}" alt="kenya airport authority">
            </div>
        </div>
    </section>


    <section class="lower">
        <!-- footer-->
        <div class="container md:mx-auto  md:flex md:items-center md:justify-center">
            <div class="mx-16 md:mx-24 text-2xl md:text-3xl py-3" style="color:#224F86">
                Leave us a message and we will be in touch shortly
            </div>
            <div class="mx-16 md:mx-24 w-3/5">
                <div v-on:click="openContacts" class="flex flex-no-wrap items-center justify-between text-white mt-12 rounded cursor-pointer" style="background-color: #224F86">
                    <div class="text-left pl-6 py-4 font-thin">Send message</div>
                    <div class="pr-6 py-4">&#8594;</div>
                </div>
                <div class="flex flex-no-wrap flex-row-reverse items-start sm:float-right mt-5">
                    <div>
                        <i class="fa fa-instagram px-4" style="color:#224F86 " aria-hidden="true"></i>
                    </div>
                    <div>
                        <i class="fa fa-facebook px-4" style="color:#224F86 " aria-hidden="true"></i>
                    </div>
                    <div>
                        <i class="fa fa-twitter px-4" style="color:#224F86 " aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr class="home-divide-two mx-auto mb-12 mt-4">
        <footer class="px-16 py-4  md:flex md:justify-between md:items-center md:py-0">
            <div class="flex items-center justify-between py-2">
                {{-- left--}}
                <div v-on:click="OpenWelcome" class="flex items-center cursor-pointer mr-16">
                    <img src="{{asset('images/logo.png')}}" alt="superbroom">
                    <span class="logo-colour font-bold pl-4">SuperBroom</span>
                </div>

                {{--right --}}
                <div class="md:hidden ml-16">
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
                <a href="{{url('about')}}" class="px-4 block font-semibold rounded sm:ml-2 logo-colour">About</a>
                <a href="{{url('services')}}" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Services</a>
                <a href="#" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Blog</a>
                <a href="{{url('contacts')}}" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Contact</a>

            </div>
        </footer>

        <div class="flex items-end justify-end nav-colour text-xs mr-12 md:mr-32">
            2020@SUPERBROOMSERVICES LTD
        </div>
        <!--footer ends -->
    </section>


</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
    const about = new Vue({
        el:'#about',
        data:function () {
            return{
                isOpen:false,
            }
        },
        methods:{
            OpenWelcome:function () {
                window.location.href = "{{url('/')}}";
            },
            OpenAboutUs:function () {
                window.location.href = "{{url('about')}}";
            },
            OpenServices:function () {
                window.location.href = "{{url('services')}}";
            },
            openContacts:function () {
                window.location.href = "{{url('contacts')}}";
            }
        }
    });
</script>
</body>
</html>
