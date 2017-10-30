<template>
  <div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <h1 id="logo">
        <a href="home.html">
          <img src="../../assets/logos/CODEbreak_logo.png" alt="Codebreaks" title="Codebreaks">
        </a>
      </h1>

      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Monday
              </a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
              <ul class="sidebar-nav">
                <li>
                  <a href="#">Pre Order</a>
                </li>
                <li>
                  <a href="#">Head Out</a>
                  <ul>
                    <li><a href="#">Burger Junkys</a></li>
                    <li><a href="#">Pizza Latino</a></li>
                    <li><a href="#">Tai Majal</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#">Take Away</a>
                  <ul>
                    <li><a href="#">Mama Papa</a></li>
                    <li><a href="#">Pizza Latino</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Tuesday
              </a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block">
              <ul class="sidebar-nav">
                <li>
                  <a href="#">Pre Order</a>
                </li>

                <ul>
                  <li><a href="#">Burger Junkys</a></li>
                  <li><a href="#">Pizza Latino</a></li>
                  <li><a href="#">Tai Majal</a></li>
                </ul>
                <li>
                  <a href="#">Head Out</a>
                </li>
                <li>
                  <a href="#">Take Away</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Wednesday
              </a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block">
              <ul class="sidebar-nav">
                <li>
                  <a href="#">Pre Order</a>
                </li>

                <ul>
                  <li><a href="#">Burger Junkys</a></li>
                  <li><a href="#">Pizza Latino</a></li>
                  <li><a href="#">Tai Majal</a></li>
                </ul>
                <li>
                  <a href="#">Head Out</a>
                </li>
                <li>
                  <a href="#">Take Away</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Thursday
              </a>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-block">
              <ul class="sidebar-nav">
                <li>
                  <a href="#">Pre Order</a>
                </li>

                <ul>
                  <li><a href="#">Burger Junkys</a></li>
                  <li><a href="#">Pizza Latino</a></li>
                  <li><a href="#">Tai Majal</a></li>
                </ul>
                <li>
                  <a href="#">Head Out</a>
                </li>
                <li>
                  <a href="#">Take Away</a>
                </li>

              </ul>
            </div>
          </div>

        </div>

        <div class="card">
          <div class="card-header" role="tab" id="headingFive">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Friday
              </a>
            </h5>
          </div>

          <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-block">
              <ul class="sidebar-nav">
                <li>
                  <a href="#">Pre Order</a>
                </li>

                <ul>
                  <li><a href="#">Burger Junkys</a></li>
                  <li><a href="#">Pizza Latino</a></li>
                  <li><a href="#">Tai Majal</a></li>
                </ul>
                <li>
                  <a href="#">Head Out</a>
                </li>
                <li>
                  <a href="#">Take Away</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <ul>
          <li><a alt="" title="Terms and Conditions" href="#">T&C</a></li>
          <li><a alt="" title="Imprint" href="#">IMPRINT</a></li>
          <li><a alt="" title="About us" href="#">ABOUT</a></li>
          <li><a alt="" title="Logout" href="#"><img src="login-icon.png" width="15" height="15" alt="Logout"></a></li>

        </ul>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Navbar -->
    <!--
    <nav id="page-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <form class="form-inline">
          <a href="#"><i class="fa fa-sign-out fa-3x" aria-hidden="true"
             style="color: white"></i></a>
        </form>
      </div>
    </nav>-->
    <!-- /#page-navbar -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <gmap-map
                :center="{lat:52.493311, lng:13.447605}"
                :zoom="15"
                style="width: 100%; height: 100vh; background-color: grey;">
          <gmap-marker
                  :key="index"
                  v-for="(m, index) in markers"
                  :position="m.position"
                  :title="m.label"
                  :clickable="true"
                  @click="openRestaurant(m.restaurantId)"
          ></gmap-marker>
        </gmap-map>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Dashboard',
  data() {
    return {
        actions: [],
        markers: [{
            restaurantId: '1',
            position: {lat: 52.492684, lng: 13.444432}
        }, {
            restaurantId: '2',
            position: {lat: 11.0, lng: 11.0}
        }]
    }
  },
  methods: {
    openRestaurant: function(restaurantId){
        console.log('MAP', restaurantId);
    }
  },
  created() {
    axios.get('http://api.codebreak.local/action')
      .then(response => {
          this.actions = response.data.actions
      })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  body {
    overflow-x: hidden;
  }

  #wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }

  #wrapper.toggled {
    padding-left: 250px;
  }

  #sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: scroll; /*Habe ich verändert, damit der footer nicht blöd aussieht*/
    background: #eee;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
  }

  #wrapper.toggled #sidebar-wrapper {
    width: 250px;
  }

  #page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
  }

  #wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
  }

  #logo img {
    width: 90%;
    margin: 20px 5% 20px;
  }


  /* Sidebar Styles */

  .sidebar-nav {
    top: 0;
    margin: 0;
    padding: 0;
    list-style: none;
  }

  .sidebar-nav li {
    text-indent: 15px;
    list-style: none;
    padding-top: 20px;
  }

  .sidebar-nav > li {
    padding-bottom: 0;
  }

  .sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #000;
    font-size: 20px;
  }

  .sidebar-nav ul {
    padding-left: 5px;
  }

  .sidebar-nav ul li {
    font-weight: lighter;
    padding-top: 0;
    line-height: 25px;
  }

  .sidebar-nav > li > a {
    position: relative;
  }

  .sidebar-nav > li > a:after {
    background: url("../../assets/Add.png") no-repeat right 5px;
    width: 30px;
    height: 30px;
    content: "";
    display: inline-block;
    position: absolute;
    right: 10px;
    top: 0;


  }

  .sidebar-nav li a:hover {
    text-decoration: none;
    background: #ddd;
  }

  .sidebar-nav li a:active,
  .sidebar-nav li a:focus {
    text-decoration: none;
  }

  .sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
  }

  .sidebar-nav > .sidebar-brand a {
    color: #999999;
  }

  .sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
  }

  @media(min-width:768px) {
    #wrapper {
      padding-left: 0;
    }
    #wrapper.toggled {
      padding-left: 250px;
    }
    #sidebar-wrapper {
      width: 0;
    }
    #wrapper.toggled #sidebar-wrapper {
      width: 250px;
    }
    #page-content-wrapper {
      padding: 0px;
      position: relative;
    }
    #wrapper.toggled #page-content-wrapper {
      position: relative;
      margin-right: 0;
    }
  }

  /* Accordion */
  .card {
    border: none;
    background: transparent;
  }

  .card-header {
    padding: 0;
    background-color: transparent;
    border-bottom: 2px solid rgb(230, 230, 230);
  }

  .card-header a {
    padding: 15px 15px 10px;
    display: block;
    color: #000;
  }

  .card-header a:hover {
    background: #ddd;
  }


  .card-header a:hover {
    text-decoration: none;
  }

  .card-block {
    padding-bottom: 20px;
  }

  .collapse {
    background: #e6e6e6;
  }

  .footer {
    width: 250px;
    position: fixed;
    background-color: #eee;
    bottom: 0px;
    color: #000;
    border-top: 2px solid rgb(230, 230, 230);


  }

  .footer ul{
    padding: 5px;
    margin-top: -6px;
    margin-bottom: -4px;
    margin-left: 10px;
  }

  .footer li{
    list-style: none;
    font-size: 10px;
    display:inline;
    margin: 10px;
    float:left;
  }

  .footer li:last-child{
    float:right;
    margin-right: 20px;
  }


  .footer a{
    color: black;
  }

  .bottom-margin {
    margin-bottom: 15px;
  }

  .top-margin {
    margin-top: 15px;
  }

  .left-margin {
    margin-left: 1px;
  }

  .left-double-margin {
    margin-left: 2px;
  }

  .right-margin {
    margin-right: 1px;
  }

  * {
    font-family: 'Source Sans Pro', sans-serif;
  }

  .container-fluid{
    padding-right:0;
    padding-left: 0;
  }

</style>
