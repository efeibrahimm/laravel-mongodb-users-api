<template>
    <div class="container">
        <div class="row">
            <ul class="list-group">
                <div class="col-md-6" v-for="(user,index) in users" :key="user._id" :index="index">
                    <li class="list-group-item">
                        <div class="profile-img">
                            <img :src="'public/images/'+user.image" alt="" class="img-circle" />
                        </div>
                        <div
                            class="content"
                            style="
                                display: flex;
                                justify-content: space-between;
                            "
                        >
                            <span class="item"
                                ><i class="fa fa-paw"></i> {{user.name + ' ' +user.surname}}</span
                            >
                            <span class="item"
                                ><i class="fa fa-atom"></i> @{{user.username}}</span
                            >
                            <span class="item"
                                ><i class="fa fa-envelope"></i>
                                {{user.email}}</span
                            >
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: [],
        };
    },
    methods: {
        getUser() {
            axios.get("/users").then((response) => {
                this.users = response.data;
            });
        },
    },
};
</script>

<style></style>
