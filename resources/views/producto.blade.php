<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styleProducto.css')}}">
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
        <div class="grid-container">
            <div class="grid-item-up">
                <div class="grid-subitem-img">
                    <img src="img/iboprufeno.jpg">
                </div>
                <div class="grid-subitem-info">
                    <div class="desc">
                        {{$products[0]->name}}
                    </div>
                    <div>
                        <div class="priceBtn">
                            {{-- precio y btn --}}
                            <div class="price">
                                ${{number_format($products[0]->price)}}
                            </div>
                            <div class="divAddCart">
                                <button type="submit" class="addCart">Comprar ahora</button>
                            </div>
                        </div>
                        <div class="priceBtn">
                            {{-- botones compra --}}
                            <div>
                                <div class="cantidad">
                                    @php
                                        $cantidad = 1;
                                    @endphp
                                    <div id="resta"> - </div>
                                    <div id="cantidad">{{$cantidad}}</div>
                                    <div  id="suma"> + </div>
                                </div>
                            </div>
                            <div>
                                <div class="divAddCart">
                                    <button type="submit" class="addCart">Añadir al carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc1">
                        {{$products[0]->description}}
                    </div>
                    <div>
                        <p>{{$products[0]->cantidad}}</p>
                        <p>Via de administracion: {{$products[0]->tipoUso}}</p>
                    </div>
                </div>
            </div>
            <div class="gird-item-dow">
                {{-- foreach --}}
                <div>
                    <div>
                        {{-- img --}}
                    </div>
                    <div>
                        {{-- description --}}
                    </div>
                    <div>
                        {{-- btn --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>