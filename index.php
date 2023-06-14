<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades Federativas</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th,
        td {
            color:white;
            border: 1.5px solid blueviolet;
            padding: 7px;
        }
        h2{
            color: blueviolet;
        }
        body{
            background: black;
        }
    </style>
</head>
<body>
    <header>
        <h2>Lista Sintética das UFs do Brasil</h2>
    </header>
    <?php
        $estados = array(
                'AC' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Acre',
                    'abreviacao' => 'AC',
                    'sede_de_governo' => 'Rio Branco',
                    'area' => '164 122,2',
                    'populacao' => '795 145',
                    'densidade' => '4,30',
                    'pib' => '13 622 000',
                    'total' => '0,2',
                    'pib_per_capita' => '16 953,46',
                    'idh' => '0,663',
                    'alfabetizacao' => '86,9%',
                    'mortalidade_infantil' => '17,0‰',
                    'expectativa_de_vida' => '73,9 anos'
                ),
                'AL' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="al" width = "50">',
                    'unidade_federativa' => 'Alagoas',
                    'abreviacao' => 'AL',
                    'sede_de_governo' => 'Maceió',
                    'area' => '27 767,7',
                    'populacao' => '3 327 551',
                    'densidade' => '108,61',
                    'pib' => '46 364 000',
                    'total' => '0,8',
                    'pib_per_capita' => '13 877,53',
                    'idh' => '0,631',
                    'alfabetizacao' => '80,6%',
                    'mortalidade_infantil' => '19,5‰',
                    'expectativa_de_vida' => '71,6 anos'
                ),
                'AP' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amapá.svg" alt="ap" width = "50">',
                    'unidade_federativa' => 'Amapá',
                    'abreviacao' => 'AP',
                    'sede_de_governo' => 'Macapá',
                    'area' => '142 814,6',
                    'populacao' => '756 500',
                    'densidade' => '4,16',
                    'pib' => '13 861 000',
                    'total' => '0,2',
                    'pib_per_capita' => '18 079,54',
                    'idh' => '0,708',
                    'alfabetizacao' => '95%',
                    'mortalidade_infantil' => '23,2‰',
                    'expectativa_de_vida' => '73,9 anos'
                ),
                'AM' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="am" width = "50">',
                    'unidade_federativa' => 'Amazonas',
                    'abreviacao' => 'AM',
                    'sede_de_governo' => 'Manaus',
                    'area' => '1 570 745,7',
                    'populacao' => '3 893 763',
                    'densidade' => '2,05',
                    'pib' => '86 560 000',
                    'total' => '1,4',
                    'pib_per_capita' => '21 978,95',
                    'idh' => '0,674',
                    'alfabetizacao' => '93,1%',
                    'mortalidade_infantil' => '18,2‰',
                    'expectativa_de_vida' => '71,9 anos'
                ),
                'BA' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="ba" width = "50">',
                    'unidade_federativa' => 'Bahia',
                    'abreviacao' => 'BA',
                    'sede_de_governo' => 'Salvador',
                    'area' => '564 692,7',
                    'populacao' => '15 150 143',
                    'densidade' => '24,46',
                    'pib' => '245 025 000',
                    'total' => '4,1',
                    'pib_per_capita' => '16 115,89',
                    'idh' => '0,660',
                    'alfabetizacao' => '87%',
                    'mortalidade_infantil' => '17,3‰',
                    'expectativa_de_vida' => '73,5 anos'
                ),
                'CE' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Ceará.svg" alt="ce" width = "50">',
                    'unidade_federativa' => 'Ceará',
                    'abreviacao' => 'CE',
                    'sede_de_governo' => 'Fortaleza',
                    'area' => '148 825,6',
                    'populacao' => '8 867 448	',
                    'densidade' => '54,40',
                    'pib' => '	130 621 000',
                    'total' => '2,2',
                    'pib_per_capita' => '14 669,14	',
                    'idh' => '0,682',
                    'alfabetizacao' => '84,8%',
                    'mortalidade_infantil' => '14,4‰',
                    'expectativa_de_vida' => '73,8 anos'
                ),
                'DF' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="df" width = "50">',
                    'unidade_federativa' => 'Distrito Federal',
                    'abreviacao' => 'DF',
                    'sede_de_governo' => 'Brasília',
                    'area' => '5 822,1',
                    'populacao' => '2 867 869',
                    'densidade' => '400,73',
                    'pib' => '215 613 000',
                    'total' => '3,6',
                    'pib_per_capita' => '73 971,05',
                    'idh' => '0,824',
                    'alfabetizacao' => '97,4%',
                    'mortalidade_infantil' => '10,5‰',
                    'expectativa_de_vida' => '78,1 anos'
                ),
                'ES' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Espírito_Santo.svg" alt="es" width = "50">',
                    'unidade_federativa' => 'Espírito Santo',
                    'abreviacao' => 'ES',
                    'sede_de_governo' => 'Vitória',
                    'area' => '46 077,5	',
                    'populacao' => '3 894 899',
                    'densidade' => '73,97',
                    'pib' => '120 363 000',
                    'total' => '2',
                    'pib_per_capita' => '30 627,45',
                    'idh' => '0,740',
                    'alfabetizacao' => '93,8%',
                    'mortalidade_infantil' => '8,8‰',
                    'expectativa_de_vida' => '78,2 anos'
                ),
                'GO' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goiás.svg" alt="go" width = "50">',
                    'unidade_federativa' => 'Goiás',
                    'abreviacao' => 'GO',
                    'sede_de_governo' => 'Goiânia',
                    'area' => '340 086,7',
                    'populacao' => '6 551 322',
                    'densidade' => '16,52',
                    'pib' => '173 632 000',
                    'total' => '2,9',
                    'pib_per_capita' => '26 265,32',
                    'idh' => '0,735',
                    'alfabetizacao' => '93,5%',
                    'mortalidade_infantil' => '14,9‰',
                    'expectativa_de_vida' => '74,2 anos'
                ),
                'MA' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranhão.svg" alt="MA" width = "50">',
                    'unidade_federativa' => 'Maranhão',
                    'abreviacao' => 'MA',
                    'sede_de_governo' => 'São Luís',
                    'area' => '331 983,3',
                    'populacao' => '6 861 924',
                    'densidade' => '18,38',
                    'pib' => '78 475 000',
                    'total' => '1,3',
                    'pib_per_capita' => '11 366,23',
                    'idh' => '0,639',
                    'alfabetizacao' => '83,3%',
                    'mortalidade_infantil' => '21,3‰',
                    'expectativa_de_vida' => '70,6 anos
                    '
                ),
                'MT' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="mt" width = "50">',
                    'unidade_federativa' => 'Mato Grosso',
                    'abreviacao' => 'MT',
                    'sede_de_governo' => 'Cuiabá',
                    'area' => '	903 357,9',
                    'populacao' => '3 236 578',
                    'densidade' => '3,10',
                    'pib' => '107 418 000',
                    'total' => '1,8	',
                    'pib_per_capita' => '32 894,96	',
                    'idh' => '0,725	',
                    'alfabetizacao' => '93,5%	',
                    'mortalidade_infantil' => '16,9‰	',
                    'expectativa_de_vida' => '74,2 anos
                    '
                ),
                'MS' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Mato Grosso do Sul',
                    'abreviacao' => 'MS',
                    'sede_de_governo' => 'Campo Grande',
                    'area' => '357 125,0	',
                    'populacao' => '2 630 098	',
                    'densidade' => '6,34',
                    'pib' => '83 082 000	',
                    'total' => '1,4	',
                    'pib_per_capita' => '31 337,22	',
                    'idh' => '0,729	',
                    'alfabetizacao' => '93,7%	',
                    'mortalidade_infantil' => '14,0‰	',
                    'expectativa_de_vida' => '75,5 anos
                    '
                ),
                'MG' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="mg" width = "50">',
                    'unidade_federativa' => 'Minas Gerais',
                    'abreviacao' => 'MG',
                    'sede_de_governo' => 'Belo Horizonte',
                    'area' => '586 528,3	',
                    'populacao' => '20 777 672	',
                    'densidade' => '32,79',
                    'pib' => '519 326 000	',
                    'total' => '8,7	',
                    'pib_per_capita' => '24 884,94	',
                    'idh' => '0,731	',
                    'alfabetizacao' => '93,8%	',
                    'mortalidade_infantil' => '10,9‰	',
                    'expectativa_de_vida' => '77,2 anos
                    '
                ),
                'AL' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Alagoas',
                    'abreviacao' => 'AL',
                    'sede_de_governo' => 'Maceió',
                    'area' => '27 767,7',
                    'populacao' => '3 327 551',
                    'densidade' => '108,61',
                    'pib' => '46 364 000',
                    'total' => '0,8',
                    'pib_per_capita' => '13 877,53',
                    'idh' => '0,631',
                    'alfabetizacao' => '80,6%',
                    'mortalidade_infantil' => '19,5‰',
                    'expectativa_de_vida' => '71,6 anos'
                ),
                'PA' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Pará.svg" alt="pa" width = "50">',
                    'unidade_federativa' => 'Pará',
                    'abreviacao' => 'PA',
                    'sede_de_governo' => 'Belém',
                    'area' => '1 247 689,5	',
                    'populacao' => '8 101 180	',
                    'densidade' => '5,58	',
                    'pib' => '130 883 000	',
                    'total' => '2,2	',
                    'pib_per_capita' => '16 009,98	',
                    'idh' => '0,646	',
                    'alfabetizacao' => '90,7%	',
                    'mortalidade_infantil' => '16,6‰	',
                    'expectativa_de_vida' => '72,1 anos
                    '
                ),
                'PB' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Paraíba.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Paraíba',
                    'abreviacao' => 'PB',
                    'sede_de_governo' => 'João Pessoa',
                    'area' => '56 439,8	',
                    'populacao' => '3 950 359	',
                    'densidade' => '63,71	',
                    'pib' => '56 140 000	',
                    'total' => '0,9	',
                    'pib_per_capita' => '14 133,32	',
                    'idh' => '0,658	',
                    'alfabetizacao' => '83,7%	',
                    'mortalidade_infantil' => '16,1‰	',
                    'expectativa_de_vida' => '73,2 anos
                    '
                ),
                'PR' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paraná.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Paraná',
                    'abreviacao' => 'PR',
                    'sede_de_governo' => 'Curitiba',
                    'area' => '199 314,9',
                    'populacao' => '11 112 062	',
                    'densidade' => '51,48	',
                    'pib' => '376 960 000	',
                    'total' => '6,3	',
                    'pib_per_capita' => '33 768,62	',
                    'idh' => '0,749',
                    'alfabetizacao' => '95,5%		',
                    'mortalidade_infantil' => '9,3‰	',
                    'expectativa_de_vida' => '77,1 anos
                    '
                ),
                'PE' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Pernambuco',
                    'abreviacao' => 'PE',
                    'sede_de_governo' => 'Recife',
                    'area' => '98 311,6	',
                    'populacao' => '9 297 861	',
                    'densidade' => '85,58	',
                    'pib' => '156 955 000	',
                    'total' => '2,6	',
                    'pib_per_capita' => '16 795,34	',
                    'idh' => '0,673	',
                    'alfabetizacao' => '87,2%	',
                    'mortalidade_infantil' => '12,7‰	',
                    'expectativa_de_vida' => '73,9 anos
                    '
                ),
                'PI' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piauí.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Piauí',
                    'abreviacao' => 'PI',
                    'sede_de_governo' => 'Teresina',
                    'area' => '251 529,2		',
                    'populacao' => '3 198 185		',
                    'densidade' => '11,95		',
                    'pib' => '39 148 000		',
                    'total' => '0,7	',
                    'pib_per_capita' => '12 218,51	',
                    'idh' => '0,646		',
                    'alfabetizacao' => '82,8%		',
                    'mortalidade_infantil' => '19,1‰		',
                    'expectativa_de_vida' => '71,1 anos

                    '
                ),
                'RJ' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Rio de Janeiro',
                    'abreviacao' => 'RJ',
                    'sede_de_governo' => 'Rio de Janeiro',
                    'area' => '43 696,1		',
                    'populacao' => '16 497 395		',
                    'densidade' => '352,05			',
                    'pib' => '659 137 000		',
                    'total' => '11	',
                    'pib_per_capita' => '39 826,95		',
                    'idh' => '0,761		',
                    'alfabetizacao' => '97,3%		',
                    'mortalidade_infantil' => '11,5‰		',
                    'expectativa_de_vida' => '76,2 anos

                    '
                ),
                'RN' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Rio Grande Do Norte',
                    'abreviacao' => 'RN',
                    'sede_de_governo' => 'Natal',
                    'area' => '52 796,8		',
                    'populacao' => '3 419 550		',
                    'densidade' => '56,88		',
                    'pib' => '57 250 000		',
                    'total' => '1	',
                    'pib_per_capita' => '16 631,86		',
                    'idh' => '0,684		',
                    'alfabetizacao' => '85,3%		',
                    'mortalidade_infantil' => '14,7‰		',
                    'expectativa_de_vida' => '75,7 anos
                    '
                ),
                'RS' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Rio Grande Do Sul',
                    'abreviacao' => 'RS',
                    'sede_de_governo' => 'Porto Alegre',
                    'area' => '281 748,5			',
                    'populacao' => '11 228 091			',
                    'densidade' => '38,49			',
                    'pib' => '381 985 000			',
                    'total' => '6,4		',
                    'pib_per_capita' => '33 960,36',
                    'idh' => '0,746			',
                    'alfabetizacao' => '96,8%			',
                    'mortalidade_infantil' => '9,6‰			',
                    'expectativa_de_vida' => '77,8 anos
                    '
                ),
                'RO' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rondônia.svg" alt="ac" width = "50">',
                    'unidade_federativa' => 'Rondônia',
                    'abreviacao' => 'RO',
                    'sede_de_governo' => 'Porto Velho',
                    'area' => '237 576,2			',
                    'populacao' => '1 755 015			',
                    'densidade' => '6,46			',
                    'pib' => '36 563 000			',
                    'total' => '0,6		',
                    'pib_per_capita' => '20 677,95			',
                    'idh' => '0,690			',
                    'alfabetizacao' => '93,3%	',
                    'mortalidade_infantil' => '20,0‰	',
                    'expectativa_de_vida' => '71,3 anos
                    '
                ),
                'RR' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="rr" width = "50">',
                    'unidade_federativa' => 'Roraima',
                    'abreviacao' => 'RR',
                    'sede_de_governo' => 'Boa Vista',
                    'area' => '224 299,0			',
                    'populacao' => '500 826			',
                    'densidade' => '1,74			',
                    'pib' => '10 354 000		',
                    'total' => '0,2		',
                    'pib_per_capita' => '20 476,71			',
                    'idh' => '0,707			',
                    'alfabetizacao' => '93,4%			',
                    'mortalidade_infantil' => '17,2‰		',
                    'expectativa_de_vida' => '71,5 anos
                    '
                ),
                'SC' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="sc" width = "50">',
                    'unidade_federativa' => 'Santa Catarina',
                    'abreviacao' => 'SC',
                    'sede_de_governo' => 'Florianópolis',
                    'area' => '95 346,2			',
                    'populacao' => '6 734 568			',
                    'densidade' => '61,53		',
                    'pib' => '249 073 000			',
                    'total' => '4,2',
                    'pib_per_capita' => '36 525,28			',
                    'idh' => '0,774	',
                    'alfabetizacao' => '97,2%	',
                    'mortalidade_infantil' => '9,2‰	',
                    'expectativa_de_vida' => '79,1 anos
                    '
                ),
                'SP' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_São_Paulo.svg" alt="sp" width = "50">',
                    'unidade_federativa' => 'São Paulo',
                    'abreviacao' => 'SP',
                    'sede_de_governo' => 'São Paulo',
                    'area' => '248 209,4	',
                    'populacao' => '44 169 350	',
                    'densidade' => '162,93	',
                    'pib' => '1 939 890 000		',
                    'total' => '32,4',
                    'pib_per_capita' => '43 694,68				',
                    'idh' => '0,783	',
                    'alfabetizacao' => '97,2%		',
                    'mortalidade_infantil' => '9,9‰	',
                    'expectativa_de_vida' => '78,1 anos
                    '
                ),
                'SE' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="sc" width = "50">',
                    'unidade_federativa' => 'Sergipe',
                    'abreviacao' => 'SE',
                    'sede_de_governo' => 'Aracaju',
                    'area' => '21 910,3	',
                    'populacao' => '2 227 294	',
                    'densidade' => '89,81	',
                    'pib' => '38 554 000			',
                    'total' => '0,6',
                    'pib_per_capita' => '17 189,28	',
                    'idh' => '0,665	',
                    'alfabetizacao' => '85,3%	',
                    'mortalidade_infantil' => '16,2‰	',
                    'expectativa_de_vida' => '72,7 anos

                    '
                ),
                'TO' => array(
                    'bandeira' => '<img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="sc" width = "50">',
                    'unidade_federativa' => 'Tocantins',
                    'abreviacao' => 'TO',
                    'sede_de_governo' => 'Palmas',
                    'area' => '277 620,9	',
                    'populacao' => '1 502 759		',
                    'densidade' => '4,70	',
                    'pib' => '28 930 000			',
                    'total' => '0,5	',
                    'pib_per_capita' => '19 094,16	',
                    'idh' => '0,699	',
                    'alfabetizacao' => '89,6%	',
                    'mortalidade_infantil' => '15,8‰	',
                    'expectativa_de_vida' => '73,4 anos
                    '
                )
                
                
            );
    ?>
    <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade federativa</th>
                <th>Abreviação</th>
                <th>Sede de governo</th>
                <th>Área (km<sup>2</sup>)</th>
                <th>População</th>
                <th>Densidade</th>
                <th>PIB (2015)</th>
                <th>(% total) (2015)</th>
                <th>PIB per capita (R$) (2015)</th>
                <th>IDH (2010)</th>
                <th>Alfabetização (2016)</th>
                <th>Mortalidade infantil (2016)</th>
                <th>Expectativade vida (2016)</th>
            </tr>
        </thead>
        <tbody>
            <?php   
            foreach($estados as $chaves => $valor)
            {
                echo "<tr><td>{$estados[$chaves]['bandeira']}</td>";
                echo "<td>{$estados[$chaves]['unidade_federativa']}</td>";
                echo "<td>{$estados[$chaves]['abreviacao']}</td>";
                echo "<td>{$estados[$chaves]['sede_de_governo']}</td>";
                echo "<td>{$estados[$chaves]['area']}</td>";
                echo "<td>{$estados[$chaves]['populacao']}</td>";
                echo "<td>{$estados[$chaves]['densidade']}</td>";
                echo "<td>{$estados[$chaves]['pib']}</td>";
                echo "<td>{$estados[$chaves]['total']}</td>";
                echo "<td>{$estados[$chaves]['pib_per_capita']}</td>";
                echo "<td>{$estados[$chaves]['idh']}</td>";
                echo "<td>{$estados[$chaves]['alfabetizacao']}</td>";
                echo "<td>{$estados[$chaves]['mortalidade_infantil']}</td>";
                echo "<td>{$estados[$chaves]['expectativa_de_vida']}</td></tr>";
            }
           ?>
        </tbody>
    </table>    
</body>
</html>

