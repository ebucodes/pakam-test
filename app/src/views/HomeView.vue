<template>
  <div class="assessment">

    <aside></aside>
    <main>
      <div class="main-content">
        <h1>Assessment</h1>
        <div class="top-area">
          <button class="btn btn-success" @click="showModal" type="button">Create</button>


        </div>
        <div class="table-section">
          <!-- <i class="fa fa-address-book" aria-hidden="true"></i> -->
          <table>
            <thead>
              <tr>
                <th>
                  <input type="checkbox" />
                </th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Enter Name</td>
                <td>Enter Description</td>
                <td>Enter Quantity</td>
                <td>
                  <button class="btn btn-success btn-sm mx-3" @click="showModal" type="button">Update</button>
                  <button class="btn btn-outline btn-sm" @click="showAlert" type="button">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <Modal v-show="isModalVisible" @close="closeModal" />
      <Alert v-show="isAlertVisible" @close="closeAlert" />
    </main>

  </div>
</template>

<script>
import Modal from './Modal.vue';
import Alert from './Alert.vue';
export default {
  components: {
    Modal,
    Alert,
  },
  data() {
    return {
      isModalVisible: false,
      isAlertVisible: false,
    };
  },
  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
    showAlert() {
      this.isAlertVisible = true;
    },
    closeAlert() {
      this.isAlertVisible = false;
    }
  }
};
</script>

<style scoped>
.assessment {
  background-color: rgba(255, 255, 255, 1);
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
  margin: 0px;
  padding: 0px;
}

.assessment aside {
  display: block;
  width: 300px;
  background-color: green;
  height: 100vh;
}

.assessment main {
  display: block;
  width: 100%;
  background-color: #F7F7F4;
  height: 100vh;
}

.main-content {
  padding: 35px;
}

.top-area {
  text-align: right;
}

.btn {
  font-size: 17px;
  font-weight: bold;
  padding: 10px 40px;
  cursor: pointer;
  border-radius: 15px;
}

.btn-success {
  color: #fff;
  background-color: green;
}

.btn-outline {
  background-color: #fff;
  color: green;
}

.table-section {
  background: #fff;
  margin-top: 20px;
  min-height: 500px;
  /* border: 1px solid #000; */
  overflow: hidden;
}

table {
  width: 100%;
  text-align: center;
}

table tbody tr td {
  border-top: 1px solid #ddd;
  padding: 10px;
}

.mx-3 {
  margin-right: 10px;
}

.btn-sm {

  padding: 7px 35px;

}
</style>
