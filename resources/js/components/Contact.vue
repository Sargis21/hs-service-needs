<template>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase" v-for="name in companyName">{{name.name}}</h1>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <router-link class="nav-link tm-nav-link" to="/">Home</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link tm-nav-link" to="about">About</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link tm-nav-link" to="services">Services</router-link>
                                </li>                            
                                <li class="nav-item active">
                                    <router-link class="nav-link tm-nav-link" to="contact">Contact <span class="sr-only">(current)</span></router-link>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact" v-for="data in getData">
                        <h2 class="mb-4 tm-content-title">{{ data.title }}</h2>
                        <p class="mb-85">{{ data.text }}</p>
                        <form @submit.prevent="sendData">
                            <div class="form-group mb-4">
                                <input v-model="name" type="text" name="name" class="form-control" placeholder="Name" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input v-model="email" type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea v-model="text" rows="6" name="message" class="form-control" placeholder="Message..." required=""></textarea>
                            </div>
                            <div style="max-with:100px" v-if="modal" class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong> Thank you {{user}}! </strong><br>Your email The mail has been sent.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="text-right">
                                <button style="border-radius: 25px;" type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2020 HS Services Needs. 
                    
                    | All Rights Reserved.</p>
                </footer>
            </div>  
        </div>


        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {

        data : () => ({
            companyName : '',
            getData : '',
            name : '',
            email: '',
            text: '',
            user: '',
            modal : false
        }),
        mounted() {
            this.getCompanyName(),
            this.getContactData()
        },
        methods : {
            getCompanyName() {
                axios.get('api/company-name')
                .then(res => {
                    this.companyName = res.data
                })
            },
            getContactData() {
                axios.get('api/contact-data')
                .then(res => {
                    this.getData = res.data
                })
            },
            sendData() {
                axios.post('api/send-email', {name:this.name, email:this.email, text:this.text})
                .then(res => {
                    console.log(res.data)
                }),
                this.user = this.name,
                this.name = '',
                this.email = '',
                this.text = '',
                this.modal = true
            },

        }
    }
</script>
