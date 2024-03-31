<template>
    <form class="flex flex-col space-y-4">
        <label for="monitor-name">Server Name</label>
        <input class="p-1 px-2 rounded-lg" type="text" id="monitor-name" placeholder="My Server" required />
        <label for="monitor-ip">Server IP</label>
        <input class="p-1 px-2 rounded-lg" type="text" id="monitor-ip" placeholder="192.168.1.1" required />
        <label for="monitor-port">Server Port</label>
        <input class="p-1 px-2 rounded-lg" type="number" id="monitor-port" placeholder="80" />
        <DefaultButton text="Add Monitor" />
    </form>
</template>

<script>
import DefaultButton from './DefaultButton.vue';

export default {
    components: {
        DefaultButton
    }
}
</script>

<style lang="scss" scoped></style>