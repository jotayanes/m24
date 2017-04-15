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
                'rec_detalle' => 'Administrador','rec_nemonico' => 'TUSA','rec_padre' => 4, //rec_id=5
            ],
            [
                'rec_detalle' => 'Ofertante','rec_nemonico' => 'TUS','rec_padre' => 4, //rec_id=6
            ],






            [
                'rec_detalle' => 'ESTILOS DE SERVICIOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=7
            ],
            [
                'rec_detalle' => 'Arreglos generales','rec_nemonico' => 'SER','rec_padre' => 7, //rec_id=8
            ],
            [
                'rec_detalle' => 'Electricidad','rec_nemonico' => 'SER','rec_padre' => 7, //rec_id=9
            ],
            [
                'rec_detalle' => 'Gas','rec_nemonico' => 'SER','rec_padre' => 7, //rec_id=10
            ],
            [
                'rec_detalle' => 'Plomería','rec_nemonico' => 'SER','rec_padre' => 7, //rec_id=11
            ],
            [
                'rec_detalle' => 'Aires Acondicionados','rec_nemonico' => 'SER','rec_padre' => 7, //rec_id=12
            ],





            [
                'rec_detalle' => 'TIPO SERVICIO','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=13
            ],
            [
                'rec_detalle' => 'Reparación','rec_nemonico' => 'TSE','rec_padre' => 13, //rec_id=14
            ],
            [
                'rec_detalle' => 'Instalación','rec_nemonico' => 'TSE','rec_padre' => 13, //rec_id=15
            ],








            [
                'rec_detalle' => 'PAISES','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=16
            ],
            [
                'rec_detalle' => 'ESTADOS O PROVINCIAS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=17
            ],
            [
                'rec_detalle' => 'MUNICIPIOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=18
            ],
            [
                'rec_detalle' => 'PARROQUIAS O DISTRITOS MUNICIPALES','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=19
            ],




            [
                'rec_detalle' => 'República Dominicana','rec_nemonico' => 'PAI','rec_padre' => 16, //rec_id=20
            ],



            
            [
                'rec_detalle' => 'Azua','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=21
            ],
            [
                'rec_detalle' => 'Azua de Compostela','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=22
            ],
            [
                'rec_detalle' => 'Barreras','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=23
            ],
            [
                'rec_detalle' => 'Barro Arriba','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=24
            ],
            [
                'rec_detalle' => 'Clavellina','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=25
            ],
            [
                'rec_detalle' => 'Emma Balaguer Viuda Vallejo','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=26
            ],            
            [
                'rec_detalle' => 'Las Barías-La Estancia','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=27
            ],
            [
                'rec_detalle' => 'Las Lomas','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=28
            ],
            [
                'rec_detalle' => 'Los Jovillos','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=29
            ],            
            [
                'rec_detalle' => 'Puerto Viejo','rec_nemonico' => 'PAR','rec_padre' => 22, //rec_id=30
            ],
            [
                'rec_detalle' => 'Estebanía','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=31
            ],
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 31, //rec_id=33
            ],
            [
                'rec_detalle' => 'Guayabal','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=34
            ],
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 34, //rec_id=35
            ],
            [
                'rec_detalle' => 'Las Charcas','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=36
            ],
            [
                'rec_detalle' => 'Hatillo','rec_nemonico' => 'PAR','rec_padre' => 36, //rec_id=37
            ],
            [
                'rec_detalle' => 'Palmar de Ocoa','rec_nemonico' => 'PAR','rec_padre' => 36, //rec_id=38
            ],
            [
                'rec_detalle' => 'Las Yayas de Viajama','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=39
            ],
            [
                'rec_detalle' => 'Villarpando','rec_nemonico' => 'PAR','rec_padre' => 39, //rec_id=40
            ],            
            [
                'rec_detalle' => 'Hato Nuevo-Cortés','rec_nemonico' => 'PAR','rec_padre' => 39, //rec_id=41
            ],
            [
                'rec_detalle' => 'Padre Las Casas','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=42
            ],
            [
                'rec_detalle' => 'La Siembra','rec_nemonico' => 'PAR','rec_padre' => 42, //rec_id=43
            ],
            [
                'rec_detalle' => 'Las Lagunas','rec_nemonico' => 'PAR','rec_padre' => 42, //rec_id=44
            ],
            [
                'rec_detalle' => 'Los Fríos','rec_nemonico' => 'PAR','rec_padre' => 42, //rec_id=45
            ],
            [
                'rec_detalle' => 'Peralta','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=46
            ],
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 46, //rec_id=47
            ],
            [
                'rec_detalle' => 'Pueblo Viejo','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=48
            ],
            [
                'rec_detalle' => 'El Rosario','rec_nemonico' => 'PAR','rec_padre' => 48, //rec_id=49
            ],
            [
                'rec_detalle' => 'Sabana Yegua','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=50
            ],
            [
                'rec_detalle' => 'Proyecto 4','rec_nemonico' => 'PAR','rec_padre' => 50, //rec_id=51
            ],
            [
                'rec_detalle' => 'Ganadero','rec_nemonico' => 'PAR','rec_padre' => 50, //rec_id=52
            ],
            [
                'rec_detalle' => 'Proyecto 2-C','rec_nemonico' => 'PAR','rec_padre' => 50, //rec_id=53
            ],            
            [
                'rec_detalle' => 'Tábara Arriba','rec_nemonico' => 'MUN','rec_padre' => 21, //rec_id=54
            ],
            [
                'rec_detalle' => 'Amiama Gómez','rec_nemonico' => 'PAR','rec_padre' => 54, //rec_id=55
            ], 
            [
                'rec_detalle' => 'Los Toros','rec_nemonico' => 'PAR','rec_padre' => 54, //rec_id=56
            ], 
            [
                'rec_detalle' => 'Tábara Abajo','rec_nemonico' => 'PAR','rec_padre' => 54, //rec_id=57
            ], 




            [
                'rec_detalle' => 'Baoruco','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=58
            ],
            [
                'rec_detalle' => 'Neiba','rec_nemonico' => 'MUN','rec_padre' => 58, //rec_id=59
            ],
            [
                'rec_detalle' => 'El Palmar','rec_nemonico' => 'PAR','rec_padre' => 59, //rec_id=60
            ],
            [
                'rec_detalle' => 'Galván','rec_nemonico' => 'MUN','rec_padre' => 58, //rec_id=61
            ],
            [
                'rec_detalle' => 'El Salado','rec_nemonico' => 'PAR','rec_padre' => 61, //rec_id=62
            ],
            [
                'rec_detalle' => 'Los Ríos','rec_nemonico' => 'MUN','rec_padre' => 58, //rec_id=63
            ],
            [
                'rec_detalle' => 'Las Clavellinas','rec_nemonico' => 'PAR','rec_padre' => 63, //rec_id=64
            ],
            [
                'rec_detalle' => 'Tamayo','rec_nemonico' => 'MUN','rec_padre' => 58, //rec_id=65
            ],
            [
                'rec_detalle' => 'Cabeza de Toro','rec_nemonico' => 'PAR','rec_padre' => 65, //rec_id=66
            ],
            [
                'rec_detalle' => 'Mena','rec_nemonico' => 'PAR','rec_padre' => 65, //rec_id=67
            ],
            [
                'rec_detalle' => 'Monserrat','rec_nemonico' => 'PAR','rec_padre' => 65, //rec_id=68
            ],
            [
                'rec_detalle' => 'Santa Bárbara-El 6','rec_nemonico' => 'PAR','rec_padre' => 65, //rec_id=69
            ],
            [
                'rec_detalle' => 'Santana','rec_nemonico' => 'PAR','rec_padre' => 65, //rec_id=70
            ],
            [
                'rec_detalle' => 'Uvilla','rec_nemonico' => 'PAR','rec_padre' => 65, //rec_id=71
            ],
            [
                'rec_detalle' => 'Villa Jaragua','rec_nemonico' => 'MUN','rec_padre' => 58, //rec_id=72
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 72, //rec_id=73
            ],






            [
                'rec_detalle' => 'Barahona','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=74
            ],
            [
                'rec_detalle' => 'Barahona','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=75
            ],            
            [
                'rec_detalle' => 'El Cachón','rec_nemonico' => 'PAR','rec_padre' => 75, //rec_id=76
            ],
            [
                'rec_detalle' => 'La Guázara','rec_nemonico' => 'PAR','rec_padre' => 75, //rec_id=77
            ],
            [
                'rec_detalle' => 'Villa Central','rec_nemonico' => 'PAR','rec_padre' => 75, //rec_id=78
            ],
            [
                'rec_detalle' => 'Cabral','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=79
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 79, //rec_id=80
            ],
            [
                'rec_detalle' => 'El Peñón','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=81
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 81, //rec_id=82
            ],            
            [
                'rec_detalle' => 'Enriquillo','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=83
            ],            
            [
                'rec_detalle' => 'Arroyo Dulce','rec_nemonico' => 'PAR','rec_padre' => 83, //rec_id=84
            ],            
            [
                'rec_detalle' => 'Fundación','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=85
            ],            
            [
                'rec_detalle' => 'Pescadería','rec_nemonico' => 'PAR','rec_padre' => 85, //rec_id=86
            ],            
            [
                'rec_detalle' => 'Jaquimeyes','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=87
            ],            
            [
                'rec_detalle' => 'Palo Alto','rec_nemonico' => 'PAR','rec_padre' => 87, //rec_id=88
            ], 
            [
                'rec_detalle' => 'La Ciénaga','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=89
            ],            
            [
                'rec_detalle' => 'Bahoruco','rec_nemonico' => 'PAR','rec_padre' => 89, //rec_id=90
            ],             
            [
                'rec_detalle' => 'Las Salinas','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=91
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 91, //rec_id=92
            ], 
            [
                'rec_detalle' => 'Paraíso','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=93
            ],            
            [
                'rec_detalle' => 'Los Patos','rec_nemonico' => 'PAR','rec_padre' => 93, //rec_id=94
            ], 
            [
                'rec_detalle' => 'Polo','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=95
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 95, //rec_id=96
            ], 
            [
                'rec_detalle' => 'Vicente Noble','rec_nemonico' => 'MUN','rec_padre' => 74, //rec_id=97
            ],            
            [
                'rec_detalle' => 'Canoa','rec_nemonico' => 'PAR','rec_padre' => 97, //rec_id=98
            ], 
            [
                'rec_detalle' => 'Fondo Negro','rec_nemonico' => 'PAR','rec_padre' => 97, //rec_id=99
            ], 
            [
                'rec_detalle' => 'Quita Coraza','rec_nemonico' => 'PAR','rec_padre' => 97, //rec_id=100
            ],





            [
                'rec_detalle' => 'Dajabón','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=101
            ],
            [
                'rec_detalle' => 'Dajabón','rec_nemonico' => 'MUN','rec_padre' => 101, //rec_id=102
            ],            
            [
                'rec_detalle' => 'Cañongo','rec_nemonico' => 'PAR','rec_padre' => 102, //rec_id=103
            ], 
            [
                'rec_detalle' => 'El Pino','rec_nemonico' => 'MUN','rec_padre' => 101, //rec_id=104
            ],            
            [
                'rec_detalle' => 'Manuel Bueno','rec_nemonico' => 'PAR','rec_padre' => 104, //rec_id=105
            ], 
            [
                'rec_detalle' => 'Loma de Cabrera','rec_nemonico' => 'MUN','rec_padre' => 101, //rec_id=105
            ],            
            [
                'rec_detalle' => 'Capotillo','rec_nemonico' => 'PAR','rec_padre' => 105, //rec_id=106
            ], 
            [
                'rec_detalle' => 'Santiago de la Cruz','rec_nemonico' => 'PAR','rec_padre' => 105, //rec_id=107
            ], 
            [
                'rec_detalle' => 'Partido','rec_nemonico' => 'MUN','rec_padre' => 101, //rec_id=108
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 108, //rec_id=109
            ], 
            [
                'rec_detalle' => 'Restauración','rec_nemonico' => 'MUN','rec_padre' => 101, //rec_id=110
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 110, //rec_id=111
            ], 






            [
                'rec_detalle' => 'Duarte','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=112
            ],
            [
                'rec_detalle' => 'San Francisco de Macorís','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=113
            ],            
            [
                'rec_detalle' => 'Cenoví','rec_nemonico' => 'PAR','rec_padre' => 113, //rec_id=114
            ], 
            [
                'rec_detalle' => 'Jaya','rec_nemonico' => 'PAR','rec_padre' => 113, //rec_id=115
            ], 
            [
                'rec_detalle' => 'La Peña','rec_nemonico' => 'PAR','rec_padre' => 113, //rec_id=116
            ], 
            [
                'rec_detalle' => 'Presidente Don Antonio Guzmán Fernández','rec_nemonico' => 'PAR','rec_padre' => 113, //rec_id=117
            ], 
            [
                'rec_detalle' => 'Arenoso','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=118
            ],            
            [
                'rec_detalle' => 'Aguacate','rec_nemonico' => 'PAR','rec_padre' => 118, //rec_id=119
            ], 
            [
                'rec_detalle' => 'Las Coles','rec_nemonico' => 'PAR','rec_padre' => 118, //rec_id=120
            ], 
            [
                'rec_detalle' => 'Castillo','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=121
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 121, //rec_id=122
            ], 
            [
                'rec_detalle' => 'Eugenio María de Hostos','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=123
            ],            
            [
                'rec_detalle' => 'Sabana Grande','rec_nemonico' => 'PAR','rec_padre' => 123, //rec_id=124
            ],
            [
                'rec_detalle' => 'Las Guáranas','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=125
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 125, //rec_id=126
            ],
            [
                'rec_detalle' => 'Pimentel','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=127
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 127, //rec_id=128
            ],
            [
                'rec_detalle' => 'Villa Riva','rec_nemonico' => 'MUN','rec_padre' => 112, //rec_id=129
            ],            
            [
                'rec_detalle' => 'Agua Santa del Yuna','rec_nemonico' => 'PAR','rec_padre' => 129, //rec_id=130
            ],
            [
                'rec_detalle' => 'Barraquito','rec_nemonico' => 'PAR','rec_padre' => 129, //rec_id=131
            ],
            [
                'rec_detalle' => 'Cristo Rey de Guaraguao','rec_nemonico' => 'PAR','rec_padre' => 129, //rec_id=132
            ],
            [
                'rec_detalle' => 'Las Táranas','rec_nemonico' => 'PAR','rec_padre' => 129, //rec_id=133
            ],





            [
                'rec_detalle' => 'El Seibo','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=134
            ],
            [
                'rec_detalle' => 'El Seibo','rec_nemonico' => 'MUN','rec_padre' => 134, //rec_id=135
            ],            
            [
                'rec_detalle' => 'Pedro Sánchez','rec_nemonico' => 'PAR','rec_padre' => 135, //rec_id=136
            ],
            [
                'rec_detalle' => 'San Francisco-Vicentillo','rec_nemonico' => 'PAR','rec_padre' => 135, //rec_id=137
            ],
            [
                'rec_detalle' => 'Santa Lucía','rec_nemonico' => 'PAR','rec_padre' => 135, //rec_id=138
            ],            
            [
                'rec_detalle' => 'Miches','rec_nemonico' => 'MUN','rec_padre' => 134, //rec_id=139
            ],            
            [
                'rec_detalle' => 'El Cedro','rec_nemonico' => 'PAR','rec_padre' => 139, //rec_id=140
            ],
            [
                'rec_detalle' => 'La Gina','rec_nemonico' => 'PAR','rec_padre' => 139, //rec_id=141
            ],





            [
                'rec_detalle' => 'Elías Piña','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=142
            ],
            [
                'rec_detalle' => 'Comendador','rec_nemonico' => 'MUN','rec_padre' => 142, //rec_id=143
            ],            
            [
                'rec_detalle' => 'Guayabo','rec_nemonico' => 'PAR','rec_padre' => 143, //rec_id=144
            ],
            [
                'rec_detalle' => 'Sabana Larga','rec_nemonico' => 'PAR','rec_padre' => 143, //rec_id=145
            ],
            [
                'rec_detalle' => 'Bánica','rec_nemonico' => 'MUN','rec_padre' => 142, //rec_id=146
            ],            
            [
                'rec_detalle' => 'Sabana Cruz','rec_nemonico' => 'PAR','rec_padre' => 146, //rec_id=147
            ],
            [
                'rec_detalle' => 'Sabana Higüero','rec_nemonico' => 'PAR','rec_padre' => 146, //rec_id=148
            ],
            [
                'rec_detalle' => 'El Llano','rec_nemonico' => 'MUN','rec_padre' => 142, //rec_id=149
            ],            
            [
                'rec_detalle' => 'Guanito','rec_nemonico' => 'PAR','rec_padre' => 149, //rec_id=150
            ],
            [
                'rec_detalle' => 'Hondo Valle','rec_nemonico' => 'MUN','rec_padre' => 142, //rec_id=151
            ],            
            [
                'rec_detalle' => 'Rancho de la Guardia','rec_nemonico' => 'PAR','rec_padre' => 151, //rec_id=152
            ],            
            [
                'rec_detalle' => 'Juan Santiago','rec_nemonico' => 'MUN','rec_padre' => 142, //rec_id=153
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 153, //rec_id=154
            ], 
            [
                'rec_detalle' => 'Pedro Santana','rec_nemonico' => 'MUN','rec_padre' => 142, //rec_id=155
            ],            
            [
                'rec_detalle' => 'Río Limpio','rec_nemonico' => 'PAR','rec_padre' => 155, //rec_id=156
            ],






            [
                'rec_detalle' => 'Espaillat','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=157
            ],
            [
                'rec_detalle' => 'Moca','rec_nemonico' => 'MUN','rec_padre' => 157, //rec_id=158
            ],            
            [
                'rec_detalle' => 'Canca La Reina','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=159
            ],
            [
                'rec_detalle' => 'El Higüerito','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=160
            ],
            [
                'rec_detalle' => 'José Contreras','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=161
            ],
            [
                'rec_detalle' => 'Juan López','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=162
            ],
            [
                'rec_detalle' => 'La Ortega','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=163
            ],
            [
                'rec_detalle' => 'Las Lagunas','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=164
            ],
            [
                'rec_detalle' => 'Monte de la Jagua','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=165
            ],
            [
                'rec_detalle' => 'San Víctor','rec_nemonico' => 'PAR','rec_padre' => 158, //rec_id=166
            ],
            [
                'rec_detalle' => 'Cayetano Germosén','rec_nemonico' => 'MUN','rec_padre' => 157, //rec_id=167
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 167, //rec_id=168
            ],
            [
                'rec_detalle' => 'Gaspar Hernández','rec_nemonico' => 'MUN','rec_padre' => 157, //rec_id=169
            ],            
            [
                'rec_detalle' => 'Joba Arriba','rec_nemonico' => 'PAR','rec_padre' => 169, //rec_id=170
            ],
            [
                'rec_detalle' => 'Veragua','rec_nemonico' => 'PAR','rec_padre' => 169, //rec_id=171
            ],
            [
                'rec_detalle' => 'Villa Magante','rec_nemonico' => 'PAR','rec_padre' => 169, //rec_id=172
            ],
            [
                'rec_detalle' => 'Jamao al Norte','rec_nemonico' => 'MUN','rec_padre' => 157, //rec_id=173
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 173, //rec_id=174
            ],






            [
                'rec_detalle' => 'Hato Mayor','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=175
            ],
            [
                'rec_detalle' => 'Hato Mayor del Rey','rec_nemonico' => 'MUN','rec_padre' => 175, //rec_id=176
            ],            
            [
                'rec_detalle' => 'Guayabo Dulce','rec_nemonico' => 'PAR','rec_padre' => 176, //rec_id=177
            ],
            [
                'rec_detalle' => 'Mata Palacio','rec_nemonico' => 'PAR','rec_padre' => 176, //rec_id=178
            ],            
            [
                'rec_detalle' => 'Yerba Buena','rec_nemonico' => 'PAR','rec_padre' => 176, //rec_id=179
            ],
            [
                'rec_detalle' => 'El Valle','rec_nemonico' => 'MUN','rec_padre' => 175, //rec_id=180
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 180, //rec_id=181
            ],
            [
                'rec_detalle' => 'Sabana de la Mar','rec_nemonico' => 'MUN','rec_padre' => 175, //rec_id=182
            ],            
            [
                'rec_detalle' => 'Elupina Cordero de Las Cañitas','rec_nemonico' => 'PAR','rec_padre' => 182, //rec_id=183
            ],






            [
                'rec_detalle' => 'Hermanas Mirabal','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=184
            ],
            [
                'rec_detalle' => 'Salcedo','rec_nemonico' => 'MUN','rec_padre' => 184, //rec_id=185
            ],            
            [
                'rec_detalle' => 'Jamao Afuera','rec_nemonico' => 'PAR','rec_padre' => 185, //rec_id=186
            ],
            [
                'rec_detalle' => 'Tenares','rec_nemonico' => 'MUN','rec_padre' => 184, //rec_id=187
            ],            
            [
                'rec_detalle' => 'Blanco','rec_nemonico' => 'PAR','rec_padre' => 187, //rec_id=188
            ],
            [
                'rec_detalle' => 'Villa Tapia','rec_nemonico' => 'MUN','rec_padre' => 184, //rec_id=189
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 189, //rec_id=190
            ],





            [
                'rec_detalle' => 'Independencia','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=191
            ],
            [
                'rec_detalle' => 'Jimaní','rec_nemonico' => 'MUN','rec_padre' => 191, //rec_id=192
            ],            
            [
                'rec_detalle' => 'Boca de Cachón','rec_nemonico' => 'PAR','rec_padre' => 192, //rec_id=193
            ],
            [
                'rec_detalle' => 'El Limón','rec_nemonico' => 'PAR','rec_padre' => 192, //rec_id=194
            ],
            [
                'rec_detalle' => 'Cristóbal','rec_nemonico' => 'MUN','rec_padre' => 191, //rec_id=195
            ],            
            [
                'rec_detalle' => 'Batey 8','rec_nemonico' => 'PAR','rec_padre' => 195, //rec_id=196
            ],
            [
                'rec_detalle' => 'Duvergé','rec_nemonico' => 'MUN','rec_padre' => 191, //rec_id=197
            ],            
            [
                'rec_detalle' => 'Vengan a Ver','rec_nemonico' => 'PAR','rec_padre' => 197, //rec_id=198
            ],
            [
                'rec_detalle' => 'La Descubierta','rec_nemonico' => 'MUN','rec_padre' => 191, //rec_id=199
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 199, //rec_id=200
            ],
            [
                'rec_detalle' => 'Mella','rec_nemonico' => 'MUN','rec_padre' => 191, //rec_id=201
            ],            
            [
                'rec_detalle' => 'La Colonia','rec_nemonico' => 'PAR','rec_padre' => 201, //rec_id=202
            ],
            [
                'rec_detalle' => 'Postrer Río','rec_nemonico' => 'MUN','rec_padre' => 191, //rec_id=203
            ],            
            [
                'rec_detalle' => 'Guayabal','rec_nemonico' => 'PAR','rec_padre' => 203, //rec_id=204
            ],






            [
                'rec_detalle' => 'La Altagracia','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=205
            ],
            [
                'rec_detalle' => 'Higüey','rec_nemonico' => 'MUN','rec_padre' => 205, //rec_id=206
            ],            
            [
                'rec_detalle' => 'La Otra Banda','rec_nemonico' => 'PAR','rec_padre' => 206, //rec_id=207
            ],
            [
                'rec_detalle' => 'Lagunas de Nisibón','rec_nemonico' => 'PAR','rec_padre' => 206, //rec_id=208
            ],            
            [
                'rec_detalle' => 'Verón-Punta Cana','rec_nemonico' => 'PAR','rec_padre' => 206, //rec_id=209
            ],
            [
                'rec_detalle' => 'San Rafael del Yuma','rec_nemonico' => 'MUN','rec_padre' => 205, //rec_id=210
            ],            
            [
                'rec_detalle' => 'Bayahibe','rec_nemonico' => 'PAR','rec_padre' => 210, //rec_id=211
            ],
            [
                'rec_detalle' => 'Boca de Yuma','rec_nemonico' => 'PAR','rec_padre' => 210, //rec_id=212
            ],






            [
                'rec_detalle' => 'La Romana','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=213
            ],
            [
                'rec_detalle' => 'La Romana','rec_nemonico' => 'MUN','rec_padre' => 213, //rec_id=214
            ],            
            [
                'rec_detalle' => 'Caleta','rec_nemonico' => 'PAR','rec_padre' => 214, //rec_id=215
            ],
            [
                'rec_detalle' => 'Guaymate','rec_nemonico' => 'MUN','rec_padre' => 213, //rec_id=216
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 216, //rec_id=217
            ],
            [
                'rec_detalle' => 'Villa Hermosa','rec_nemonico' => 'MUN','rec_padre' => 213, //rec_id=218
            ],            
            [
                'rec_detalle' => 'Cumayasa','rec_nemonico' => 'PAR','rec_padre' => 218, //rec_id=219
            ],





            [
                'rec_detalle' => 'La Vega','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=220
            ],
            [
                'rec_detalle' => 'La Concepción de La Vega','rec_nemonico' => 'MUN','rec_padre' => 220, //rec_id=221
            ],            
            [
                'rec_detalle' => 'El Ranchito','rec_nemonico' => 'PAR','rec_padre' => 221, //rec_id=222
            ],
            [
                'rec_detalle' => 'Río Verde Arriba','rec_nemonico' => 'PAR','rec_padre' => 221, //rec_id=223
            ],
            [
                'rec_detalle' => 'Constanza','rec_nemonico' => 'MUN','rec_padre' => 220, //rec_id=224
            ],            
            [
                'rec_detalle' => 'La Sabina','rec_nemonico' => 'PAR','rec_padre' => 224, //rec_id=225
            ],
            [
                'rec_detalle' => 'Tireo','rec_nemonico' => 'PAR','rec_padre' => 224, //rec_id=226
            ],
            [
                'rec_detalle' => 'Jarabacoa','rec_nemonico' => 'MUN','rec_padre' => 220, //rec_id=227
            ],            
            [
                'rec_detalle' => 'Buena Vista','rec_nemonico' => 'PAR','rec_padre' => 227, //rec_id=228
            ],
            [
                'rec_detalle' => 'Manabao','rec_nemonico' => 'PAR','rec_padre' => 227, //rec_id=229
            ],
            [
                'rec_detalle' => 'Jima Abajo','rec_nemonico' => 'MUN','rec_padre' => 220, //rec_id=230
            ],            
            [
                'rec_detalle' => 'Rincón','rec_nemonico' => 'PAR','rec_padre' => 230, //rec_id=231
            ],






            [
                'rec_detalle' => 'María Trinidad Sánchez','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=232
            ],
            [
                'rec_detalle' => 'Nagua','rec_nemonico' => 'MUN','rec_padre' => 232, //rec_id=233
            ],            
            [
                'rec_detalle' => 'Arroyo al Medio','rec_nemonico' => 'PAR','rec_padre' => 233, //rec_id=234
            ],
            [
                'rec_detalle' => 'Las Gordas','rec_nemonico' => 'PAR','rec_padre' => 233, //rec_id=235
            ],
            [
                'rec_detalle' => 'San José de Matanzas','rec_nemonico' => 'PAR','rec_padre' => 233, //rec_id=236
            ],            
            [
                'rec_detalle' => 'Cabrera','rec_nemonico' => 'MUN','rec_padre' => 232, //rec_id=237
            ],            
            [
                'rec_detalle' => 'Arroyo Salado','rec_nemonico' => 'PAR','rec_padre' => 237, //rec_id=238
            ],
            [
                'rec_detalle' => 'La Entrada','rec_nemonico' => 'PAR','rec_padre' => 237, //rec_id=239
            ],
            [
                'rec_detalle' => 'El Factor','rec_nemonico' => 'MUN','rec_padre' => 232, //rec_id=240
            ],            
            [
                'rec_detalle' => 'El Pozo','rec_nemonico' => 'PAR','rec_padre' => 240, //rec_id=241
            ],
            [
                'rec_detalle' => 'Río San Juan','rec_nemonico' => 'MUN','rec_padre' => 232, //rec_id=242
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 242, //rec_id=243
            ], 





            [
                'rec_detalle' => 'Monseñor Nouel','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=244
            ],
            [
                'rec_detalle' => 'Bonao','rec_nemonico' => 'MUN','rec_padre' => 244, //rec_id=245
            ],            
            [
                'rec_detalle' => 'Arroyo Toro-Masipedro','rec_nemonico' => 'PAR','rec_padre' => 245, //rec_id=246
            ], 
            [
                'rec_detalle' => 'La Salvia-Los Quemados','rec_nemonico' => 'PAR','rec_padre' => 245, //rec_id=247
            ], 
            [
                'rec_detalle' => 'Jayaco','rec_nemonico' => 'PAR','rec_padre' => 245, //rec_id=248
            ], 
            [
                'rec_detalle' => 'Juma Bejucal','rec_nemonico' => 'PAR','rec_padre' => 245, //rec_id=249
            ], 
            [
                'rec_detalle' => 'Sabana del Puerto','rec_nemonico' => 'PAR','rec_padre' => 245, //rec_id=250
            ], 
            [
                'rec_detalle' => 'Maimón','rec_nemonico' => 'MUN','rec_padre' => 244, //rec_id=251
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 251, //rec_id=252
            ],
            [
                'rec_detalle' => 'Piedra Blanca','rec_nemonico' => 'MUN','rec_padre' => 244, //rec_id=253
            ],            
            [
                'rec_detalle' => 'Juan Adrián','rec_nemonico' => 'PAR','rec_padre' => 253, //rec_id=254
            ],
            [
                'rec_detalle' => 'Villa Sonador','rec_nemonico' => 'PAR','rec_padre' => 253, //rec_id=255
            ],





            [
                'rec_detalle' => 'Montecristi','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=256
            ],
            [
                'rec_detalle' => 'Montecristi','rec_nemonico' => 'MUN','rec_padre' => 256, //rec_id=257
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 257, //rec_id=258
            ],
            [
                'rec_detalle' => 'Castañuela','rec_nemonico' => 'MUN','rec_padre' => 256, //rec_id=259
            ],            
            [
                'rec_detalle' => 'Palo Verde','rec_nemonico' => 'PAR','rec_padre' => 259, //rec_id=260
            ],
            [
                'rec_detalle' => 'Guayubín','rec_nemonico' => 'MUN','rec_padre' => 256, //rec_id=261
            ],            
            [
                'rec_detalle' => 'Cana Chapetón','rec_nemonico' => 'PAR','rec_padre' => 261, //rec_id=262
            ],
            [
                'rec_detalle' => 'Hatillo Palma','rec_nemonico' => 'PAR','rec_padre' => 261, //rec_id=263
            ],
            [
                'rec_detalle' => 'Villa Elisa','rec_nemonico' => 'PAR','rec_padre' => 261, //rec_id=264
            ],            
            [
                'rec_detalle' => 'Las Matas de Santa Cruz','rec_nemonico' => 'MUN','rec_padre' => 256, //rec_id=265
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 265, //rec_id=266
            ],
            [
                'rec_detalle' => 'Pepillo Salcedo','rec_nemonico' => 'MUN','rec_padre' => 256, //rec_id=267
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 267, //rec_id=268
            ],
            [
                'rec_detalle' => 'Villa Vásquez','rec_nemonico' => 'MUN','rec_padre' => 256, //rec_id=269
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 269, //rec_id=270
            ],




            [
                'rec_detalle' => 'Monte Plata','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=271
            ],
            [
                'rec_detalle' => 'Monte Plata','rec_nemonico' => 'MUN','rec_padre' => 271, //rec_id=272
            ],            
            [
                'rec_detalle' => 'Boyá','rec_nemonico' => 'PAR','rec_padre' => 272, //rec_id=273
            ],
            [
                'rec_detalle' => 'Chirino','rec_nemonico' => 'PAR','rec_padre' => 272, //rec_id=274
            ],
            [
                'rec_detalle' => 'Don Juan','rec_nemonico' => 'PAR','rec_padre' => 272, //rec_id=275
            ],
            [
                'rec_detalle' => 'Bayaguana','rec_nemonico' => 'MUN','rec_padre' => 271, //rec_id=276
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 276, //rec_id=277
            ],
            [
                'rec_detalle' => 'Peralvillo','rec_nemonico' => 'MUN','rec_padre' => 271, //rec_id=278
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 278, //rec_id=279
            ],
            [
                'rec_detalle' => 'Sabana Grande de Boyá','rec_nemonico' => 'MUN','rec_padre' => 271, //rec_id=280
            ],            
            [
                'rec_detalle' => 'Gonzalo','rec_nemonico' => 'PAR','rec_padre' => 280, //rec_id=281
            ],
            [
                'rec_detalle' => 'Majagual','rec_nemonico' => 'PAR','rec_padre' => 280, //rec_id=282
            ],
            [
                'rec_detalle' => 'Yamasá','rec_nemonico' => 'MUN','rec_padre' => 271, //rec_id=283
            ],            
            [
                'rec_detalle' => 'Los Botados','rec_nemonico' => 'PAR','rec_padre' => 283, //rec_id=284
            ],




            [
                'rec_detalle' => 'Pedernales','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=285
            ],
            [
                'rec_detalle' => 'Pedernales','rec_nemonico' => 'MUN','rec_padre' => 285, //rec_id=286
            ],            
            [
                'rec_detalle' => 'José Francisco Peña Gómez','rec_nemonico' => 'PAR','rec_padre' => 286, //rec_id=287
            ],
            [
                'rec_detalle' => 'Juancho','rec_nemonico' => 'PAR','rec_padre' => 286, //rec_id=288
            ],
            [
                'rec_detalle' => 'Oviedo','rec_nemonico' => 'MUN','rec_padre' => 285, //rec_id=289
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 289, //rec_id=290
            ],





            [
                'rec_detalle' => 'Peravia','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=291
            ],
            [
                'rec_detalle' => 'Baní','rec_nemonico' => 'MUN','rec_padre' => 291, //rec_id=292
            ],            
            [
                'rec_detalle' => 'Catalina','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=293
            ],
            [
                'rec_detalle' => 'El Carretón','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=294
            ],
            [
                'rec_detalle' => 'El Limonal','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=295
            ],
            [
                'rec_detalle' => 'Las Barías','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=296
            ],
            [
                'rec_detalle' => 'Matanzas','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=297
            ],
            [
                'rec_detalle' => 'Paya','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=298
            ],
            [
                'rec_detalle' => 'Sabana Buey','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=299
            ],
            [
                'rec_detalle' => 'Villa Fundación','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=300
            ],
            [
                'rec_detalle' => 'Villa Sombrero','rec_nemonico' => 'PAR','rec_padre' => 292, //rec_id=301
            ],
            [
                'rec_detalle' => 'Nizao','rec_nemonico' => 'MUN','rec_padre' => 291, //rec_id=302
            ],            
            [
                'rec_detalle' => 'Pizarrete','rec_nemonico' => 'PAR','rec_padre' => 302, //rec_id=303
            ],
            [
                'rec_detalle' => 'Santana','rec_nemonico' => 'PAR','rec_padre' => 302, //rec_id=304
            ],





            [
                'rec_detalle' => 'Puerto Plata','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=305
            ],
            [
                'rec_detalle' => 'Puerto Plata','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=306
            ],            
            [
                'rec_detalle' => 'Maimón','rec_nemonico' => 'PAR','rec_padre' => 306, //rec_id=307
            ],
            [
                'rec_detalle' => 'Yásica Arriba','rec_nemonico' => 'PAR','rec_padre' => 306, //rec_id=308
            ],
            [
                'rec_detalle' => 'Altamira','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=309
            ],            
            [
                'rec_detalle' => 'Río Grande','rec_nemonico' => 'PAR','rec_padre' => 309, //rec_id=310
            ],
            [
                'rec_detalle' => 'Guananico','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=311
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 311, //rec_id=312
            ],
            [
                'rec_detalle' => 'Imbert','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=313
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 313, //rec_id=314
            ],
            [
                'rec_detalle' => 'Los Hidalgos','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=315
            ],            
            [
                'rec_detalle' => 'Navas','rec_nemonico' => 'PAR','rec_padre' => 315, //rec_id=316
            ],
            [
                'rec_detalle' => 'Luperón','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=317
            ],            
            [
                'rec_detalle' => 'Belloso','rec_nemonico' => 'PAR','rec_padre' => 317, //rec_id=318
            ],
            [
                'rec_detalle' => 'Estrecho','rec_nemonico' => 'PAR','rec_padre' => 317, //rec_id=319
            ],
            [
                'rec_detalle' => 'La Isabela','rec_nemonico' => 'PAR','rec_padre' => 317, //rec_id=320
            ],            
            [
                'rec_detalle' => 'Sosúa','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=321
            ],            
            [
                'rec_detalle' => 'Cabarete','rec_nemonico' => 'PAR','rec_padre' => 321, //rec_id=322
            ],
            [
                'rec_detalle' => 'Sabaneta de Yásica','rec_nemonico' => 'PAR','rec_padre' => 321, //rec_id=323
            ],
            [
                'rec_detalle' => 'Villa Isabela','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=324
            ],            
            [
                'rec_detalle' => 'Estero Hondo','rec_nemonico' => 'PAR','rec_padre' => 324, //rec_id=325
            ],
            [
                'rec_detalle' => 'Gualete','rec_nemonico' => 'PAR','rec_padre' => 324, //rec_id=326
            ],
            [
                'rec_detalle' => 'La Jaiba','rec_nemonico' => 'PAR','rec_padre' => 324, //rec_id=327
            ],
            [
                'rec_detalle' => 'Villa Montellano','rec_nemonico' => 'MUN','rec_padre' => 305, //rec_id=328
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 328, //rec_id=329
            ],





            [
                'rec_detalle' => 'Samaná','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=330
            ],
            [
                'rec_detalle' => 'Samaná','rec_nemonico' => 'MUN','rec_padre' => 330, //rec_id=331
            ],            
            [
                'rec_detalle' => 'Arroyo Barril','rec_nemonico' => 'PAR','rec_padre' => 331, //rec_id=332
            ],
            [
                'rec_detalle' => 'El Limón','rec_nemonico' => 'PAR','rec_padre' => 331, //rec_id=333
            ],
            [
                'rec_detalle' => 'Las Galeras','rec_nemonico' => 'PAR','rec_padre' => 331, //rec_id=334
            ],                        
            [
                'rec_detalle' => 'Las Terrenas','rec_nemonico' => 'MUN','rec_padre' => 330, //rec_id=335
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 335, //rec_id=336
            ],
            [
                'rec_detalle' => 'Sánchez','rec_nemonico' => 'MUN','rec_padre' => 330, //rec_id=337
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 337, //rec_id=338
            ],





            [
                'rec_detalle' => 'San Cristóbal','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=339
            ],
            [
                'rec_detalle' => 'San Cristóbal','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=340
            ],            
            [
                'rec_detalle' => 'Hato Damas','rec_nemonico' => 'PAR','rec_padre' => 340, //rec_id=341
            ],
            [
                'rec_detalle' => 'Bajos de Haina','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=342
            ],            
            [
                'rec_detalle' => 'El Carril','rec_nemonico' => 'PAR','rec_padre' => 342, //rec_id=343
            ],
            [
                'rec_detalle' => 'Cambita Garabito','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=344
            ],            
            [
                'rec_detalle' => 'Cambita El Pueblecito','rec_nemonico' => 'PAR','rec_padre' => 344, //rec_id=345
            ],
            [
                'rec_detalle' => 'Los Cacaos','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=346
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 346, //rec_id=347
            ],
            [
                'rec_detalle' => 'Sabana Grande de Palenque','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=348
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 348, //rec_id=349
            ],
            [
                'rec_detalle' => 'San Gregorio de Nigua','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=350
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 350, //rec_id=351
            ],
            [
                'rec_detalle' => 'Villa Altagracia','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=352
            ],            
            [
                'rec_detalle' => 'La Cuchilla','rec_nemonico' => 'PAR','rec_padre' => 352, //rec_id=353
            ],
            [
                'rec_detalle' => 'Medina','rec_nemonico' => 'PAR','rec_padre' => 352, //rec_id=354
            ],
            [
                'rec_detalle' => 'San José del Puerto','rec_nemonico' => 'PAR','rec_padre' => 352, //rec_id=355
            ],            
            [
                'rec_detalle' => 'Yaguate','rec_nemonico' => 'MUN','rec_padre' => 339, //rec_id=356
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 356, //rec_id=357
            ],







            [
                'rec_detalle' => 'San José de Ocoa','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=358
            ],
            [
                'rec_detalle' => 'San José de Ocoa','rec_nemonico' => 'MUN','rec_padre' => 358, //rec_id=359
            ],            
            [
                'rec_detalle' => 'El Naranjal','rec_nemonico' => 'PAR','rec_padre' => 359, //rec_id=360
            ],
            [
                'rec_detalle' => 'El Pinar','rec_nemonico' => 'PAR','rec_padre' => 359, //rec_id=361
            ],
            [
                'rec_detalle' => 'La Ciénaga','rec_nemonico' => 'PAR','rec_padre' => 359, //rec_id=362
            ],
            [
                'rec_detalle' => 'Nizao-Las Auyamas','rec_nemonico' => 'PAR','rec_padre' => 359, //rec_id=363
            ],
            [
                'rec_detalle' => 'Rancho Arriba','rec_nemonico' => 'MUN','rec_padre' => 358, //rec_id=364
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 364, //rec_id=365
            ],                                    
            [
                'rec_detalle' => 'Sabana Larga','rec_nemonico' => 'MUN','rec_padre' => 358, //rec_id=366
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 366, //rec_id=367
            ],





            [
                'rec_detalle' => 'San Juan','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=368
            ],
            [
                'rec_detalle' => 'San Juan de la Maguana','rec_nemonico' => 'MUN','rec_padre' => 368, //rec_id=369
            ],            
            [
                'rec_detalle' => 'El Rosario','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=370
            ],
            [
                'rec_detalle' => 'Guanito','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=371
            ],
            [
                'rec_detalle' => 'Hato del Padre','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=372
            ],
            [
                'rec_detalle' => 'Hato Nuevo','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=373
            ],
            [
                'rec_detalle' => 'Las Charcas de María Nova','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=374
            ],
            [
                'rec_detalle' => 'Pedro Corto','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=375
            ],
            [
                'rec_detalle' => 'Sabana Alta','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=376
            ],
            [
                'rec_detalle' => 'Sabaneta','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=377
            ],
            [
                'rec_detalle' => 'La Jagua','rec_nemonico' => 'PAR','rec_padre' => 369, //rec_id=378
            ],
            [
                'rec_detalle' => 'Bohechío','rec_nemonico' => 'MUN','rec_padre' => 368, //rec_id=379
            ],            
            [
                'rec_detalle' => 'Arroyo Cano','rec_nemonico' => 'PAR','rec_padre' => 379, //rec_id=380
            ],
            [
                'rec_detalle' => 'Yaque','rec_nemonico' => 'PAR','rec_padre' => 379, //rec_id=381
            ],
            [
                'rec_detalle' => 'El Cercado','rec_nemonico' => 'MUN','rec_padre' => 368, //rec_id=382
            ],            
            [
                'rec_detalle' => 'Batista','rec_nemonico' => 'PAR','rec_padre' => 382, //rec_id=383
            ],
            [
                'rec_detalle' => 'Derrumbadero','rec_nemonico' => 'PAR','rec_padre' => 382, //rec_id=384
            ],
            [
                'rec_detalle' => 'Juan de Herrera','rec_nemonico' => 'MUN','rec_padre' => 368, //rec_id=385
            ],            
            [
                'rec_detalle' => 'Jínova','rec_nemonico' => 'PAR','rec_padre' => 385, //rec_id=386
            ],
            [
                'rec_detalle' => 'Las Matas de Farfán','rec_nemonico' => 'MUN','rec_padre' => 368, //rec_id=387
            ],            
            [
                'rec_detalle' => 'Carrera de Yegua','rec_nemonico' => 'PAR','rec_padre' => 387, //rec_id=388
            ],
            [
                'rec_detalle' => 'Matayaya','rec_nemonico' => 'PAR','rec_padre' => 387, //rec_id=389
            ],
            [
                'rec_detalle' => 'Vallejuelo','rec_nemonico' => 'MUN','rec_padre' => 368, //rec_id=390
            ],            
            [
                'rec_detalle' => 'Jorjillo','rec_nemonico' => 'PAR','rec_padre' => 390, //rec_id=391
            ],





            [
                'rec_detalle' => 'San Pedro de Macorís','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=392
            ],
            [
                'rec_detalle' => 'San Pedro de Macorís','rec_nemonico' => 'MUN','rec_padre' => 392, //rec_id=393
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 393, //rec_id=394
            ],
            [
                'rec_detalle' => 'Consuelo','rec_nemonico' => 'MUN','rec_padre' => 392, //rec_id=395
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 395, //rec_id=396
            ],
            [
                'rec_detalle' => 'Guayacanes','rec_nemonico' => 'MUN','rec_padre' => 392, //rec_id=397
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 397, //rec_id=398
            ],
            [
                'rec_detalle' => 'Quisqueya','rec_nemonico' => 'MUN','rec_padre' => 392, //rec_id=399
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 399, //rec_id=400
            ],
            [
                'rec_detalle' => 'Ramón Santana','rec_nemonico' => 'MUN','rec_padre' => 392, //rec_id=401
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 401, //rec_id=402
            ],
            [
                'rec_detalle' => 'San José de Los Llanos','rec_nemonico' => 'MUN','rec_padre' => 392, //rec_id=403
            ],            
            [
                'rec_detalle' => 'El Puerto','rec_nemonico' => 'PAR','rec_padre' => 403, //rec_id=404
            ],            
            [
                'rec_detalle' => 'Gautier','rec_nemonico' => 'PAR','rec_padre' => 403, //rec_id=405
            ],





            [
                'rec_detalle' => 'Sánchez Ramírez','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=406
            ],
            [
                'rec_detalle' => 'Cotuí','rec_nemonico' => 'MUN','rec_padre' => 406, //rec_id=407
            ],            
            [
                'rec_detalle' => 'Caballero','rec_nemonico' => 'PAR','rec_padre' => 407, //rec_id=408
            ], 
            [
                'rec_detalle' => 'Comedero Arriba','rec_nemonico' => 'PAR','rec_padre' => 407, //rec_id=409
            ], 
            [
                'rec_detalle' => 'Quita Sueño','rec_nemonico' => 'PAR','rec_padre' => 407, //rec_id=410
            ],             
            [
                'rec_detalle' => 'Cevicos','rec_nemonico' => 'MUN','rec_padre' => 406, //rec_id=411
            ],            
            [
                'rec_detalle' => 'La Cueva','rec_nemonico' => 'PAR','rec_padre' => 411, //rec_id=412
            ], 
            [
                'rec_detalle' => 'Platanal','rec_nemonico' => 'PAR','rec_padre' => 411, //rec_id=413
            ], 
            [
                'rec_detalle' => 'Fantino','rec_nemonico' => 'MUN','rec_padre' => 406, //rec_id=414
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 414, //rec_id=415
            ], 
            [
                'rec_detalle' => 'La Mata','rec_nemonico' => 'MUN','rec_padre' => 406, //rec_id=416
            ],            
            [
                'rec_detalle' => 'Angelina','rec_nemonico' => 'PAR','rec_padre' => 416, //rec_id=417
            ],            
            [
                'rec_detalle' => 'La Bija','rec_nemonico' => 'PAR','rec_padre' => 416, //rec_id=418
            ],  
            [
                'rec_detalle' => 'Hernando Alonzo','rec_nemonico' => 'PAR','rec_padre' => 416, //rec_id=419
            ],




            [
                'rec_detalle' => 'Santiago','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=420
            ],
            [
                'rec_detalle' => 'Santiago','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=421
            ],            
            [
                'rec_detalle' => 'Baitoa','rec_nemonico' => 'PAR','rec_padre' => 421, //rec_id=422
            ], 
            [
                'rec_detalle' => 'Hato del Yaque','rec_nemonico' => 'PAR','rec_padre' => 421, //rec_id=423
            ], 
            [
                'rec_detalle' => 'La Canela','rec_nemonico' => 'PAR','rec_padre' => 421, //rec_id=424
            ], 
            [
                'rec_detalle' => 'Pedro García','rec_nemonico' => 'PAR','rec_padre' => 421, //rec_id=425
            ], 
            [
                'rec_detalle' => 'San Francisco de Jacagua','rec_nemonico' => 'PAR','rec_padre' => 421, //rec_id=426
            ], 
            [
                'rec_detalle' => 'Bisonó','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=427
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 427, //rec_id=428
            ], 
            [
                'rec_detalle' => 'Jánico','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=429
            ],            
            [
                'rec_detalle' => 'El Caimito','rec_nemonico' => 'PAR','rec_padre' => 429, //rec_id=430
            ],
            [
                'rec_detalle' => 'Juncalito','rec_nemonico' => 'PAR','rec_padre' => 429, //rec_id=431
            ],
            [
                'rec_detalle' => 'Licey al Medio','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=432
            ],            
            [
                'rec_detalle' => 'Las Palomas','rec_nemonico' => 'PAR','rec_padre' => 432, //rec_id=433
            ],
            [
                'rec_detalle' => 'Puñal','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=434
            ],            
            [
                'rec_detalle' => 'Canabacoa','rec_nemonico' => 'PAR','rec_padre' => 434, //rec_id=435
            ],
            [
                'rec_detalle' => 'Guayabal','rec_nemonico' => 'PAR','rec_padre' => 434, //rec_id=436
            ],
            [
                'rec_detalle' => 'Sabana Iglesia','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=437
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 437, //rec_id=438
            ],
            [
                'rec_detalle' => 'San José de las Matas','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=439
            ],            
            [
                'rec_detalle' => 'El Rubio','rec_nemonico' => 'PAR','rec_padre' => 439, //rec_id=440
            ],
            [
                'rec_detalle' => 'La Cuesta','rec_nemonico' => 'PAR','rec_padre' => 439, //rec_id=441
            ],
            [
                'rec_detalle' => 'Las Placetas','rec_nemonico' => 'PAR','rec_padre' => 439, //rec_id=442
            ],            
            [
                'rec_detalle' => 'Tamboril','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=443
            ],            
            [
                'rec_detalle' => 'Canca La Piedra','rec_nemonico' => 'PAR','rec_padre' => 443, //rec_id=444
            ],
            [
                'rec_detalle' => 'Villa González','rec_nemonico' => 'MUN','rec_padre' => 420, //rec_id=445
            ],            
            [
                'rec_detalle' => 'El Limón','rec_nemonico' => 'PAR','rec_padre' => 445, //rec_id=446
            ],
            [
                'rec_detalle' => 'Palmar Arriba','rec_nemonico' => 'PAR','rec_padre' => 445, //rec_id=447
            ],





            [
                'rec_detalle' => 'Santiago Rodríguez','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=448
            ],
            [
                'rec_detalle' => 'San Ignacio de Sabaneta','rec_nemonico' => 'MUN','rec_padre' => 448, //rec_id=449
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 449, //rec_id=450
            ],
            [
                'rec_detalle' => 'Los Almácigos','rec_nemonico' => 'MUN','rec_padre' => 448, //rec_id=451
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 451, //rec_id=452
            ],
            [
                'rec_detalle' => 'Monción','rec_nemonico' => 'MUN','rec_padre' => 448, //rec_id=453
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 453, //rec_id=454
            ],





            [
                'rec_detalle' => 'Santo Domingo','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=455
            ],
            [
                'rec_detalle' => 'Santo Domingo Este','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=456
            ],            
            [
                'rec_detalle' => 'San Luis','rec_nemonico' => 'PAR','rec_padre' => 456, //rec_id=457
            ],
            [
                'rec_detalle' => 'Boca Chica','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=458
            ],            
            [
                'rec_detalle' => 'La Caleta','rec_nemonico' => 'PAR','rec_padre' => 458, //rec_id=459
            ],
            [
                'rec_detalle' => 'Los Alcarrizos','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=460
            ],            
            [
                'rec_detalle' => 'Palmarejo-Villa Linda','rec_nemonico' => 'PAR','rec_padre' => 460, //rec_id=461
            ],
            [
                'rec_detalle' => 'Pantoja','rec_nemonico' => 'PAR','rec_padre' => 460, //rec_id=462
            ],
            [
                'rec_detalle' => 'Pedro Brand','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=463
            ],            
            [
                'rec_detalle' => 'La Cuaba','rec_nemonico' => 'PAR','rec_padre' => 463, //rec_id=464
            ],
            [
                'rec_detalle' => 'La Guáyiga','rec_nemonico' => 'PAR','rec_padre' => 463, //rec_id=465
            ],
            [
                'rec_detalle' => 'San Antonio de Guerra','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=466
            ],            
            [
                'rec_detalle' => 'Hato Viejo','rec_nemonico' => 'PAR','rec_padre' => 466, //rec_id=467
            ],
            [
                'rec_detalle' => 'Santo Domingo Norte','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=468
            ],            
            [
                'rec_detalle' => 'La Victoria','rec_nemonico' => 'PAR','rec_padre' => 468, //rec_id=469
            ],
            [
                'rec_detalle' => 'Santo Domingo Oeste','rec_nemonico' => 'MUN','rec_padre' => 455, //rec_id=470
            ],            
            [
                'rec_detalle' => 'Sin Distrito Municipal','rec_nemonico' => 'PAR','rec_padre' => 470, //rec_id=471
            ],




            [
                'rec_detalle' => 'Valverde','rec_nemonico' => 'EDO','rec_padre' => 20, //rec_id=472
            ],
            [
                'rec_detalle' => 'Mao','rec_nemonico' => 'MUN','rec_padre' => 472, //rec_id=473
            ],            
            [
                'rec_detalle' => 'Ámina','rec_nemonico' => 'PAR','rec_padre' => 473, //rec_id=474
            ],
            [
                'rec_detalle' => 'Guatapanal','rec_nemonico' => 'PAR','rec_padre' => 473, //rec_id=475
            ],
            [
                'rec_detalle' => 'Jaibón (Pueblo Nuevo)','rec_nemonico' => 'PAR','rec_padre' => 473, //rec_id=476
            ],            
            [
                'rec_detalle' => 'Esperanza','rec_nemonico' => 'MUN','rec_padre' => 472, //rec_id=477
            ],            
            [
                'rec_detalle' => 'Boca de Mao','rec_nemonico' => 'PAR','rec_padre' => 477, //rec_id=478
            ],
            [
                'rec_detalle' => 'Jicomé','rec_nemonico' => 'PAR','rec_padre' => 477, //rec_id=479
            ],
            [
                'rec_detalle' => 'Maizal','rec_nemonico' => 'PAR','rec_padre' => 477, //rec_id=480
            ], 
            [
                'rec_detalle' => 'Paradero','rec_nemonico' => 'PAR','rec_padre' => 477, //rec_id=481
            ], 
            [
                'rec_detalle' => 'Laguna Salada','rec_nemonico' => 'MUN','rec_padre' => 472, //rec_id=482
            ],            
            [
                'rec_detalle' => 'Cruce de Guayacanes','rec_nemonico' => 'PAR','rec_padre' => 482, //rec_id=483
            ],
            [
                'rec_detalle' => 'Jaibón','rec_nemonico' => 'PAR','rec_padre' => 482, //rec_id=484
            ],
            [
                'rec_detalle' => 'La Caya','rec_nemonico' => 'PAR','rec_padre' => 482, //rec_id=485
            ],





            [
                'rec_detalle' => 'TIPOS SERVICIOS MUDATE','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=486
            ],
            [
                'rec_detalle' => 'Inmuebles','rec_nemonico' => 'SMU','rec_padre' => 486, //rec_id=487
            ],
            [
                'rec_detalle' => 'Mudanzas','rec_nemonico' => 'SMU','rec_padre' => 486, //rec_id=488
            ],
            [
                'rec_detalle' => 'Servicios','rec_nemonico' => 'SMU','rec_padre' => 486, //rec_id=489
            ],
            




            [
                'rec_detalle' => 'SEXOS','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=490
            ],
            [
                'rec_detalle' => 'Femenino','rec_nemonico' => 'SEX','rec_padre' => 490, //rec_id=491
            ],
            [
                'rec_detalle' => 'Masculino','rec_nemonico' => 'SEX','rec_padre' => 490, //rec_id=492
            ],            




            [
                'rec_detalle' => 'NACIONALIDADES','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=493
            ],
            [
                'rec_detalle' => 'Argentina','rec_nemonico' => 'NAC','rec_padre' => 493, //rec_id=494
            ],
            [
                'rec_detalle' => 'Chilena','rec_nemonico' => 'NAC','rec_padre' => 493, //rec_id=495
            ],
            [
                'rec_detalle' => 'Dominicana','rec_nemonico' => 'NAC','rec_padre' => 493, //rec_id=496
            ],
            [
                'rec_detalle' => 'Peruana','rec_nemonico' => 'NAC','rec_padre' => 493, //rec_id=497
            ],                        
            [
                'rec_detalle' => 'Otra','rec_nemonico' => 'NAC','rec_padre' => 493, //rec_id=498
            ],




            [
                'rec_detalle' => 'Por Verificar','rec_nemonico' => 'STA','rec_padre' => 1, //rec_id=499
            ],
            [
                'rec_detalle' => 'Rechazado','rec_nemonico' => 'STA','rec_padre' => 1, //rec_id=500
            ],




            [
                'rec_detalle' => 'Demandante','rec_nemonico' => 'TUS','rec_padre' => 4, //rec_id=501
            ],



            [
                'rec_detalle' => 'STATUS SERxUSU','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=502
            ],
            [
                'rec_detalle' => 'Aceptado','rec_nemonico' => 'SSU','rec_padre' => 502, //rec_id=503
            ],
            [
                'rec_detalle' => 'Por Verificar','rec_nemonico' => 'SSU','rec_padre' => 502, //rec_id=504
            ],
            [
                'rec_detalle' => 'Rechazado','rec_nemonico' => 'SSU','rec_padre' => 502, //rec_id=505
            ],





            [
                'rec_detalle' => 'TIPOS SERxUSU','rec_nemonico' => 'ADM','rec_padre' => NULL, //rec_id=506
            ],
            [
                'rec_detalle' => 'Oferta','rec_nemonico' => 'SSU','rec_padre' => 506, //rec_id=507
            ],
            [
                'rec_detalle' => 'Demanda','rec_nemonico' => 'SSU','rec_padre' => 506, //rec_id=508
            ]



        ]);
    }
}
