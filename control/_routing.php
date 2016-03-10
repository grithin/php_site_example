<?
$rules[] = ['^$','/index','regex'];

# Never ending bob's!
$rules[] = ['(?<path>(^|/)bob.*)','[path]/bob','301,regex'];