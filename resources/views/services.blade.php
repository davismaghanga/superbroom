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
        <img src="{{asset('images/cropped-img.png')}}" class="yellow-modern flex-grow" alt="superbroom">
        <div class="yellow-modern-text text-base font-bold md:text-5xl">
            <p>We offer quality and standard services</p>
        </div>
    </div>
    <!-- header ends-->

    <!--services -->
    <div class="upper pt-5 ">
        <div class="container sm:mx-auto sm:flex sm:items-center sm:justify-center mt-5">
            <div class="px-8 md:px-32">
                <h2 class="services-title text-3xl">Services</h2>
                <ul class="flex flex-col md:bg-white">
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="OfficeCleaning">
                        Office, Institutional and Industrial
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="HomeCleaning">
                        Home Cleaning
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="SanitaryCleaning">
                        Sanitary Bins
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="RefuseCleaning">
                        Refuse Collection
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="FumigationCleaning">
                        Fumigation & pest control
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="LaundryCleaning">
                        Laundry
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="SupportCleaning">
                        Support services
                    </li>
                    <li class="py-4 px-4 hover:bg-blue-300 cursor-pointer border-t-2 hover:border-blue-500" @click="OthersCleaning">
                        Others
                    </li>
                </ul>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="OfficeOpen">
                <h2 class="services-title text-xl">Office, Institutional and Industrial</h2>
                <div class="flex flex-col">
                    <div class="py-1">All kinds of floor: Ceramic, PVC, Marble etc</div>
                    <div class="py-1">Carpets</div>
                    <div class="py-1">Maintenance cleaning</div>
                    <div class="py-1">Floor polishing</div>
                    <div class="py-1">Dusting and cleaning windows</div>
                    <div class="py-1">Machinery,equipment and furniture dusting</div>
                    <div class="py-1">Disinfecting floors</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="HomeOpen">
                <h2 class="services-title text-xl">Home Cleaning</h2>
                <div class="flex flex-col">
                    <div class="py-1">Standard Cleaning in all rooms</div>
                    <div class="py-1">Standard Kitchen Cleaning</div>
                    <div class="py-1">Standard Bathroom Cleaning</div>
                    <div class="py-1">Specialty Cleaning:not available in all locations</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="SanitaryOpen">
                <h2 class="services-title text-xl">Sanitary Bins</h2>
                <div class="flex flex-col">
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="RefuseOpen">
                <h2 class="services-title text-xl">Refuse Collection</h2>
                <div class="flex flex-col">
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="FumigationOpen">
                <h2 class="services-title text-xl">Fumigation & Pest control </h2>
                <div class="flex flex-col">
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="LaundryOpen">
                <h2 class="services-title text-xl">Laundry</h2>
                <div class="flex flex-col">
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="SupportOpen">
                <h2 class="services-title text-xl">Support services</h2>
                <div class="flex flex-col">
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
            <div class="px-8 md:px-32 mt-10" v-show="OthersOpen">
                <h2 class="services-title text-xl">Others</h2>
                <div class="flex flex-col">
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <div class="py-1">Lorem Ipsum is simply dummy text.</div>
                    <hr class="services-divide mt-8">
                </div>
            </div>
        </div>
        <div class="container md:mx-auto md:flex md:items-center md:justify-end px-8 md:pr-32 md:pl-16">
            <div>
                <h2 class="services-title text-xl mb-6">Get a free Quote</h2>
                <form action="" method="post" class="w-full">
                    <div>
                        <input type="text" name="full_name" v-model="fullName"  class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Full Name*">
                    </div>

                    <div>
                        <input type="text" name="phone_number" v-model="phoneNumber"  class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Phone Number*">
                    </div>
                    <div>
                        <input type="text" name="location" v-model="location"  class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Location">
                    </div>
                    <div>
                        <input type="text" name="subject" v-model="subject"  class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Subject">
                    </div>
                    <div>
                        <textarea name="message" id="message" v-model="message" cols="40" rows="10" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Message">

                        </textarea>
                    </div>

                    <div>
                        <label for="advertisement" class="text-xl" style="color:#6C6C6C">Where did you hear about us</label>
                        <div class="md:flex items-center justify-between mt-4">
                            <div>
                                <input type="radio" class="mt-5" id="mouth" name="advertisement" value="mouth" v-model="picked"  >
                                <label for="mouth">Word of mouth</label><br>
                                <input type="radio" class="mt-5" id="website" name="advertisement" value="website" v-model="picked"   >
                                <label for="website">Website</label><br>
                                <input type="radio" class="mt-5" id="social" name="advertisement" value="social" v-model="picked">
                                <label for="social">Social Media</label>
                            </div>
                            <div>
                                <input type="radio" class="mt-5" id="referral" name="advertisement" value="referral" v-model="picked" >
                                <label for="referral">Referral</label><br>
                                <input type="radio" class="mt-5" id="events" name="advertisement" value="events" v-model="picked">
                                <label for="events">Events</label><br>
                                <input type="radio" class="mt-5" id="other" name="advertisement" value="other" v-model="picked">
                                <label for="other">Other</label>
                            </div>
                        </div>
                    </div>

                    <div v-on:click="requestQuotation()" class="flex flex-no-wrap items-center justify-between text-white mt-12 rounded mb-24 cursor-pointer" style="background-color: #ED272B">
                        <div class="text-left pl-6 py-3">SEND</div>
                        <div class="pr-6 py-3">&#8594;</div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- services ends-->

    <!--footer -->
    <div class="container md:mx-auto  md:flex md:items-center md:justify-center">
        <div class="mx-24 text-2xl md:text-3xl py-3" style="color:#224F86">
            Leave us a message and we will be in touch shortly
        </div>
        <div class="mx-24 w-3/5">
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
    <hr class="home-divide-two mx-auto mb-12">
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


