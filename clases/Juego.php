<?php
/**
 * Created by PhpStorm.
 * User: VanKryz
 * Date: 27/10/14
 * Time: 08:04 PM
 */
include './bd/bd.php';

class Juego{

    private $name;

    public function getJuego(){
              $rnd=rand(1,20);
        $sql="Select * from quizz where id=$rnd";
        $consulta=mysql_query($sql) or die ("Error en la consulta");
echo"
        <form class='form-inline' role='form' method = 'POST' name='frmdo' id='frmdo' target='_self'>

  <button type='submit' class='btn btn-default'>Comenzar</button>
</form>
";
        <div id='ajax'>&nbsp;</div>

<script type="text/javascript">
            $(function (e) {
                $('#frmdo').submit(function (e) {
                    e.preventDefault()
		$('#ajax').load('guardar.php?' + $('#frmdo').serialize())
	})
})
</script>
        //echo"$rnd";

        //echo "<br> Mostrar Juego: ".$this->name;

    }

    public function setJuego(){
       // $this->name = "SmartQUIZ!!";
        //return $this->name;

    }
}
?>