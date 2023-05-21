<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Juego;
use App\Models\Lanzador;
use App\Models\Parque;
use App\Models\Temporada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JuegoControlador extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos = DB::table("juegos")
            ->select(array(
                "juegos.idJuego",
                "temporadas.temporada",
                "juegos.jornada",
                "parques.descripcion as parque",
                "juegos.fecha",
                "juegos.hora",
                "juegos.clima",
                "e1.nombre as equipoLocal",
                "e2.nombre as equipoVisitante",
                "juegos.final",
            ))
            ->join("equipos as e1", "e1.idEquipo", "=", "juegos.idEquipoLocal")
            ->join("equipos as e2", "e2.idEquipo", "=", "juegos.idEquipoVisitante")
            ->join("parques", "parques.idCampo", "=", "juegos.idCampo")
            ->join("temporadas", "temporadas.idTemporada", "=", "juegos.idTemporada")
            ->get();
        return response(view("Juegos.index", compact("datos")));
    }

    public function details($id)
    {
        $juego = Juego::find($id);

        $datos = array(
            "juego" => $juego,

        );
        return response(view("juegos.details", compact("datos")));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response

     */
    public function create()
    {
        $j = Juego::orderBy('idJuego', 'DESC')->first();
        $lastId = $j != null ? $j->idJuego + 1 : 0;
        $datos = array(
            "lastId" => $lastId,
            "equipos" => Equipo::all(["idEquipo", "nombre"]),
            "temporadas" => Temporada::all(["idTemporada", "nombre"]),
            "campos" => Parque::all(),
        );
        return response(view('Juegos.create', compact('datos')));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request   $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $j = new Juego();
        $j->idTemporada = $request->idTemporada;
        $j->jornada = $request->jornada;
        $j->idCampo = $request->idCampo;
        $j->fecha = $request->fecha;
        $j->hora = $request->hora;
        $j->clima = $request->clima;
        $j->idEquipoVisitante = $request->idEquipoVisitante;
        $j->idEquipoLocal = $request->idEquipoLocal;
        $j->final = $request->final;
        $j->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $j->idJuego]));

    }
    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juego = Juego::find($id);
        $carrerasLocal = $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->where("carrera", 1)->count();
        $carrerasVisitante = $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->where("carrera", 1)->count();
        $entradas = $juego->turnos->sortByDesc("inning")->first()->inning;
        $hitsLocal = $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->filter(
            function ($elemento) {
                return str_starts_with($elemento->resultado, 'H') || str_starts_with($elemento->resultado, 'h');
            }
        )->count();
        $hitsVisitante = $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->filter(
            function ($elemento) {
                return str_starts_with($elemento->resultado, 'H') || str_starts_with($elemento->resultado, 'h');
            }
        )->count();

        $erroresVisitante = $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->filter(
            function ($elemento) {
                return str_starts_with($elemento->resultado, 'E') || str_starts_with($elemento->resultado, 'e');
            }
        )->count();

        $erroresLocal = $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->filter(
            function ($elemento) {
                return str_starts_with($elemento->resultado, 'E') || str_starts_with($elemento->resultado, 'e');
            }
        )->count();

        $lanzadorLocal = $juego->turnos->where("idEquipo", $juego->idEquipoVisitante)->first()->lanzador;
        $lanzadorVisitante = $juego->turnos->where("idEquipo", $juego->idEquipoLocal)->first()->lanzador;

        return response(view('juegos.boxscore', compact("juego", "carrerasLocal",
            "carrerasVisitante", "entradas", "hitsLocal", "hitsVisitante", "erroresLocal", "erroresVisitante",
            "lanzadorLocal", "lanzadorVisitante")));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos = array(
            "juego" => Juego::find($id),
            "equipos" => Equipo::all(),
            "temporadas" => Temporada::all(),
            "campos" => Parque::all());
        return response(view("Juegos.edit", compact("datos")));
    }
    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request   $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $j = Juego::find($request->idJuego);
        $j->idTemporada = $request->idTemporada;
        $j->jornada = $request->jornada;
        $j->idCampo = $request->idCampo;
        $j->fecha = $request->fecha;
        $j->hora = $request->hora;
        $j->clima = $request->clima;
        $j->idEquipoVisitante = $request->idEquipoVisitante;
        $j->idEquipoLocal = $request->idEquipoLocal;
        $j->final = $request->final;
        $j->save();
        return response()->redirectTo(route("juegosDetails", ["id" => $j->idJuego]));

    }
    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function listado(Request $request)
    {
        $juegos = Juego::all();
        foreach ($juegos as $juego) {
            $juego->carrerasLocal = $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->where("carrera", 1)->count();
            $juego->carrerasVisitante = $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->where("carrera", 1)->count();
            $juego->hitsLocal = $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->filter(
                function ($elemento) {
                    return str_starts_with($elemento->resultado, 'H') || str_starts_with($elemento->resultado, 'h');
                }
            )->count();
            $juego->hitsVisitante = $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->filter(
                function ($elemento) {
                    return str_starts_with($elemento->resultado, 'H') || str_starts_with($elemento->resultado, 'h');
                }
            )->count();
            $juego->erroresVisitante = $juego->turnos->where('idEquipo', $juego->idEquipoVisitante)->filter(
                function ($elemento) {
                    return str_starts_with($elemento->resultado, 'E') || str_starts_with($elemento->resultado, 'e');
                }
            )->count();
            $juego->erroresLocal = $juego->turnos->where('idEquipo', $juego->idEquipoLocal)->filter(
                function ($elemento) {
                    return str_starts_with($elemento->resultado, 'E') || str_starts_with($elemento->resultado, 'e');
                }
            )->count();
        }

        return response(view("Juegos.listado", compact("juegos")));
    }

    public function promedios()
    {

    }

    //R=C: Carrera
    //H=H: Heat
    //E=E: Errores
    //suma de todos los heats, carreras y errores de todos los bateadores de un juego por cada equipo
    //equipo local y equipo visitante
    //como hacer un COUNT, SUM en laravel

}
