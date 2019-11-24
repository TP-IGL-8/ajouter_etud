/*const createSql =
 'insert into etudiants (
    nom,
    prenom,
    email,
    mat,
    annee,
    password,

    grp
 )values (
    :nom,
    :prenom,
    :email,
    :mat,
    :annee,
    :password,

    :grp
 )returning etudiant_id 
 into :etudiant_id;
 async function create(etu){
     const etudiant =Object.assign({},etu);
     etudiant.etudiant_id={
         dir: oraclebd.BIND_OUT,
         type: oraclebd.NUMBER
     }
     const result=await database.simpleExecute(createSql,etudiant);
     etudiant.etudiant_id= result.outBinds.etudiant_id[0];
     return etudiant;
 }
module.exports.create=create;*/
 