<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services</title>
    <!--Archivo font -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/services.css')}}">
</head>
<body>
<div id="services">
    <!-- header-->
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
    <div class="section-header">
        <img src="{{asset('images/yellow-modern.png')}}" class="yellow-modern" alt="superbroom">
        <div class="yellow-modern-text">
            <p>We offer quality and standard services</p>
        </div>
    </div>
    <!-- header ends-->

    <!--services -->
    <div class="upper pt-5">
        <div class="container mx-auto md:flex items-center justify-center ">
            <div class="px-40">
                <h2 class="services-title text-3xl">Services</h2>
                <ul class="flex flex-col bg-white">
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Office, Institutional and Industrial</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Gardening</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Sanitary Bins</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Refuse Collection</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Fumigation & pest control</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Laundry</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Support services</li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500">Others</li>
                </ul>
            </div>
            <div class="px-40 mt-10">
                <h2 class="services-title text-xl">Office, Institutional and Industrial</h2>
                <div class="flex flex-col mb-5">
                    <div class="py-1">All kinds of floor: Ceramic, PVC, Marble etc</div>
                    <div class="py-1">Carpets</div>
                    <div class="py-1">Maintenance cleaning</div>
                    <div class="py-1">Floor polishing</div>
                    <div class="py-1">Dusting and cleaning windows</div>
                    <div class="py-1">Machinery,equipment and furniture dusting</div>
                    <div class="py-1">Disinfecting floors</div>
                    <hr class="services-divide mt-3 mb-5">
                    <h2 class="services-title text-xl">Get a free Quote</h2>
                </div>

                <form action="" method="post">
                    <div>
                        <input type="text" name="full_name" value="" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Full Name*">
                    </div>

                    <div>
                        <input type="text" name="phone_number" value="" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Phone Number*">
                    </div>
                    <div>
                        <input type="text" name="location" value="" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Location">
                    </div>
                    <div>
                        <input type="text" name="subject" value="" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Subject">
                    </div>
                    <div>
                        <textarea name="message" id="message" cols="40" rows="10" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Message">

                        </textarea>
                    </div>

                    <div>
                        <label for="advertisement" class="text-xl" style="color:#6C6C6C">Where did you hear about us</label>
                        <div class="md:flex items-center justify-between mt-4">
                            <div>
                                <input type="radio" id="mouth" name="advertisement" value="mouth">
                                <label for="mouth">Word of mouth</label><br>
                                <input type="radio" id="website" name="advertisement" value="website">
                                <label for="website">Website</label><br>
                                <input type="radio" id="social" name="advertisement" value="social">
                                <label for="social">Social Media</label>
                            </div>
                            <div>
                                <input type="radio" id="referral" name="advertisement" value="referral">
                                <label for="referral">Referral</label><br>
                                <input type="radio" id="events" name="advertisement" value="events">
                                <label for="events">Events</label><br>
                                <input type="radio" id="other" name="advertisement" value="other">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-no-wrap items-center justify-between text-white mt-12 rounded mb-24 cursor-pointer" style="background-color: #ED272B">
                        <div class="text-left pl-6 py-3">SEND</div>
                        <div class="pr-6 py-3">&#8594;</div>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!-- footer-->
{{--    <div class="footer-container mr-10 ml-10">--}}
{{--        <div class="footer-shell">--}}
{{--            <div class="footer-message">--}}
{{--                Leave us a message and we will be in touch shortly--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="footer-shell">--}}
{{--            <div class="send-message-box">--}}
{{--                <div class="box-text">Send message</div>--}}
{{--                <span class="box-arrow">&#8594;</span>--}}
{{--            </div>--}}
{{--            <div class="social-media-icons mt-5">--}}
{{--                <div class="ml-64">--}}
{{--                    <i class="fa fa-twitter px-6" style="color: #224F86" aria-hidden="true"></i>--}}
{{--                    <i class="fa fa-facebook px-6" style="color: #224F86" aria-hidden="true"></i>--}}
{{--                    <i class="fa fa-instagram px-6" style="color:#224F86 " aria-hidden="true"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container mx-auto md:flex items-center justify-center">
        <div class="mx-40 text-3xl py-3" style="color:#224F86">
            Leave us a message and we will be in touch shortly
        </div>
        <div class="mx-40 w-2/5">
            <div class="flex flex-no-wrap items-center justify-between text-white mt-12 rounded cursor-pointer" style="background-color: #224F86">
                <div class="text-left pl-6 py-3 font-thin">Send message</div>
                <div class="pr-6 py-3">&#8594;</div>
            </div>
            <div class="flex flex-no-wrap flex-row-reverse items-start mt-5">
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


    <hr class="home-divide-two mx-auto mb-12">
    <footer class="px-16 py-4  md:flex md:justify-between md:items-center md:py-0">
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
            <a href="" class="px-4 block font-semibold rounded sm:ml-2 logo-colour">About</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Services</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Blog</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Contact</a>

        </div>
    </footer>
    <div class="flex items-end justify-end nav-colour text-xs mr-32">
        2020@SUPERBROOMSERVICES LTD
    </div>
    <!--footer ends -->


</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script>
    const services = new Vue({
        el:'#services',
        data:function () {
            return{
                isOpen:false,
            }
        },
    });
</script>
</body>
</html>