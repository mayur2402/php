<?php
	abstract class shape
	{
		protected $d1,$d2,$d3;
		function shape($d1,$d2,$d3)
		{
			$this->d1=$d1;
			$this->d2=$d2;
			$this->d3=$d3;
		}
		abstract function calarea();
	}
	class circle extends shape
	{
		function circle($r)
		{
			$this->shape($r,0,0);
		}
		public function calarea()
		{
			return M_PI*$this-d1*$this-d1;
		}
	}
	class square extends shape
	{
		function square($s)
		{
			$this->shape($s,0,0);
		}
		public function calarea()
		{
			return $this->d1*$this->d1;
		}
	}
	class triangle extends shape
	{
		function triangle($s1,$s2,$s3)
		{
			$this->shape($s1,$s2,$s3);
		}
		public function calarea()
		{
			$ans=($this->d1+$this->d2+$this->d3)/2;
			return sqrt($ans*($ans-$this->d1)*($ans-$this->d2)*($ans-$this->d3));
		}
	}
	$obj=null;
	$r=$_GET['radius'];
	$s=$_GET['side'];
	$s1=$_GET['sise1'];
	$s2=$_GET['side2'];
	$s3=$_GET['side3'];
	$op1=$_GET['op'];
	switch($op1)
	{
		case 1:
			$obj=new circle($r);
			break;
		case 2:
			$obj=new square($s);
			break;
		case 3:
			$obj=new triangle($s1,$s2,$s3);
			break;
	}
	printf("Area is %f",$obj->calarea());
?>
