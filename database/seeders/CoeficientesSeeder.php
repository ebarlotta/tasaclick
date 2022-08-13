<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoeficientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'30','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'32','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'34','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'36','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'38','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'30','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'30','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'6','fila'=>'30','coeficiente'=>'0.85']);
        // DB::table('coeficientesfrentefondo')->insert(['columna'=>'8','fila'=>'30','coeficiente'=>'0.85']);

        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'CoeficienteDeEsquina','descripcion'=>'-','coeficiente'=>'1']); //Ninguno
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'CoeficienteDeEsquina','descripcion'=>'Zona comercial','coeficiente'=>'1.2']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'CoeficienteDeEsquina','descripcion'=>'Comercial y Residencial','coeficiente'=>'1.15']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'CoeficienteDeEsquina','descripcion'=>'Residencial','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'CoeficienteDeEsquina','descripcion'=>'Barrios en Formación','coeficiente'=>'1.05']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Rectangular','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Tropezoidal','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'triangular','coeficiente'=>'0.7']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Martillo a Favor','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Martillo en Contra','coeficiente'=>'0.8']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Frente a dos calles opuestas','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Frente a dos calles adyacentes','coeficiente'=>'1.05']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Terreno interno','coeficiente'=>'0.8']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma','descripcion'=>'Gran irregularidad','coeficiente'=>'0.7']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Topografía','descripcion'=>'Sobre y en zona comercial','coeficiente'=>'0.95']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Topografía','descripcion'=>'Bajo y en Zona comercial','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Topografía','descripcion'=>'Sobre y en Zona Residencial','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Topografía','descripcion'=>'Bajo y en zona residencial','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Topografía','descripcion'=>'mismo nivel de vereda en ambas zonas','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Pavimento y Sevicio Público','descripcion'=>'Tierra en zona pavimentada','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Pavimento y Sevicio Público','descripcion'=>'pavimento en zona de tierra','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Pavimento y Sevicio Público','descripcion'=>'iguales que la zona','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Pavimento y Sevicio Público','descripcion'=>'mejora sp que en la zona','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Pavimento y Sevicio Público','descripcion'=>'peor sp que en la zona','coeficiente'=>'0.3']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Ubicación','descripcion'=>'Mucho mejor que en zona','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Ubicación','descripcion'=>'mejor que en zona','coeficiente'=>'1.05']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Ubicación','descripcion'=>'igual que en zona','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Ubicación','descripcion'=>'peor que zona','coeficiente'=>'0.95']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Ubicación','descripcion'=>'mucho peor que zona','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Oferta','descripcion'=>'Condiciones normales de mercado','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Oferta','descripcion'=>'Especulativo','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Oferta','descripcion'=>'Especulativo por exceso de oferta ','coeficiente'=>'0.95']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Oferta','descripcion'=>'Especulativo por exceso de demanda','coeficiente'=>'0.8']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma de Pago','descripcion'=>'Contado','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma de Pago','descripcion'=>'Financiado 1 año','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Forma de Pago','descripcion'=>'Financiado 2 años','coeficiente'=>'0.7']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de fuente informante','descripcion'=>'Alta Veracidad','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de fuente informante','descripcion'=>'Baja Veracidad','coeficiente'=>'0.8']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes actuales','coeficiente'=>'1.3']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes 2021','coeficiente'=>'1.2']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes 2020','coeficiente'=>'1.1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes 2019','coeficiente'=>'1']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes 2018','coeficiente'=>'0.9']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes 2017','coeficiente'=>'0.8']);
        DB::table('coeficientes')->insert(['tabladecoeficiente'=>'Coeficiente de Actualización','descripcion'=>'Antecedentes antes del 2017','coeficiente'=>'0.7']);

    }
}
