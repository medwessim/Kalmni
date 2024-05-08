import { createRouter, createWebHashHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import ProfileView from "@/views/ProfileView.vue";
import SigneUpView from "@/views/SigneUpView.vue";
import DashbordView from "@/views/DashboardAdmin/DashbordView.vue";
import SettingsView from "@/views/SettingsView.vue";
import AcceuillView from "@/views/AcceuillView.vue";
import ClientView from "@/views/DashboardAdmin/ClientView.vue";
import DemandeView from "@/views/DashboardAdmin/DemandeView.vue";
import PrestataireView from "@/views/DashboardAdmin/PrestataireView.vue";

const routes = [
  {
    path: "/",
    name: "home",
    component: HomeView,
  },
  {
    path: "/Settings",
    name: "Settings",
    component: SettingsView,
  },
  {
    path: "/Acceuill",
    name: "Acceuill",
    component: AcceuillView,
  },
  {
    path: "/ClientAdmin",
    name: "ClientView",
    component: ClientView,
  },
  {
    path: "/demandeAdmin",
    name: "DemandeView",
    component: DemandeView,
  },
  {
    path: "/PrestataireAdmin",
    name: "PrestataireView",
    component: PrestataireView,
  },


  {
    path: "/profile",
    name: "profile",
    component: ProfileView,
  },
  {
    path: "/SigneUp",
    name: "SignUp",
    component: SigneUpView,
  },

  {
    path: "/Dashbord",
    name: "DashbordView",
    component: DashbordView,
  },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
