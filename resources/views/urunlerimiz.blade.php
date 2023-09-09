@extends('layout')
@section('about')
                    
<div class="container">
    <h1 class="text-center mt-5">Ürünlerimiz</h1>
   
    <div class="row">     
    <div class="col-md-4 col-lg-3 col-sm-6">
    <div class="card mb-4 "onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)" >
        <img src="img/pro (1).jpg" class="card-img-top" alt="Product 1">
        <div class="card-body">
            <h5 class="card-title">Ürün AP-15</h5>
            <p class="card-text">Standart tip palet 80 X 120cm</p>
        </div>
    </div>
</div>  

<div class="col-md-4 col-lg-3 col-sm-6">
    <div class="card mb-4"onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
        <img src="img/60-100.jpg" class="card-img-top" alt="Product 2">
        <div class="card-body">
            <h5 class="card-title">Ürün AP-16</h5>
            <p class="card-text">Palet 60 X 80cm</p>
        </div>
    </div>
</div>


        <div class="col-md-4 col-lg-3 col-sm-6">
        <div class="card mb-4 shadow-sm" onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
              <img src="img/60-80.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Ürün AP-17</h5>
                <p class="card-text">Palet 60 X 100cm</p>
            </div>
        </div>
    </div>

        <div class="col-md-4 col-lg-3 col-sm-6">
        <div class="card mb-4 shadow-sm" onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
              <img src="img/50-100plus (1).jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Ürün AP-18</h5>
                <p class="card-text">Palet 50 X 100cm</p>
            </div>
        </div>
    </div>

          <div class="col-md-4 col-lg-3 col-sm-6">
        <div class="card mb-4 shadow-sm" onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
              <img src="img/70-100urun.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Ürün AP-19</h5>
                <p class="card-text">Ters çakım palet 80 X 100cm </p>
            </div>
        </div>
    </div>

        <div class="col-md-4 col-lg-3 col-sm-6">
        <div class="card mb-4 shadow-sm" onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
              <img src="img/80-120new.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Ürün AP-20</h5>
                <p class="card-text">Palet 80 X 120cm</p>
            </div>
        </div>
    </div>

        <div class="col-md-4 col-lg-3 col-sm-6">
        <div class="card mb-4 shadow-sm" onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
              <img src="img/urun1.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Ürün AP-21</h5>
                <p class="card-text">Palet 100 X 120cm</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-lg-3 col-sm-6">
        <div class="card mb-4 shadow-sm" onmouseover="addHoverEffect(this)" onmouseout="removeHoverEffect(this)">
              <img src="img/kabakk.jpg" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Ürün AP-22</h5>
                <p class="card-text">Palet kapağı</p>
            </div>
        </div>
    </div>
    <p class="text-center text-danger">Ürünlerimiz hakkında daha fazla bilgi almak veya daha fazla ürün görmek için bizimle iletişime geçebilirsiniz...</p>


<script>
    function addHoverEffect(card) {
        card.classList.add("border-primary", "shadow-lg");
    }

    function removeHoverEffect(card) {
        card.classList.remove("border-primary", "shadow-lg");
    }
</script>

    </div>
</div>


@endsection