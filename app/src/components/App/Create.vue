<template>
    <div class="create-assessment">
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <div class="rectangle" />
                <div class="frame-wrapper">
                    <div class="frame-2">
                        <div class="frame-3">
                            <Input class="input-instance" :property1="clicked" text="Full Name" text1="David Pakurumo" />
                            <Input class="input-instance" divClassName="design-component-instance-node" :property1="clicked"
                                text="Description" text1="Description" />
                        </div>
                        <div class="frame-3">
                            <Input class="input-instance" divClassName="design-component-instance-node" :property1="clicked"
                                text="Quanity" text1="Quantity" />
                            <Input class="input-2" :property1="clicked" text="Address" text1="Lagos, Nigeria" />
                        </div>
                    </div>
                </div>
                <div class="title">Create Assessment</div>
                <button class="button">
                    <div class="text-wrapper-2">Submit</div>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import { Input } from "./Input";

export default {
    name: "CreateAssessment",
    components: {
        Input,
    },
    data() {
        return {
            clicked: "clicked",
        };
    },
};
</script>

<style>
.create-assessment {
    background-color: #ffffff;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
}

.create-assessment .overlap-group-wrapper {
    background-color: var(--white);
    height: 483px;
    width: 1015px;
}

.create-assessment .overlap-group {
    height: 483px;
    position: relative;
    width: 957px;
}

.create-assessment .rectangle {
    background-color: #ffffff;
    border-radius: 15px;
    height: 483px;
    left: 0;
    position: absolute;
    top: 0;
    width: 784px;
}

.create-assessment .frame-wrapper {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    gap: 22px;
    left: 40px;
    position: absolute;
    top: 108px;
    width: 917px;
}

.create-assessment .frame-2 {
    align-items: flex-end;
    display: inline-flex;
    flex: 0 0 auto;
    flex-direction: column;
    gap: 22px;
    justify-content: flex-end;
    position: relative;
}

.create-assessment .frame-3 {
    align-items: flex-start;
    display: inline-flex;
    flex: 0 0 auto;
    gap: 77px;
    position: relative;
}

.create-assessment .input-instance {
    flex: 0 0 auto !important;
}

.create-assessment .design-component-instance-node {
    color: var(--grayscale-label) !important;
}

.create-assessment .input-2 {
    flex: 0 0 auto !important;
    opacity: 0 !important;
}

.create-assessment .title {
    color: var(--grayscale-title-active);
    font-family: var(--desktop-text-large-font-family);
    font-size: var(--desktop-text-large-font-size);
    font-style: var(--desktop-text-large-font-style);
    font-weight: var(--desktop-text-large-font-weight);
    height: 34px;
    left: 36px;
    letter-spacing: var(--desktop-text-large-letter-spacing);
    line-height: var(--desktop-text-large-line-height);
    position: absolute;
    top: 20px;
    white-space: nowrap;
    width: 314px;
}

.create-assessment .button {
    all: unset;
    align-items: center;
    background: linear-gradient(180deg, rgb(0, 131, 0) 0%, rgb(0, 87, 0) 100%);
    border-radius: 8px;
    box-sizing: border-box;
    display: flex;
    gap: 8px;
    height: 40px;
    justify-content: center;
    left: 41px;
    padding: 8px 105px;
    position: absolute;
    top: 352px;
    width: 136px;
}

.create-assessment .text-wrapper-2 {
    color: var(--grayscalewhite);
    font-family: "Raleway-SemiBold", Helvetica;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 0;
    line-height: 24px;
    margin-left: -61px;
    margin-right: -61px;
    margin-top: -1px;
    position: relative;
    white-space: nowrap;
    width: fit-content;
}
</style>