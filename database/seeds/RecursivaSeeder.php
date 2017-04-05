<?php

use Illuminate\Database\Seeder;

class RecursivaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('recursiva')->insert([
            [
                'rec_detalle' => 'STATUS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=1
            ],
            [
                'rec_detalle' => 'Activo','rec_nemonico' => 'STA','rec_padre' => 1, //rec_id=2
            ],
            [
                'rec_detalle' => 'Inactivo','rec_nemonico' => 'STA','rec_padre' => 1, //rec_id=3
            ],
            [
                'rec_detalle' => 'TIPO USUARIO','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=4
            ],
            [
                'rec_detalle' => 'Administrador','rec_nemonico' => 'TUS','rec_padre' => 4, //rec_id=5
            ],
            [
                'rec_detalle' => 'Usuario','rec_nemonico' => 'TUS','rec_padre' => 4, //rec_id=6
            ],
            [
                'rec_detalle' => 'TIPO MUDANZA','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=7
            ],                        
            [
                'rec_detalle' => 'Casa/Apartamento/Condominio','rec_nemonico' => 'TMU','rec_padre' => 7, //rec_id=8
            ],            
            [
                'rec_detalle' => 'Oficina','rec_nemonico' => 'TMU','rec_padre' => 7, //rec_id=9
            ],
            [
                'rec_detalle' => 'Remolques u Otros','rec_nemonico' => 'TMU','rec_padre' => 7, //rec_id=10
            ],
            [
                'rec_detalle' => 'COMEDOR','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=11
            ],
            [
                'rec_detalle' => 'Mesa, Comedor','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=12
            ],
            [
                'rec_detalle' => 'Silla, sillita de bebé','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=13
            ],
            [
                'rec_detalle' => 'Estante para vinos','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=14
            ],
            [
                'rec_detalle' => 'Aparador chino de 2 piezas','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=15
            ],
            [
                'rec_detalle' => 'Mesa plegable','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=16
            ],
            [
                'rec_detalle' => 'Carrito de té','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=17
            ],
            [
                'rec_detalle' => 'Gabinete pequeño','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=18
            ],
            [
                'rec_detalle' => 'Aparador chino de 1 pieza','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=19
            ],
            [
                'rec_detalle' => 'Mesa de servir','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=20
            ],
            [
                'rec_detalle' => 'Vitrina aparador','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=21
            ],
            [
                'rec_detalle' => 'Gabinete mediano','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=22
            ],
            [
                'rec_detalle' => 'Lámpara de piso','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=23
            ],
            [
                'rec_detalle' => 'Silla de Comedor','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=24
            ],
            [
                'rec_detalle' => 'Base del aparador','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=25
            ],
            [
                'rec_detalle' => 'Gabinete grande','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=26
            ],
            [
                'rec_detalle' => 'Lámpara de mesa','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=27
            ],
            [
                'rec_detalle' => 'Silla de respaldar alto','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=28
            ],
            [
                'rec_detalle' => 'Parte superior del aparador','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=29
            ],
            [
                'rec_detalle' => 'Gabinete de esquina','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=30
            ],
            [
                'rec_detalle' => 'Lámpara grande','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=31
            ],
            [
                'rec_detalle' => 'Lámpara grande','rec_nemonico' => 'COM','rec_padre' => 11, //rec_id=31
            ],
            [
                'rec_detalle' => 'SALAS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=32
            ],
            [
                'rec_detalle' => 'Sofá de 2 asientos','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=33
            ],
            [
                'rec_detalle' => 'Librero 6x3','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=34
            ],
            [
                'rec_detalle' => 'Unidad de pared de 4 piezas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=35
            ],
            [
                'rec_detalle' => 'Sistema Estéreo','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=36
            ],
            [
                'rec_detalle' => 'Sofá cama de 3 asientos','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=37
            ],
            [
                'rec_detalle' => 'Estante Grande','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=38
            ],
            [
                'rec_detalle' => 'TV de piso','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=39
            ],
            [
                'rec_detalle' => 'Piano espineta','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=40
            ],
            [
                'rec_detalle' => 'Sofá de 4 asientos','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=41
            ],
            [
                'rec_detalle' => 'Estante pequeño','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=42
            ],
            [
                'rec_detalle' => 'Consola de TV','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=43
            ],
            [
                'rec_detalle' => 'Piano de pared','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=44
            ],
            [
                'rec_detalle' => 'Sofá seccional de 4 piezas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=45
            ],
            [
                'rec_detalle' => 'Estante mediano','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=46
            ],
            [
                'rec_detalle' => 'TV de 21 a 41 pulgadas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=47
            ],
            [
                'rec_detalle' => 'Piano de cola pequeño','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=48
            ],
            [
                'rec_detalle' => 'Otomano grande','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=49
            ],
            [
                'rec_detalle' => 'Gabinete de curiosidades','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=50
            ],
            [
                'rec_detalle' => 'TV de 42 a 47 pulgadas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=51
            ],
            [
                'rec_detalle' => 'Piano de cola','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=52
            ],
            [
                'rec_detalle' => 'Otomano pequeño','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=53
            ],
            [
                'rec_detalle' => 'Reloj de caja','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=54
            ],
            [
                'rec_detalle' => 'TV grande 60 pulgadas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=55
            ],
            [
                'rec_detalle' => 'Alfombra 8x10','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=56
            ],
            [
                'rec_detalle' => 'Sofá seccional de 5 piezas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=57
            ],
            [
                'rec_detalle' => 'Centro de entretenimiento pequeño','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=58
            ],
            [
                'rec_detalle' => 'Proyector de TV de mas de 48 pulgadas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=59
            ],
            [
                'rec_detalle' => 'Bar 3x4x2','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=60
            ],
            [
                'rec_detalle' => 'Silla de brazo','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=61
            ],
            [
                'rec_detalle' => 'Centro de entretenimiento grande','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=62
            ],
            [
                'rec_detalle' => 'Final de la mesa','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=63
            ],
            [
                'rec_detalle' => 'Taburete de bar','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=64
            ],
            [
                'rec_detalle' => 'Silla de estancia','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=65
            ],
            [
                'rec_detalle' => 'Lámpara chandelier pequeña','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=66
            ],
            [
                'rec_detalle' => 'Lado de la mesa','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=67
            ],
            [
                'rec_detalle' => 'Sillón mullido','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=68
            ],
            [
                'rec_detalle' => 'Lámpara chandelier grande','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=69
            ],
            [
                'rec_detalle' => 'Mesita de café','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=70
            ],
            [
                'rec_detalle' => 'Sillón reclinable','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=71
            ],
            [
                'rec_detalle' => 'Unidad de pared, una pieza','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=72
            ],
            [
                'rec_detalle' => 'Bocina mediana','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=73
            ],
            [
                'rec_detalle' => 'Silla mecedora','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=74
            ],
            [
                'rec_detalle' => 'Unidad de pared 2 piezas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=75
            ],
            [
                'rec_detalle' => 'Bocina grande','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=76
            ],
            [
                'rec_detalle' => 'Silla de mimbre','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=77
            ],
            [
                'rec_detalle' => 'Unidad de pared 3 piezas','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=78
            ],
            [
                'rec_detalle' => 'Gabinete estéreo','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=79
            ],
            [
                'rec_detalle' => 'Lámpara de piso','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=80
            ],
            [
                'rec_detalle' => 'Lámpara grande','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=81
            ],
            [
                'rec_detalle' => 'Lámpara de mesa','rec_nemonico' => 'SAL','rec_padre' => 32, //rec_id=82
            ],
            [
                'rec_detalle' => 'DORMITORIOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=83
            ],
            [
                'rec_detalle' => 'Cama doble','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=84
            ],
            [
                'rec_detalle' => 'Cama Matrimonio','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=85
            ],
            [
                'rec_detalle' => 'Colchón futón','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=86
            ],
            [
                'rec_detalle' => 'Silla y mesa de niños','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=87
            ],
            [
                'rec_detalle' => 'Aparador triple','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=88
            ],
            [
                'rec_detalle' => 'Cama de agua','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=89
            ],
            [
                'rec_detalle' => 'Guardaropas pequeño','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=90
            ],
            [
                'rec_detalle' => 'Litera','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=91
            ],
            [
                'rec_detalle' => 'Cuna','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=92
            ],
            [
                'rec_detalle' => 'Lámpara grande','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=93
            ],
            [
                'rec_detalle' => 'Aparador','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=94
            ],
            [
                'rec_detalle' => 'Cama queen','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=95
            ],
            [
                'rec_detalle' => 'Tabla de planchar','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=96
            ],
            [
                'rec_detalle' => 'Canasta de ropa','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=97
            ],
            [
                'rec_detalle' => 'Aparador de niños','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=98
            ],
            [
                'rec_detalle' => 'Base de cama','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=99
            ],
            [
                'rec_detalle' => 'Guardaropa','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=100
            ],
            [
                'rec_detalle' => 'Cajón mediano','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=101
            ],
            [
                'rec_detalle' => 'Cajón de cedro','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=102
            ],
            [
                'rec_detalle' => 'Lámpara de mesa','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=103
            ],
            [
                'rec_detalle' => 'Caja de juguetes','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=104
            ],
            [
                'rec_detalle' => 'Mesita de noche','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=105
            ],
            [
                'rec_detalle' => 'Aparador doble','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=106
            ],
            [
                'rec_detalle' => 'Cama king','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=107
            ],
            [
                'rec_detalle' => 'Pantalla oriental','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=108
            ],
            [
                'rec_detalle' => 'Cesto, canasta','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=109
            ],
            [
                'rec_detalle' => 'Cajón pequeño','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=110
            ],
            [
                'rec_detalle' => 'Guardaropa pequeño','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=111
            ],
            [
                'rec_detalle' => 'Guardaropa mediano','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=112
            ],
            [
                'rec_detalle' => 'Cajón pequeño','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=113
            ],
            [
                'rec_detalle' => 'Lámpara de piso','rec_nemonico' => 'DOR','rec_padre' => 83, //rec_id=114
            ],
            [
                'rec_detalle' => 'COCINA','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=115
            ],
            [
                'rec_detalle' => 'Refrigerador de pared','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=116
            ],
            [
                'rec_detalle' => 'Silla de cocina','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=117
            ],
            [
                'rec_detalle' => 'Congelador extra grande','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=118
            ],
            [
                'rec_detalle' => 'Congelador pequeño','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=119
            ],
            [
                'rec_detalle' => 'Microondas pequeño','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=120
            ],
            [
                'rec_detalle' => 'Estufa','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=121
            ],
            [
                'rec_detalle' => 'Microondas Grande','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=122
            ],
            [
                'rec_detalle' => 'Refrigerador horizontal','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=123
            ],
            [
                'rec_detalle' => 'Cesta de basura','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=124
            ],
            [
                'rec_detalle' => 'Mesa de cocina','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=125
            ],
            [
                'rec_detalle' => 'Congelador mediano','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=126
            ],
            [
                'rec_detalle' => 'Congelador grande','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=127
            ],
            [
                'rec_detalle' => 'Carrito de microondas','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=128
            ],
            [
                'rec_detalle' => 'Refrigerador de dormitorio','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=129
            ],
            [
                'rec_detalle' => 'Lavaplatos','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=130
            ],
            [
                'rec_detalle' => 'Mesa de cocina pequeña','rec_nemonico' => 'COC','rec_padre' => 115, //rec_id=131
            ],
            [
                'rec_detalle' => 'OFICINA DE CASA','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=132
            ],
            [
                'rec_detalle' => 'Escritorio sencillo','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=133
            ],
            [
                'rec_detalle' => 'Copiadora de mesa','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=134
            ],
            [
                'rec_detalle' => 'Caja fuerte pequeña','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=135
            ],
            [
                'rec_detalle' => 'Caja fuerte grande','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=136
            ],
            [
                'rec_detalle' => 'Archivador pequeño','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=137
            ],
            [
                'rec_detalle' => 'Escritorio con estantes','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=138
            ],
            [
                'rec_detalle' => 'Escritorio doble','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=139
            ],
            [
                'rec_detalle' => 'Copiadora de oficina regular','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=140
            ],
            [
                'rec_detalle' => 'Sistema de computadora','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=141
            ],
            [
                'rec_detalle' => 'Caja fuerte grande','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=142
            ],
            [
                'rec_detalle' => 'Archivador grande','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=143
            ],
            [
                'rec_detalle' => 'Escritorio para computadora pequeño','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=144
            ],
            [
                'rec_detalle' => 'Escritorio para devolución','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=145
            ],
            [
                'rec_detalle' => 'Silla de oficina','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=146
            ],
            [
                'rec_detalle' => 'Gabinete ejecutivo','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=147
            ],
            [
                'rec_detalle' => 'Mesa de conferencia','rec_nemonico' => 'OFC','rec_padre' => 132, //rec_id=148
            ],
            [
                'rec_detalle' => 'GARAJE','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=149
            ],
            [
                'rec_detalle' => 'Mesa de trabajo pequeña','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=150
            ],
            [
                'rec_detalle' => 'Bicicleta de adulto','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=151
            ],
            [
                'rec_detalle' => 'Banqueta de ejercicios grande','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=152
            ],
            [
                'rec_detalle' => 'Baúl grande','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=153
            ],
            [
                'rec_detalle' => 'Caja de herramientas','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=154
            ],
            [
                'rec_detalle' => 'Escalera de 7 pies','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=155
            ],
            [
                'rec_detalle' => 'Mesa de trabajo mediana','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=156
            ],
            [
                'rec_detalle' => 'Bicicleta de niño','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=157
            ],
            [
                'rec_detalle' => 'Mesa pequeña','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=158
            ],
            [
                'rec_detalle' => 'Carretilla','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=159
            ],
            [
                'rec_detalle' => 'Equipo de ejercicio pequeño','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=160
            ],
            [
                'rec_detalle' => 'Equipo de ejercicio grande','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=161
            ],
            [
                'rec_detalle' => 'Escalera de 10 pies','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=162
            ],
            [
                'rec_detalle' => 'Baúl pequeño','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=163
            ],
            [
                'rec_detalle' => 'Equipo de ejercicio','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=164
            ],
            [
                'rec_detalle' => 'Bicicleta de ejercicios','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=165
            ],
            [
                'rec_detalle' => 'Equipo de ejercicio eléptico','rec_nemonico' => 'GAR','rec_padre' => 149, //rec_id=166
            ],
            [
                'rec_detalle' => 'PATIOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=167
            ],
            [
                'rec_detalle' => 'Mesa de patio','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=168
            ],
            [
                'rec_detalle' => 'Cortadora de césped manual','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=169
            ],
            [
                'rec_detalle' => 'Parrilla de barbacoa','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=170
            ],
            [
                'rec_detalle' => 'Banqueta de patio grande','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=171
            ],
            [
                'rec_detalle' => 'Silla de patio','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=172
            ],
            [
                'rec_detalle' => 'Paraguas de patio','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=173
            ],
            [
                'rec_detalle' => 'Parrilla de barbacoa grande','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=174
            ],
            [
                'rec_detalle' => 'Banqueta de patio pequeña','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=175
            ],
            [
                'rec_detalle' => 'Planta  artificial grande','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=176
            ],
            [
                'rec_detalle' => 'Mesa de picnic','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=177
            ],
            [
                'rec_detalle' => 'Cortadora de cesped','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=178
            ],
            [
                'rec_detalle' => 'Conjunto de patio de 5 piezas','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=179
            ],
            [
                'rec_detalle' => 'Silla apilable','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=180
            ],
            [
                'rec_detalle' => 'Planta artificial pequeña','rec_nemonico' => 'PAT','rec_padre' => 167, //rec_id=181
            ],
            [
                'rec_detalle' => 'MISCELÁNEOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=182
            ],
            [
                'rec_detalle' => 'Acuario de 10 gal.','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=183
            ],
            [
                'rec_detalle' => 'Lavadora','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=184
            ],
            [
                'rec_detalle' => 'Estatua grande','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=185
            ],
            [
                'rec_detalle' => 'Instrumento Musical','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=186
            ],
            [
                'rec_detalle' => 'Bolsa de golf','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=187
            ],
            [
                'rec_detalle' => 'Coche para bebé','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=188
            ],
            [
                'rec_detalle' => 'Aspiradora','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=189
            ],
            [
                'rec_detalle' => 'Secadora','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=190
            ],
            [
                'rec_detalle' => 'Mesa de tocador','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=191
            ],
            [
                'rec_detalle' => 'Acuario de 20 gal.','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=192
            ],
            [
                'rec_detalle' => 'Juego de lavadora y secadora','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=193
            ],
            [
                'rec_detalle' => 'Aire acondicionado grande','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=194
            ],
            [
                'rec_detalle' => 'Aire acondicionado pequeño','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=195
            ],
            [
                'rec_detalle' => 'Perchero','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=196
            ],
            [
                'rec_detalle' => 'Aparador','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=197
            ],
            [
                'rec_detalle' => 'Estatua pequeña','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=198
            ],
            [
                'rec_detalle' => 'Mesa para cambiar','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=199
            ],
            [
                'rec_detalle' => 'Acuario de 55 gal.','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=200
            ],
            [
                'rec_detalle' => 'Estante para libros','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=201
            ],
            [
                'rec_detalle' => 'Acuario de piso pequeño','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=202
            ],
            [
                'rec_detalle' => 'Espejo mediano','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=203
            ],
            [
                'rec_detalle' => 'Acuario de piso grande','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=204
            ],
            [
                'rec_detalle' => 'Espejo grande','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=205
            ],
            [
                'rec_detalle' => 'Pedestal','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=206
            ],
            [
                'rec_detalle' => 'Fotos, pósters','rec_nemonico' => 'MIS','rec_padre' => 182, //rec_id=207
            ],
            [
                'rec_detalle' => 'CAJAS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=208
            ],
            [
                'rec_detalle' => 'Cajones de armario','rec_nemonico' => 'CAJ','rec_padre' => 208, //rec_id=209
            ],
            [
                'rec_detalle' => 'Cajas pequeñas','rec_nemonico' => 'CAJ','rec_padre' => 208, //rec_id=210
            ],
            [
                'rec_detalle' => 'Cajas medianas','rec_nemonico' => 'CAJ','rec_padre' => 208, //rec_id=211
            ],
            [
                'rec_detalle' => 'Cajas grandes','rec_nemonico' => 'CAJ','rec_padre' => 208, //rec_id=212
            ],
            [
                'rec_detalle' => 'ESTILOS DE SERVICIOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=213
            ],
            [
                'rec_detalle' => 'Arreglos generales','rec_nemonico' => 'SER','rec_padre' => 213, //rec_id=214
            ],
            [
                'rec_detalle' => 'Electricidad','rec_nemonico' => 'SER','rec_padre' => 213, //rec_id=215
            ],
            [
                'rec_detalle' => 'Gas','rec_nemonico' => 'SER','rec_padre' => 213, //rec_id=216
            ],
            [
                'rec_detalle' => 'Plomería','rec_nemonico' => 'SER','rec_padre' => 213, //rec_id=217
            ],
            [
                'rec_detalle' => 'Aires Acondicionados','rec_nemonico' => 'SER','rec_padre' => 213, //rec_id=218
            ],
            [
                'rec_detalle' => 'TIPO SERVICIO','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=219
            ],
            [
                'rec_detalle' => 'Reparación','rec_nemonico' => 'TSE','rec_padre' => 219, //rec_id=220
            ],
            [
                'rec_detalle' => 'Instalación','rec_nemonico' => 'TSE','rec_padre' => 219, //rec_id=221
            ],
            [
                'rec_detalle' => 'CARACTERISTICAS ADICIONALES','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=222
            ],
            [
                'rec_detalle' => 'Aire acondicionado','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=223
            ],
            [
                'rec_detalle' => 'Calefacción o chimenea','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=224
            ],
            [
                'rec_detalle' => 'Cocina empotrada','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=225
            ],
            [
                'rec_detalle' => 'Estudio o biblioteca','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=226
            ],
            [
                'rec_detalle' => 'Planta electrica','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=227
            ],
            [
                'rec_detalle' => 'TV por cable','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=228
            ],
            [
                'rec_detalle' => 'Estacionamiento de visitante','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=229
            ],
            [
                'rec_detalle' => 'Gimnasio','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=230
            ],
            [
                'rec_detalle' => 'Maletero','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=231
            ],
            [
                'rec_detalle' => 'Jardines','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=232
            ],
            [
                'rec_detalle' => 'Rejas de seguridad','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=233
            ],
            [
                'rec_detalle' => 'Vestier','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=234
            ],
            [
                'rec_detalle' => 'Estar','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=235
            ],
            [
                'rec_detalle' => 'Jacuzzi','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=236
            ],
            [
                'rec_detalle' => 'Piscina','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=237
            ],
            [
                'rec_detalle' => 'Sauna','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=238
            ],
            [
                'rec_detalle' => 'Vista panorámica','rec_nemonico' => 'CAA','rec_padre' => 222, //rec_id=239
            ],
            [
                'rec_detalle' => 'INSTALACIONES','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=240
            ],
            [
                'rec_detalle' => 'Conjunto cerrado','rec_nemonico' => 'INS','rec_padre' => 240, //rec_id=241
            ],
            [
                'rec_detalle' => 'Vigilancia privada','rec_nemonico' => 'INS','rec_padre' => 240, //rec_id=242
            ],
            [
                'rec_detalle' => 'DETALLES DE INTERÉS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=243
            ],
            [
                'rec_detalle' => 'Buena distribución','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=244
            ],
            [
                'rec_detalle' => 'Desocupado','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=245
            ],
            [
                'rec_detalle' => 'Excelente ubicación','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=246
            ],
            [
                'rec_detalle' => 'Ideal para ejecutivos','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=247
            ],
            [
                'rec_detalle' => 'Remodelada','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=248
            ],
            [
                'rec_detalle' => 'Zona tranquila','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=249
            ],
            [
                'rec_detalle' => 'Clima de montaña','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=250
            ],
            [
                'rec_detalle' => 'Espacioso','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=251
            ],
            [
                'rec_detalle' => 'Excelente vista','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=252
            ],
            [
                'rec_detalle' => 'Listo para mudarse','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=253
            ],
            [
                'rec_detalle' => 'Tipo estudio','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=254
            ],
            [
                'rec_detalle' => 'Condominio económico','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=255
            ],
            [
                'rec_detalle' => 'Excelente oportunidad','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=256
            ],
            [
                'rec_detalle' => 'Fácil acceso','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=257
            ],
            [
                'rec_detalle' => 'Muy bonito','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=258
            ],
            [
                'rec_detalle' => 'Verlo es comprarlo','rec_nemonico' => 'DEI','rec_padre' => 243, //rec_id=259
            ],
            [
                'rec_detalle' => 'CERCANÍAS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=260
            ],
            [
                'rec_detalle' => 'Abasto','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=261
            ],
            [
                'rec_detalle' => 'Estación de metro','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=262
            ],
            [
                'rec_detalle' => 'Panadería','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=263
            ],
            [
                'rec_detalle' => 'Centro comercial','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=264
            ],
            [
                'rec_detalle' => 'Farmacia','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=265
            ],
            [
                'rec_detalle' => 'Supermercado','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=266
            ],
            [
                'rec_detalle' => 'Colegio','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=267
            ],
            [
                'rec_detalle' => 'Otros negocios','rec_nemonico' => 'CER','rec_padre' => 260, //rec_id=268
            ]
        ]);
    }
}
