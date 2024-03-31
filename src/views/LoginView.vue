<template>
    <AuthTemplate>
        <LoginForm />
    </AuthTemplate>
</template>

<script>
import LoginForm from '../components/LoginForm.vue'
import AuthTemplate from '../components/AuthTemplate.vue'
export default {
    name: 'LoginView',
    components: {
        LoginForm,
        AuthTemplate
    }
}
</script>

<style lang="scss" scoped></style>