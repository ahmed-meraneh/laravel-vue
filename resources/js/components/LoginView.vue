<template>
    <div
        class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            Se connecter
        </h2>
        <div class="intro-x mt-8">
            <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
                   placeholder="Email">
            <input type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4"
                   placeholder="Password">
        </div>
        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
            <div class="flex items-center mr-auto">
                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
            </div>
            <a href="">Forgot Password?</a>
        </div>
        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Se connecter</button>
            <RouterLink
                to="/"
                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"
            >
                S'incrire
            </RouterLink>
        </div>
    </div>
</template>

<script setup>
import {RouterLink} from 'vue-router'
import {onMounted} from "vue";

onMounted(() => {
    console.log("Login")
})

</script>