</div>


<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    const services = new Vue({
        el:'#services',
        data:function () {
            return{
                isOpen:false,
                fullName:null,
                phoneNumber:null,
                location:null,
                subject:null,
                message:null,
                picked:null,
                formData:new FormData(),
                OfficeOpen:true,
                HomeOpen:false,
                SanitaryOpen:false,
                RefuseOpen:false,
                FumigationOpen:false,
                LaundryOpen:false,
                SupportOpen:false,
                OthersOpen:false
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
            },
            requestQuotation:function () {
                const QuotationSwal = Swal.mixin({
                    onClose:function () {
                        window.location.reload()
                    }
                });

                if(this.fullName && this.phoneNumber && this.location && this.subject && this.message && this.picked){
                    this.formData.append('fullName',this.fullName);
                    this.formData.append('phoneNumber',this.phoneNumber);
                    this.formData.append('location',this.location);
                    this.formData.append('subject',this.subject);
                    this.formData.append('message',this.message);
                    this.formData.append('advertisement',this.picked);

                    //send formdata to server
                    let content = this.formData;
                    let uploadUrl = '{{url('quotation/post')}}';
                    axios.post(uploadUrl,content)
                        .then(response=>{
                            // console.log(response)
                            QuotationSwal.fire(
                                'Sent!',
                                'Quotation Submitted!',
                                'success'
                            );
                            this.fullName = null;
                            this.phoneNumber = null;
                            this.location = null;
                            this.subject = null;
                            this.message = null;
                            this.picked = null;

                        })
                        .catch(error=>{
                            QuotationSwal.fire(
                                'An error occurred',
                                'Try Again!'
                            )
                            console.log(error);
                            this.fullName = null;
                            this.phoneNumber = null;
                            this.location = null;
                            this.subject = null;
                            this.message = null;
                            this.picked = null;

                        })
                }
                else{
                    if(!this.fullName){
                        alert("Full Name required");
                    }
                    if(!this.phoneNumber){
                        alert("Phone Number required");
                    }
                    if(!this.location){
                        alert("Location required");
                    }
                    if(!this.subject){
                        alert("Subject required");
                    }
                    if(!this.message){
                        alert("Message required");
                    }
                    if(!this.picked){
                        alert("Mode of advertisement required");
                    }

                }


            },
            OfficeCleaning:function (){
                this.OfficeOpen=true;
                this.HomeOpen=false;
                this.SanitaryOpen=false;
                this.RefuseOpen=false;
                this.FumigationOpen=false;
                this.LaundryOpen=false;
                this.SupportOpen=false;
                this.OthersOpen=false;
            },
            HomeCleaning:function () {
                this.HomeOpen=true;
                this.OfficeOpen=false;
                this.SanitaryOpen=false;
                this.RefuseOpen=false;
                this.FumigationOpen=false;
                this.LaundryOpen=false;
                this.SupportOpen=false;
                this.OthersOpen=false;
            },
            SanitaryCleaning:function () {
                this.SanitaryOpen=true;
                this.OfficeOpen=false;
                this.HomeOpen=false;
                this.RefuseOpen=false;
                this.FumigationOpen=false;
                this.LaundryOpen=false;
                this.SupportOpen=false;
                this.OthersOpen=false;

            },
            RefuseCleaning:function () {
                this.RefuseOpen=true;
                this.OfficeOpen=false;
                this.HomeOpen=false;
                this.SanitaryOpen=false;
                this.FumigationOpen=false;
                this.LaundryOpen=false;
                this.SupportOpen=false;
                this.OthersOpen=false;

            },
            FumigationCleaning:function () {
                this.FumigationOpen=true;
                this.OfficeOpen=false;
                this.HomeOpen=false;
                this.SanitaryOpen=false;
                this.RefuseOpen=false;
                this.LaundryOpen=false;
                this.SupportOpen=false;
                this.OthersOpen=false;
            },
            LaundryCleaning:function () {
                this.LaundryOpen=true;
                this.FumigationOpen=false;
                this.OfficeOpen=false;
                this.HomeOpen=false;
                this.SanitaryOpen=false;
                this.RefuseOpen=false;
                this.SupportOpen=false;
                this.OthersOpen=false;

            },
            SupportCleaning:function () {
                this.SupportOpen=true;
                this.LaundryOpen=false;
                this.FumigationOpen=false;
                this.OfficeOpen=false;
                this.HomeOpen=false;
                this.SanitaryOpen=false;
                this.RefuseOpen=false;
                this.OthersOpen=false;
            },
            OthersCleaning:function () {
                this.OthersOpen=true;
                this.SupportOpen=false;
                this.LaundryOpen=false;
                this.FumigationOpen=false;
                this.OfficeOpen=false;
                this.HomeOpen=false;
                this.SanitaryOpen=false;
                this.RefuseOpen=false;
            }
        }
        //end of methods object
    });
</script>
</body>
</html>
