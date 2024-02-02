<script setup>
import AuthLayout from '@/components/Layouts/AuthLayout.vue'

</script>
<template>
    <AuthLayout>
        <template v-slot:head-content>
            <b class="create-account">Create Account</b>
        </template>
        <template v-slot:main-content>
            <form @submit.prevent="login">
                <div class="text-black">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-12 mb-3">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="userName" placeholder="Enter your username"
                                    v-model="username">
                            </div>

                            <div class="col-lg-12 mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" v-model="password"
                                    placeholder="Enter your password" required>
                                <div class="must-be-8">Must be 8 characters long, Uppercase inclusive</div>
                            </div>

                            <button type="submit" class="btn btn-lg btn-success w-50"
                                style="background-color: #005700;color: #fff; text-align: center;">Login</button>


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
            </form>
        </template>
    </AuthLayout>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';
import { RouterLink, RouterView } from 'vue-router';

export default {
    data() {
        return {
            username: '',
            password: '',
            api_url: import.meta.env.VITE_API_ENDPOINT
        };
    },
    methods: {
        async login() {
            const formData = new FormData();
            formData.append('username', this.username);
            formData.append('password', this.password);

            try {
                let response = await axios.post(this.api_url + '/auth/login', formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                });

                if (response.data) {
                    Swal.fire({
                        text: "Login Successfully",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#247',
                        cancelButtonColor: '#CC9933',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to the home page
                            this.$router.push({ name: 'home' });
                        }
                    });
                }
            } catch (error) {
                if (error.response && error.response.status == 422) {
                    // Validation error, display error messages
                    const errors = error.response.data.data;

                    // Prepare an error message string
                    let errorMessage = "Validation Error:\n";
                    for (const field in errors) {
                        errorMessage += `${errors[field].join(', ')}\n`;
                    }

                    // Display the error message in SweetAlert
                    Swal.fire({
                        icon: 'error',
                        title: 'Validation Failed',
                        text: errorMessage,
                    });
                } else {
                    // Other errors, log them for debugging
                    console.log(error);
                }
            }
        }
    },
};

</script>

<style></style>
