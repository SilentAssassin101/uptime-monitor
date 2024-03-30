<template>
    <input type="text" :placeholder="placeholder" class="input input-bordered w-full max-w-xs" />
</template>

<script>
export default {
    name: 'SearchBar',
    props: {
        placeholder: {
            type: String,
            default: 'Search...'
        }
    }
}
</script>

<style lang="scss" scoped></style>