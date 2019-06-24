@extends('layouts.frontlayout')
@section('content')
    <section class="productsectie1">
        <div class="row">
            <div class="col-12 col-md-6 py-1 py-md-3 p-lg-0 d-flex">
                <div class="intro m-auto text-center">
                    <h1 class="horlogeh1">{{$watch->name}}</h1>
                    <cite>"{{$watch->slogan}}"</cite>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0">
                <div align="center" class="embed-responsive embed-responsive-21by9 video">
                    <video autoplay loop class="videosmall embed-responsive-item video_prof_watches" src="{{asset('videos/'.$watch->videolink)}}"></video>
                </div>
            </div>
        </div>
    </section>
    <section class="productsectie2">
        <div class="row backgrounddark">
            <div class="col-12 my-3 my-md-5">
                <div class="products2">
                    <h2 class="horlogeh2 mx-auto">{{$watch->description}}</h2>
                    <p class="horlogep mx-auto">{{$watch->minidescription}}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="productsectie3">
        <div class="container marketing">
            <div class="row my-3 my-lg-5">
                <div class="col-md-7 ">
                    <h3 class="horlogeh3">{{$watch->detailtitel}}</h3>
                    <p class="horlogep2">{{$watch->detailtext}}</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid w-100" alt="" src="{{asset('images/assets/details/'.$watch->detailimage)}}" data-holder-rendered="true">
                </div>
            </div>
            <div class="row my-3 my-lg-5">
                <div class="col-md-7  order-md-2">
                    <h3 class="horlogeh3">Oystersteel-staal</h3>
                    <p class="horlogep2">Rolex gebruikt Oystersteel-steel voor de stalen horlogekasten. Oystersteel-staal is speciaal ontwikkeld door het merk en behoort tot de 904L staal-familie. Deze superlegeringen worden meestal gebruik in de hightech-, ruimtevaart- en chemische industrie, waar maximale corrosiebestendigheid van essentieel belang is. Oystersteel-staal is uiterst bestendig, biedt een uitzonderlijke afwerking wanneer het gepolijst is en blijft mooi, zelfs onder de zwaarste omstandigheden.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid w-100" alt="" src="{{asset('images/assets/oystersteelstaal.jpg')}}" data-holder-rendered="true">
                </div>
            </div>
            <div class="row mt-3 mt-lg-5">
                <div class="col-md-6 ">
                    <h3 class="horlogeh3">Kaliber 3131</h3>
                    <p class="horlogep2">Iedere Rolex is uitgerust met kaliber 3131, een zelfopwindend mechanisch uurwerk dat volledig ontwikkeld en geproduceerd is door Rolex. Net als alle Rolex Perpetual uurwerken, is kaliber 3131 een gecertificeerde Zwitserse chronometer. Dit is een aanduiding die is voorbehouden aan extreem nauwkeurige horloges die met goed gevolg de testen van het COSC (het Zwitserse officiële testinstituut voor chronometers) hebben doorstaan. Zijn structuur maakt hem, net als alle andere uurwerken van de Oyster-collectie, buitengewoon betrouwbaar.</p>
                </div>
                <div class="col-md-6">
                    <img class="featurette-image img-fluid w-100" alt="" src="{{asset('images/assets/caliber3131.jpg')}}" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </section>
    <section class="productsectie4">
        <div class="row">
            <div class="col-12 p-0">
                <img class="img-fluid w-100" src="{{asset('images/assets/fluid/'.$watch->fluidimage)}}" alt="{{$watch->name}}">
            </div>
        </div>
    </section>
    <section class="productsectie5">
        <div class="container">
            <h4 class="horlogeh4 my-4">Specificaties</h4>
            <div class="row mb-3">
                <div class="col-12 col-md-4 horloges5">
                    <h5 class="horlogeh5">Model kast</h5>
                    <div>
                        <p>Model kast</p>
                        <span>Oyster, 40mm, Oystersteel-staal</span>
                    </div>
                    <div>
                        <p>Oyster-constructie</p>
                        <span>Middenkast uit één stuk, vastgeschroefde achterkant en opwindkroon</span>
                    </div>
                    <div>
                        <p>Diameter</p>
                        <span>40 mm</span>
                    </div>
                    <div>
                        <p>Materiaal</p>
                        <span>Oystersteel-staal</span>
                    </div>
                    <div>
                        <p>Bezel</p>
                        <span>Glad</span>
                    </div>
                    <div>
                        <p>Opwindkroon</p>
                        <span>Geschroefd, Twinlock tweevoudig waterdicht systeem</span>
                    </div>
                    <div>
                        <p>Horlogeglas</p>
                        <span>Krasbestendig saffierglas</span>
                    </div>
                    <div>
                        <p>Waterdichtheid</p>
                        <span>Waterdicht tot 100 meter</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 horloges5">
                    <h5 class="horlogeh5 mt-3 mt-md-0">Uurwerk</h5>
                    <div>
                        <p>Uurwerk</p>
                        <span>Perpetual, mechanisch, automatische opwinding, met een magnetisch schild om het uurwerk te beschermen</span>
                    </div>
                    <div>
                        <p>Kaliber</p>
                        <span>3131, Manufacture Rolex</span>
                    </div>
                    <div>
                        <p>Precisie</p>
                        <span>-2/+2 sec/dag, na plaatsing in horlogekast</span>
                    </div>
                    <div>
                        <p>Functies</p>
                        <span>Gecentreerde uren-, minuten-, en secondewijzers. Secondenstop voor nauwkeurige tijdsinstelling</span>
                    </div>
                    <div>
                        <p>Oscillator</p>
                        <span>Paramagnetische blauwe Paraschrom-spiraalveer</span>
                    </div>
                    <div>
                        <p>Opwinden</p>
                        <span>Bidirectionele automatische opwinding via de Perpetual rotor</span>
                    </div>
                    <div>
                        <p>Gangreserve</p>
                        <span>Ongeveer 48 uur</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 horloges5">
                    <h5 class="horlogeh5 mt-3 mt-md-0">Horlogeband</h5>
                    <div>
                        <p>Horlogeband</p>
                        <span>Oyster, platte driedelige schakels</span>
                    </div>
                    <div>
                        <p>Materiaal horlogeband</p>
                        <span>Oystersteel-staal</span>
                    </div>
                    <div>
                        <p>Sluiting</p>
                        <span>Oysterclasp vouwsluiting met comfortabele 5 mm Easylink-verlengschakel</span>
                    </div>
                    <h5 class="horlogeh5 mt-3 mt-md-0">Wijzerplaat</h5>
                    <div>
                        <p>Wijzerplaat</p>
                        <span>Zwart</span>
                    </div>
                    <div>
                        <p>Details</p>
                        <span>Zeer goed afleesbaar Chromalight-display met langdureige blauwe luminescentie</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection