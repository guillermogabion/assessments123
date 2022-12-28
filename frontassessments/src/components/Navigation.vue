<template>
  <div>
    <v-navigation-drawer
      v-model="drawer"
      app
      temporary
      dark
    >
      <v-list>
        <v-list-item>
            <v-img height="50" width="50" src="../assets/img/logo.png" contain />
        </v-list-item>
      </v-list>

      <v-divider />

      <v-list dense>
        <v-list-item
          v-for="([icon, text, link], i) in items"
          :key="i"
          link
          @click="$vuetify.goTo(link)"
        >
          <v-list-item-icon class="justify-center">
            <v-icon>{{ icon }}</v-icon>
          </v-list-item-icon>
          <v-list-item-content>
            <v-list-item-title class="subtitile-1">{{
              text
            }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      :color="color"
      :flat="flat"
      class="px-15"
      :class="{ expand: flat }"
    >
     
        <v-img src="@/assets/img/logo.png" width="50" height="50" contain />
      <v-spacer />
      <v-app-bar-nav-icon
        @click.stop="drawer = !drawer"
        class="mr-4"
        v-if="isXs"
      />
      <div v-else>
        <v-btn text @click="$vuetify.goTo('#hero')">
          <span class="mr-2">Home</span>
        </v-btn>
        <v-btn text>
          <span class="mr-2">About Us</span>
        </v-btn>
        <v-btn text @click="$vuetify.goTo('#products')">
          <span class="mr-2">Products</span>
        </v-btn>
        <v-btn text @click="$vuetify.goTo('#blogs')">
          <span class="mr-2">Blogs</span>
        </v-btn>
        <v-btn text @click="$vuetify.goTo('#contact')">
          <span class="mr-2">Contact</span>
        </v-btn>
        <v-btn style="background-color: green; color: white" rounded outlined text @click="$vuetify.goTo('#contact')">
          <span class="mr-2">Book a Demo</span>
        </v-btn>
      </div>
    </v-app-bar>
  </div>
</template>

<style scoped>
.v-toolbar {
  transition: 0.6s;
}

.expand {
  height: 80px !important;
  padding-top: 10px;
}
</style>

<script>
export default {
  data: () => ({
    drawer: null,
    isXs: false,
    items: [
      ["mdi-home-outline", "Home", "#hero"],
      ["mdi-information-outline", "About Us", "#features"],
      ["mdi-download-box-outline", "Products", "#products"],
      ["mdi-currency-usd", "Blogs", "#blogs"],
      ["mdi-email-outline", "Contacts", "#contact"],
    ],
  }),
  props: {
    bg: String,
    flat: Boolean,
  },
  methods: {
    onResize() {
      this.isXs = window.innerWidth < 850;
    },
  },

  watch: {
    isXs(value) {
      if (!value) {
        if (this.drawer) {
          this.drawer = false;
        }
      }
    },
  },
  mounted() {
    this.onResize();
    window.addEventListener("resize", this.onResize, { passive: true });
  },
};
</script>
