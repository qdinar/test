<?php

function b(){
	return true;
}

function c(){
	echo 'b';
	echo 'c';
}

function a(){
	echo 'a';
	if(b()){
		c();
	}
	echo 'd';
}