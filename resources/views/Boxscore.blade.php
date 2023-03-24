
<!DOCTYPE html>
<html>
<head>
    <title>Marcador de Béisbol por Entradas</title>
    <style type="text/css">
        #general, #general2, #general3{
            flex-direction: row;
            display: flex;
        }
        #contenedor1, #contenedor3{
            width: 20%;
            display: flex;
            flex-direction: column;
        }
        #div1{
            width: 100%;
        }
        #div2{
            margin: 10px;
            margin-right: 20%;
            bottom: 0px;
        }
        #div3{
            margin: 10px;
            margin-left: 20%;
        }
        #div5, #div6{
            width: 25%;
            margin: 5px;
        }
        #div4, #div7{
            width: 75%;
            height: 50%;
            bottom: 0px;
        }

        #img{
            width: 75px;;
            height: 75px;
            float: right;
        }
        #img3{
            width: 75px;;
            height: 75px;
            float: left;
        }
        #img2, #img4{
            width: 75px;
            height: 75px;
        }
        #img5{
            width: 50px;
            height: 50px;
            float: right;
        }
        #img6{
            width: 50px;
            height: 50px;
            float: left;
        }
        #img7{
            width:20px;
            height:20px;
        }
        #fondoRojo{
            background-color: #6d0001;
            color: white;
            font-size: 10px;
            border: 2px solid #530001;
        }

        #contenedor2, #contenedor5{
            width: 60%;
        }
        #contenedor4, #contenedor6{
            width: 20%;
            display: flex;
            flex-direction: row;
        }
        #contenedor7, #contenedor8{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 50%;
        }
        table {
            border-collapse: collapse;
            /*border-spacing: 30px;*/
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
        th, td{
            text-align: center;
        }
        .borde{
            border: 2px solid gray;
        }
        .bordeAzul{
            border: 2px solid #64adf3;
        }
        .bordeNegro{
            border: 2px solid #000000;
        }
        #amarillo{
            background-color: #ad9a1d;
        }
        .azul{
            color: #304f9e;
        }
        .rojo{
            color: red;
        }
        #izq{
            text-align: left;
        }
        #der{
            text-align: right;
        }
        .fondoRojo{
            background-color: #6d0001;
            color: white;
        }
        .fondoAzul{
            background-color: #304f9e;
            color: white;
        }
        .container {
            display: flex;
        }
        .cuadro1,  .cuadro2 {
            width: 100%;
            height: 100%;
            border: 1px solid;
        }


    </style>
