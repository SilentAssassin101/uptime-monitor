<template>
    <form class="flex flex-col space-y-4">
        <label for="monitor-name">Server Name</label>
        <input class="p-1 px-2 rounded-lg" type="text" id="monitor-name" placeholder="My Server" required />
        <label for="monitor-ip">Server IP</label>
        <input class="p-1 px-2 rounded-lg" type="text" id="monitor-ip" placeholder="192.168.1.1" required />
        <label for="monitor-port">Server Port</label>
        <input class="p-1 px-2 rounded-lg" type="number" id="monitor-port" placeholder="8080" required />
        <label for="monitor-webhook">Webhook URL</label>
        <input class="p-1 px-2 rounded-lg" type="url" id="monitor-webhook"
            placeholder="https://discord.com/api/webhooks/1234567890/abcdefg" required />
        <label for="monitor-authcode">Auth Code</label>
        <input class="p-1 px-2 rounded-lg" type="password" id="monitor-authcode" placeholder="Authorization Code"
            required />
        <DefaultButton text="Add Monitor" />
    </form>
</template>

<script>
import DefaultButton from './DefaultButton.vue';

export default {
    components: {
        DefaultButton
    },
    methods: {
        async submitForm() {
            const formData = {
                name: document.getElementById('monitor-name').value,
                address: document.getElementById('monitor-ip').value,
                port: document.getElementById('monitor-port').value,
                webhook: document.getElementById('monitor-webhook').value,
                authcode: document.getElementById('monitor-authcode').value
            };

            try {
                const response = await fetch('teach.civilhost.net/createmonitor.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                console.log(data);
            } catch (error) {
                console.error('There was a problem with the fetch operation: ', error);
            }
        }
    }
}
</script>

<style lang="scss" scoped></style>