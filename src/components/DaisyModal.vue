<template>
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn btn-primary rounded-lg" @click="showModal">{{ openText }}</button>
    <dialog :id="modalId" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">{{ title }}</h3>
            <p v-if="content" class="py-4">{{ content }}</p>
            <slot></slot>
            <div class="modal-action">
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn">{{ closeText }}</button>
                </form>
            </div>
        </div>
    </dialog>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'Title'
        },
        content: {
            type: String
        },
        closeText: {
            type: String,
            default: 'Close'
        },
        openText: {
            type: String,
            default: 'Open Modal'
        },
        modalId: {
            type: String,
            default: 'my_modal_1'
        }
    },
    methods: {
        showModal() {
            const modal = document.getElementById(this.modalId);
            modal.showModal();
        }
    }
}
</script>

<style lang="scss" scoped></style>