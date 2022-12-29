<template>
  <section id="blogs" class="pb-8">
    <v-container fluid>
      <v-row align="center" justify="center">
        <v-col cols="10">
          <v-card style="width: 100%" color="transparent" flat>
            <v-card-title class="justify-center" style="font-weight: bold">
              <span>The LMS that's built for every need</span>
            </v-card-title>
            <v-row class="text-center">
              <v-col class="col-12 col-md-6">
                <div class="flex-center">
                  <v-card-text>
                    <div class="flex-center">
                      <v-img height="450px" src="~@/assets/img/lms1.png" class="lazy" contain></v-img>
                    </div>
                  </v-card-text>
                </div>
              </v-col>
              
              <v-col class="col-12 col-md-6">
                <div class="flex-center" style="padding-top: 3em;">
                  <v-card-text>
                    <div class="text-uppercase text-h5 my-2 font-weight-bold">General Education</div>
                    <div>Transform your learning digitally.</div>
                    <div>Streamline all your school processs in</div>
                    <div>one platform made especially for</div>
                    <div>students, teachers, and for parents</div>
                    <v-btn
                        v-bind="size"
                        text
                        color="blue"
                        class="mt-6"
                    >
                      Learn more
                    </v-btn>
                  </v-card-text>
                  <v-divider style="margin-right: -23px" vertical v-if="this.$vuetify.breakpoint.smAndUp"></v-divider>
                </div>
                <v-divider class="mx-4" v-if="!this.$vuetify.breakpoint.smAndUp"></v-divider>
              </v-col>
              
            </v-row>
          </v-card>
        </v-col>
      </v-row>
      <v-row align="center" justify="center">
        <v-col cols="10">
          <v-card style="width: 100%" color="transparent" flat>
            <v-card-title class="justify-center" style="font-weight: bold">
            </v-card-title>
            <v-row class="text-center">
             
              
              <v-col class="col-12 col-md-6">
                <div class="flex-center" style="padding-top: 3em;">
                  <v-card-text>
                    <div class="text-uppercase text-h5 my-2 font-weight-bold">Professional Training</div>
                    <div>Bringing you a platform that provides end to</div>
                    <div>end solution in the training process for your</div>
                    <div>employees, customers or partners that allows</div>
                    <v-btn
                        v-bind="size"
                        text
                        color="blue"
                        class="mt-6"
                    >
                      Learn more
                    </v-btn>
                  </v-card-text>
                  <v-divider style="margin-right: -23px" vertical v-if="this.$vuetify.breakpoint.smAndUp"></v-divider>
                </div>
                <v-divider class="mx-4" v-if="!this.$vuetify.breakpoint.smAndUp"></v-divider>
              </v-col>
              <v-col class="col-12 col-md-6">
                <div class="flex-center">
                  <v-card-text>
                    <div class="flex-center">
                      <v-img height="450px" src="~@/assets/img/lms1.png" class="lazy" contain></v-img>
                    </div>
                  </v-card-text>
                </div>
              </v-col>
              
            </v-row>
            <v-col>
              <v-card flat color="transparent">
                <v-row>
                  <v-col class="col-12 col-md-3">
                    <v-card-title class="justify-center">
                      <span style="font-size: 30px; font-weight: bold; color: green">1,200</span>
                      
                    </v-card-title>
                    <div align="center">
                      <span>Learning Materials Donated</span>
                    </div>
                  </v-col>
                  <v-col class="col-12 col-md-3">
                    <v-card-title class="justify-center">
                      <span style="font-size: 30px; font-weight: bold; color: green">5,500</span>
                    </v-card-title>
                    <div align="center">
                      <span>LMS Users</span>
                    </div>
                  </v-col>
                  <v-col class="col-12 col-md-3">
                    <v-card-title class="justify-center">
                      <span style="font-size: 30px; font-weight: bold; color: green">3,000</span>
                   
                    </v-card-title>
                    <div align="center">
                      <span>Trained Professionals</span>
                    </div>
                  </v-col>
                  <v-col class="col-12 col-md-3">
                    <v-card-title class="justify-center">
                      <span style="font-size: 30px; font-weight: bold; color: green">000</span>
                    </v-card-title>
                    <div align="center">
                      <span>Lorem Ipsum</span>
                    </div>
                  </v-col>
                </v-row>
                
              </v-card>
            </v-col>
          </v-card>
        </v-col>
      </v-row>
      <v-sheet style="background-color: beige" width="100%">
        <v-row>
          <v-col>
            <v-card-title class="justify-center">
           <v-card color="transparent" flat>
            <v-card-title class="justify-left">
             <span class="bold">They said it first</span>
            </v-card-title>
            <div align="left" >
              <span><h6>Scoula Maria is fortunate to work with PCI early on when the pandemic<br>
              hit the country. My ideas and my curriculum design all came to life in<br>
              the NEST -- our exclusive LMS for our students. If not for PCI, we wouldn't<br>
              be able to continue education at this very difficult time.</h6></span>
            </div>
            <br>
            <br>
            <div>
              <span>Ina Gonda-Ramos, MAE-CDE, LPT</span><br>
              <span>Program Director of Scoula Maria</span>
            </div>
           </v-card>
           </v-card-title>
          </v-col>
          <v-col>
            <v-card-title class="justify-center"  style="margin-bottom: -25px">
              <v-img height="450px" src="~@/assets/img/testimonial.png" contain></v-img>
            </v-card-title>
          
          </v-col>
        </v-row>
      </v-sheet>
    </v-container>
    <div class="svg-border-rounded text-light">
      <!-- <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 144.54 17.34"
        preserveAspectRatio="none"
        fill="currentColor"
      >
        <path
          d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"
        />
      </svg> -->
      <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1440 320"
          preserveAspectRatio="none"
          fill="currentColor"
      >
        <path
            d="M0,64L80,90.7C160,117,320,171,480,181.3C640,192,800,160,960,138.7C1120,117,1280,107,1360,101.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
    </div>
  </section>
</template>

<style lang="scss">
$main_color: #283e79;

ul {
  font-size: 13px;
  line-height: 1.5em;
  margin: 5px 0 15px;
  padding: 0;

  li {
    list-style: none;
    position: relative;
    padding: 0 0 0 20px;
  }

  li {
    &::before {
      content: "";
      position: absolute;
      left: 0;
      top: 5px;
      width: 10px;
      height: 10px;
      background-color: $main_color;
      border-radius: 50%;
      -moz-border-radius: 50%;
      -webkit-eeborder-radius: 50%;
    }
  }
}
</style>

<style scoped>
.header {
  background-color: #283e79;
  color: white;
}

.circle1 {
  border-radius: 50%;
  width: 150px;
  height: 150px;
  background-color: #f0f8ff;
  display: flex;
  align-items: center;
  justify-content: center;
}

.circle2 {
  border-radius: 50%;
  width: 100px;
  height: 100px;
  background-color: #e0effc;
  display: flex;
  align-items: center;
  justify-content: center;
}

.flex-center {
  display: flex;
  align-items: center;
  justify-content: center;
}

.svg-border-rounded svg {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  color: #f4f7f5;
  z-index: -1;
}

#pricing {
  z-index: 0;
}

.content {
  z-index: 1;
}

svg {
  overflow: hidden;
}

section {
  position: relative;
}
</style>

<script>
export default {
  data: () => ({
    
  }),
  computed: {
    size() {
      const size = {md: "large", xl: "x-large"}[
          this.$vuetify.breakpoint.name
          ];
      return size ? {[size]: true} : {};
    }
  },
};
</script>