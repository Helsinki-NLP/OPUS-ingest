

use Locale::PO;

$href = Locale::PO->load_file_asarray($ARGV[0]);

foreach my $po (@{$href}){
    print " ID: ".$po->msgid."\n";
    print "STR: ".$po->msgstr."\n\n";
}
