<template>
  <v-container>
    <v-dialog max-width="290" persistent v-model="forgotPasswordModalVisible">
      <v-card>
        <v-card-title class="headline">I forgot my password</v-card-title>
        <v-card-text>
          <p>
            Inform your email so we will send you a new password automatically, <em>if there is internet
            available on the server</em>.
          </p>
          <p>
            Otherwise, you can call the <strong>Jegue Admin</strong>, so he will be able to
            set up a new password to you.
          </p>
          <v-form>
            <v-text-field
              :disabled="loading"
              label="E-mail"
              v-model="forgot.email"
            />
          </v-form>
        </v-card-text>
        <v-card-actions>
          <v-btn
            :loading="loading"
            @click="doPasswordRecovery"
            block>
            Send
          </v-btn>
          <v-btn
            @click="forgotPasswordModalVisible = false"
            block
            flat>
            Cancel
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <v-layout align-center fill-height justify-center row>
      <v-flex md6 xs12>
        <v-layout row wrap>
          <v-flex class="text-xs-center mb-4" xs12>
            <v-avatar :size="100">
              <img alt="JegueCast" src="../../img/logo.png"/>
            </v-avatar>
          </v-flex>
          <v-flex xs12>
            <v-tabs centered class="text-xs-center" v-model="activeTab">
              <v-tab
                key="login"
                ripple
              >
                Login
              </v-tab>

              <v-tab
                key="register"
                ripple
              >
                Register

              </v-tab>

              <v-tab-item :reverse-transition="false" :transition="false" key="login">
                <v-card class="pa-2" flat>
                  <v-form>
                    <v-text-field
                      :disabled="loading"
                      label="Username"
                      v-model="login.username"
                    />
                    <v-text-field
                      :append-icon="secure ? 'visibility_off' : 'visibility'"
                      :disabled="loading"
                      :type="secure ? 'password' : 'text'"
                      @click:append="secure = !secure"
                      label="Password"
                      v-model="login.password"
                    />
                    <v-btn
                      @click="doLogin"
                      @loading="loading"
                      block
                    >
                      sign in
                    </v-btn>
                  </v-form>
                  <a @click.prevent="forgotPasswordModalVisible = true" href="#">
                    I forgot my password
                  </a>
                </v-card>
              </v-tab-item>

              <v-tab-item :reverse-transition="false" :transition="false" key="register">
                <v-card class="pa-2" flat>
                  <v-form>
                    <v-text-field
                      :disabled="loading"
                      label="Name"
                      v-model="register.name"
                    />
                    <v-text-field
                      :disabled="loading"
                      label="E-mail"
                      v-model="register.email"
                    />
                    <v-text-field
                      :disabled="loading"
                      label="Username"
                      v-model="register.username"
                    />
                    <v-text-field
                      :disabled="loading"
                      label="Password"
                      type="password"
                      v-model="register.password"
                    />
                    <v-text-field
                      :disabled="loading"
                      label="Confirm your password"
                      type="password"
                      v-model="register.passwordConfirmation"
                    />
                    <v-btn
                      @click="doRegister"
                      @loading="loading"
                      block
                    >
                      sign up
                    </v-btn>
                  </v-form>
                </v-card>
              </v-tab-item>
            </v-tabs>
          </v-flex>
        </v-layout>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
export default {
  name: 'Login',

  data: () => ({
    loading: false,
    activeTab: 'login',
    secure: true,
    forgotPasswordModalVisible: false,
    login: {
      username: null,
      password: null
    },
    register: {
      name: null,
      username: null,
      email: null,
      password: null,
      passwordConfirmation: null
    },
    forgot: {
      email: null
    }
  }),

  methods: {
    doLogin() {
      this.$http.post('/api/login', this.login)
    },

    doRegister() {
      //
    },

    doPasswordRecovery() {
      //
    }
  }
}
</script>

<style scoped>

</style>
