<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styleIndex.css')}}">
    <title>HealthCare</title>
</head>
<body>
    <header>
        <div class="headerFlexContainer">
            <div class="headerFlexItem">
                <img src="{{asset('img/bxl-google.svg')}}">
            </div>
            <div class="headerFlexItem">
                <div>
                    <img src="{{asset('img/bx-search.svg')}}">
                </div>
                <div>
                    <img src="{{asset('img/bx-cart.svg')}}">
                </div>
                <div class="user">
                    <img src="{{asset('img/user.svg')}}">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="slider">
            <div class="flechas-slider">
                <div class="flecha izquierda"> < </div>
                <div class="flecha derecha"> > </div>
            </div>
            <img src="{{asset('img/pastillas.jpg')}}">
        </div>
        <div class="productos">
            @foreach($products as $product)
            <div class="xd">
                <div class="divProducto">
                    <img class="imagenes" src="img/{{$product->image_path}}">
                </div>
                <div class="divInfoProducto">
                    <div class="descripcion">
                        <p class="desc">
                            {{$product->name}}
                        </p>
                        <p class="price">
                            ${{number_format($product->price)}}
                        </p>
                    </div>
                    <div class="btns-compra">
                        <div class="cantidad">
                            @php
                                $cantidad = 1;
                            @endphp
                            <div id="resta"> - </div>
                            <div id="cantidad">{{$cantidad}}</div>
                            <div  id="suma"> + </div>
                        </div>
                        <div class="divAddCart">
                            <button type="submit" class="addCart">Añadir al carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>