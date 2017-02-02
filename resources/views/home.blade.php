@extends('layouts.app')

@section('content')

<section class="section is-hidden-tablet flex-container fxf-colw f-ai-c">

    <div>
        <a class="nav-item is-hidden-tablet">
            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
        </a>
    </div>
    <div>

        <a class="is-tab">
            Profile
        </a>

        |


        <a class="is-tab">
            Log out
        </a>

        |


        <a class="is-tab">
            Profile
        </a>

        |

        <a class="is-tab">Log out</a>

    </div>
</section>
<div id="root">
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-one-quarter-tablet">
                    <aside class="menu box">
                        <p class="menu-label">
                            General
                        </p>
                        <ul class="menu-list">
                            <li><a>Dashboard</a></li>
                            <li><a>Customers</a></li>
                        </ul>
                        <p class="menu-label">
                            Administration
                        </p>
                        <ul class="menu-list">
                            <li><a>Team Settings</a></li>
                            <li>
                                <a class="is-active">Manage Your Team</a>
                                <ul>
                                    <li><a>Members</a></li>
                                    <li><a>Plugins</a></li>
                                    <li><a>Add a member</a></li>
                                </ul>
                            </li>
                            <li><a>Invitations</a></li>
                            <li><a>Cloud Storage Environment Settings</a></li>
                            <li><a>Authentication</a></li>
                        </ul>
                        <p class="menu-label">
                            Transactions
                        </p>
                        <ul class="menu-list">
                            <li><a>Payments</a></li>
                            <li><a>Transfers</a></li>
                            <li><a>Balance</a></li>
                        </ul>
                    </aside>
                </div>

                <div class="column flex-container-important">
                    <div class="box flex">
                        <div class="column">
                            <h1 class="title is-1">Title1</h1>
                            <div class="content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto deserunt quisquam in molestias enim excepturi, odio numquam perferendis iure suscipit nemo maiores, autem porro neque sed totam? Consequatur, incidunt, perferendis!
                                </p>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section">
        <div class="container">
            <p class="control has-icon has-icon-right">
                <input class="input" type="email" placeholder="Search">
                <span class="icon">
                    <i class="fa fa-search"></i>
                </span>
            </p>
            <div class="box">
                <article-category>
                    <template slot="header">หมวด qweqwe</template>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                </article-category>
            </div>
            <div class="box">
                <article-category>
                    <template slot="header">หมวด ABC</template>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                    <div class="column is-one-third-desktop is-half-tablet">
                        <card-article></card-article>
                    </div>
                </article-category>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <message  color="is-info">
                <template slot="header">Hello World</template>
                <template slot="body">Hello body</template>
            </message>
            <message  color="is-success">
                <template slot="header">Hello World</template>
                <template slot="body">Hello body</template>
            </message>
            <message  color="is-primary">
                <template slot="header">Hello World</template>
                <template slot="body">Hello body</template>
            </message>
            <message  color="is-warning">
                <template slot="header">Hello World</template>
                <template slot="body">Hello body</template>
            </message>

            <bulma-modal>
                <template slot="header">TEST</template>
                <template slot="body">testsetset</template>
            </bulma-modal>

        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-one-third-tablet">
                    <div class="block">
                        <figure class="image is-square">
                            <img src="http://bulma.io/images/placeholders/1280x960.png">
                        </figure>
                    </div>
                    <div class="block">
                        <figure class="image is-square">
                            <img src="http://bulma.io/images/placeholders/1280x960.png">
                        </figure>
                    </div>
                </div>
                <form action="/home">
                    <div class="column">
                        <div class="box">
                            <div class="control is-grouped block">
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="FirstName" required>
                                </p>
                                <p class="control is-expanded">
                                    <input class="input" type="text" placeholder="LastName" required>
                                </p>
                            </div>

                            <p class="control is-expanded block">
                                <input class="input" type="text" placeholder="ID No.">
                            </p>
                            
                            <p class="control has-icon has-icon-right block">
                                <input class="input" type="text" placeholder="Email" value="">
                                <span class="icon is-small">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                {{-- <span class="help is-success">This username is available</span> --}}
                            </p>

                            <div class="control is-grouped block">
                                <p class="control has-icon has-icon-right is-expanded">
                                    <input class="input" type="password" placeholder="Password" required>
                                    <span class="icon is-small">
                                        <i class="fa fa-warning is-hidden"></i>
                                    </span>
                                </p>
                                <p class="control has-icon has-icon-right is-expanded">
                                    <input class="input" type="password" placeholder="Repeat Password" required>
                                    <span class="icon is-small">
                                        <i class="fa fa-warning is-hidden"></i>
                                    </span>
                                </p>
                            </div>
                            
                            <div class="control is-grouped block">

                                <p class="control is-expanded">
                                    <input class="input" type="number" placeholder="Age" required>
                                </p>

                                <p class="control is-expanded">
                                    <input class="input" type="tel" placeholder="PhoneNumber">
                                </p>
                                
                                <p class="control">
                                    <span class="select">
                                        <select>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </span>
                                </p>
                                
                                <p class="control">
                                    <span class="select">
                                        <select>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>O</option>
                                            <option>...</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                            
                            <p class="control is-expanded block">
                                <textarea class="textarea" placeholder="Congenital Disease"></textarea>
                            </p>

                            <p class="control is-expanded block">
                                <textarea class="textarea" placeholder="Allergic"></textarea>
                            </p>
                            
                            <button class="button is-primary is-outlined is-fullwidth" type="submit">Submit</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="hero is-primary is-medium ">
        <div class="hero-body">
            <div class="container">

                <h1 class="title">
                    Subject
                </h1>
                <p class="control">
                  <span class="select">
                    <select>
                        <option>Select dropdown</option>
                        <option>With options</option>
                        <option>Select dropdown</option>
                        <option>With options</option>
                        <option>Select dropdown</option>
                        <option>With options</option>
                        <option>Select dropdown</option>
                        <option>With options</option>
                    </select>
                </span>
            </p>
        </div>
    </div>
