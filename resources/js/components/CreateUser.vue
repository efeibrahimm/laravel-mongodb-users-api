<template>
    <div class="container">
            <div class="col-md-12">
                <h5 style="--accent-color: #68AFFF" class="title">CREATE USER</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="email" class="form-control" placeholder="Jhon">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Last Name</label>
                            <input type="email" class="form-control" placeholder="EFE">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">User Name</label>
                            <input type="email" class="form-control" placeholder="efeibrahimm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User Type</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Admin</option>
                                <option>Super Admin</option>
                                <option>User</option>
                                <option>Viewer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Gender</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Image</label>
                            <input class="form-control" type="file">
                        </div>
                    </div>
                    <div class="col-md-12 pt-4 d-flex">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    data() {
        return {
            user: {
                name:'',
                username: '',
                surname: '',
                email :'',
                type: 'User',
                gender:'Male',
            }
        }
    },

}
</script>

<style>

</style>