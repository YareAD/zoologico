<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoologicoCOntroller extends Controller
{
    public function Raton()
    {
        return '<img src="https://foraplagues.com/wp-content/uploads/2022/04/Eliminar-Ratones-Exterminador.jpg" width="300px height="300px" alt=""><br>'.'<a href="principal">PRINCIPAL</a>';
        
    }

    public function Gato()
    {
      return  '<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Cat_November_2010-1a.jpg/220px-Cat_November_2010-1a.jpg" alt=""><br>'.'<a href="principal">PRINCIPAL</a>';
    }

    public function Perro()
    {
       return '<img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/OHXQVXBGDRBK5CLDTXEPBLXIXM.jpg"  width="300px height="300px" "alt=""> <br>'.'<a href="principal">PRINCIPAL</a>';
       
    }

    public function Principal()
    {
        echo '<a href="raton">RATON</a><br>';
        echo '<a href="gato">GATO</a><br>';
        echo '<a href="perro">PERRO</a><br>';
        
    }
}
