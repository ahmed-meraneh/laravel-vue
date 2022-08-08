import {ref} from "vue";

export default function useUsers() {
    const errors = ref('')

    const storeUser = async (data) => {
        let err = {};
        try {
            await axios.post('api/users', data)
            return 'Fait';
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                    err[key] = e.response.data.errors[key][0];
                }
                errors.value = err;
            }
        }
    }

    return {
        errors,
        storeUser
    }
}
