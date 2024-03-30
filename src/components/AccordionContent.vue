<template>
    <p>{{ content }}</p>
</template>

<script>
export default {
    props: {
        content: {
            type: String,
            default: 'Content'
        }
    }
}
</script>

<style lang="scss" scoped></style>