<!-- <script>

</script> -->

<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">
                        <h2>Create Assessment</h2>
                    </slot>
                </header>

                <section class="modal-body" id="modalDescription">
                    <slot name="body">
                        <div>
                            <form @submit.prevent="create">
                                <div class="form-content">
                                    <div class="form-group">
                                        <label class="label">Full Name</label>
                                        <input class="form-control" type="text" v-model="name" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="label">Description</label>
                                        <input class="form-control" type="text" v-model="description" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="label">Quantity</label>
                                        <input class="form-control" type="number" min="0" v-model="quantity" required />
                                    </div>
                                </div>

                                <div class="submit-section">
                                    <button class="btn btn-danger" @click="close">Cancel</button>
                                    <button type="submit" class="btn btn-success" @click="close">Submit</button>
                                </div>
                            </form>
                        </div>

                    </slot>
                </section>
            </div>
        </div>
    </transition>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';
import { RouterLink, RouterView } from 'vue-router';

export default {
    name: 'Modal',
    props: ['assessment'],
    data() {
        return {
            name: this.assessment ? this.assessment.name : '',
            description: this.assessment ? this.assessment.description : '',
            quantity: this.assessment ? this.assessment.quantity : '',
            api_url: import.meta.env.VITE_API_ENDPOINT
        };
    },
    methods: {
        close() {
            this.$emit('close');
        },
        async create() {
            if (this.assessment) {
                this.update()
                return
            }
            const formData = new FormData();
            formData.append('name', this.name);
            formData.append('description', this.description);
            formData.append('quantity', this.quantity);
            try {
                let response = await axios.post(this.api_url + '/assessment/store', formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                });

                if (response.data) {
                    Swal.fire({
                        text: "Assessment created successfully",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#247',
                        cancelButtonColor: '#CC9933',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to the home page
                            window.location.reload()
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
        },
        async update() {
            const formData = new FormData();
            formData.append('name', this.name);
            formData.append('description', this.description);
            formData.append('quantity', this.quantity);
            try {
                let response = await axios.put(`${this.api_url}/assessment/update/${this.assessment.id}`, formData, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                });

                if (response.data) {
                    Swal.fire({
                        text: "Updated Successfully",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#247',
                        cancelButtonColor: '#CC9933',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect to the home page
                            window.location.reload()
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
    mounted() {
        console.log(this.assessment)
    },
};

</script>


<style>
.modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal {
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
    width: 800px;
    padding: 5px 30px;
    border-radius: 20px;
    height: auto;
    margin: 10% 24%;
}

.modal-header,
.modal-footer {
    /* padding: 15px; */
    display: flex;
}

.modal-header {
    position: relative;
    border-bottom: 1px solid #eeeeee;
    justify-content: space-between;
}

.modal-footer {
    border-top: 1px solid #eeeeee;
    flex-direction: column;
}

.modal-body {
    position: relative;
    padding: 20px 10px;
    padding-bottom: 100px;
}

.btn {
    color: #fff;
    font-size: 17px;
    font-weight: bold;
    padding: 10px 40px;
    cursor: pointer;
    border-radius: 15px;
}

.btn-green {
    color: white;
    background: green;
    border: 1px solid green;
    border-radius: 2px;
}

.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity .5s ease;
}

form {
    height: auto;
    float: left;
}

.form-group {
    display: flex;
    flex-direction: column;
    width: 42%;
    float: left;
    justify-content: start;
    margin-top: 12px;
    margin-right: 50px;
    padding-top: 10px;
}

.form-group .label {
    font-size: 15px;
}

.form-group .form-control {
    width: 100%;
    padding: 15px;
    font-size: 20px;
    border-radius: 10px;
    border: 1px solid #000;
}

.form-content {
    display: block;
    width: 100%;
    height: 220px;
}
</style>