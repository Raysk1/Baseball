@extends('default')

@section('title')
    Contacto
@endsection

@section("styles")
<style type="text/css">
	
	.conten1{
		background:  ;
		padding: 75px;
		margin-top: 20px;
		flex-direction: row;
		justify-content: space-between;
		display: flex;
		color: white;
	}
	.caja{
		background: ;
		width: 50%;
		height: 500px;
		border-radius: 30px;
		color: white;
	}
	.conten{
		background: ;
		padding: 75px;
		margin-top: 10px;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: space-between;
		display: flex;
		color: white;
	}
	.caja1{
		background: ;
		width: 25%;
		height: 300px;
		border-radius: 30px;
		color: white;
	}
	.conten2{
		background: ;
		padding: 75px;
		margin-top: 10px;
		flex-direction: row;
		justify-content: space-between;
		display: flex;
		color: white;
	}
	.conten3{
		background: ;
		padding: 75px;
		margin-top: 10px;
		flex-direction: row;
		justify-content: space-between;
		display: flex;
		color: white;
	}
	.caja2{
		background: ;
		width: 25%;
		height: 300px;
		border-radius: 30px;
		color: white;
	}
</style>
@endsection

@section('content')
    <h1>
        <center>Directorio </center>
    </h1>
    <hr>
    <div class="conten">
        <div class="caja2" img src="/img/fondo.jpg" width="100%" height="100%">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Mario Guadalupe Santana Lopez
                    Presidente Ejecutivo</center>
            </h3>
        </div>
        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Ing. Ramon Ernesto Barron Mendoza
                    Jefe de Oficina de la Presidencia Ejecutiva</center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Juan Angulo Perez <br>
                    Director Deportivo</center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Mario Erenas Lizarraga <br>
                    Director de Mercadotecnia y Comunicación</center>
            </h3>
        </div>
    </div>


    <div class="conten1">
        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Francisco Hernandez Tapia <br>
                    Gerente de Coordinación Operativa</center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. David Morales Baldomero <br>
                    Gerente de Registro y Control de Jugadores</center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Marco Antonio Lopez Rico <br>
                    Gerente de Medios</center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Ing. Victor Hugo Peña Bernal
                    Coordinador de Contenidos Digitales
                </center>
            </h3>
        </div>
    </div>

    <div class="conten2">
        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Angel Antonio Lugo Hernandez
                    Coordinador de Producción
                </center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Lic. Oscar Alejandro Higuera Beltran
                    Recursos Materiales y Servicios Generales
                </center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Ing. Geovani Guadalupe Rojo Sanchez
                    Coordinador de mercadotecnia
                </center>
            </h3>
        </div>

        <div class="caja2">
            <img src="/img/personaas.jpg" width="100%" height="100%">
            <h3>
                <center>Ing. Luis Enrique Vega Lopez
                    Contabilidad
                </center>
            </h3>
        </div>
    </div>

    <div class="conten3">
        <img src="/img/oficina.jpg" width="40%" height="40%">
        <h2>Direccion <br>Liga de Softbol Club Deportivo, <br> Calle Av mexico, Col Centro,<br> Eldorado sinaloa,
            C.P:80450, <br> Telefono 66-73-34-56-76</h2><br>
    </div>

    <hr>
    <hr>
@endsection
