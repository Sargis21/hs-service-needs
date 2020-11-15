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
                                <li class="nav-item active">
                                    <router-link class="nav-link tm-nav-link" to="/about">About <span class="sr-only">(current)</span></router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link class="nav-link tm-nav-link" to="/services">Services</router-link>
                                </li>                            
                                <li class="nav-item">
                                    <router-link class="nav-link tm-nav-link" to="/contact">Contact</router-link>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content tm-about" v-for="data in getData">
                        <h2 class="mb-5 tm-content-title"></h2>
                        <hr class="mb-4">
                        <div class="media my-3">
                            <i class="fas fa-shapes fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>{{ data.about_1 }}</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                            <i class="fas fa-draw-polygon fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>{{ data.about_2 }}</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                            <i class="fab fa-creative-commons-share fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>{{ data.about_3 }}</p>
                            </div> 
                        </div>
                        <div class="media my-3">
                            <i class="fas fa-bookmark fa-3x p-3 mr-4"></i>
                            <div class="media-body">
                                <p>{{ data.about_4 }}</p>
                            </div> 
                        </div>                        
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

        <!-- Diagonal background design -->
        <div class="tm-bg">
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
        }),
        mounted() {
            this.getCompanyName(),
            this.getAboutData()
        },
        methods : {
            getCompanyName() {
                axios.get('api/company-name')
                .then(res => {
                    this.companyName = res.data
                })
            },

            getAboutData() {
                axios.get('api/about-data')
                .then(res => {
                    this.getData = res.data
                })
            }
        }
    }
</script>
