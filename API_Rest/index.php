<?php
	require_once('vendor/autoload.php');
	require_once('rb.php');
	$app = new \Slim\Slim();

	R::setup('mysql:host=localhost;dbname=grupo_57','grupo_57','Wr49sxfB20TBBS6G');
	R::freeze(true);

	$app->get('/total/:anio', function ($anio) use($app){
	    $cuotasDelAnio = R::find('Cuota', 'anio = ?', array($anio));
	    $meses = array(
	    	'1' => 0,
	    	'2' => 0,
	    	'3' => 0,
	    	'4' => 0,
	    	'5' => 0,
	    	'6' => 0,
	    	'7' => 0,
	    	'8' => 0,
	    	'9' => 0,
	    	'10' => 0,
	    	'11' => 0,
	    	'12' => 0
	    );
	    foreach ($cuotasDelAnio as $cuota) {
	    	$pagos = R::find('Pago', 'cuota_id = ?', array($cuota->id));
	    	$total = $cuota->monto * count($pagos);
	    	$meses[$cuota->mes]+=$total;
	    }
    	//$año = $app->request;
    	echo json_encode($meses);
	});

		

	$app->get('/alumno/:dni/:anio', function ($dni, $anio) use($app) {
		$pagas=array();
    	$alumno = R::findOne('Alumno', 'dni = ?', array($dni));
    	$pagos = R::find('Pago', 'alumno_id = ?', array($alumno->id));
    	$cuotas = R::find('Cuota', 'anio = ?', array($anio));
	    $todasLasCuotas=array();
	    $deberiaPagar = array();
	    foreach ($pagos as $pago){
	    	$cuota= R::findOne('Cuota', 'id = ?', array($pago->cuota_id));
			if ($cuota->anio == $anio) {
	    		$pagas[$pago->cuota_id]=array(
		    		'becado' => $pago->becado,
		    		'usuario' => $pago->usuario_id,
		    	);
	    	}
	    }
	    foreach ($cuotas as $cuota){
	    	if (!$cuota->borrado) {
		    	$todasLasCuotas[$cuota->id]=array(
		    		'pagada' => false,
		    		'anio' => $cuota->anio,
		    		'mes' => $cuota->mes,
		    		'dia' => $cuota->numero,
		    		'fechaAlta' => (new DateTime($cuota->fechaAlta))->format('Y-m-d H:i')
		    	);
	    	} 
	    	if (!empty($pagas[$cuota->id])){
	    		$todasLasCuotas[$cuota->id]['pagada']=true;
	    		$todasLasCuotas[$cuota->id]['becado']=$pagas[$cuota->id]['becado'];
	    		$todasLasCuotas[$cuota->id]['usuario']=$pagas[$cuota->id]['usuario'];
	    	}
	    }
	    echo json_encode($todasLasCuotas);   	
	}); 

	$app->run();

?>