
<main class="" id="main-collapse">
<!-- Add your site or app content here -->
<div class="hero-full-wrapper">
  <div class="grid">
  <div class="gutter-sizer"></div>
    <div class="grid-sizer"></div>
    
  <?php
    $obtenerSecciones = new seccionclassC();
    $obtenerSecciones -> obtenerSeccionC();
  ?>
    
  </div>
</div>

<div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
    aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
  </div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
       masonryBuild();
    });
</script>
  
</main>
