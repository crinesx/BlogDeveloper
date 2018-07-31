<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bases_model extends CI_Model {

  function __construct()
    {parent::__construct();}

  public function validaLogin($data){
   $cadena="select * from Doctor where usrdoc='".$data['user']."' and psw='".$data['password']."'";
    $query = $this->db->query($cadena);
    if ($query->num_rows() > 0)
        {return $query;
    }else{
      return FALSE;
    }
  }

  public function getPacientes()
  {
    $cadena="select  p.Nombre, pa.Persona_idPersona from persona as p inner join paciente as pa on p.idPersona=pa.Persona_idPersona order by idPaciente";
    $query = $this->db->query($cadena);
    return $query;
  }

  public function getperson($busca){
    $cadena= "select * FROM persona as p JOIN paciente as pa JOIN medicamentos as m JOIN ant_pat as pat JOIN ant_no_pat as npat WHERE pa.Persona_idPersona='".$busca."' and p.idPersona='".$busca."'
    and m.Paciente_Persona_idPersona='".$busca."' and pat.Paciente_Persona_idPersona='".$busca."' and npat.Paciente_Persona_idPersona='".$busca."'";
    $query = $this->db->query($cadena);
    if ($query->num_rows() > 0)
        {return $query;
    }else{
      return FALSE;
    }
  }

  public function getmedicament($busca){
      $cadena= "select * FROM medicamentos WHERE Paciente_Persona_idPersona='".$busca."'";
      $query = $this->db->query($cadena);
      if ($query->num_rows() > 0)
          {return $query;
      }else{
        return FALSE;
      }
    }

    public function getantecedentes($busca){
        $cadena= "select * FROM ant_pat WHERE Paciente_Persona_idPersona='".$busca."'";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
            {return $query;
        }else{
          return FALSE;
        }
      }


  public function SetNotas($data){
    $cadena="update paciente set Notas ='".$data['notas']."' WHERE paciente.Persona_idPersona = '".$data['id']."'";
    $this->db->query($cadena);

}

}
