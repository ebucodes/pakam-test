<script setup>
import logo from "@/assets/img/logo.png";

</script>
<template>
    <div>
        <div class="overlay">
            <div class="overlay-inner">
                <div class="frame-parent">
                    <div class="logo-parent">
                        <div class="logo">
                            <img class="pakam-icon-1" alt="" :src="logo">

                            <div class="pakam">Pakam</div>
                        </div>                 
                        <slot name="head-content"></slot>
                    </div>

                    <slot name="main-content"></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
</style>