</section>
</div>

@stop

@section('script')

<script>

    //Article categories
    Vue.component('article-category', {
        props: [],

        template:`
        <div>
            <div class="block">
                <h2 class="title is-2">
                    <slot name="header"></slot>
                </h2>
            </div>
            <div class="block">
                <div class="columns is-multiline">
                    <slot></slot>
                </div>
            </div>
        </div>
        `
    });

    //Card component
    Vue.component('card-article', {
        props: ['header', 'img-src', 'img-size'],

        template:`
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
                </figure>
            </div>
            <div class="card-content">
                <div class="content">
                    Lorem ipsum dolor sit amet
                    <br>
                    <small>11:09 PM - 1 Jan 2016</small>
                </div>
            </div>
        </div>
        `,


    });

    //Message component
    Vue.component('message', {
        props: ['header','message','color'],

        template: `
        <article class="message" :class="color" v-show="isVisible">
            <div class="message-header">
                <p><slot name="header">Message</slot></p>
                <button class="delete" @click="isVisible = false"></button>
            </div>
            <div class="message-body">
                <slot name="body">Hello, This is a cool message!</slot>
            </div>
        </article>
        `,

        data(){
            return {
                isVisible: true,
            }
        }
    });

            //Tabs Component
            Vue.component('tabs', {
                template: `
                <div>
                    <ul class="nav nav-tabs">
                        <slot></slot>
                    </ul>
                </div>  
                `
            });
            
            Vue.component('tab', {
                props: ['name', 'id'],
                template: `
                <div>
                    <li class="nav nav-item">
                        <a class="nav-link"  data-toggle="tab" :href="id" role="tab" @click="showTab(id)">@{{ name }}</a>
                    </li>

                    <div class="tab-content">
                        <div class="tab-pane" :id="id" role="tabpanel"><slot></slot></div>
                    </div>
                </div>
                `,
                methods: {
                    showTab(id) {
                        $('.nav-tabs .tab-pane').removeClass('active');
                        $('.nav-tabs .nav-link').removeClass('active');
                        $('#'+id).addClass('active');
                        $('.nav-link').removeClass('active');
                        $(this).addClass('active');
                    }
                }
            });

            //Tasks-list Component
            Vue.component('task-list', {
                template: `
                <div>
                    <task v-for="task in tasks">@{{ task.description }}</task>
                </div>
                `,

                data () {
                    return {
                        tasks: [
                        { description: 'K', completed: true },
                        { description: 'Ka', completed: false },
                        { description: 'Kan', completed: true },
                        { description: 'Kano', completed: false },
                        { description: 'Kanor', completed: true }
                        ]
                    }
                }
            });

            Vue.component('task', {
                template: `
                <li><slot></slot></li>
                `
            });


            // Jumbotron component
            Vue.component('jumbotron', {
                props: ['title', 'body'],

                data() {
                    return {
                        isVisible: true
                    };
                },

                template: `
                <div class="jumbotron" v-show="isVisible">
                    <span class="display-3">@{{ title }}</span>
                    <button type="button" @click="hideJumbo">x</button>
                    <p class="lead">@{{ body }}</p>
                </div>
                `,

                methods: {
                    hideJumbo() {
                        this.isVisible = false;
                    }
                }
            });

            Vue.component('bulma-modal', {

                data() {
                    return {
                        isActive: false
                    }
                },

                template: `
                <div>
                    <a class="button is-primary" @click="isActive = !isActive">test</a>
                    <div class="modal" :class="{'is-active': isActive}">
                        <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title"><slot name="header"></slot></p>
                                <button class="delete" @click="toggleModal"></button>
                            </header>

                            <section class="modal-card-body">
                                <slot name="body"></slot>
                            </section>

                            <footer class="modal-card-foot">
                                <slot name="footer">
                                    <a class="button is-primary">Okay</a>
                                </slot>
                                <a class="button" @click="toggleModal">Cancel</a>
                            </footer>
                        </div>
                    </div>
                </div>
                `,

                methods: {
                    toggleModal() {
                        this.isActive = !this.isActive;
                    }
                }
            });

            Vue.component('bulma-modal-login', {

                data() {
                    return {
                        isActive: false
                    }
                },

                template: `
                <div>
                    <a class="button is-primary" @click="isActive = !isActive">test</a>
                    <div class="modal" :class="{'is-active': isActive}">
                        <div class="modal-background"></div>
                        <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title"><slot name="header"></slot></p>
                                <button class="delete" @click="toggleModal"></button>
                            </header>

                            <section class="modal-card-body">
                                <slot name="body"></slot>
                            </section>

                            <footer class="modal-card-foot">
                                <slot name="footer">
                                    <a class="button is-primary">Okay</a>
                                </slot>
                                <a class="button" @click="toggleModal">Cancel</a>
                            </footer>
                        </div>
                    </div>
                </div>
                `,

                methods: {
                    toggleModal() {
                        this.isActive = !this.isActive;
                    }
                }
            });
            
            //Vue Object
            var vue = new Vue({
                el: '#app',

                data: {
                    newName: '',
                    message: 'Hello World',
                    names: ['Joe', 'Mary', 'Jane'],
                    title: 'Hello',
                    red: 'color-red',
                    isLoading: false,
                    tasks: [
                    { description: 'K', completed: true },
                    { description: 'Ka', completed: false },
                    { description: 'Kan', completed: true },
                    { description: 'Kano', completed: false },
                    { description: 'Kanor', completed: true }
                    ],

                },

                methods: {
                    addName() {
                        this.names.push(this.newName);
                        this.newName = '';
                    },
                    enter(e) {
                        if(e.keyCode == 13){
                            this.names.push(this.newName);
                            this.newName = '';
                        }
                    },
                    toggleClass() {
                        this.isLoading = !this.isLoading;
                    },
                },

                computed: {
                    reverse() {
                        return this.message.split('').reverse().join('');
                    },

                    incompleteTasks() {
                        return this.tasks.filter(function (task) {
                            return task.completed;
                        });
                    }
                }

            });

        </script>


        <script>
    //bulma.js
    $( document ).ready(function() {
        var burger = document.querySelector('.nav-toggle');
        var menu = document.querySelector('.nav-menu');
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });

        $("#top-nav").sticky({topSpacing:0});
    });
</script>

@stop
