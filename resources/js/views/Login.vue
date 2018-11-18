<template>
    <v-container>
        <v-dialog v-model="forgotPasswordModalVisible" persistent max-width="290">
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
                            v-model="forgot.email"
                            :disabled="loading"
                            label="E-mail"
                        />
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-btn
                        block
                        @click="doPasswordRecovery"
                        :loading="loading">
                        Send
                    </v-btn>
                    <v-btn
                        flat
                        block
                        @click="forgotPasswordModalVisible = false">
                        Cancel
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        <v-layout align-center justify-center row fill-height>
            <v-flex xs12 md8>
                <v-layout row wrap>
                    <v-flex xs12 class="text-xs-center mb-4">
                        <v-avatar :size="100">
                            <img src="../../img/logo.png"/>
                        </v-avatar>
                    </v-flex>
                    <v-flex xs12>
                        <v-tabs v-model="activeTab" class="text-xs-center" centered>
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

                            <v-tab-item key="login" :transition="false" :reverse-transition="false">
                                <v-card flat class="pa-2">
                                    <v-form>
                                        <v-text-field
                                            v-model="login.username"
                                            :disabled="loading"
                                            label="Username"
                                        />
                                        <v-text-field
                                            v-model="login.password"
                                            :disabled="loading"
                                            :type="secure ? 'password' : 'text'"
                                            :append-icon="secure ? 'visibility_off' : 'visibility'"
                                            label="Password"
                                            @click:append="secure = !secure"
                                        />
                                        <v-btn
                                            @click="doLogin"
                                            @loading="loading"
                                            block
                                        >
                                            sign in
                                        </v-btn>
                                    </v-form>
                                    <a href="#" @click.prevent="forgotPasswordModalVisible = true">
                                        I forgot my password
                                    </a>
                                </v-card>
                            </v-tab-item>

                            <v-tab-item key="register" :transition="false" :reverse-transition="false">
                                <v-card flat class="pa-2">
                                    <v-form>
                                        <v-text-field
                                            v-model="register.name"
                                            :disabled="loading"
                                            label="Name"
                                        />
                                        <v-text-field
                                            v-model="register.email"
                                            :disabled="loading"
                                            label="E-mail"
                                        />
                                        <v-text-field
                                            v-model="register.username"
                                            :disabled="loading"
                                            label="Username"
                                        />
                                        <v-text-field
                                            v-model="register.password"
                                            :disabled="loading"
                                            label="Password"
                                            type="password"
                                        />
                                        <v-text-field
                                            v-model="register.passwordConfirmation"
                                            :disabled="loading"
                                            label="Confirm your password"
                                            type="password"
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
            //
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
