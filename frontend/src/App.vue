<script setup>
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <div>
    <nav class="mega menu navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="nav bar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="https://www.seofrequency.com/"><img src="https://seofrequency.com/seositecheckup/assets/flax_images/logos/logo1.png" alt="SEO Frequency" i-amphtml-auto-lightbox-visited=""></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right hidden-md hidden-sm hidden-xs">
            <li><a class="btn-light btn-radius btn-brd top-btn" href="https://seofrequency.com/seositecheckup/home/sign_up"><i class="fa fa-angle-double-right"></i><strong> SIGN UP </strong>FREE</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right menu-top">
            <li class="active"><a href="https://seofrequency.com/seositecheckup/googles">Google &nbsp;2024</a></li>
            <li><a href="#" target="_blank"><i class="fas fa-tools"></i>Articles</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Free Tools</a></li>
            <li><a href="#">Recent</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Log In</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
  transition: filter 300ms;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
