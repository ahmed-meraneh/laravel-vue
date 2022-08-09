<template>
    <div
        class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            S'inscrire
        </h2>
        <form @submit.prevent="saveUser">
            <div class="intro-x mt-8">
                <FormField
                    :error="errors.name"
                    placeholder="Nom"
                    v-model="form.name"
                />

                <FormField
                    class="mt-4"
                    :error="errors.email"
                    placeholder="Email"
                    v-model="form.email"
                />

                <FormField
                    type="password"
                    class="mt-4"
                    :error="errors.password"
                    placeholder="Mot de passe"
                    v-model="form.password"
                />
            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button
                    class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                    :disabled="processing"
                >S'inscrire
                </button>
                <RouterLink
                    to="/login"
                    class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"
                >
                    Se connecter
                </RouterLink>
            </div>
        </form>
    </div>
</template>

<script setup>
import {RouterLink} from 'vue-router'
import {reactive, ref} from "vue";
import useUsers from "../composables/useUsers";
import swal from "sweetalert";
import FormField from './FormField.vue'

const processing = ref(false)

const form = reactive({
    name: '',
    email: '',
    password: '',
})

const {errors, storeUser} = useUsers();

const saveUser = async () => {
    processing.value = true

    const response = await storeUser({...form})

    if (response === 'Fait') {
        form.name = '';
        form.email = '';
        form.password = '';
        errors.value = "";
        await swal({
            title: "Good job!",
            text: "Utilisateur ajouté avec succès!",
            icon: "success",
        });
    }
    processing.value = false;
}
</script>
