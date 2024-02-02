<script>
export default {
    name: 'Modal',
    methods: {
        close() {
            this.$emit('close');
        },
    },
};
</script>

<template>
    <transition name="modal-fade">
        <div class="modal-backdrop alert">
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">
                        <h2>Delete Waste Category</h2>
                    </slot>
                </header>

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
                            <button type="submit" class="btn btn-transparent" @click="close">Cancel</button>
                            <button type="submit" class="btn btn-red" @click="close">Delete</button>
                        </div>
                    </slot>

                </footer>
            </div>
        </div>
    </transition>

    <transition name="modal-fade">
        <div class="modal-backdrop alert">
            <div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="modalDescription">
                <header class="modal-header" id="modalTitle">
                    <slot name="header">
                        <h2>Delete Waste Category</h2>
                    </slot>
                </header>

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
                            <button type="submit" class="btn btn-transparent" @click="close">Cancel</button>
                            <button type="submit" class="btn btn-red" @click="close">Delete</button>
                        </div>
                    </slot>

                </footer>
            </div>
        </div>
    </transition>
</template>

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