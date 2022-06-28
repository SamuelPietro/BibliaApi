<?php

// Copyright (C) 2022 Samuel Pietro
//
// This file is part of Bíblia API.
//
// Bíblia API is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Bíblia API is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Bíblia API.  If not, see <http://www.gnu.org/licenses/>.


function bwVesoes()
{
        $siglas = array ("ACF", "ARA", "ARC", "AS21", "JFAA", "KJA", "KJF",
        "NAA", "NBV", "NTLH", "NVI", "NVT", "TB");

        $versoes = array ("Almeida Corrigida e Fiel", "Almeida Revista e Atualizada",
        "Almeida Revista e Corrigida", "Almeida Século XXI",
        "Almeida Atualizada", "King James Atualizada", "King James Fiel",
        "Nova Almeida Atualizada", "Nova Bíblia Viva",
        "Nova Tradução na Linguagem de Hoje", "Nova Versão Internacional",
        "Nova Versão Transformadora", "Tradução Brasileira");

        return array_combine($siglas, $versoes);
}

function bwLivros()
{
    $keys = array('testamento', 'abreviacao', 'livro', 'capitulos', 'versiculos');
    $values = array(
        array("VT","Gn","Gênesis","50","1533"),
        array("VT","Êx","Êxodo","40","1213"),
        array("VT","Lv","Levítico","27","859"),
        array("VT","Nm","Números","36","1288"),
        array("VT","Dt","Deuteronômio","34","959"),
        array("VT","Js","Josué","24","658"),
        array("VT","Jz","Juízes","21","619"),
        array("VT","Rt","Rute","4","85"),
        array("VT","1Sm","1 Samuel","31","811"),
        array("VT","2Sm","2 Samuel","24","695"),
        array("VT","1Rs","1 Reis","22","817"),
        array("VT","2Rs","2 Reis","25","719"),
        array("VT","1Cr","1 Crônicas","29","942"),
        array("VT","2Cr","2 Crônicas","36","822"),
        array("VT","Ed","Esdras","10","280"),
        array("VT","Ne","Neemias","13","406"),
        array("VT","Et","Ester","10","167"),
        array("VT","Jó","Jó","42","1070"),
        array("VT","Sl","Salmos","150","2461"),
        array("VT","Pv","Provérbios","31","915"),
        array("VT","Ec","Eclesiastes","12","222"),
        array("VT","Ct","Cantares","8","117"),
        array("VT","Is","Isaías","66","1292"),
        array("VT","Jr","Jeremias","52","1364"),
        array("VT","Lm","Lamentações","5","154"),
        array("VT","Ez","Ezequiel","48","1273"),
        array("VT","Dn","Daniel","12","357"),
        array("VT","Os","Oseias","14","197"),
        array("VT","Jl","Joel","3","73"),
        array("VT","Am","Amós","9","146"),
        array("VT","Ob","Obadias","1","21"),
        array("VT","Jn","Jonas","4","48"),
        array("VT","Mq","Miqueias","7","105"),
        array("VT","Na","Naum","3","47"),
        array("VT","Hc","Habacuque","3","56"),
        array("VT","Sf","Sofonias","3","53"),
        array("VT","Ag","Ageu","2","38"),
        array("VT","Zc","Zacarias","14","211"),
        array("VT","Ml","Malaquias","4","55"),
        array("NT","Mt","Mateus","28","1071"),
        array("NT","Mc","Marcos","16","678"),
        array("NT","Lc","Lucas","24","1151"),
        array("NT","Jo","João","21","879"),
        array("NT","At","Atos dos Apóstolos","28","1007"),
        array("NT","Rm","Romanos","16","433"),
        array("NT","1Co","1 Coríntios","16","437"),
        array("NT","2Co","2 Coríntios","13","256"),
        array("NT","Gl","Gálatas","6","149"),
        array("NT","Ef","Efésios","6","155"),
        array("NT","Fp","Filipenses","4","104"),
        array("NT","Cl","Colossenses","4","95"),
        array("NT","1Ts","1 Tessalonicenses","5","89"),
        array("NT","2Ts","2 Tessalonicenses","3","47"),
        array("NT","1Tm","1 Timóteo","6","113"),
        array("NT","2Tm","2 Timóteo","4","83"),
        array("NT","Tt","Tito","3","46"),
        array("NT","Fm","Filemom","1","25"),
        array("NT","Hb","Hebreus","13","303"),
        array("NT","Tg","Tiago","5","108"),
        array("NT","1Pe","1 Pedro","5","105"),
        array("NT","2Pe","2 Pedro","3","61"),
        array("NT","1Jo","1 João","5","105"),
        array("NT","2Jo","2 João","1","13"),
        array("NT","3Jo","3 João","1","15"),
        array("NT","Jd","Judas","1","25"),
        array("NT","Ap","Apocalipse","22","404"),
    );
    foreach ($values as $value) {
        $tmp = array();
        foreach ($keys as $_key => $newKey) {
            $tmp[$newKey] = $value[$_key];
        }
        $newValues[] = $tmp;
    }
    $abreviacoes = array(
        "Gn", "Êx", "Lv", "Nm", "Dt", "Js", "Jz", "Rt",
        "1Sm", "2Sm", "1Rs", "2Rs", "1Cr", "2Cr", "Ed", "Ne", "Et", "Jó", "Sl",
        "Pv", "Ec", "Ct", "Is", "Jr", "Lm", "Ez", "Dn", "Os", "Jl", "Am", "Ob",
        "Jn", "Mq", "Na", "Hc", "Sf", "Ag", "Zc", "Ml", "Mt", "Mc", "Lc", "Jo",
        "At", "Rm", "1Co", "2Co", "Gl", "Ef", "Fp", "Cl", "1Ts", "2Ts", "1Tm",
        "2Tm", "Tt", "Fm", "Hb", "Tg", "1Pe", "2Pe", "1Jo", "2Jo", "3Jo", "Jd", "Ap",
    );
    return array_combine($abreviacoes, $newValues);
}

function bwCapitulo($versao, $abrev, $chapters)
{
    $json_url = "json/$versao.json";
    $abreviacoes = array(
        "Gn", "Ex", "Lv", "Nm", "Dt", "Js", "Jz", "Rt",
        "1Sm", "2Sm", "1Rs", "2Rs", "1Cr", "2Cr", "Ed", "Ne", "Et", "Jó", "Sl",
        "Pv", "Ec", "Ct", "Is", "Jr", "Lm", "Ez", "Dn", "Os", "Jl", "Am", "Ob",
        "Jn", "Mq", "Na", "Hc", "Sf", "Ag", "Zc", "Ml", "Mt", "Mc", "Lc", "Jo",
        "At", "Rm", "1Co", "2Co", "Gl", "Ef", "Fp", "Cl", "1Ts", "2Ts", "1Tm",
        "2Tm", "Tt", "Fm", "Hb", "Tg", "1Pe", "2Pe", "1Jo", "2Jo", "3Jo", "Jd", "Ap",
    );
    $numeros = [];
    for ($i = 0; $i <= 65; $i++) {
        array_push($numeros, $i);
    }
    $numeros = array_combine($abreviacoes, $numeros);
    $json_content = file_get_contents($json_url);
    $array = json_decode($json_content, true);
    $chapters = $chapters - 1;
    return $array[$numeros[$abrev]]['chapters'][$chapters];
}
