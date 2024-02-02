<script setup>
import AuthLayout from '@/components/Layouts/AuthLayout.vue'

</script>
<template>
    <AuthLayout>
      <template v-slot:head-content>
        <b class="create-account">Create Account</b>   
      </template>
      <template v-slot:main-content>
        <div class="text-black">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name">First name</label>
                        <input type="text" class="form-control" name="first_name" id="" placeholder="Enter your first name">
                    </div>
                    <!--  -->
                    <div class="col-lg-6 mb-3">
                        <label for="">Last name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
                    </div>
                    <!--  -->
                    <div class="col-lg-6 mb-3">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter your username">
                    </div>
                    <!--  -->
                    <div class="col-lg-6 mb-3">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter your password">
                        <div class="must-be-8">Must be 8 characters long, Uppercase inclusive</div>
                    </div>
                    <!--  -->
                    <button type="submit" class="btn btn-lg btn-success w-50" style="background-color: #005700;color: #fff; text-align: center;">Login</button>

                    <!--  -->
                    <div class="normal-parent">
                        <div class="frame-container">
                            <div class="forgot-password-wrapper">
                                <div class="forgot-password">Forgot Password? </div>
                            </div>
                            <div class="retrieve-now-wrapper">
                                <div class="first-name">Retrieve Now</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </template>
    </AuthLayout>

</template>

<style>


</style>
