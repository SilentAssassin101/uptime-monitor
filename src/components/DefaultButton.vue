<template>
    <div class="btn btn-primary rounded-lg">
        <a>{{ text }}</a>
    </div>
</template>

<script>
export default {
    name: 'DefaultButton',
    props: {
        text: {
            type: String,
            default: 'Button'
        }
    }
}
</script>

<style lang="scss" scoped></style>