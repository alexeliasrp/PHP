<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Diretor comercial',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
				)
			),
			array(
				'nome_cargo'=>'Diretor financeiro',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Gerente de contas a pagar',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de pgtos'
							)
						)
					),
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de supr.'
							)
						)
					)
				)
			)
		)
	)
);

function exibe($cargos){
	global $cont;
	$html = '<ul>';
echo "<li> $cont </li>";

echo "<br>";
	foreach ($cargos as $cargo) {
var_dump($cargo);
		$html .= "<li>";
		if(isset($cargo['nome_cargo'])){
			$html .= $cargo['nome_cargo'];
		}
		else{
			$html .= 'nome_cargo vazio';
		}

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= '</li>';
	}
	$html .= '</ul>';
	$cont += 1;
	return $html;
	
}

$cont = 1;

echo exibe($hierarquia);

?>