<template>
    <AuthTemplate>
        <RegisterForm />
    </AuthTemplate>
</template>

<script>
import AuthTemplate from '../components/AuthTemplate.vue'
import RegisterForm from '../components/RegisterForm.vue';
export default {
    name: 'RegisterView',
    components: {
        AuthTemplate,
        RegisterForm
    }
}
</script>

<style lang="scss" scoped></style>