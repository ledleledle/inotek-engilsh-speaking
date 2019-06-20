<?php

/*
hasil penelitian similarity #2, modifikasi metode Rabin Karp
copyright Ardi @2016-2019

*/

function cek_kemiripan($teks1, $teks2)
{
	$teks1=strtolower($teks1);
	$teks2=strtolower($teks2);
	$gram=2;
	//hash 1
	$arr_i_h1=0;
	for ($i=0;$i<=strlen($teks1)-$gram;$i++)
	{
		$hash1=$hash1.' ['.substr($teks1,$i,$gram).']';
		//cek keberadaan substring yg sdh ada di array
		$cek=0;
		for ($j=0;$j<=$arr_i_h1;$j++)
		{
			if (substr($teks1,$i,$gram)==$arr_h1[$j])
			{
			  $cek=1;	
			}
		}
		if ($cek==0)
		{
			$arr_i_h1=$arr_i_h1+1;
			$arr_h1[$arr_i_h1]=substr($teks1,$i,$gram); //hasil fingerprint h1
		}		
	}		
	
	//hash 2
	$arr_i_h2=0;
	for ($i=0;$i<=strlen($teks2)-$gram;$i++)
	{
		$hash2=$hash2.' ['.substr($teks2,$i,$gram).']';
		//cek keberadaan substring yg sdh ada di array
		$cek=0;
		for ($j=0;$j<=$arr_i_h2;$j++)
		{
			if (substr($teks2,$i,$gram)==$arr_h2[$j])
			{
			  $cek=1;	
			}
		}
		if ($cek==0)
		{
			$arr_i_h2=$arr_i_h2+1;
			$arr_h2[$arr_i_h2]=substr($teks2,$i,$gram); //hasil fingerprint h1
		}		
	}	

	//penggabungan arr_h1 dan arr_h2
	for ($i=1;$i<=$arr_i_h2;$i++)
	{
		$arr_h1[$arr_i_h1 + $i]=$arr_h2[$i];
	}
	
	$arr_i=0;
	for ($i=1;$i<=($arr_i_h1 + $arr_i_h2);$i++)
	{
		$cek=0;
		for ($j=$i+1;$j<= ($arr_i_h1 + $arr_i_h2);$j++)//cek kedepan apa ada yg sama
		{
			if ($arr_h1[$i]==$arr_h1[$j]){ $cek=1;};			
		}
		if ($cek==0) 
		{ 
			$arr_i=$arr_i + 1;
			$arr[$arr_i]=$arr_h1[$i];
		}		
	}	
	
	$k=0; // jumlah hash yang mirip, modifikasi rabin karp
	for($i=1;$i<=$arr_i_h1;$i++)
	{
		for($j=1;$j<=$arr_i_h2;$j++)
		{
			if ($arr_h1[$i]==$arr_h2[$j])
			{
				$k=$k+1;
				//echo "$arr_h1[$i] ";
			}
		}
	}
	$kemiripan2=round(($gram*$k)/($arr_i_h1+$arr_i_h2),4)*100;
	return $kemiripan2;
}




?>