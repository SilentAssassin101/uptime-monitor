<template>
    <div class="max-w-4xl mx-auto bg-slate-700 min-h-screen">
        <HomeBar />
        <div class="flex flex-col sm:flex-row sm:flex-cols-2 p-2 gap-4">
            <div id="overview" class="flex flex-col overflow-clip space-y-3 w-72 mx-auto p-2">
                <DaisyAccordion title="Settings">
                    <AccordionContent content="Coming Soon" />
                </DaisyAccordion>
                <DaisyAccordion title="Total Uptime">
                    <AccordionContent content="Coming Soon" />
                </DaisyAccordion>
                <DaisyAccordion title="Current Issues">
                    <AccordionContent content="Coming Soon" />
                </DaisyAccordion>
                <DaisyAccordion title="Subusers">
                    <AccordionContent content="Coming Soon" />
                </DaisyAccordion>
                <DaisyAccordion title="API">
                    <AccordionContent content="Coming Soon" />
                </DaisyAccordion>
                <DaisyAccordion title="Documentation">
                    <AccordionContent content="Coming Soon" />
                </DaisyAccordion>
                <DaisyModal modalId="my_modal_5" openText="Manage Notifications" title="Notification Settings"
                    content="Input target information below:">
                    <p>Coming Soon</p>
                </DaisyModal>
                <DaisyModal modalId="my_modal_4" openText="Add Subuser" title="Create a Subuser Account"
                    content="Input subuser information below: [COMING SOON]">
                </DaisyModal>
                <DaisyModal modalId="my_modal_2" openText="Uptime History" title="Reported Issues"
                    content="A detailed log of any issues reported.">
                    <DaisyAccordion title="Last 72 Hours">
                        <AccordionContent content="List of Issues Reported" />
                    </DaisyAccordion>
                    <DaisyAccordion title="Last 30 Days">
                        <AccordionContent content="List of Issues Reported" />
                    </DaisyAccordion>
                    <DaisyAccordion title="Last 90 Days">
                        <AccordionContent content="List of Issues Reported" />
                    </DaisyAccordion>
                </DaisyModal>
                <DaisyModal modalId="my_modal_3" openText="Add Uptime Monitor" title="Add Uptime Monitor"
                    content="Input target information below:">
                    <AddMonitorForm />
                </DaisyModal>
            </div>
            <div id="monitors" class="grow-1 flex flex-col overflow-clip space-y-3 w-full p-2">
                <SearchBar class="mx-auto sm:mx-0" placeholder="Search IP" />
                <div class="space-y-3 scroll-y-auto">
                    <DaisyAccordion :online="true" title="Server Nickname">
                        <AccordionContent content="192.168.1.1" />
                    </DaisyAccordion>
                    <DaisyAccordion :online="true" title="Server Nickname">
                        <AccordionContent content="192.168.1.1" />
                    </DaisyAccordion>
                    <DaisyAccordion :online="true" title="Server Nickname">
                        <AccordionContent content="192.168.1.1" />
                    </DaisyAccordion>
                    <DaisyAccordion :online="true" title="Server Nickname">
                        <AccordionContent content="192.168.1.1" />
                    </DaisyAccordion>
                    <DaisyAccordion :online="true" title="Server Nickname">
                        <AccordionContent content="192.168.1.1" />
                    </DaisyAccordion>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DaisyAccordion from '../components/DaisyAccordion.vue';
import AccordionContent from '../components/AccordionContent.vue';
import DefaultButton from '../components/DefaultButton.vue';
import DaisyModal from '../components/DaisyModal.vue';
import SearchBar from '../components/SearchBar.vue';
import AddMonitorForm from '../components/AddMonitorForm.vue';
import HomeBar from '../components/HomeBar.vue';

export default {
    components: {
        DaisyAccordion,
        AccordionContent,
        DefaultButton,
        DaisyModal,
        SearchBar,
        AddMonitorForm,
        HomeBar
    }
}
</script>

<style lang="scss" scoped></style>