</head>
<body>
    <div id = "general">
        <div id ="contenedor1">
            <div id = "div1">
                <img src = "https://i.pinimg.com/originals/e1/43/56/e14356aa2c697bb8bd9b22a333949c24.gif" id ="img">
            </div>
            <div id = "div2">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2" id = "fondoRojo">...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src = "https://i.pinimg.com/originals/e1/43/56/e14356aa2c697bb8bd9b22a333949c24.gif" id ="img2"></td>
                            <td class = "borde"><h1>0</h1></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id = "contenedor2">
            <table>
                <thead>
                    <tr>
                        <th colspan ="16"><h1><B>BOXSCORE</B></h1></th>
                    </tr>
                    <tr>
                        <td colspan = "16">LIGA DE SOFTBOL</td>
                    </tr>
                    <tr>
                        <td colspan = "16">grupo elite</td>
                    </tr>
                    <tr>
                        <th class = "bordeAzul" colspan = "16">Juego lanzado sin hit ni carrera de GARCIA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>C</td>
                        <td>H</td>
                        <td>E</td>
                    </tr>
                    <tr>
                        <td id ="izq">AUTOS ABC</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td id ="izq">LA JAURIA COMASIN</td>
                        <td>0</td>
                        <td>0</td>
                        <td>6</td>
                        <td>2</td>
                        <td>X</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>8</td>
                        <td>13</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td colspan="24" height = "15px"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id = "contenedor3">
            <div id = "div1">
                <img src = "https://i.pinimg.com/originals/e1/43/56/e14356aa2c697bb8bd9b22a333949c24.gif" id ="img3">
            </div>
            <div id = "div3">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2" id = "fondoRojo">JUEGO SIN HIT NI CARRERA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class = "borde" ><h1>8</h1></td>
                            <td><img src = "https://i.pinimg.com/originals/e1/43/56/e14356aa2c697bb8bd9b22a333949c24.gif" id ="img4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id = "general2">
        <div id="contenedor4">
            <div id = "div4">
                <table>
                    <thead>
                        <tr>
                            <th>AUTOS ABC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >Record [1,1] Cuarto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id = "div5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Zack_Greinke_on_July_29%2C_2009.jpg/280px-Zack_Greinke_on_July_29%2C_2009.jpg" id = "img5">
            </div>
        </div>
        <div id="contenedor5">
            <table>
                <thead>
                    <tr>
                        <th class = "bordeNegro" id = "izq">Derrotado</th>
                        <th class = "bordeNegro" id = "der">Ganador</th>
                    </tr>
                </thead>
                <tbody >
                    <tr class = "azul">
                        <td id ="izq">Mendoza xxx jose luis</td>
                        <td id ="der">Garcia xxx eduardo</td>
                    </tr>
                    <tr class = "rojo">
                        <td id = "izq">Record</td>
                        <td id = "der">Record</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="contenedor6">
            <div id = "div6">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Zack_Greinke_on_July_29%2C_2009.jpg/280px-Zack_Greinke_on_July_29%2C_2009.jpg" id = "img6">
            </div>
            <div id = "div7">
                <table>
                    <thead>
                        <tr>
                            <th>AUTOS ABC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Record [1,1] Cuarto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id = "general3">
        <div id="contenedor7">
            <div class="cuadro1">
                <table>
                    <thead>
                        <tr class ="fondoRojo">
                            <th></th>
                            <th colspan = "1" id = "izq" >Bateadores - NombreEquipo</th>
                            <th>POS</th>
                            <th>AB</th>
                            <th>C</th>
                            <th>H</th>
                            <th>CP</th>
                            <th>BB </th>
                            <th>K</th>
                            <th>PJE</th>
                            <th>OBP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">John Smith</td>
                            <td>Pitcher</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Jane Doe</td>
                            <td>Catcher</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Mike Johnson</td>
                            <td>First Base</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Lisa Davis</td>
                            <td>Second Base</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">David Lee</td>
                            <td>Third Base</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Mary Brown</td>
                            <td>Shortstop</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Tom Smith</td>
                            <td>Left Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Emily Jones</td>
                            <td>Center Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Chris Taylor</td>
                            <td>Right Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Chris Taylor</td>
                            <td>Right Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="contenedor8">
            <div class="cuadro2">
                <table>
                    <thead>
                    <tr class = "fondoAzul">
                            <th></th>
                            <th colspan = "1" id = "izq">Bateadores - NombreEquipo</th>
                            <th>POS</th>
                            <th>AB</th>
                            <th>C</th>
                            <th>H</th>
                            <th>CP</th>
                            <th>BB </th>
                            <th>K</th>
                            <th>PJE</th>
                            <th>OBP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">John Smith</td>
                            <td>CF</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Jane Doe</td>
                            <td>CF</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Mike Johnson</td>
                            <td>CF</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Lisa Davis</td>
                            <td>Second Base</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">David Lee</td>
                            <td>Third Base</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Mary Brown</td>
                            <td>Shortstop</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/St._Louis_Cardinals_insignia_logo.svg/1200px-St._Louis_Cardinals_insignia_logo.svg.png" id = "img7"></td>
                            <td id = "izq">Tom Smith</td>
                            <td>Left Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Emily Jones</td>
                            <td>Center Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Chris Taylor</td>
                            <td>Right Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                        <td><img src="https://img.freepik.com/foto-gratis/retrato-hermoso-mujer-joven-posicion-pared-gris_231208-10760.jpg?size=626&ext=jpg" id = "img7"></td>
                            <td id = "izq">Chris Taylor</td>
                            <td>Right Field</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
