
import './assets/main.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import axios from "axios";
// 
// axios.defaults.baseURL = process.env.REACT_APP_APP_API;
const accessToken = localStorage.getItem("pakamToken");
axios.defaults.headers.common["Authorization"] = `Bearer ${accessToken}`;
axios.defaults.headers.common["Access-Control-Allow-Origin"] = `*`;

const app = createApp(App)

app.use(createPinia())
app.use(router)
// 
app.mount('#app')
