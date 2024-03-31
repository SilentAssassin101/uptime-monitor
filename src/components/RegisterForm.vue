<template>
    <div>
        <h2 class="text-4xl font-semibold">Welcome!</h2>
        <h3 class="text-xl font-semibold">Make a Free Account Here</h3>
        <form class="flex flex-col gap-y-4" @submit.prevent="registerUser">
            <input v-model="email" type="email" placeholder="Email" class="input input-bordered" />
            <input v-model="username" type="text" placeholder="Username" class="input input-bordered" />
            <input v-model="password" type="password" placeholder="Password" class="input input-bordered" />
            <button type="submit" class="btn btn-primary rounded-xl">Register</button>
        </form>
        <RouterLink to="/login" class="text-primary underline">Already Have an Account?</RouterLink>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped></style>