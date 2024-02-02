<template>
    <div class="create-account">
        <div class="overlap-group-wrapper">
            <div class="overlap-group">
                <div class="overlay">
                    <div class="frame-wrapper">
                        <div class="div">
                            <div class="frame-2">
                                <div class="logo">
                                    <img class="pakam-icon" alt="Pakam icon" src="pakam-icon-1.png" />
                                    <div class="text-wrapper-2">Pakam</div>
                                </div>
                                <div class="text-wrapper-3">Create Account</div>
                            </div>
                            <div class="frame-3">
                                <div class="div-wrapper">
                                    <div class="frame-4">
                                        <div class="input">
                                            <input class="frame-5" placeholder="First name" type="text" />
                                            <div class="input-2">
                                                <input class="enter-your-first" placeholder="Enter your First 0name"
                                                    type="text" required />
                                            </div>
                                        </div>
                                        <div class="input">
                                            <input class="frame-5" placeholder="Last name" type="text" />
                                            <div class="input-3">
                                                <input class="div-2" placeholder="Enter your Last name" type="text"
                                                    required />
                                                <Property35 class="input-outline-status" />
                                            </div>
                                        </div>
                                        <div class="input">
                                            <input class="frame-5" placeholder="Username" type="text" />
                                            <div class="input-3">
                                                <input class="div-2" placeholder="Enter your username" type="text"
                                                    required />
                                                <Property35 class="input-outline-status" />
                                            </div>
                                        </div>
                                        <div class="input">
                                            <div class="frame-6">
                                                <div class="text-wrapper-4">Password</div>
                                            </div>
                                            <div class="input-3">
                                                <div class="text-wrapper-5">Enter your Password</div>
                                                <Property35 class="input-outline-status" />
                                            </div>
                                            <p class="p">Must be 8 characters long, Uppercase inclusive</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="frame-2">
                                    <div class="normal">
                                        <div class="label"> Log In</div>
                                    </div>
                                    <div class="frame-7">
                                        <div class="frame-8">
                                            <div class="text-wrapper-6">Forgot Password?</div>
                                        </div>
                                        <Frame class="frame-1000002141" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-7">Powered by Pakam Technology</div>
            </div>
        </div>
    </div>
</template>

<script>
import { Frame } from "./Frame";
import { Property35 } from "./Property35";

export default {
    name: "CreateAccount",
    components: {
        Frame,
        Property35,
    },
};
</script>

<style>
.create-account {
    background-color: #f7f7f4;
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
}

.create-account .overlap-group-wrapper {
    background-color: var(--bg-color);
    height: 1024px;
    width: 1440px;
}

.create-account .overlap-group {
    height: 1024px;
    position: relative;
}

.create-account .overlay {
    height: 1024px;
    left: 0;
    position: absolute;
    top: 0;
    width: 1440px;
}

.create-account .frame-wrapper {
    align-items: center;
    background-color: #ffffff;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    gap: 36px;
    height: 697px;
    justify-content: center;
    left: 250px;
    padding: 52px;
    position: relative;
    top: 137px;
    width: 940px;
}

.create-account .div {
    align-items: center;
    display: inline-flex;
    flex-direction: column;
    gap: 35px;
    height: 528px;
    justify-content: center;
    margin-left: -24.5px;
    margin-right: -24.5px;
    position: relative;
}

.create-account .frame-2 {
    align-items: center;
    display: inline-flex;
    flex: 0 0 auto;
    flex-direction: column;
    gap: 16px;
    justify-content: center;
    position: relative;
}

.create-account .logo {
    align-items: center;
    display: inline-flex;
    gap: 10px;
    height: 55px;
    justify-content: center;
    position: relative;
}

.create-account .pakam-icon {
    height: 42.69px;
    object-fit: cover;
    position: relative;
    width: 37px;
}

