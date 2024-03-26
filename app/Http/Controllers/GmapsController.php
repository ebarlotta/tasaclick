<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeneaLabs\Phpgmaps\Phpgmaps as Gmaps;

class GmapsController extends Controller
{
    public function index()
    {
        //configuaración
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 400;
        $config['map_height'] = 400;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())

            });
        }
        centreGot = true;';

        $variable = new Gmaps;
        $variable->initialize($config);

        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        // $marker = array();
        $marker = [
            ['salamanca',42.603,-5.577],
            ['Otrositio',40.963,-5.669],
            ['tercero',41.503,-5.744]
        ];
        // dd($marker);
        $variable->add_marker($marker);

        $map = $variable->create_map();

        //Devolver vista con datos del mapa
        return view('gmaps', compact('map'));
    }
}
