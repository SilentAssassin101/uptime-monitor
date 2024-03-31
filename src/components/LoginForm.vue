<template>
    <h2 class="text-4xl font-semibold">Welcome Back</h2>
    <h3 class="text-xl font-semibold">Login Here</h3>
    <form class="flex flex-col gap-y-4" @submit.prevent="loginUser">
        <input v-model="username" type="text" placeholder="Username" class="input input-bordered" />
        <input v-model="password" type="password" placeholder="Password" class="input input-bordered" />
        <button type="submit" class="btn btn-primary rounded-xl">Login</button>
    </form>
    <RouterLink to="/register" class="text-primary underline">Haven't Signed Up Yet?</RouterLink>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped></style>