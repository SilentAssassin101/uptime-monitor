<template>
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn btn-primary rounded-lg" onclick="my_modal_1.showModal()">{{ openText }}</button>
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">{{ title }}</h3>
            <p class="py-4">{{ content }}</p>
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
            type: String,
            default: 'Content'
        },
        closeText: {
            type: String,
            default: 'Close'
        },
        openText: {
            type: String,
            default: 'Open Modal'
        }
    }
}
</script>

<style lang="scss" scoped></style>