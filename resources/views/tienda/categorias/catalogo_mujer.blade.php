
@extends('tienda.categorias.vista_general')


@section('contenidocategoria')
         
                        <div class="product-catalog">
                            <a href="#">
                                <img src="images/mujer/camiseta-bachata_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA BAILAR BACHATA</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>

                        <div class="product-catalog">
                            <a href="#">
                                <img src="images/mujer/camiseta-nah_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA NAH</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>


                        <div class="product-catalog">
                            <a href="#">
                                <img src="images/mujer/camiseta-power_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA GIRL POWER</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>
                        
                        <script>
                            $(document).ready(function() {
                                $('#cat-ropa-mujer').addClass('seleccionado');
                            });
                        </script>
@endsection
