<?php

//Pre-built bracket templates for single and double elimination tournaments
//From 4 to 32 players

$rd_se_4 = [
	"0,0,Semifinals",
	"0,1,Final"
];

$rd_se_5_8 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Final"
];

$rd_se_9_16 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Semifinals",
	"0,3,Final"
];

$rd_se_17_32 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Quarterfinals",
	"0,3,Semifinals",
	"0,4,Final"
];

$rd_de_4 = [
	"0,0,Round 1",
	"0,1,Winners Final",
	"0,2,Grand Final",
	"0,3,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Final"
];

$rd_de_5_6 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Winners Final",
	"0,3,Grand Final",
	"0,4,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Round 2",
	"1,2,Losers Final"
];

$rd_de_7_8 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Winners Final",
	"0,3,Grand Final",
	"0,4,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Round 2",
	"1,2,Losers Semifinal",
	"1,3,Losers Final"
];

$rd_de_9_12 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Winners Semifinals",
	"0,3,Winners Final",
	"0,4,Grand Final",
	"0,5,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Round 2",
	"1,2,Losers Round 3",
	"1,3,Losers Semifinal",
	"1,4,Losers Final"
];

$rd_de_13_16 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Winners Semifinals",
	"0,3,Winners Final",
	"0,4,Grand Final",
	"0,5,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Round 2",
	"1,2,Losers Round 3",
	"1,3,Losers Round 4",
	"1,4,Losers Semifinal",
	"1,5,Losers Final"
];

$rd_de_17_24 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Winners Quarterfinals",
	"0,3,Winners Semifinals",
	"0,4,Winners Final",
	"0,5,Grand Final",
	"0,6,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Round 2",
	"1,2,Losers Round 3",
	"1,3,Losers Round 4",
	"1,4,Losers Semifinals",
	"1,5,Losers Final 1",
	"1,6,Losers Final 2"
];

$rd_de_25_32 = [
	"0,0,Round 1",
	"0,1,Round 2",
	"0,2,Winners Quarterfinals",
	"0,3,Winners Semifinals",
	"0,4,Winners Final",
	"0,5,Grand Final",
	"0,6,Grand Final (if necessary)",
	"1,0,Losers Round 1",
	"1,1,Losers Round 2",
	"1,2,Losers Round 3",
	"1,3,Losers Round 4",
	"1,4,Losers Round 5",
	"1,5,Losers Semifinals",
	"1,6,Losers Final 1",
	"1,7,Losers Final 2"
];

$seed_se_4 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,W:1,W:2,2"
];

$seed_se_5 = [
	"1,0,0,S:1,S:2,0",
	"2,0,1,W:1,S:3,0",
	"3,0,1,S:4,S:5,0",
	"4,0,2,W:2,W:3,2"
];

$seed_se_6 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,1,W:1,S:5,0",
	"4,0,1,W:2,S:6,0",
	"5,0,2,W:3,W:4,2"
];

$seed_se_7 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,1,W:1,S:7,0",
	"5,0,1,W:2,W:3,0",
	"6,0,2,W:4,W:5,2"
];

$seed_se_8 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,0,S:7,S:8,0",
	"5,0,1,W:1,W:2,0",
	"6,0,1,W:3,W:4,0",
	"7,0,2,W:5,W:6,2"
];

$seed_se_9 = [
	"1,0,0,S:1,S:2,0",
	"2,0,1,S:3,W:1,0",
	"3,0,1,S:4,S:5,0",
	"4,0,1,S:6,S:7,0",
	"5,0,1,S:8,S:9,0",
	"6,0,2,W:2,W:3,0",
	"7,0,2,W:4,W:5,0",
	"8,0,3,W:6,W:7,2",
];

$seed_se_10 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,1,S:5,W:1,0",
	"4,0,1,S:6,S:7,0",
	"5,0,1,S:8,W:2,0",
	"6,0,1,S:9,S:10,0",
	"7,0,2,W:3,W:4,0",
	"8,0,2,W:5,W:6,0",
	"9,0,3,W:7,W:8,2"
];

$seed_se_11 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,1,S:7,W:1,0",
	"5,0,1,S:8,S:9,0",
	"6,0,1,S:10,W:2,0",
	"7,0,1,S:11,W:3,0",
	"8,0,2,W:4,W:5,0",
	"9,0,2,W:6,W:7,0",
	"10,0,3,W:8,W:9,2"
];

$seed_se_12 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,0,S:7,S:8,0",
	"5,0,1,S:9,W:1,0",
	"6,0,1,S:10,W:2,0",
	"7,0,1,S:11,W:3,0",
	"8,0,1,S:12,W:4,0",
	"9,0,2,W:5,W:6,0",
	"10,0,2,W:7,W:8,0",
	"11,0,3,W:9,W:10,2"
];

