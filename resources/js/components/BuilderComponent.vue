<template>
    <div class="container builder-container mt-5 mb-5">
        <div class="row">

            <div class="col-md-12 col-lg-8 mt-5" v-show="userSettings">
                <h2>User Settings</h2>
                <hr>
                <br>

                <form v-show="form1">
                    <div class="form-group">
                        <label for="usageType">Application usage</label>
                        <select id="usageType" class="form-control" v-model="usageType">
                            <option>Static display of media (informative)</option>
                            <option>Dynamic display of media (informative and/or entertainment)</option>
                            <option>E-commerce</option>
                            <option>Web portal (forum/social media)</option>
                            <option>CMS based website</option>
                        </select><br>

                        <label for="pagesCount">How many pages do you want?</label><br>
                        <input style="text-align: center;" type="number" v-model="amountPages">

                        <br><br>
                        <label for="description">Please describe your idea</label>
                        <textarea name="description" placeholder="Description" id="description" class="form-control"
                            rows="3" v-model="message"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" v-on:click="showForm2">Next</button>

                    <br>
                    <br>
                </form>

                <form v-show="form2">
                    <div class="form-group d-flex flex-wrap" >
                        <a class="component-anchor" v-for="component in components" v-bind:key="component.id" v-on:click="addComponent(component)">
                            <div class="card" style="width: 11rem;">
                                <div class="card-body text-center center">
                                    <p class="component-name">{{ component.name }}</p>
                                    <img :src="'assets/img/icons/' + component.path + '.png'" class="component-icon" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <button type="button" class="btn btn-primary" v-on:click="showForm1">Previous</button>
                    <button type="button" class="btn btn-primary float-right" v-on:click="showForm3">Next</button><br><br>
                </form>
            </div>

            <div class="col-md-12 col-lg-4 mt-5" style="background-color: g;" v-show="userSettings">
                <div class="card overview-card" style="max-width: 42rem;">
                    <div class="card-header">
                        Overview of application
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            {{ usageType }}
                        </li>
                        <li class="list-group-item">
                            {{ amountPages }}
                        </li>
                        <li class="list-group-item">
                            {{ message }}
                        </li>
                    </ul>
                </div>

                <br>
                <br>

                <div class="card overview-card" style="max-width: 42rem;">
                    <div class="card-header">
                        Overview of selected items
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="component in chosenComponents" v-bind:key="component.id">
                            <img :src="'assets/img/icons/' + component.path + '.png'" class="card-icon-custom" alt="">
                            <p class="component-name">{{ component.name }}</p>
                            <button class="btn btn-outline-danger btn-sm btn-just-icon erase" v-on:click="deleteComponent(component)">X</button>
                        </li>
                    </ul>
                </div>
                <br>
                <br>
            </div>
        </div>

        <div class="row" v-show="form3">
            <div class="col-12">
                <div>
                    <div class="container">
                        <h2>Overview of selected items:</h2>
                        <hr>
                        <h4>Selected Webapplication <button type="button" style="float: right;"
                                class="btn btn-primary" v-on:click="showForm1">Change</button></h4>
                        <br>
                        <ul>
                            <li style="font-size: 16px;">{{ usageType }}</li>
                            <li style="font-size: 16px;">{{ amountPages }}</li>
                            <li style="font-size: 16px;">{{ message }}</li>
                        </ul>
                        <h4>Selected Components <button type="button" style="float: right;" class="btn btn-primary" v-on:click="showForm2">Change</button>
                        </h4> <br>
                        <ul>
                            <li class="list-group-item" v-for="component in chosenComponents" v-bind:key="component.id">
                                <img :src="'assets/img/icons/' + component.path + '.png'" class="card-icon-custom" alt="">
                                <p class="component-name">{{ component.name }}</p>
                        </li>
                        </ul>
                    </div>
                </div>

                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="nc-icon nc-single-02"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="nc-icon nc-email-85"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea class="form-control" rows="4" placeholder="What can we help you with?"></textarea>
                    <div class="row">
                        <div class="col-12">
                            <button style="display: block; margin-left: auto; margin-right: auto;"
                                class="btn btn-primary btn-lg btn-fill">Submit request</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form1: true,
                form2: false,
                form3: false,
                userSettings: true,
                usageType: '',
                amountPages: '',
                message: '',
                components: [],
                component_id: '',
                chosenComponents: []
            }
        },
        created() {
            this.fetchComponents()
        },
        methods: {
            showForm1: function() {
                this.form1 = true;
                this.form2 = false;
                this.form3 = false;
                this.userSettings = true;
            },
            showForm2: function() {
                this.form1 = false;
                this.form2 = true;
                this.form3 = false;
                this.userSettings = true;
            },
            showForm3: function() {
                this.form1 = false;
                this.form2 = false;
                this.form3 = true;
                this.userSettings = false;
            },
            fetchComponents: function() {
                fetch('api/components')
                .then(res => res.json())
                .then(res => {
                    this.components = res.data
                })
            },
            deleteComponent: function(component) {
                let index = this.chosenComponents.indexOf(component);
                this.chosenComponents.splice(index, 1);
            },
            addComponent: function(component) {
                if(this.chosenComponents.includes(component)) {
                    this.deleteComponent(component);
                } else {
                    this.chosenComponents.push(component);
                }
                console.log(this.chosenComponents);
                console.log(this.components);
            }

        }
    }
</script>