.create-account .text-wrapper-2 {
    color: #005700;
    font-family: "Roboto-Medium", Helvetica;
    font-size: 20px;
    font-weight: 500;
    letter-spacing: 0.1px;
    line-height: normal;
    position: relative;
    white-space: nowrap;
    width: fit-content;
}

.create-account .text-wrapper-3 {
    color: var(--grayscale-title-active);
    font-family: var(--desktop-text-large-font-family);
    font-size: var(--desktop-text-large-font-size);
    font-style: var(--desktop-text-large-font-style);
    font-weight: var(--desktop-text-large-font-weight);
    letter-spacing: var(--desktop-text-large-letter-spacing);
    line-height: var(--desktop-text-large-line-height);
    position: relative;
    white-space: nowrap;
    width: fit-content;
}

.create-account .frame-3 {
    align-items: center;
    display: inline-flex;
    flex: 0 0 auto;
    flex-direction: column;
    gap: 66px;
    justify-content: center;
    position: relative;
}

.create-account .div-wrapper {
    align-items: flex-start;
    display: inline-flex;
    flex: 0 0 auto;
    flex-direction: column;
    gap: 36px;
    position: relative;
}

.create-account .frame-4 {
    align-items: flex-start;
    display: flex;
    flex: 0 0 auto;
    flex-wrap: wrap;
    gap: 41px 41px;
    position: relative;
    width: 885px;
}

.create-account .input {
    align-items: flex-start;
    display: inline-flex;
    flex: 0 0 auto;
    flex-direction: column;
    gap: 2px;
    position: relative;
}

.create-account .frame-5 {
    align-items: flex-start;
    background: none;
    border: none;
    color: var(--grayscale-title-active);
    display: inline-flex;
    flex: 0 0 auto;
    font-family: var(--desktop-text-x-small-font-family);
    font-size: var(--desktop-text-x-small-font-size);
    font-style: var(--desktop-text-x-small-font-style);
    font-weight: var(--desktop-text-x-small-font-weight);
    letter-spacing: var(--desktop-text-x-small-letter-spacing);
    line-height: var(--desktop-text-x-small-line-height);
    margin-top: -1px;
    padding: 0;
    position: relative;
    white-space: nowrap;
}

.create-account .input-2 {
    align-items: flex-start;
    background-color: var(--grayscalewhite);
    border: 1px solid;
    border-color: var(--greygrey-3);
    border-radius: 8px;
    display: flex;
    flex: 0 0 auto;
    gap: 10px;
    padding: 13px 17px;
    position: relative;
    width: 420px;
}

.create-account .enter-your-first {
    background: transparent;
    border: none;
    color: var(--grayscale-title-active);
    font-family: var(--desktop-link-small-font-family);
    font-size: var(--desktop-link-small-font-size);
    font-style: var(--desktop-link-small-font-style);
    font-weight: var(--desktop-link-small-font-weight);
    height: 22px;
    letter-spacing: var(--desktop-link-small-letter-spacing);
    line-height: var(--desktop-link-small-line-height);
    margin-top: -1px;
    opacity: 0.7;
    padding: 0;
    position: relative;
    white-space: nowrap;
    width: 359px;
}

.create-account .input-3 {
    align-items: flex-start;
    background-color: var(--grayscalewhite);
    border: 1px solid;
    border-color: var(--greygrey-3);
    border-radius: 8px;
    display: inline-flex;
    flex: 0 0 auto;
    gap: 10px;
    padding: 13px 17px;
    position: relative;
}

.create-account .div-2 {
    background: transparent;
    border: none;
    color: var(--grayscale-title-active);
    font-family: var(--desktop-link-small-font-family);
    font-size: var(--desktop-link-small-font-size);
    font-style: var(--desktop-link-small-font-style);
    font-weight: var(--desktop-link-small-font-weight);
    height: 22px;
    letter-spacing: var(--desktop-link-small-letter-spacing);
    line-height: var(--desktop-link-small-line-height);
    margin-top: -1px;
    opacity: 0.7;
    padding: 0;
    position: relative;
    white-space: nowrap;
    width: 352px;
}

