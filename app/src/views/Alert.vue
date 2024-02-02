<template>
    <transition name="modal-fade">
        <div class="modal-backdrop alert">
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">
                        <h2>Delete Waste Category</h2>
                    </slot>
                </header>
                <form @submit.prevent="deleteWaste">
                    <section class="modal-body" id="modalDescription">
                        <slot name="body">
                            <div>
                                <p>Are you sure you want to delete this waste category?</p>
                            </div>

                        </slot>
                    </section>

                    <footer class="modal-footer">
                        <slot name="footer">
                            <div class="footer-section">
                                <button class="btn btn-transparent" @click="close">Cancel</button>
                                <button type="submit" class="btn btn-red" @click="close">Delete</button>
                            </div>
                        </slot>
                    </footer>
                </form>
            </div>
        </div>
    </transition>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    name: 'Modal',
    props: ['assessment'],
    data() {
        return {
            api_url: import.meta.env.VITE_API_ENDPOINT
        };
    },
    methods: {
        close() {
            this.$emit('close');
        },
        async deleteWaste() {
            try {
                let response = await axios.delete(`${this.api_url}/assessment/delete/${this.assessment.id}`, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                    }
                });

                if (response.data) {
                    Swal.fire({
                        text: "Delete Successfully",
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
};
</script>

<style>
.alert .modal-backdrop {
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

.alert .modal {
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
    width: 500px;
    padding: 5px 30px;
    border-radius: 20px;
}

.alert .modal-header,
.alert .modal-footer {
    /* padding: 15px; */
    display: flex;
}

.alert .modal-header {
    position: relative;
    border-bottom: 1px solid #eeeeee;
    justify-content: space-between;
}

.alert .modal-footer {
    border-top: 1px solid #eeeeee;
    flex-direction: column;
}

.alert .modal-body {
    position: relative;
    padding: 20px 10px;
}


.btn-green {
    color: white;
    background: green;
    border: 1px solid green;
    border-radius: 2px;
    margin: 3px;
}

.alert .btn-transparent {
    color: green;
    background: #fff;
    border: 1px solid green !important;
    border-radius: 10px;
    margin: 3px;
}

.btn-red {
    color: white;
    background: red !important;
    border: 1px solid green;
    border-radius: 10px;
    margin: 3px;
}


.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity .5s ease;
}

.footer-section {
    text-align: right;
}

.modal-footer {
    padding: 10px;
}
</style>