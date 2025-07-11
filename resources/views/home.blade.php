@extends('base')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
    <div class="container">
        <h1 class="animated-title">Agence Unchk</h1>
        <p class="typewriter" id="typewriter"></p>
    </div>
</div>

<div class="container">
    <h2>Nos derniers biens</h2>
    <div class="row">
        @foreach($properties as $property)
            <div class="col">
                @include('property.card')
            </div>
        @endforeach
    </div>
</div>

<style>
    .animated-title {
        font-size: 28px; /* réduit */
        font-weight: bold;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease-out forwards;
    }

    .typewriter {
        display: inline-block;
        font-family: monospace;
        font-size: 18px; /* réduit */
        white-space: nowrap;
        border-right: 2px solid black;
        overflow: hidden;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease-out forwards;
        animation-delay: 0.5s;
    }

    .cursor-hidden {
        border-right: none !important;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const text = "Découvrez notre sélection de biens immobiliers exclusifs à Dakar. Trouvez la propriété qui correspond à vos rêves en quelques clics.";
        const container = document.getElementById("typewriter");
        let index = 0;
        const speed = 50;

        function type() {
            if (index < text.length) {
                container.textContent += text.charAt(index);
                index++;
                setTimeout(type, speed);
            } else {
                setTimeout(() => {
                    container.classList.add('cursor-hidden');
                }, 1000);
            }
        }

        setTimeout(type, 1000);
    });
</script>

@endsection
