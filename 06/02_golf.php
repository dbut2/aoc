<?=$n=array_count_values(fgetcsv(fopen("i","r")));for(;++$i<256;){$n[($i+7)%9]+=$n[$i%9];}?><?=array_sum($n);