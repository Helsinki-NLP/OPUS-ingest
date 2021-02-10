
while (<>){
    if (/\_rom/){
	$delete = 1;
	next;
    }
    print unless ($delete);
    if ($delete){
	$delete = 0 if (/linkGrp/);
    }
}
