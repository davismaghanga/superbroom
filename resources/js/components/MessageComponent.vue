<template>
    <form action="" method="post">
        <div v-if="errors.length">
           <span>Please correct the following errors:</span>
        <ul>
            <li v-for="error in errors">
                {{error}}
            </li>
        </ul>
        </div>
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
</template>

<script>
    export default {
        props:['errors'],

        data(){
            return{
                errors:this.errors,
            }
        }

    }
</script>
