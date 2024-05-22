import axios from "axios";



 const ApiClient = axios.create({
   baseURL: "http://localhost:8000/api",
   withCredentials: false,
 });
 export default {
    getProjectById(id) {
        return ApiClient.get("/prestataireProject/"+id);
      }
 }