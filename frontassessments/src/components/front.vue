<template>
   <div>
    <v-col
       class="header d-flex justify-center align-center"
       >
        <v-card
        flat
        class="cardColor"
        >
            <div
            class="text-container"
            >
                <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">
                    Covid-19 Response: No one should be left behind. Check our different ways in helping schools and institutions during pandemic <span style="font-size: 18px" class="mdi mdi-arrow-right"></span>
                </span>
            </div>
        </v-card>
    </v-col>
   <v-app-bar
   flat>
    <v-img
    src="../assets/img/logo.png"
    height="50"
    width="50"
    contain
    >

    </v-img>
   </v-app-bar>
   </div>
      
</template>
<style>
.header {
    background-color: rgb(132, 132, 255);
}
.cardColor {
   background-color: rgb(132, 132, 255)!important;
   border-color: white !important;
 }
 .text-container{ 
    overflow: hidden; 
    text-align: center;
}
</style>
<script>
export default {
    data() {
        return {
            drawer
        }
    },
}
</script>
