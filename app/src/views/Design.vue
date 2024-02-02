<template>
  <div class="login-screen-default">
    <div class="overlap-group-wrapper">
      <div class="overlap-group">
        <div class="overlay">
          <div class="frame-wrapper">
            <div class="div">
              <div class="div">
                <div class="logo">
                  <img class="pakam-icon" alt="Pakam icon" :src="logo" />
                  <div class="text-wrapper-2">Pakam</div>
                </div>
                <div class="text-wrapper-3">Login</div>
              </div>
              <div class="frame-2">
                <div class="frame-2">
                  <div class="frame-2">
                    <div class="input">
                      <input class="frame-3" placeholder="Username" type="text" />
                      <div class="input-2">
                        <input class="enter-your-username" placeholder="Enter your username" type="text" />
                      </div>
                    </div>
                    <div class="input">
                      <div class="div-wrapper">
                        <div class="text-wrapper-4">Password</div>
                      </div>
                      <div class="input-3">
                        <div class="text-wrapper-5">Enter your password</div>
                        <!-- <Property35 class="input-outline-status" /> -->
                      </div>
                      <p class="p">Must be 8 characters long, Uppercase inclusive</p>
                    </div>
                  </div>
                </div>
                <div class="div">
                  <div class="normal">
                    <div class="label"> Log In</div>
                  </div>
                  <div class="frame-4">
                    <div class="frame-5">
                      <div class="text-wrapper-6">Forgot Password?</div>
                    </div>
                    <!-- <Frame class="frame-1000002141" /> -->
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
// import { Frame } from "./Frame";
// import { Property35 } from "./Property35";
import logo from "@/assets/img/logo.png";

export default {
  name: "LoginScreenDefault",
  components: {
    // Frame,
    // Property35,
    logo
  },
};
</script>

<style>
.login-screen-default {
  background-color: #f7f7f4;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.login-screen-default .overlap-group-wrapper {
  background-color: var(--bg-color);
  height: 1024px;
  width: 1440px;
}

.login-screen-default .overlap-group {
  height: 1024px;
  position: relative;
}

.login-screen-default .overlay {
  height: 1024px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1440px;
}

.login-screen-default .frame-wrapper {
  align-items: center;
  background-color: #ffffff;
  border-radius: 15px;
  display: flex;
  flex-direction: column;
  gap: 36px;
  justify-content: center;
  left: 317px;
  padding: 52px;
  position: relative;
  top: 245px;
  width: 807px;
}

.login-screen-default .div {
  align-items: center;
  display: inline-flex;
  flex: 0 0 auto;
  flex-direction: column;
  gap: 16px;
  justify-content: center;
  position: relative;
}

.login-screen-default .logo {
  align-items: center;
  display: inline-flex;
  gap: 10px;
  height: 55px;
  justify-content: center;
  position: relative;
}

.login-screen-default .pakam-icon {
  height: 42.69px;
  object-fit: cover;
  position: relative;
  width: 37px;
}

.login-screen-default .text-wrapper-2 {
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

.login-screen-default .text-wrapper-3 {
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

.login-screen-default .frame-2 {
  align-items: flex-start;
  display: inline-flex;
  flex: 0 0 auto;
  flex-direction: column;
  gap: 16px;
  position: relative;
}

.login-screen-default .input {
  align-items: flex-start;
  display: inline-flex;
  flex: 0 0 auto;
  flex-direction: column;
  gap: 2px;
  position: relative;
}

.login-screen-default .frame-3 {
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

.login-screen-default .input-2 {
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

.login-screen-default .enter-your-username {
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

.login-screen-default .div-wrapper {
  align-items: flex-start;
  display: inline-flex;
  flex: 0 0 auto;
  position: relative;
}

.login-screen-default .text-wrapper-4 {
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

.login-screen-default .input-3 {
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

.login-screen-default .text-wrapper-5 {
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

.login-screen-default .input-outline-status {
  height: 24px !important;
  position: relative !important;
  width: 24px !important;
}

.login-screen-default .p {
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

.login-screen-default .normal {
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

.login-screen-default .label {
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

.login-screen-default .frame-4 {
  align-items: center;
  display: inline-flex;
  flex: 0 0 auto;
  justify-content: center;
  position: relative;
}

.login-screen-default .frame-5 {
  align-items: flex-start;
  display: inline-flex;
  flex: 0 0 auto;
  gap: 10px;
  padding: 10px;
  position: relative;
}

.login-screen-default .text-wrapper-6 {
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

.login-screen-default .frame-1000002141 {
  flex: 0 0 auto !important;
}

.login-screen-default .text-wrapper-7 {
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
