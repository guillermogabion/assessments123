<template>
  <section id="products">
    <v-container fluid>
      <v-row align="center" justify="center">
        <v-col cols="10">
          <v-card flat color="transparent" style="width: 100%">
            <v-card-title class="justify-center">
              <span style="font-weight:bold; font-family:'Times New Roman', Times, serif; color: grey;">Our Products</span>
            </v-card-title>
            <v-card-title class="justify-center"> 
              <span style="font-weight: bold; font-size: larger;">Learn Without Limits</span>
            </v-card-title>
          
           
            <v-row class="text-center">
              <v-col class="col-12 col-sm-6 col-md-4">
                <div class="flex-center">
                  <v-card-text>
                    <div class="flex-center">
                      <div class="circle1">
                        <div class="circle2">
                          <v-card-title class="justify-center">
                            <v-img height="100" width="100" src="~@/assets/img/product1.svg" contain></v-img>
                          </v-card-title>
                          <span style="font-weight: bold;">Educat LMS</span><br/>
                          <span style="font-family: 'Times New Roman', Times, serif; color: grey;">
                            A learning Management System and <br/> 
                            content library hat offers a variety of<br/> 
                            ways on how to learn through blended <br/>
                            learning</span>
                        </div>
                      </div>
                    </div>
                  </v-card-text>
                  <v-divider style="margin-right: -23px" vertical v-if="this.$vuetify.breakpoint.smAndUp"></v-divider>
                </div>
                <v-divider class="mx-4" v-if="!this.$vuetify.breakpoint.smAndUp"></v-divider>
              </v-col>
              <v-col class="col-12 col-sm-6 col-md-4">
                <div class="flex-center">
                  <v-card-text>
                    <div class="flex-center">
                      <div class="circle1">
                        <div class="circle2">
                          <v-card-title class="justify-center">
                            <v-img height="100" width="100" src="~@/assets/img/product2.svg" contain></v-img>
                          </v-card-title>
                          <span style="font-weight: bold;">Educat Library</span><br/>
                          <span style="font-family: 'Times New Roman', Times, serif; color: grey;">
                            An online Library that contains<br/> 
                            Digital Modules, Worksheets and<br/> 
                            Assessments aligned with DepEd's K <br/>
                            to 12 curriculum</span>
                        </div>
                      </div>
                    </div>
                  </v-card-text>
                  <v-divider style="margin-right: -23px" vertical v-if="this.$vuetify.breakpoint.mdAndUp"></v-divider>
                </div>
                <v-divider class="mx-4" v-if="!this.$vuetify.breakpoint.smAndUp"></v-divider>
              </v-col>
              <v-col class="col-12 col-md-4">
                <v-divider v-if="this.$vuetify.breakpoint.smOnly" class="mx-4"></v-divider>

                <div class="flex-center">
                  <v-card-text>
                    <div class="flex-center">
                      <div class="circle1">
                        <div class="circle2">
                          <v-card-title class="justify-center">
                            <v-img height="100" width="100" src="~@/assets/img/product3.svg" contain></v-img>
                          </v-card-title>
                          <span style="font-weight: bold;">Educat Rover</span><br/>
                          <span style="font-family: 'Times New Roman', Times, serif; color: grey;">
                            An offline solution run by<br/> 
                            Mini computers that are equipped<br/> 
                            with wireless local area network<br/>
                            for contactless file transfers</span>
                        </div>
                      </div>
                    </div>
                  </v-card-text>
                </div>
              </v-col>
            </v-row>
            <v-col>
              <v-card style="background-color: #4287f5">
                <v-row>
                  <v-col
                  class="col-12 col-md-6"
                  >
                    <span style="font-size: 40px; font-weight: bold; padding-left: 2em; color: white;">Do more with</span><br/>
                    <span style="font-size: 40px; font-weight: bold; padding-left: 2em;color: white;">Educat</span> <br/> <br/>
                    <span style="font-size: 40px; font-weight: bold; padding-left: 2em;color: white;">01</span>
                    <span style="font-size: 20px; font-weight: bold; padding-left: 1em;color: white;">Offline Learning</span><br>
                    <span style="font-size: 12px; padding-left: 12em;color: white;">The ideal solution to empower learners</span> <br>
                    <span style="font-size: 12px; padding-left: 12em;color: white;">with no access to an internet connection</span>
                  </v-col>
                  <v-col
                  class="col-12 col-md-6"
                  >
                  <v-card-title class="justify-center">
                    <v-img height="300" width="800"  style="margin-bottom: -2em" src="~@/assets/img/feature1.png" contain></v-img>
                  </v-card-title>
                  </v-col>
                </v-row>
              </v-card>
            </v-col>
          </v-card>
        </v-col>
      </v-row>
     
    </v-container>
  </section>
</template>

<style scoped>
#download {
  background-image: url("~@/assets/img/bgDownload.jpg");
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 500px;
}

#download .container,
#download .row {
  height: 100%;
}
</style>