.create-account .input-outline-status {
    height: 24px !important;
    position: relative !important;
    width: 24px !important;
}

.create-account .frame-6 {
    align-items: flex-start;
    display: inline-flex;
    flex: 0 0 auto;
    position: relative;
}

.create-account .text-wrapper-4 {
    color: var(--grayscale-title-active);
    font-family: var(--desktop-text-x-small-font-family);
    font-size: var(--desktop-text-x-small-font-size);
    font-style: var(--desktop-text-x-small-font-style);
    font-weight: var(--desktop-text-x-small-font-weight);
    letter-spacing: var(--desktop-text-x-small-letter-spacing);
    line-height: var(--desktop-text-x-small-line-height);
    margin-top: -1px;
    position: relative;
    white-space: nowrap;
    width: fit-content;
}

.create-account .text-wrapper-5 {
    color: var(--grayscale-title-active);
    font-family: var(--desktop-link-small-font-family);
    font-size: var(--desktop-link-small-font-size);
    font-style: var(--desktop-link-small-font-style);
    font-weight: var(--desktop-link-small-font-weight);
    height: 22px;
    letter-spacing: var(--desktop-link-small-letter-spacing);
    line-height: var(--desktop-link-small-line-height);
    margin-top: -1px;
    opacity: 0.7;
    position: relative;
    white-space: nowrap;
    width: 352px;
}

.create-account .p {
    color: var(--grayscale-label);
    font-family: var(--mobile-link-x-small-font-family);
    font-size: var(--mobile-link-x-small-font-size);
    font-style: var(--mobile-link-x-small-font-style);
    font-weight: var(--mobile-link-x-small-font-weight);
    height: 22px;
    letter-spacing: var(--mobile-link-x-small-letter-spacing);
    line-height: var(--mobile-link-x-small-line-height);
    position: relative;
    white-space: nowrap;
    width: 369px;
}

.create-account .normal {
    align-items: flex-start;
    background-color: var(--secondary-default);
    border-radius: 12px;
    display: flex;
    flex: 0 0 auto;
    gap: 10px;
    opacity: 0.5;
    padding: 14px 0px;
    position: relative;
    width: 420px;
}

.create-account .label {
    color: var(--colorsneutralwhite);
    flex: 1;
    font-family: "Raleway-SemiBold", Helvetica;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0;
    line-height: 22px;
    margin-top: -1px;
    position: relative;
    text-align: center;
}

.create-account .frame-7 {
    align-items: center;
    display: inline-flex;
    flex: 0 0 auto;
    justify-content: center;
    position: relative;
}

.create-account .frame-8 {
    align-items: flex-start;
    display: inline-flex;
    flex: 0 0 auto;
    gap: 10px;
    padding: 10px;
    position: relative;
}

.create-account .text-wrapper-6 {
    color: var(--grayscale-body);
    font-family: var(--desktop-link-x-small-font-family);
    font-size: var(--desktop-link-x-small-font-size);
    font-style: var(--desktop-link-x-small-font-style);
    font-weight: var(--desktop-link-x-small-font-weight);
    letter-spacing: var(--desktop-link-x-small-letter-spacing);
    line-height: var(--desktop-link-x-small-line-height);
    margin-top: -1px;
    position: relative;
    white-space: nowrap;
    width: fit-content;
}

.create-account .frame-1000002141 {
    flex: 0 0 auto !important;
}

.create-account .text-wrapper-7 {
    color: var(--linear);
    font-family: "Raleway-Bold", Helvetica;
    font-size: 16px;
    font-weight: 700;
    height: 28px;
    left: 607px;
    letter-spacing: -0.5px;
    line-height: 28px;
    position: absolute;
    text-align: center;
    top: 889px;
    white-space: nowrap;
}
</style>