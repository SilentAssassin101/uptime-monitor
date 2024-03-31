<template>
    <div class="collapse collapse-arrow bg-base-200">
        <input type="radio" name="my-accordion-2" checked="checked" />
        <div class="collapse-title text-xl font-medium" :class="{ 'text-success': online, 'text-error': offline }">
            {{ title }}
        </div>
        <div class="collapse-content">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            default: 'Accordion'
        },
        online: {
            type: Boolean,
            default: false
        },
        offline: {
            type: Boolean,
            default: false
        }
    }
}
</script>

<style lang="scss" scoped></style>