<template>
    <div class="flex flex-row flex-cols-2 justify-between p-4 gap-8">
        <div class="flex flex-col overflow-clip space-y-3">
            <DaisyAccordion title="Settings">
                <AccordionContent content="To Be Replaced" />
            </DaisyAccordion>
            <DaisyModal openText="Add Uptime Monitor" title="Add Uptime Monitor" content="Form Here" />
        </div>
        <div class="flex flex-col overflow-clip space-y-3">
            <SearchBar placeholder="Search IP" />
            <DaisyAccordion online="true" title="Server Nickname">
                <AccordionContent content="192.168.1.1" />
            </DaisyAccordion>
            <DaisyAccordion online="true" title="Server Nickname">
                <AccordionContent content="192.168.1.1" />
            </DaisyAccordion>
            <DaisyAccordion online="true" title="Server Nickname">
                <AccordionContent content="192.168.1.1" />
            </DaisyAccordion>
            <DaisyAccordion online="true" title="Server Nickname">
                <AccordionContent content="192.168.1.1" />
            </DaisyAccordion>
            <DaisyAccordion online="true" title="Server Nickname">
                <AccordionContent content="192.168.1.1" />
            </DaisyAccordion>
        </div>
    </div>
</template>

<script>
import DaisyAccordion from '../components/DaisyAccordion.vue';
import AccordionContent from '../components/AccordionContent.vue';
import DefaultButton from '../components/DefaultButton.vue';
import DaisyModal from '../components/DaisyModal.vue';
import SearchBar from '../components/SearchBar.vue';

export default {
    components: {
        DaisyAccordion,
        AccordionContent,
        DefaultButton,
        DaisyModal,
        SearchBar
    }
}
</script>

<style lang="scss" scoped></style>