<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <router-link
              tag="li"
              class="nav-item"
              exact
              :to="'/'"
              active-class="active"
            >
              <a class="nav-link">Doc</a>
            </router-link>
            <router-link
              tag="li"
              class="nav-item"
              :to="'/magistr'"
              active-class="active"
            >
              <a class="nav-link">Magistr</a>
            </router-link>
            <router-link
              tag="li"
              class="nav-item"
              :to="'/korgar'"
              active-class="active"
            >
              <a class="nav-link">Korgar</a>
            </router-link>
          </ul>
      </div>
      </div>
    </nav>
    <router-view></router-view>
  </div>
</template> 

<script>
import './assets/css/bootstrap.min.css'
import './assets/js/bootstrap.bundle'
export default {
  data() {
    return {
      
    };
  },
};
// fetch('http://localhost/select/index.php', {
//             method: "GET"
//         }).
//             then(response => response.json()).
//             then(json => {
//                 console.log(json);
//             }).
//             catch(err => {
//                 console.log(err);
//             });
</script>