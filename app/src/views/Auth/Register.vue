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
                    <form @submit.prevent="register">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="name">First name</label>
                                <input type="text" class="form-control" name="first_name"
                                    placeholder="Enter your first name" v-model="first_name" required>
                            </div>
                            <!--  -->
                            <div class="col-lg-6 mb-3">
                                <label for="">Last name</label>
                                <input type="text" class="form-control" name="last_name" v-model="last_name"
                                    placeholder="Enter your last name" required>
                            </div>
                            <!--  -->
                            <div class="col-lg-6 mb-3">
                                <label for="">Username</label>
                                <input type="text" class="form-control" name="username" v-model="username"
                                    placeholder="Enter your username" required>
                            </div>
                            <!--  -->
                            <div class="col-lg-6 mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" v-model="password"
                                    placeholder="Enter your password" required>
                                <div class="must-be-8">Must be 8 characters long, Uppercase inclusive</div>
                            </div>
                            <!--  -->
                            <button type="submit" class="btn btn-lg btn-success w-100"
                                style="background-color: #005700;color: #fff; text-align: center;">Create</button>

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
                    </form>
                </div>
            </div>

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
            first_name: '',
            last_name: '',
            username: '',
            password: '',
            api_url: import.meta.env.VITE_API_ENDPOINT
        };
    },
    methods: {
        async register() {
            const formData = new FormData();
            formData.append('first_name', this.first_name);
            formData.append('last_name', this.last_name);
            formData.append('username', this.username);
            formData.append('password', this.password);
            try {
                let response = await axios.post(this.api_url + '/auth/register', formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                });

                if (response.data) {
                    Swal.fire({
                        text: "Registration Successfully",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#247',
                        cancelButtonColor: '#CC9933',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to the home page
                            this.$router.push({ name: 'login' });
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
