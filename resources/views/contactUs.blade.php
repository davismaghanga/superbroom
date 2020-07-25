<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <!--Archivo font -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/contactUs.css')}}">
</head>
<body>

<div id="contacts">
    <!-- header-->
    <header class="px-16 py-4  md:flex md:justify-between md:items-center md:py-0">
        <div class="flex items-center justify-between px-16 py-2">
            {{-- left--}}
            <div v-on:click="OpenWelcome" class="flex items-center cursor-pointer">
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
            <a href="{{url('about')}}" class="px-4 block font-semibold rounded sm:ml-2 ">About</a>
            <a href="{{url('services')}}" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Services</a>
            <a href="" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Blog</a>
            <a href="{{url('contacts')}}" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2">Contact</a>
        </div>
    </header>
    <div class="section-header">
        <img src="{{asset('images/maid-cleans-contacts.png')}}" class="yellow-modern" alt="superbroom">
        <div class="yellow-modern-text">
            <p>
                Contact Us today & know more about what we can do for you
            </p>
        </div>
    </div>
    <!-- header ends-->

    <!-- send message-->
    <div class="upper pt-5">
        <div class="container mx-auto md:flex items-center justify-center ">
            <div class="px-40">
                <h2 class="services-title text-3xl border-b border-blue-500">Send Message</h2>
                <ul class="flex flex-col">
                    <li class="py-1 px-4 border-t-2">Phone No. 0722232402</li>
                    <li class="py-1 px-4">info@superbroom.co.ke</li>
                    <li class="py-1 px-4">P.O Box 54714-00200</li>
                    <li class="py-1 px-4">Uhuru Highway, Utalii House, 2nd flr Office N0. 232</li>
                </ul>
            </div>
            <div class="px-40 mt-10">
                <form action="" method="post" novalidate="true">
                    <div>
                        <input type="text" name="full_name" v-model="fullName" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Full Name*">
                    </div>

                    <div>
                        <input type="email" name="email_address" v-model="email_address" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Email Address">
                    </div>
                    <div>
                        <textarea name="message" v-model="message" cols="40" rows="10" class="border rounded-md py-3 px-3 mb-4 text-black placeholder-black w-full" placeholder="Message">

                        </textarea>
                    </div>
                    <div  v-on:click="sendMessage()" class="flex flex-no-wrap items-center justify-between text-white mt-12 rounded mb-24 cursor-pointer" style="background-color: #ED272B">
                        <div class="text-left pl-6 py-3">SEND</div>
                        <div class="pr-6 py-3">&#8594;</div>
                    </div>

                </form>

            </div>
        </div>
    </div>
    <!-- send message ends-->


    <!--contacts footer -->
    <div class="container mx-auto px-20">
        <div class="flex flex-no-wrap flex-row-reverse items-end mt-16">
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
        <hr class="contacts-divide mb-5">
    </div>

    <footer class="px-16 py-4  md:flex md:justify-between md:items-center md:py-0">
        <div class="flex items-center justify-between px-16 py-2">
            {{-- left--}}
            <div v-on:click="OpenWelcome" class="flex items-center cursor-pointer">
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
            <a href="{{url('about')}}" class="px-4 block font-semibold rounded sm:ml-2 logo-colour">About</a>
            <a href="{{url('services')}}" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Services</a>
            <a href="#" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Blog</a>
            <a href="{{url('contacts')}}" class="px-4 mt-1 block font-semibold rounded  md:mt-0 sm:ml-2 logo-colour">Contact</a>

        </div>
    </footer>
    <div class="flex items-end justify-end nav-colour text-xs mr-32">
        2020@SUPERBROOMSERVICES LTD
    </div>
    <!--contacts footer ends -->



</div>




<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
     const contacts = new Vue({
        el:'#contacts',
        data:function () {
            return{
                isOpen:false,
                fullName:null,
                email_address:null,
                message:null,
                formData:new FormData(),

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
            sendMessage:function () {
                const messageSwal =Swal.mixin({
                    onClose:function () {
                        window.location.reload();
                    }
                })

                if(this.fullName && this.email_address && this.message){
                    this.formData.append('fullname',this.fullName);
                    this.formData.append('email_address',this.email_address);
                    this.formData.append('message',this.message);

                    //send formdata to server
                    let content = this.formData;
                    let uploadUrl = '{{url('message/post')}}';
                    axios.post(uploadUrl,content)
                    .then(response=>{
                        // console.log(response);
                        messageSwal.fire(
                            'Sent!',
                            'Message Delivered!',
                            'success'
                        );
                        this.fullName = null;
                        this.email_address = null;
                        this.message = null;


                    })
                    .catch(error=>{
                        if(error.response){
                            alert(error.response.data.email_address + '\n' +
                            'e.g johndoe@gmail.com');
                        }
                        else{
                            messageSwal.fire(
                                'An error occurred',
                                'Try Again!'
                            )
                        }

                        this.fullName = null;
                        this.email_address = null;
                        this.message = null;


                    })
                }
                else{
                    if(!this.fullName){
                        alert("Full Name required");
                    }
                    if(!this.email_address){
                        alert("Email required");
                    }
                    if(!this.message){
                        alert("Message required");
                    }
                    }

                }

            },
         //end of methods object
     });
</script>
</body>
</html>
