<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Forum</title>
 </head>
 <link rel="stylesheet" href="{{ asset('tst/css/bootstrap.min.css') }}">

 <body>
      <script scr="{{ asset('tst/js/jquery.min.js')}}">
         
         </script>
         <script scr="{{asset('tst/js/bootstrap.min.js')}}">
         
         </script> 

         <form  action="{{url('api/store')}}"  methode="get">
            {{ csrf_field()}}
            <div  id="form">
               <fieldset  title=""> <legend><strong>Ajouter un etudiant</strong></legend>
               <p>Nom : <span  style="color: rgb(196, 0, 0);">* </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp; &nbsp; &nbsp; 
                  Prenom: <span  style="color: rgb(196, 0, 0);">*</span></p>
               <input  size="30px"  name="prenom"  required="required"  type="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input  size="30px"  required="required"  name="nom"  type="text"><br>
               
               Date de naissance :<br>
               <input  name="ddn"  placeholder="jj/mm/aaaa"  

               type="date"><br>
               <br>
               
               
               Group: <span  style="color: rgb(196, 0, 0);">*</span></p>
               <input  size="30px"  required="required"  name="grp"  type="text"><br>

               <div  style="text-align: left;"> 
               Email :<span  style="color: rgb(196, 0, 0);">*</span><br>
               <input  size="60px"  name="email"  required="required"  type="email"><br>
               <br>

               Password:<span  style="color: rgb(196, 0, 0);">*</span><br>
               <input  size="60px"  name="password"  required="required"  type="password"><br>
               <br>
               
               Matricule :<span  style="color: rgb(196, 0, 0);">*
               </span><br>
               <input  name="mat"  required="required"  type="text"><br>
               <br>
               
               Annee: <span  style="color: rgb(196, 0, 0);"></span><br>
               <input  name="annee" value="1cp"  type="radio">1cp&nbsp;&nbsp;<input  name="annee" value="2cp" type="radio">2cp&nbsp;&nbsp;<input  name="annee" value="1cs" type="radio">1cs&nbsp;&nbsp;<input  name="annee"  value="2cs" type="radio">2cs&nbsp;&nbsp;<input  name="annee" value="3cs" type="radio">3cs<br>
               <br>

               <br>
               <input  name="s"  value="Submit"  type="submit"> 
               <input  name="s"  value="Reset"  type="reset">        
               </div>



               </fieldset>
            </div>
            
         </form><br>
 </body>
 </html>