$seed_se_13 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,0,S:7,S:8,0",
	"5,0,0,S:9,S:10,0",
	"6,0,1,S:11,W:1,0",
	"7,0,1,W:2,W:3,0",
	"8,0,1,S:12,W:4,0",
	"9,0,1,S:13,W:5,0",
	"10,0,2,W:6,W:7,0",
	"11,0,2,W:8,W:9,0",
	"12,0,3,W:10,W:11,2"
];

$seed_se_14 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,0,S:7,S:8,0",
	"5,0,0,S:9,S:10,0",
	"6,0,0,S:11,S:12,0",
	"7,0,1,S:13,W:1,0",
	"8,0,1,W:2,W:3,0",
	"9,0,1,S:14,W:4,0",
	"10,0,1,W:5,W:6,0",
	"11,0,2,W:7,W:8,0",
	"12,0,2,W:9,W:10,0",
	"13,0,3,W:11,W:12,2"
];

$seed_se_15 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,0,S:7,S:8,0",
	"5,0,0,S:9,S:10,0",
	"6,0,0,S:11,S:12,0",
	"7,0,0,S:13,S:14,0",
	"8,0,1,S:15,W:1,0",
	"9,0,1,W:2,W:3,0",
	"10,0,1,W:4,W:5,0",
	"11,0,1,W:6,W:7,0",
	"12,0,2,W:8,W:9,0",
	"13,0,2,W:10,W:11,0",
	"14,0,3,W:12,W:13,2"
];

$seed_se_16 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,0,0,S:5,S:6,0",
	"4,0,0,S:7,S:8,0",
	"5,0,0,S:9,S:10,0",
	"6,0,0,S:11,S:12,0",
	"7,0,0,S:13,S:14,0",
	"8,0,0,S:15,S:16,0",
	"9,0,1,W:1,W:2,0",
	"10,0,1,W:3,W:4,0",
	"11,0,1,W:5,W:6,0",
	"12,0,1,W:7,W:8,0",
	"13,0,2,W:9,W:10,0",
	"14,0,2,W:11,W:12,0",
	"15,0,3,W:13,W:14,2"
];

$seed_de_4 = [
	"1,0,0,S:1,S:2,0",
	"2,0,0,S:3,S:4,0",
	"3,1,0,L:1,L:2,0",
	"4,0,1,W:1,W:2,0",
	"5,1,1,L:4,W:3,0",
	"6,0,2,W:4,W:5,1",
	"7,0,3,W:6,L:6,2"
]



$seeds_double = [
	
];

$round_desc_single = [
	4=>$rd_se_4,
	5=>$rd_se_5_8,
	6=>$rd_se_5_8,
	7=>$rd_se_5_8,
	8=>$rd_se_5_8,
	9=>$rd_se_9_16,
	10=>$rd_se_9_16,
	11=>$rd_se_9_16,
	12=>$rd_se_9_16,
	13=>$rd_se_9_16,
	14=>$rd_se_9_16,
	15=>$rd_se_9_16,
	16=>$rd_se_9_16,
	17=>$rd_se_17_32,
	18=>$rd_se_17_32,
	19=>$rd_se_17_32,
	20=>$rd_se_17_32,
	21=>$rd_se_17_32,
	22=>$rd_se_17_32,
	23=>$rd_se_17_32,
	24=>$rd_se_17_32,
	25=>$rd_se_17_32,
	26=>$rd_se_17_32,
	27=>$rd_se_17_32,
	28=>$rd_se_17_32,
	29=>$rd_se_17_32,
	30=>$rd_se_17_32,
	31=>$rd_se_17_32,
	32=>$rd_se_17_32,
];

$round_desc_double = [
	4=>$rd_de_4,
	5=>$rd_de_5_6,
	6=>$rd_de_5_6,
	7=>$rd_de_7_8,
	8=>$rd_de_7_8,
	9=>$rd_de_9_12,
	10=>$rd_de_9_12,
	11=>$rd_de_9_12,
	12=>$rd_de_9_12,
	13=>$rd_de_13_16,
	14=>$rd_de_13_16,
	15=>$rd_de_13_16,
	16=>$rd_de_13_16,
	17=>$rd_de_17_24,
	18=>$rd_de_17_24,
	19=>$rd_de_17_24,
	20=>$rd_de_17_24,
	21=>$rd_de_17_24,
	22=>$rd_de_17_24,
	23=>$rd_de_17_24,
	24=>$rd_de_17_24,
	25=>$rd_de_25_32,
	26=>$rd_de_25_32,
	27=>$rd_de_25_32,
	28=>$rd_de_25_32,
	29=>$rd_de_25_32,
	30=>$rd_de_25_32,
	31=>$rd_de_25_32,
	32=>$rd_de_25_32,
];

	$seeds_single = [
	4=>$seed_se_4,
	5=>$seed_se_5,
	6=>$seed_se_6,
	7=>$seed_se_7,
	8=>$seed_se_8,
	9=>$seed_se_9,
	10=>$seed_se_10,
	11=>$seed_se_11,
	12=>$seed_se_12,
	13=>$seed_se_13,
	14=>$seed_se_14,
	15=>$seed_se_15,
	16=>$seed_se_16,
];

?>