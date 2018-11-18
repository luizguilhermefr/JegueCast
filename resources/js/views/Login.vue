<template>
    <v-container>
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

                            <v-tab-item key="login">
                                <v-card flat>
                                    <v-card-text>Login</v-card-text>
                                </v-card>
                            </v-tab-item>

                            <v-tab-item key="register">
                                <v-card flat>
                                    <v-card-text>Register</v-card-text>
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
        activeTab: 'login'
    })
}
</script>

<style scoped>

</style>
