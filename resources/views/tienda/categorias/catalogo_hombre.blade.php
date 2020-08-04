@extends('tienda.categorias.vista_general')

@section('contenidocategoria')
    
                        <div class="product-catalog">
                            <a href="producto.php">
                                <img src="images/camisa-tiburon_1_blanco.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA TIBURON</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>

                        <div class="product-catalog mano">
                            <a href="producto.php">
                                <img src="images/camisa-rubik_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA CUBO RUBIK</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>


                        <div class="product-catalog mano">
                            <a href="producto.php">
                                <img src="images/camisa-motivacion1_1_negro.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA MOTIVACION</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>


                        <div class="product-catalog mano">
                            <a href="producto.php">
                                <img src="images/camisa-foco_1_blanco.jpg">
                                <div class="product-catalog-info">
                                    <p id="nombre">CAMISETA FOCO</p>
                                    <p id="precio">19.99 $</p>
                                </div>
                            </a>
                        </div>


                        <div class="product-catalog">
                            <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                            <div class="product-catalog-info">
                                <p id="nombre">CAMISETA CON COLIBRI</p>
                                <p id="precio">19.99 $</p>
                            </div>
                        </div>
                        <div class="product-catalog">
                            <img src="http://localhost:8099/dispers/2-home_default/hummingbird-printed-t-shirt.jpg">
                            <div class="product-catalog-info">
                                <p id="nombre">CAMISETA CON COLIBRI</p>
                                <p id="precio">19.99 $</p>
                            </div>
                        </div>
                    
                        <script>
                            $(document).ready(function() {
                                $('#cat-ropa-hombre').addClass('seleccionado');
                            });
                        </script>
@endsection