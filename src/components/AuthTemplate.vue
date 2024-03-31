<template>
    <div class="grid md:grid-flow-col md:grid-cols-2 h-screen justify-center">
        <div class="flex flex-col items-center justify-center gap-y-4 text-center">
            <h2 class="text-4xl font-semibold">Big Brother</h2>
            <h3 class="text-xl font-semibold">Open Source Uptime Monitor</h3>
            <RouterLink to="/" class="btn btn-primary rounded-xl">Home Link (Temp)</RouterLink>
        </div>
        <div
            class="flex flex-col items-center justify-center gap-y-4 text-center bg-primary/10 rounded-t-xl md:rounded-none">
            <slot></slot>
        </div>
    </div>
</template>

<script>
import { RouterLink } from 'vue-router';

export default {
    name: 'AuthTemplate',
}
</script>

<style lang="scss" scoped></style>