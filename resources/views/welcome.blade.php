<x-layout>
    <script>
        window.addEventListener('load', function() {
            document.querySelector('#linkHome').classList.add('active')

        });
    </script>
    <header class="container-fluid">
        <div class="container">
            <div class="row vh-100 pb-3 align-items-center align-content-center align-content-lg-center">
                <div class="col-12 col-lg-4 order-2 order-lg-1 text-center text-lg-start">
                    <h1 class="display-4 fw-semibold">Lateralmente</h1>
                    <p class="my-3">/la·te·ral·mén·te/</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                        <p class="mb-0 fw-semibold">avverbio</p>
                    </div>
                    <p class="my-3"> Di lato, di fianco.</p>
                </div>
                <div class="col-12 col-lg-8 order-1 order-lg-2 pe-0">
                    <img class="img-fluid coverIndex" src="./images/index/braccio-guanto.webp" alt="">
                </div>
            </div>
        </div>
    </header>
    <div>
        <div class="row justify-content-center">
            <hr style="width:30%">
        </div>
    </div>
    <section>
        <div class="container py-3 my-3">
            <div class="row my-5 justify-content-center">
                <div class="col-lg-7 col-10 text-center px-4 mx-4 font-monospace">
                    <p>“Lateralmente” è frutto di una ricerca che vuole indagare il rapporto
                        fra ciò che esiste dentro e fuori di sé, nel mondo di oggi.
                        Lateralmente suggerisce il disturbo mentale da tabù, quale lo disegna
                        la società attuale e la fetta più ignorante di essa, nell’opposto di
                        questo.
                    </p>
                    <a class="text-black" href="{{route('lateralmente')}}">
                        <p class="fw-light underline">Leggi di più</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="row justify-content-center">
            <hr style="width:30%">
        </div>
    </div>
    <section>
        <div class="container py-3 my-3">
            <div class="row">
                <div class="col-12 my-5">
                    <h2 class="display-6 text-center text-main-gradient">Work</h2>
                </div>
            </div>
            <div class="row justify-content-evenly mb-5 pb-5">
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('ilCubo')}}" class=""><img class="img-fluid" src="images/welcome/cubo1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('ilCubo')}}" class=""><img class="img-fluid" src="images/welcome/cubo3.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('ilCubo')}}" class=""><img class="img-fluid" src="images/welcome/cubo2.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('theSign')}}" class=""><img class="img-fluid" src="images/welcome/sign2.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('theSign')}}" class=""><img class="img-fluid" src="images/welcome/sign1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('theSign')}}" class=""><img class="img-fluid" src="images/welcome/sign3.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('mirrors')}}" class=""><img class="img-fluid" src="images/welcome/specchio1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('mirrors')}}" class=""><img class="img-fluid" src="images/welcome/specchio2.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('mirrors')}}" class=""><img class="img-fluid" src="images/welcome/specchio3.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('insicureStabilita')}}" class=""><img class="img-fluid" src="images/welcome/insicure1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('insicureStabilita')}}" class=""><img class="img-fluid" src="images/welcome/insicure2.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('insicureStabilita')}}" class=""><img class="img-fluid" src="images/welcome/insicure3.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('ilTubo')}}" class=""><img class="img-fluid" src="images/welcome/tubo1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('ilTubo')}}" class=""><img class="img-fluid" src="images/welcome/tubo3.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('ilTubo')}}" class=""><img class="img-fluid" src="images/welcome/tubo2.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('theBelly')}}" class=""><img class="img-fluid" src="images/welcome/belly1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('theBelly')}}" class=""><img class="img-fluid" src="images/welcome/belly2.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('theBelly')}}" class=""><img class="img-fluid" src="images/welcome/belly3.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('insideTheOutside')}}" class=""><img class="img-fluid" src="images/welcome/inside1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('insideTheOutside')}}" class=""><img class="img-fluid" src="images/welcome/inside1-1.webp" alt=""></a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 box pt-3 mt-2">
                    <a href="{{route('insideTheOutside')}}" class=""><img class="img-fluid" src="images/welcome/inside1-2.webp" alt=""></a>
                </div>
            </div>
        </div>
    </section>

</x-layout>