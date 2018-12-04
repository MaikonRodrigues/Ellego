<style>
    .grayscale { filter: grayscale(100%); }
</style>

<div class="col-md-4">
    <div class="card">
        {{-- <div class="card-header text-center ">Informations</div> --}}

        <div class="card-body text-center">
            <img src="/imgs/profile.png" alt="">
            <h6>{{ Auth::user()->name }}</h6>

            <img src="/imgs/star.png" alt="">
            <img src="/imgs/star.png" title="grayscale" style='filter: grayscale(100%);'>
            <img src="/imgs/star.png" style='filter: grayscale(100%);'>
            <img src="/imgs/star.png" style='filter: grayscale(100%);'>
            <img src="/imgs/star.png" style='filter: grayscale(100%);'>
            <p>Pontos: {{Auth::user()->pontuacao}}</p>    
            <div class="text-center">
            </div>
        </div>
    </div>

    <div class="card mt-2">
        {{-- <div class="card-header text-center ">Badges</div> --}}

        <div class="card-body text-center">
           <h5>Medalhas</h5>  
            <img src="/imgs/badge.png" alt="">
            <img src="/imgs/badge2.png" alt="">
        </div>
    </div>
</div>
